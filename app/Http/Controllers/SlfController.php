<?php

namespace App\Http\Controllers;

use App\Models\Slf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SlfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        $slf = DB::table('slf')->get();
        
        return view('slf.index', compact('slf'));



    }



    public function search_slf(Request $request)
    {
        # code...

        $kolom1 = $request->get('kolom');
        $nilai1 = $request->get('nilai');


        $kolom2 = $request->get('kolom2');
        $nilai2 = $request->get('nilai2');


        $kolom3 = $request->get('kolom3');
        $nilai3 = $request->get('nilai3');

        $slf = DB::table('slf')->where($kolom1, 'LIKE', '%' . $nilai1 . '%')->where($kolom2, 'LIKE', '%' . $nilai2 . '%')->where($kolom3, 'LIKE', '%' . $nilai3 . '%')->get();

        return view('slf.index', compact('slf'));

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
     * @param  \App\Models\Slf  $slf
     * @return \Illuminate\Http\Response
     */
    // public function show(Slf $slf)
    // {
    //     //
    // }


    public function show($id)
    {
        //


        $slf = Slf::findOrFail($id);
        return view('slf.show', compact('slf'));


    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slf  $slf
     * @return \Illuminate\Http\Response
     */
    public function edit(Slf $slf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slf  $slf
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Slf $slf)
    // {
    //     //
    // }



    public function update(Request $request, $id)
    {
        //

        if ($request->hasFile('file_sk_slf')) {
            if (Storage::exists('public/file_sk_slf/'.$request->emp_file_sk_slf)) {
                Storage::delete('public/file_sk_slf/'.$request->emp_file_sk_slf);
            }
            $image = $request->file('file_sk_slf');
            $fileName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->storeAs('public/file_sk_slf', $fileName);
        }else {
            $fileName = $request->emp_file_sk_slf;
        }
        if ($request->hasFile('file_surat_pernyataan')) {
            if (Storage::exists('public/file_surat_pernyataan/'.$request->emp_file_surat_pernyataan)) {
                Storage::delete('public/file_surat_pernyataan/'.$request->emp_file_surat_pernyataan);
            }
            $image2 = $request->file('file_surat_pernyataan');
            $fileName2 = date('YmdHis') . "." . $image2->getClientOriginalExtension();
            $image2->storeAs('public/file_surat_pernyataan', $fileName2);
        }else {
            $fileName2 = $request->emp_file_surat_pernyataan;
        }
        if ($request->hasFile('file_imb')) {
            if (Storage::exists('public/file_imb/'.$request->emp_file_imb)) {
                Storage::delete('public/file_imb/'.$request->emp_file_imb);
            }
            $image3 = $request->file('file_imb');
            $fileName3 = date('YmdHis') . "." . $image3->getClientOriginalExtension();
            $image3->storeAs('public/file_imb', $fileName3);
        }else {
            $fileName3 = $request->emp_file_imb;
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
        

        Slf::where('gid', $id)->update([

            'no_sk_slf' => $request->no_sk_slf,
            'tgl_slf' => $request->tgl_slf,
            'jenis_slf' => $request->jenis_slf,
            'nama_bangunan' => $request->nama_bangunan,
            'no_persetujuan_teknis' => $request->no_persetujuan_teknis,
            'nama_pemohon_slf' => $request->nama_pemohon_slf,
            'peruntukan' => $request->peruntukan,
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
            'file_sk_slf' => $fileName,
            'file_surat_pernyataan' => $fileName2,
            'file_imb' => $fileName3,
            'file_gambar_as_build' => $fileName4,

        ]);

        return redirect('/slf')->with('success_update_slf', 'SLF Sukses Diupdate');



    }







    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slf  $slf
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slf $slf)
    {
        //
    }
}
