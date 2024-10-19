<?php

namespace App\Http\Controllers;

use App\Services\GoogleSheetService;
use App\Models\Order;
use Google\Service\Sheets as ServiceSheets;
use Illuminate\Http\Request;
use Revolution\Google\Sheets\Facades\Sheets as FacadesSheets;
use Revolution\Google\Sheets\Sheets as SheetsSheets;
use Google\Service\Sheets;

class GoogleSheetController extends Controller
{   
    // public function index() {
    //     $values = Sheets::spreadsheet('spreadsheetId')->sheet('Sheet 1')->all();
        
    // }

    public function importData()
    {
        $spreadsheetId = '1iWMH2JPqfTmE02Vt6ljYTr9fBN8dsDcVQW-bv6a_fSk';
        $range = 'DATA FORWARDER!A7:H'; // Adjust range as necessary

        $googleSheetService = new GoogleSheetService($spreadsheetId);
        $sheetData = $googleSheetService->getSheetData($range);

        foreach ($sheetData as $index => $row) {
            // Skip the first 6 rows (headers)
            if ($index < 6) {
                continue;
            }
        
            // Ensure that the row has enough columns to prevent errors
            if (isset($row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7])) {
        
                // Map Google Sheets row to database columns
                Order::updateOrCreate(
                    ['marking_code' => $row[4]], // Use 'marking_code' as a unique identifier
                    [
                        'tanggal_order'  => \Carbon\Carbon::parse($row[1])->format('Y-m-d'), // Parse the date to 'Y-m-d' format
                        'bulan'          => $row[2] ?? null,
                        'nama_buyer'     => $row[3] ?? null,
                        'marking_code'   => $row[4],
                        'pengiriman_via' => $row[5] ?? null,
                        'posisi_produk'  => $row[6] ?? null,
                        'estimasi_bongkar' => $row[7] ?? null,
                        'remark'         => $row[8] ?? null // Handle an optional remark column
                    ]
                );
            }
        }
        

        return response()->json(['message' => 'Data imported successfully!']);
    }
}