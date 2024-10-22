<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\GoogleSheetController;
use App\Jobs\ImportOrdersJob;
use Illuminate\Support\Facades\Queue;

class ImportGoogleSheetData extends Command
{
    protected $signature = 'import:googlesheet';
    protected $description = 'Imports data from Google Sheets';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $spreadsheetId = '1iWMH2JPqfTmE02Vt6ljYTr9fBN8dsDcVQW-bv6a_fSk';
        $gid = '0';
        $csvUrl = "https://docs.google.com/spreadsheets/d/$spreadsheetId/export?format=csv&gid=$gid";

        // Push the job to the queue
        Queue::push(new ImportOrdersJob($csvUrl));

        $this->info('Google Sheet data import job has been queued.');
    }
}


