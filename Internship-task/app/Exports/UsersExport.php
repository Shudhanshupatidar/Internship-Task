<?php

namespace App\Exports;


use App\Models\Users;  
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
         
        return Users::all();
    }

    public function headings() : array{
        return [
            'Id',
            'Name',
            'Email',
            'Mobile',
        ];
    }
}
