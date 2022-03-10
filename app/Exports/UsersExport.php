<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithTitle;

class UsersExport implements WithMultipleSheets
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     // return User::all();
    //     return User::select('id', 'name', 'email')->get();
    // }

    // public function headings(): array
    // {
    //     return [
    //         '#',
    //         'name',
    //         'email',
    //         'email_verified_at',
    //         'created_at',
    //         'updated_at'
    //     ];
    // }

    // public function title(): string
    // {

    //     return 'test';
    // }

    public function sheets(): array
    {

        $sheets = [];

        for ($i = 1; $i <= 10; $i++) {

            $sheets[] = new UsersSheet($i);
        }

        return $sheets;
    }
}
