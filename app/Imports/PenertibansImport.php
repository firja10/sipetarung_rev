<?php

namespace App\Imports;

use App\Models\Penertiban;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class PenertibansImport implements ToModel, WithStartRow, WithCustomCsvSettings
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
        return new Penertiban([
            //

            'id'     => $row[0],
            'alamat'     => $row[1],
            'kelurahan'    => $row[2],
            'kecamatan' => $row[3],
            'keterangan' => $row[4],
            'foto_dokumen' => $row[5], 
            'jenis' => $row[6],  
            'tahapan' =>  $row[7], 
            'latitude' =>  $row[8], 
            'longitude' =>  $row[9], 
            'no_upt_imb' =>  $row[10],

            'sk_peringatan1' =>  $row[11],
            'tgl_sk_peringatan1' => $row[12],

            'sk_peringatan2' =>  $row[13],
            'tgl_sk_peringatan2' => $row[14],

            'sk_peringatan3' =>  $row[15],
            'tgl_sk_peringatan3' => $row[16],

            'sk_penyegelan' =>  $row[17],
            'tgl_sk_penyegelan' => $row[18],

            'sk_bantib_penyegelan' =>  $row[19],
            'tgl_sk_bantib_penyegelan' => $row[20],

            
            'sk_bantib_pembongkaran' =>  $row[21],
            'tgl_sk_bantib_pembongkaran' => $row[22],

            'foto_lapangan' => $row[23],
           
           





        ]);
    }
}
