<?php

namespace App\Imports;

use App\Models\Skrk;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;

class SkrksImport implements ToModel, WithStartRow, WithCustomCsvSettings
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
        return new Skrk([
            //
            'id_imb' => $row[0],
            'gid' => $row[1],
            'no_upt' => $row[2],
            'pemohon' => $row[3],
            'alamat_persil' => $row[4],
            'kelurahan'  => $row[5],
            'kecamatan' => $row[6],
            'permohonan_penggunaan'  => $row[7],
            'penggunaan_bangunan' => $row[8],
            'luas_st' => $row[9],
            'luas_ukur' => $row[10],
            'scan_hu' => $row[11],
            'status_tanah' => $row[12],
            'luas_terpotong' => $row[13],
            'gsp' => $row[14],
            'gsb' => $row[15],
            'kdb' => $row[16],
            'klb' => $row[17],
            'kdh' => $row[18],
            'lantai_maks' => $row[19],
            'peruntukan_ruang' => $row[20],
            'no_upt_imb' => $row[21],
            'nama_jalan'  => $row[22],
            'nomor' => $row[23],
            'persil' => $row[24],
            'luas_bangunan_per_lantai'  => $row[25],
            'tinggi_bangunan' => $row[26],
            'nib' => $row[27],
            'jumlah_lantai' => $row[28],
            'penggunaan' => $row[29],
            'nama_bangunan' => $row[30],
            'rekom' => $row[31],
            'atas_nama' => $row[32],
            'no_skrk' => $row[33],
            'tgl_skrk' => $row[34],
           'no_imb' => $row[35],
            'tgl_imb' => $row[36],
            'scan_skrk' => $row[37],
            'scan_zoning' => $row[38],
            'scan_imb' => $row[39],
            'scan_gambar' => $row[40],
            'perijinan_id' => $row[41],
            'ketinggian_maks' => $row[42],
            'wilayah' => $row[43],
            'kode_box' => $row[44],
            'lmb_aktif' => $row[45],
            'link_sk_skrk' => $row[46],
            'link_sk_imb' => $row[47],
            'link_gz' => $row[48],
            'link_gambar_imb' => $row[49],
            'persil_imb' => $row[50],
            'skrk_aktif' => $row[51],
            'perijinan_id2' => $row[52],
            'ket_arsip' => $row[53],
            'scan_skrk2' => $row[54],
            'nama_pemohon_imb' => $row[55],
            'alamat_pemohon_imb' => $row[56],
            'scan_imb2' => $row[57],
            'scan_gambar2' => $row[58],
            'scan_gambar3' => $row[59],
            'tanggal_register' => $row[60],
            'geom' => $row[61],
            'urutan_layer' => $row[62],
            'iddata' => $row[63],
            'tabg' => $row[64],
            'slf' => $row[65],
            'pertelaan' => $row[66],
            'revisi_sk' => $row[67]



        ]);
    }
}
