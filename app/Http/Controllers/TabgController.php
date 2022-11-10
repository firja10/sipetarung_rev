<?php

namespace App\Http\Controllers;

use App\Models\Tabg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TabgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $tabg = DB::table('tabg')->get();

        return view('tabg.index', compact('tabg'));


    }




    public function search_tabg(Request $request)
    {
        # code...


        $kolom1 = $request->get('kolom');
        $nilai1 = $request->get('nilai');


        $kolom2 = $request->get('kolom2');
        $nilai2 = $request->get('nilai2');


        $kolom3 = $request->get('kolom3');
        $nilai3 = $request->get('nilai3');

        $tabg = DB::table('tabg')->where($kolom1, 'LIKE', '%' . $nilai1 . '%')->where($kolom2, 'LIKE', '%' . $nilai2 . '%')->where($kolom3, 'LIKE', '%' . $nilai3 . '%')->get();

        return view('tabg.index', compact('tabg'));


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
     * @param  \App\Models\Tabg  $tabg
     * @return \Illuminate\Http\Response
     */
    // public function show(Tabg $tabg)
    // {
    //     //
    // }




    public function show($id)
    {
        //

        $tabg = DB::table('tabg')->where('gid', $id)->first();

        return view('tabg.show', compact('tabg'));


    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tabg  $tabg
     * @return \Illuminate\Http\Response
     */
    public function edit(Tabg $tabg)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tabg  $tabg
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Tabg $tabg)
    // {
    //     //
    // }




    public function update(Request $request,$id)
    {
        //


        if ($request->hasFile('file_gambar_ars')) {
            if (Storage::exists('public/file_gambar_ars/'.$request->emp_file_gambar_ars)) {
                Storage::delete('public/file_gambar_ars/'.$request->emp_file_gambar_ars);
            }
            $image = $request->file('file_gambar_ars');
            $fileName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->storeAs('public/file_gambar_ars', $fileName);
        }else {
            $fileName = $request->emp_file_gambar_ars;
        }
        if ($request->hasFile('file_gambar_str')) {
            if (Storage::exists('public/file_gambar_str/'.$request->emp_file_gambar_str)) {
                Storage::delete('public/file_gambar_str/'.$request->emp_file_gambar_str);
            }
            $image2 = $request->file('file_gambar_str');
            $fileName2 = date('YmdHis') . "." . $image2->getClientOriginalExtension();
            $image2->storeAs('public/file_gambar_str', $fileName2);
        }else {
            $fileName2 = $request->emp_file_gambar_str;
        }
        if ($request->hasFile('file_gambar_mep')) {
            if (Storage::exists('public/file_gambar_mep/'.$request->emp_file_gambar_mep)) {
                Storage::delete('public/file_gambar_mep/'.$request->emp_file_gambar_mep);
            }
            $image3 = $request->file('file_gambar_mep');
            $fileName3 = date('YmdHis') . "." . $image3->getClientOriginalExtension();
            $image3->storeAs('public/file_gambar_mep', $fileName3);
        }else {
            $fileName3 = $request->emp_file_gambar_mep;
        }
        if ($request->hasFile('file_laporan_struktur')) {
            if (Storage::exists('public/file_laporan_struktur/'.$request->emp_file_laporan_struktur)) {
                Storage::delete('public/file_laporan_struktur/'.$request->emp_file_laporan_struktur);
            }
            $image4 = $request->file('file_laporan_struktur');
            $fileName4 = date('YmdHis') . "." . $image4->getClientOriginalExtension();
            $image4->storeAs('public/file_laporan_struktur', $fileName4);
        }else {
            $fileName4 = $request->emp_file_laporan_struktur;
        }


    
    

        Tabg::where('gid', $id)->update([


            'tgl_tabg' => $request->tgl_tabg,
            'no_telp_pemohon' => $request->no_telp_pemohon,
            'nama_kuasa' => $request->nama_kuasa,
            'no_telp_kuasa' => $request->no_telp_kuasa,
            'kode_verifikasi' => $request->kode_verifikasi,
            'nama_proyek' => $request->nama_proyek,
            'penggunaan_bangunan' => $request->penggunaan_bangunan,
            'alamat_persil' => $request->alamat_persil,
            'kelurahan' => $request->kelurahan,
            'kecamatan' => $request->kecamatan,
            'no_imb' => $request->no_imb,
            'tgl_jam_sidang' => $request->tgl_jam_sidang,
            'tempat_sidang' => $request->tempat_sidang,
            'file_gambar_ars' => $fileName,
            'file_gambar_str' => $fileName2,
            'file_gambar_mep' => $fileName3,
            'file_laporan_struktur' => $fileName4,


        ]);



    }







    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tabg  $tabg
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tabg $tabg)
    {
        //
    }
}
