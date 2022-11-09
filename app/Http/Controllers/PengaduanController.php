<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Helpers\Helper;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $pengaduan = DB::table('pengaduan')->get();

        return view('pengaduan.index', compact('pengaduan'));


    }



    public function search_pengaduan(Request $request)
    {
        # code...

        $kolom1 = $request->get('kolom');
        $nilai1 = $request->get('nilai');


        $kolom2 = $request->get('kolom2');
        $nilai2 = $request->get('nilai2');


        $kolom3 = $request->get('kolom3');
        $nilai3 = $request->get('nilai3');

        $pengaduan = DB::table('pengaduan')->where($kolom1, 'LIKE', '%' . $nilai1 . '%')->where($kolom2, 'LIKE', '%' . $nilai2 . '%')->where($kolom3, 'LIKE', '%' . $nilai3 . '%')->get();

        return view('pengaduan.index', compact('pengaduan'));


    }



    public function tambah_pengaduan()
    {


    }





    public function store_pengaduan(Request $request)
    {






        if ($request->hasFile('file_dokumen')) {
            if (Storage::exists('public/file_dokumen/'.$request->emp_file_dokumen)) {
                Storage::delete('public/file_dokumen/'.$request->emp_file_dokumen);
            }
            $image = $request->file('file_dokumen');
            $fileName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->storeAs('public/file_dokumen', $fileName);
        }else {
            $fileName = $request->emp_file_dokumen;
        }
        if ($request->hasFile('file_lapangan')) {
            if (Storage::exists('public/file_lapangan/'.$request->emp_file_lapangan)) {
                Storage::delete('public/file_lapangan/'.$request->emp_file_lapangan);
            }
            $image2 = $request->file('file_lapangan');
            $fileName2 = date('YmdHis') . "." . $image2->getClientOriginalExtension();
            $image2->storeAs('public/file_lapangan', $fileName2);
        }else {
            $fileName2 = $request->emp_file_lapangan;
        }
        if (Pengaduan::where('id', $request->id)->exists()) {
            $pengaduan = Pengaduan::findOrFail($request->id);
            $pengaduan->nama_pengadu = $request->nama_pengadu;
            $pengaduan->alamat_pengadu = $request->alamat_pengadu;
            $pengaduan->nama_teradu = $request->nama_teradu;
            $pengaduan->alamat_teradu = $request->alamat_teradu;
            $pengaduan->kelurahan = $request->kelurahan;
            $pengaduan->kecamatan = $request->kecamatan;
            $pengaduan->no_skrk = $request->no_skrk;
            $pengaduan->no_imb = $request->no_imb;
            $pengaduan->latitude = $request->latitude;
            $pengaduan->longitude = $request->longitude;
            $pengaduan->keterangan = $request->keterangan;
            $pengaduan->status_pengaduan = $request->status_pengaduan;
            $pengaduan->file_dokumen = $fileName;
            $pengaduan->file_lapangan = $fileName2;
            $pengaduan->save();
        }else {
            // Pengaduan::updateOrCreate([
            // Pengaduan::update([
            //     'id' => $request->id
            // ],
            // [
            //     'nama_pengadu' => $request->nama_pengadu,
            //     'alamat_pengadu' => $request->alamat_pengadu,
            //     'nama_teradu' => $request->nama_teradu,
            //     'alamat_teradu' => $request->alamat_teradu,
            //     'kelurahan' => $request->kelurahan,
            //     'kecamatan' => $request->kecamatan,
            //     'no_skrk' => $request->no_skrk,
            // ]);
            // $id = IdGenerator::generate(['table' => 'pengaduan', 'length' => 6, 'prefix' => 0]);
            // dd(Helper::IDGenerator(new Pengaduan,'id',5));
            // $validator = Validator::make($request->all(), [
            //     'id' => 'required|digits:5',
            // ]);
            Pengaduan::create([
            // Product::update([
                
            // ],
            // [
                'id' => Helper::IDGenerator(new Pengaduan,'id',5),
                // 'id' => $id,
                'nama_pengadu' => $request->nama_pengadu,
                'alamat_pengadu' => $request->alamat_pengadu,
                'nama_teradu' => $request->nama_teradu,
                'alamat_teradu' => $request->alamat_teradu,
                'kelurahan' => $request->kelurahan,
                'kecamatan' => $request->kecamatan,
                'no_skrk' => $request->no_skrk,
                'no_imb' => $request->no_imb,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
                'keterangan' => $request->keterangan,
                'status_pengaduan' => $request->status_pengaduan,
                'file_dokumen' => $request->$fileName,
                'file_lapangan' => $request->$fileName2,
            ]);
        }       



        return redirect('/pengaduan')->with('sukses_tambah_pengaduan', 'Pengaduan Sukses Ditambahkan');




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
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    // public function show(Pengaduan $pengaduan)
    // {
    //     //
    // }




    public function show($id)
    {
        //

        $pengaduan = DB::table('pengaduan')->where('id', $id)->first();

        return view('pengaduan.show', compact('pengaduan'));


    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengaduan $pengaduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pengaduan  $pengaduan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengaduan $pengaduan)
    {
        //
    }
}
