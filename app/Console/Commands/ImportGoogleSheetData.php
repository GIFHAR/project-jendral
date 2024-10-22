<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\GoogleSheetController;

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
        // Call the GoogleSheetController's importData method
        app(GoogleSheetController::class)->importData();

        $this->info('Google Sheet data import completed.');
    }
}

