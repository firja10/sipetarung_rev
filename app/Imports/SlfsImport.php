<?php

namespace App\Imports;

use App\Models\Slf;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class SlfsImport implements ToModel, WithStartRow, WithCustomCsvSettings
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
        return new Slf([
            //

            'gid' => $row[0],
            'no_sk_slf' => $row[1],
            'tgl_slf' => $row[2],
            'jenis_slf' => $row[3],
            'nama_bangunan' => $row[4],
            'no_persetujuan_teknis' => $row[5],
            'nama_pemohon_slf' => $row[6],
            'peruntukan' => $row[7],
            'kelurahan' => $row[8],
            'kecamatan' => $row[9],
            'no_imb' => $row[10],
            'tgl_imb' => $row[11],
            'atas_nama' => $row[12],
            'nama_pemohon_imb' => $row[13],
            'alamat_persil_imb' => $row[14],
            'penggunaan_bangunan' => $row[15],
            'luas_bangunan' => $row[16],
            'jumlah_lantai' => $row[17],
            'file_sk_slf' => $row[18],
            'file_surat_pernyataan' => $row[19],
            'file_imb' => $row[20],
            'file_gambar_as_build' => $row[21]

        ]);
    }
}
