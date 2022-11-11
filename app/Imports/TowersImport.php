<?php

namespace App\Imports;

use App\Models\Tower;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class TowersImport implements ToModel, WithStartRow, WithCustomCsvSettings
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
        return new Tower([
            //

            'gid'     => $row[0],
            'provider'     => $row[1],
            'tipe_tower'    => $row[2],
            'tinggi_tower' => $row[3],	
            'sk_imb' => $row[4],
            'alamat_tower' => $row[5], 
            'pemilik'=> $row[6],
            'izin' => $row[7], 
            'kecamatan' => $row[8], 
            'kelurahan' => $row[9],
            'ket_imb' => $row[10],
            'no_upt' => $row[11],
            'geom' => $row[12],
            'nama_pemohon' => $row[13],
            'alamat_pemohon' => $row[14],
            'sk_skrk' => $row[15],
            'scan_skrk' => $row[16],
            'scan_imb' => $row[17],
            'scan_gambar_imb' => $row[18],  
            'scan_zoning' => $row[19],
            'jenis_data' => $row[20],
            'no_upt_skrk' => $row[21]

        ]);
    }
}
