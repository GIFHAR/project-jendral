<?php

namespace App\Http\Controllers;

use App\Jobs\ImportOrdersJob;
use App\Services\GoogleSheetService;
use App\Models\Order;
use Google\Service\Sheets as ServiceSheets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Queue;

class GoogleSheetController extends Controller
{
    public function importData()
    {
        $spreadsheetId = '1iWMH2JPqfTmE02Vt6ljYTr9fBN8dsDcVQW-bv6a_fSk';
        $gid = '0';
        $csvUrl = "https://docs.google.com/spreadsheets/d/$spreadsheetId/export?format=csv&gid=$gid";

        // Move the process to a queue job
        Queue::push(new ImportOrdersJob($csvUrl));

        return response()->json(['message' => 'Data import job has been queued...']);
    }
}

// class GoogleSheetController extends Controller
// {   
//     // public function index() {
//     //     $values = Sheets::spreadsheet('spreadsheetId')->sheet('Sheet 1')->all();
        
//     // }

//     public function importData()
//     {
//         Order::truncate(); //drop all rows first
        
//         $spreadsheetId = '1iWMH2JPqfTmE02Vt6ljYTr9fBN8dsDcVQW-bv6a_fSk';
//         $gid = '0';
//         $csvUrl = "https://docs.google.com/spreadsheets/d/$spreadsheetId/export?format=csv&gid=$gid";
    
//         if (($handle = fopen($csvUrl, 'r')) !== FALSE) {
//             $rowIndex = 0;
    
//             while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
//                 $rowIndex++;
    
//                 if ($rowIndex < 7) {
//                     continue;
//                 }
    
//                 if (isset($row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7])) {
//                     Order::updateOrCreate(
//                         ['marking_code' => $row[4]],
//                         [
//                             'tanggal_order' => \Carbon\Carbon::parse($row[1])->format('Y-m-d'),
//                             'bulan' => $row[2] ?? null,
//                             'nama_buyer' => $row[3] ?? null,
//                             'marking_code' => $row[4],
//                             'pengiriman_via' => $row[5] ?? null,
//                             'posisi_produk' => $row[6] ?? null,
//                             'estimasi_bongkar' => $row[7] ?? null,
//                             'remark' => $row[8] ?? null
//                         ]
//                     );
//                 }
//             }
    
//             fclose($handle);
//         }
    
//         return response()->json(['message' => 'Data imported successfully!']);
//     }
    
// }