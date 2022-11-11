<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Illuminate\Support\Facades\Hash;

class UsersImport implements ToModel, WithStartRow, WithCustomCsvSettings
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */


    public function startRow(): int
    {
        return 2;
    }

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';'
        ];
    }




    public function model(array $row)
    {

        return new User([
            //


            'id'     => $row[0],
            'name'     => $row[1],
            'email'    => $row[2],
            'email_verified_at'    => $row[3],
            'password' => Hash::make($row[4]),
            'level'    => $row[5],
            'remember_token'     => $row[6],
            'created_at'     => $row[7],
            'updated_at'    => $row[8],



        ]);
    }
}
