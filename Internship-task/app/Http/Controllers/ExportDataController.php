<?php

namespace App\Http\Controllers;

use App\Exports\DataQueryExport; 
use Maatwebsite\Excel\Facades\Excel;

class ExportDataController extends Controller
{
    public function export() 
    { 
        return Excel::download(new DataQueryExport(), 'Data.xls');
    }
}
