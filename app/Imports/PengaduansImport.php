<?php

namespace App\Imports;

use App\Models\Pengaduan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class PengaduansImport implements ToModel, WithStartRow, WithCustomCsvSettings
{




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




    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new Pengaduan([
            //
            'id'=> $row[0],	
            'nama_pengadu'=> $row[1],	
            'alamat_pengadu' => $row[2],	
            'nama_teradu' => $row[3],	
            'alamat_teradu' => $row[4],	
            'kelurahan' => $row[5],	
            'kecamatan' => $row[6],	
            'no_skrk' => $row[7],	
            'no_imb' => $row[8],	
            'status_pengaduan' => $row[9],	
            'latitude' => $row[10],	
            'longitude' => $row[11],	
            'keterangan' => $row[12],	
            'file_dokumen' => $row[13],	
            'file_lapangan' => $row[0],



        ]);
    }
}
