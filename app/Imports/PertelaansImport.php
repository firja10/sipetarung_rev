<?php

namespace App\Imports;

use App\Models\Pertelaan;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;



class PertelaansImport implements ToModel, WithStartRow, WithCustomCsvSettings
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
        return new Pertelaan([
            //


            'gid' => $row[0] ,
            'no_sk_pertelaan' => $row[1] ,
            'tgl_pertelaan' => $row[2] ,
            'jenis_pertelaan' => $row[3] ,
            'nama_bangunan' => $row[4] ,
            'no_persetujuan_teknis' => $row[5] ,
            'tgl_persetujuan_teknis' => $row[6] ,
            'nama_pemohon_pertelaan' => $row[7] ,
            'permohonan_bangunan_pertelaan' => $row[8] ,
            'kelurahan' => $row[9] ,
            'kecamatan' => $row[10] ,
            'no_imb' => $row[11] ,
            'tgl_imb' => $row[12] , 
            'atas_nama' => $row[13] ,	
            'nama_pemohon_imb' => $row[14] ,
            'alamat_persil_imb' => $row[15] ,
            'penggunaan_bangunan' => $row[16] ,
            'luas_bangunan' => $row[17] ,
            'jumlah_lantai' => $row[18] ,
            'file_sk_pertelaan' => $row[19] ,
            'file_perstek' => $row[20] ,
            'file_gambar_pertelaan' => $row[21] ,
            'file_gambar_as_build' => $row[22] ,



        ]);
    }
}
