<?php
namespace App\Services;

use Google_Client;
use Google_Service_Sheets;

class GoogleSheetService
{
    protected $spreadsheetId;
    protected $client;

    public function __construct($spreadsheetId)
    {
        $this->spreadsheetId = $spreadsheetId;
        $this->client = $this->getClient();
    }

    private function getClient()
    {
        $client = new Google_Client();
        $client->setApplicationName('Laravel Google Sheets Integration');
        $client->setScopes(Google_Service_Sheets::SPREADSHEETS_READONLY);
        $client->setAuthConfig(storage_path('storage/credentials.json'));
        $client->setAccessType('offline');
        return $client;
    }

    public function getSheetData($range)
    {
        $service = new Google_Service_Sheets($this->client);
        $response = $service->spreadsheets_values->get($this->spreadsheetId, $range);
        return $response->getValues();
    }
}
