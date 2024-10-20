<?php
namespace App\Jobs;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class ImportOrdersJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $csvUrl;

    public function __construct($csvUrl)
    {
        $this->csvUrl = $csvUrl;
    }

    public function handle()
    {
        Order::truncate(); // drop all rows first

        if (($handle = fopen($this->csvUrl, 'r')) !== FALSE) {
            $rowIndex = 0;
            $batch = [];
            $batchSize = 1000;

            DB::beginTransaction();

            try {
                while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    $rowIndex++;

                    if ($rowIndex < 7) {
                        continue;
                    }

                    if (isset($row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7])) {
                        $batch[] = [
                            'tanggal_order' => \Carbon\Carbon::parse($row[1])->format('Y-m-d'),
                            'bulan' => $row[2] ?? null,
                            'nama_buyer' => $row[3] ?? null,
                            'marking_code' => $row[4] ?? null,
                            'pengiriman_via' => $row[5] ?? null,
                            'posisi_produk' => $row[6] ?? null,
                            'estimasi_bongkar' => $row[7] ?? null,
                            'remark' => $row[8] ?? null
                        ];

                        if (count($batch) >= $batchSize) {
                            $this->insertBatch($batch);
                            $batch = [];
                        }
                    }
                }

                if (!empty($batch)) {
                    $this->insertBatch($batch);
                }

                DB::commit();
            } catch (\Exception $e) {
                DB::rollBack();
                throw $e;
            }

            fclose($handle);
        }
    }

    private function insertBatch($batch)
    {
        foreach ($batch as $item) {
            Order::create($item);
        }
    }
}