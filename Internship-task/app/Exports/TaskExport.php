<?php

namespace App\Exports;

use App\Models\Tasks;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class TaskExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Tasks::all();
    }

    public function headings() : array{
        return [
            'Id',
            'User Name',
            'Task title',
            'Task Type',
            'Create_at',
            'Upated_at',
        ];
    }
}
