<?php

namespace Bogordesain\LaravelExcelToGoogleSheet;

use Google\Client;
use Google\Service\Sheets as GoogleSheets;

class GoogleSheetServiceFactory
{
    public static function createForConfig(array $config): GoogleSheetService
    {
        $googleClient = new Client();
        $googleClient->setApplicationName(config('app.name'));
        $googleClient->setScopes([GoogleSheets::SPREADSHEETS]);
        $googleClient->setAccessType('offline');
        $googleClient->setAuthConfig($config['service_account_credentials_json']);

        return new GoogleSheetService(new GoogleSheets($googleClient));
    }
}
