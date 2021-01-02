<?php

namespace App\Exports;

use App\Models\Users;
use App\Post;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataQueryExport implements FromQuery, WithHeadings
{
    use Exportable;


    public function query()
    {
        return Users::query()->select('id', 'name', 'email', 'mobile');
    }

    public function headings() : array
    {
        return [
            'Id',
            'Name',
            'Email',
            'Mobile',
        ];
    }
}