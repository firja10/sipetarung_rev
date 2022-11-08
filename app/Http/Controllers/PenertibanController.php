<?php

namespace App\Http\Controllers;

use App\Models\Penertiban;
use App\Models\Jenis;
use App\Models\Tahapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use Apps\Helpers\Helper;

class PenertibanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $penertiban = DB::table('penertiban')->get();

        return view('penertiban.index', compact('penertiban'));

    }




    public function search_penertiban(Request $request)
    {
        # code...

        $kolom1 = $request->get('kolom');
        $nilai1 = $request->get('nilai');


        $kolom2 = $request->get('kolom2');
        $nilai2 = $request->get('nilai2');


        $kolom3 = $request->get('kolom3');
        $nilai3 = $request->get('nilai3');

        $penertiban = DB::table('penertiban')->where($kolom1, 'LIKE', '%' . $nilai1 . '%')->where($kolom2, 'LIKE', '%' . $nilai2 . '%')->where($kolom3, 'LIKE', '%' . $nilai3 . '%')->get();

        return view('penertiban.index', compact('penertiban'));


    }





    



    public function tambah_penertiban()
    {
        # code...

        // Penertiban 
        $jenis = Jenis::all();
        $tahapan1 = Tahapan::all()
        ->where('jenis_id', '=', 1)
        ->sortBy('id')
        // ->join('jenis', 'tahapan.jenis_id', '=', 'jenis.id')
        ;
        $tahapan2 = Tahapan::all()->where('jenis_id', '=', 2);
        $tahapan3 = Tahapan::all()->where('jenis_id', '=', 3);
        $tahapan4 = Tahapan::all()->where('jenis_id', '=', 4);
        $tahapan5 = Tahapan::all()->where('jenis_id', '=', 5);
        $tahapan6 = Tahapan::all()->where('jenis_id', '=', 6);
        $tahapan7 = Tahapan::all()->where('jenis_id', '=', 7);
        $tahapan8 = Tahapan::all()->where('jenis_id', '=', 8);
        $tahapan9 = Tahapan::all()->where('jenis_id', '=', 9);
        return view('penertiban.create'
        , compact('jenis', 'tahapan1', 'tahapan2', 'tahapan3', 'tahapan4', 'tahapan5', 'tahapan6', 'tahapan7', 'tahapan8', 'tahapan9')
        );

    }







    public function store_penertiban(Request $request)
    {
        # code...

        // Penertiban 

        if ($request->hasFile('foto_dokumen')) {
            if (Storage::exists('public/foto_dokumen/'.$request->emp_foto_dokumen)) {
                Storage::delete('public/foto_dokumen/'.$request->emp_foto_dokumen);
            }
            $image = $request->file('foto_dokumen');
            $fileName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->storeAs('public/foto_dokumen', $fileName);
        }else {
            $fileName = $request->emp_foto_dokumen;
        }
        if ($request->hasFile('foto_lapangan')) {
            if (Storage::exists('public/foto_lapangan/'.$request->emp_foto_lapangan)) {
                Storage::delete('public/foto_lapangan/'.$request->emp_foto_lapangan);
            }
            $image2 = $request->file('foto_lapangan');
            $fileName2 = date('YmdHis') . "." . $image2->getClientOriginalExtension();
            $image2->storeAs('public/foto_lapangan', $fileName2);
        }else {
            $fileName2 = $request->emp_foto_lapangan;
        }
        // dd($request->all());
        // dd($request->id);
        if (Penertiban::where('id', $request->id)->exists()) {
            $penertiban = Penertiban::findOrFail($request->id);
            $penertiban->no_upt_imb = $request->no_upt_imb;
            $penertiban->sk_peringatan1 = $request->sk_peringatan1;
            $penertiban->tgl_sk_peringatan1 = $request->tgl_sk_peringatan1;
            $penertiban->sk_peringatan2 = $request->sk_peringatan2;
            $penertiban->tgl_sk_peringatan2 = $request->tgl_sk_peringatan2;
            $penertiban->sk_peringatan3 = $request->sk_peringatan3;
            $penertiban->tgl_sk_peringatan3 = $request->tgl_sk_peringatan3;
            $penertiban->sk_penyegelan = $request->sk_penyegelan;
            $penertiban->tgl_sk_penyegelan = $request->tgl_sk_penyegelan;
            $penertiban->sk_bantib_penyegelan = $request->sk_bantib_penyegelan;
            $penertiban->tgl_sk_bantib_penyegelan = $request->tgl_sk_bantib_penyegelan;
            $penertiban->sk_pembongkaran = $request->sk_pembongkaran;
            $penertiban->tgl_sk_pembongkaran = $request->tgl_sk_pembongkaran;
            $penertiban->sk_pembongkaran = $request->sk_pembongkaran;
            $penertiban->tgl_sk_bantib_pembongkaran = $request->tgl_sk_bantib_pembongkaran;
            $penertiban->alamat = $request->alamat;
            $penertiban->kelurahan = $request->kelurahan;
            $penertiban->kecamatan = $request->kecamatan;
            $penertiban->jenis = $request->jenis;
            $penertiban->tahapan = $request->tahapan;
            $penertiban->keterangan = $request->keterangan;
            $penertiban->latitude = $request->latitude;
            $penertiban->longitude = $request->longitude;
            $penertiban->foto_dokumen = $fileName;
            $penertiban->foto_lapangan = $fileName2;
            $penertiban->save();
        }else {
            Penertiban::create([
                'id' => Helper::IDGenerator(new Penertiban,'id',5),
                'no_upt_imb' => $request->no_upt_imb,
                'sk_peringatan1' => $request->sk_peringatan1,
                'tgl_sk_peringatan1' => $request->tgl_sk_peringatan1,
                'sk_peringatan2' => $request->sk_peringatan2,
                'tgl_sk_peringatan2' => $request->tgl_sk_peringatan2,
                'sk_peringatan3' => $request->sk_peringatan3,
                'tgl_sk_peringatan3' => $request->tgl_sk_peringatan3,
                'sk_penyegelan' => $request->sk_penyegelan,
                'tgl_sk_penyegelan' => $request->tgl_sk_penyegelan,
                'sk_bantib_penyegelan' => $request->sk_bantib_penyegelan,
                'tgl_sk_bantib_penyegelan' => $request->tgl_sk_bantib_penyegelan,
                'sk_pembongkaran' => $request->sk_pembongkaran,
                'tgl_sk_pembongkaran' => $request->tgl_sk_pembongkaran,
                'sk_pembongkaran' => $request->sk_pembongkaran,
                'tgl_sk_bantib_pembongkaran' => $request->tgl_sk_bantib_pembongkaran,
                'alamat' => $request->alamat,
                'kelurahan' => $request->kelurahan,
                'kecamatan' => $request->kecamatan,
                'jenis' => $request->jenis,
                'tahapan' => $request->tahapan,
                'keterangan' => $request->keterangan,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                'foto_dokumen' => $request->$fileName,
                'foto_lapangan' => $request->$fileName2,
            ]);
        }   



        return redirect('/penertiban')->with('sukes_tambah_penertiban', 'Data Penertiban Telah Ditambahkan');







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
     * @param  \App\Models\Penertiban  $penertiban
     * @return \Illuminate\Http\Response
     */
    // public function show(Penertiban $penertiban)
    // {
    //     //
    // }




    public function show($id)
    {
        //

        $penertiban = Penertiban::findOrFail($id);

        return view('penertiban.show', compact('penertiban'));



    }






    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penertiban  $penertiban
     * @return \Illuminate\Http\Response
     */
    public function edit(Penertiban $penertiban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penertiban  $penertiban
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penertiban $penertiban)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penertiban  $penertiban
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penertiban $penertiban)
    {
        //
    }
}
