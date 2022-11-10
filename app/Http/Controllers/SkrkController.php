<?php

namespace App\Http\Controllers;

use App\Models\Skrk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class SkrkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $skrk = DB::table('imb')->limit(10000)->get();
        return view('skrk-imb.index', compact('skrk'));

    }



    public function search_imb(Request $request)
    {
        # code...

        $kolom1 = $request->get('kolom');
        $nilai1 = $request->get('nilai');


        $kolom2 = $request->get('kolom2');
        $nilai2 = $request->get('nilai2');


        $kolom3 = $request->get('kolom3');
        $nilai3 = $request->get('nilai3');

        $skrk_imb = DB::table('imb')->where($kolom1, 'LIKE', '%' . $nilai1 . '%')->where($kolom2, 'LIKE', '%' . $nilai2 . '%')->where($kolom3, 'LIKE', '%' . $nilai3 . '%')->get();

        return view('skrk-imb.index', compact('skrk_imb'));

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
     * @param  \App\Models\Skrk  $skrk
     * @return \Illuminate\Http\Response
     */
    // public function show(Skrk $skrk)
    // {
    //     //
    // }



    public function show($id)
    {
        //



        $skrk_imb = Skrk::findOrFail($id);

        return view('skrk-imb.show', compact('skrk_imb'));




    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skrk  $skrk
     * @return \Illuminate\Http\Response
     */
    public function edit(Skrk $skrk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skrk  $skrk
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Skrk $skrk)
    // {
    //     //
    // }


    public function update(Request $request, $id)
    {
        //


        if ($request->hasFile('scan_skrk')) {
            if (Storage::exists('public/scan_skrk/'.$request->emp_scan_skrk)) {
                // dd('exist');
                Storage::delete('public/scan_skrk/'.$request->emp_scan_skrk);
            }
            $image = $request->file('scan_skrk');
            // $destinationPath = 'public/scan_imb/';
            $fileName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            // $image->move($destinationPath, $profileImage);
            $image->storeAs('public/scan_skrk', $fileName);
            // dd($image);
            // $filename = "$profileImage";
        }else {
            $fileName = $request->emp_scan_skrk;
        }
        if ($request->hasFile('scan_imb')) {
            if (Storage::exists('public/scan_imb/'.$request->emp_scan_imb)) {
                Storage::delete('public/scan_imb/'.$request->emp_scan_imb);
            }
            $image1 = $request->file('scan_imb');
            $fileName1 = date('YmdHis') . "." . $image1->getClientOriginalExtension();
            $image1->storeAs('public/scan_imb', $fileName1);
        }else {
            $fileName1 = $request->emp_scan_imb;
        }
        if ($request->hasFile('scan_zoning')) {
            if (Storage::exists('public/scan_zoning/'.$request->emp_scan_zoning)) {
                Storage::delete('public/scan_zoning/'.$request->emp_scan_zoning);
            }
            $image2 = $request->file('scan_zoning');
            $fileName2 = date('YmdHis') . "." . $image2->getClientOriginalExtension();
            $image2->storeAs('public/scan_zoning', $fileName2);
        }else {
            $fileName2 = $request->emp_scan_zoning;
        }
        if ($request->hasFile('scan_gambar')) {
            if (Storage::exists('public/scan_gambar_imb/'.$request->emp_scan_gambar)) {
                Storage::delete('public/scan_gambar_imb/'.$request->emp_scan_gambar);
            }
            $image3 = $request->file('scan_gambar');
            $fileName3 = date('YmdHis') . "." . $image3->getClientOriginalExtension();
            $image3->storeAs('public/scan_gambar_imb', $fileName3);
        }else {
            $fileName3 = $request->emp_scan_gambar;
        }



        Skrk::where('gid', $id)->update([
            'id_imb' => $request->id_imb,
            'no_upt' => $request->no_upt,
            'no_skrk' => $request->no_skrk,
            'tgl_skrk' => $request->tgl_skrk,
            'pemohon' => $request->pemohon,
            'alamat_persil' => $request->alamat_persil,
            'permohonan' => $request->permohonan,
            'peruntukan' => $request->peruntukan,
            'kelurahan' => $request->kelurahan,
            'kecamatan' => $request->kecamatan,
            'no_upt_imb' => $request->no_upt_imb,
            'no_imb' => $request->no_imb,
            'tgl_imb' => $request->tgl_imb,
            'atas_nama' => $request->atas_nama,
            'nama_pemoh' => $request->nama_pemoh,
            'persil_imb' => $request->persil_imb,
            'penggunaan' => $request->penggunaan,
            'luas_bangunan' => $request->luas_bangunan,
            'tinggi_bangunan' => $request->tinggi_bangunan,
            'jumlah_lantai' => $request->jumlah_lantai,
            'scan_skrk' => $fileName,
            'scan_imb' => $fileName1,
            'scan_zoning' => $fileName2,
            'scan_gambar' => $fileName3,

        

        ]);


        return redirect('/skrk-imb')->with('success_update_skrk_imb', 'Sukses Update SKRK IMB');



    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skrk  $skrk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skrk $skrk)
    {
        //
    }
}
