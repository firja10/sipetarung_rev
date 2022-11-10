<?php

namespace App\Http\Controllers;

use App\Models\Pertelaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PertelaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        $pertelaan = DB::table('pertelaan')->get();

        return view('pertelaan.index', compact('pertelaan'));



    }


    public function search_pertelaan(Request $request)
    {
        # code...

        $kolom1 = $request->get('kolom');
        $nilai1 = $request->get('nilai');


        $kolom2 = $request->get('kolom2');
        $nilai2 = $request->get('nilai2');


        $kolom3 = $request->get('kolom3');
        $nilai3 = $request->get('nilai3');

        $data_search = DB::table('pertelaan')->where($kolom1, 'LIKE', '%' . $nilai1 . '%')->where($kolom2, 'LIKE', '%' . $nilai2 . '%')->where($kolom3, 'LIKE', '%' . $nilai3 . '%')->get();

        return view('pertelaan.index_search', compact('data_search'));


    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pertelaan  $pertelaan
     * @return \Illuminate\Http\Response
     */
    // public function show(Pertelaan $pertelaan)
    // {
    //     //
    // }


    public function show($id)
    {
        //

        $pertelaan = Pertelaan::findOrFail($id);

        return view('pertelaan.show', compact('pertelaan'));


    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pertelaan  $pertelaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pertelaan $pertelaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pertelaan  $pertelaan
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Pertelaan $pertelaan)
    // {
    //     //
    // }



    public function update(Request $request, $id)
    {
        //


        if ($request->hasFile('file_sk_pertelaan')) {
            if (Storage::exists('public/file_sk_pertelaan/'.$request->emp_file_sk_pertelaan)) {
                Storage::delete('public/file_sk_pertelaan/'.$request->emp_file_sk_pertelaan);
            }
            $image = $request->file('file_sk_pertelaan');
            $fileName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->storeAs('public/file_sk_pertelaan', $fileName);
        }else {
            $fileName = $request->emp_file_sk_pertelaan;
        }
        if ($request->hasFile('file_perstek')) {
            if (Storage::exists('public/file_perstek/'.$request->emp_file_perstek)) {
                Storage::delete('public/file_perstek/'.$request->emp_file_perstek);
            }
            $image2 = $request->file('file_perstek');
            $fileName2 = date('YmdHis') . "." . $image2->getClientOriginalExtension();
            $image2->storeAs('public/file_perstek', $fileName2);
        }else {
            $fileName2 = $request->emp_file_perstek;
        }
        if ($request->hasFile('file_gambar_pertelaan')) {
            if (Storage::exists('public/file_gambar_pertelaan/'.$request->emp_file_gambar_pertelaan)) {
                Storage::delete('public/file_gambar_pertelaan/'.$request->emp_file_gambar_pertelaan);
            }
            $image3 = $request->file('file_gambar_pertelaan');
            $fileName3 = date('YmdHis') . "." . $image3->getClientOriginalExtension();
            $image3->storeAs('public/file_gambar_pertelaan', $fileName3);
        }else {
            $fileName3 = $request->emp_file_gambar_pertelaan;
        }
        if ($request->hasFile('file_gambar_as_build')) {
            if (Storage::exists('public/file_gambar_as_build/'.$request->emp_file_gambar_as_build)) {
                Storage::delete('public/file_gambar_as_build/'.$request->emp_file_gambar_as_build);
            }
            $image4 = $request->file('file_gambar_as_build');
            $fileName4 = date('YmdHis') . "." . $image4->getClientOriginalExtension();
            $image4->storeAs('public/file_gambar_as_build', $fileName4);
        }else {
            $fileName4 = $request->emp_file_gambar_as_build;
        }


        Pertelaan::where('id', $id)->update([

            'no_sk_pertelaan' => $request->no_sk_pertelaan,
            'tgl_pertelaan' => $request->tgl_pertelaan,
            'jenis_pertelaan' => $request->jenis_pertelaan,
            'nama_bangunan' => $request->nama_bangunan,
            'no_persetujuan_teknis' => $request->no_persetujuan_teknis,
            'tgl_persetujuan_teknis' => $request->tgl_persetujuan_teknis,
            'nama_pemohon_pertelaan' => $request->nama_pemohon_pertelaan,
            'permohonan_bangunan_pertelaan' => $request->permohonan_bangunan_pertelaan,
            'kelurahan' => $request->kelurahan,
            'kecamatan' => $request->kecamatan,
            'no_imb' => $request->no_imb,
            'tgl_imb' => $request->tgl_imb,
            'atas_nama' => $request->atas_nama,
            'nama_pemohon_imb' => $request->nama_pemohon_imb,
            'alamat_persil_imb' => $request->alamat_persil_imb,
            'penggunaan_bangunan' => $request->penggunaan_bangunan,
            'luas_bangunan' => $request->luas_bangunan,
            'jumlah_lantai' => $request->jumlah_lantai,
            'file_sk_pertelaan' => $fileName,
            'file_perstek' => $fileName2,
            'file_gambar_pertelaan' => $fileName3,
            'file_gambar_as_build' => $fileName4,

        ]);



    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pertelaan  $pertelaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pertelaan $pertelaan)
    {
        //
    }
}
