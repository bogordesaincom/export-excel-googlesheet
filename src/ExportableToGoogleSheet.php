<?php

namespace Bogordesain\LaravelExcelToGoogleSheet;

use Maatwebsite\Excel\Concerns\WithTitle;

interface ExportableToGoogleSheet extends WithTitle
{
    public function googleSpreadsheetId(): string;
}
