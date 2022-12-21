<?php

namespace App\Http\Controllers;

use App\Models\Tower;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Yajra\DataTables;
use Illuminate\Support\Facades\Storage;

use Maatwebsite\Excel\Facades\Excel;

use App\Imports\UsersImport;

class TowerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $tower = DB::table('tower_surabaya')->get();

        return view('menara.index', compact('tower'));

    }



    public function search_data(Request $request)
    {
        # code...

        if ($request->ajax()) {
            // dd($request->kolom);
            $data = Tower::select('gid','provider','tipe_tower','tinggi_tower', 'no_upt_skrk',
            'no_upt', 'sk_skrk', 'sk_imb', 'nama_pemohon', 'alamat_pemohon','alamat_tower',
            'jenis_data','kelurahan','kecamatan','izin','ket_imb','scan_skrk','scan_zoning'
            ,'scan_imb','scan_gambar_imb'
            )->limit(10000);


            // if ($request->kolom != '' && $request->nilai != '' ) {
            //     // dd($data->where("'$request->kolom'" == 1));
            //     // $data = $data->where($request->kolom, $request->nilai);
            //     $data = $data->where($request->kolom, 'LIKE', '%' . $request->nilai . '%');
            //     $count = $data->count();
            //     // dd($count);
            // }


            if (($request->kolom !='' && $request->nilai !='') && ($request->kolom2 !='' && $request->nilai2 !='') && ($request->kolom3 !='' && $request->nilai3 !='')) {
                // dd($data->where("'$request->kolom'" == 1));
                // $data = $data->where($request->kolom, $request->nilai);
                $data = $data->where($request->kolom, 'LIKE', '%' . $request->nilai . '%')->where($request->kolom2, 'LIKE', '%' . $request->nilai2 . '%')->where($request->kolom3, 'LIKE', '%' . $request->nilai3 . '%');

                

                $count = $data->count();
                // dd($count);
            }




            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($data){
                        // $gid = $data->gid;
                        // dd($gid);
                        $view = route('show', $data);
                        $btn = '<input type="hidden" name="gid" id="gid" value="'.$data->gid.'">';
                        $btn = $btn . '<a href="'.$view.'" target="_blank" onclick="show_json('.$data->gid.')" data-gid="'.$data->gid.'" class="edit btn btn-info btn-sm mr-2 mb-2">
                        View
                        </a>';
                        $btn = $btn . '<a href="javascript:void(0)" onclick="edit_json('.$data->gid.')" data-gid="'.$data->gid.'" data-toggle="modal" data-target="#modal-lg" class="edit btn btn-primary btn-sm mr-2 mb-2">
                        Update
                        </a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }


        // return Response

    }





    public function search_tower(Request $request)
    {
        # code...
        $kolom1 = $request->get('kolom');
        $nilai1 = $request->get('nilai');


        $kolom2 = $request->get('kolom2');
        $nilai2 = $request->get('nilai2');


        $kolom3 = $request->get('kolom3');
        $nilai3 = $request->get('nilai3');


        $tower = DB::table('tower_surabaya')->where($kolom1, 'LIKE', '%' . $nilai1 . '%')->where($kolom2, 'LIKE', '%' . $nilai2 . '%')->where($kolom3, 'LIKE', '%' . $nilai3 . '%')->get();

        return view('menara.index', compact('tower'));


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
     * @param  \App\Models\Tower  $tower
     * @return \Illuminate\Http\Response
     */
    // public function show(Tower $tower)
    // {
    //     //
    // }


    public function show($id)
    {
        //

        $tower = Tower::findOrFail($id);

        return view('menara.show', compact('tower'));



    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tower  $tower
     * @return \Illuminate\Http\Response
     */
    public function edit(Tower $tower)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tower  $tower
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Tower $tower)
    // {
    //     //
    // }



    public function update(Request $request, $id)
    {
        //


        if ($request->hasFile('scan_imb')) {
            if (Storage::exists('public/scan_imb/'.$request->emp_scan_imb)) {
                // dd('exist');
                Storage::delete('public/scan_imb/'.$request->emp_scan_imb);
            }
            $image = $request->file('scan_imb');
            // $destinationPath = 'public/scan_imb/';
            $fileName = date('YmdHis') . "." . $image->getClientOriginalExtension();
            // $image->move($destinationPath, $profileImage);
            $image->storeAs('public/scan_imb', $fileName);
            // dd($image);
            // $filename = "$profileImage";
        }else {
            $fileName = $request->emp_scan_imb;
        }

        if ($request->hasFile('scan_gambar_imb')) {
            if (Storage::exists('public/scan_gambar_imb/'.$request->emp_scan_gambar_imb)) {
                Storage::delete('public/scan_gambar_imb/'.$request->emp_scan_gambar_imb);
            }
            $image1 = $request->file('scan_gambar_imb');
            $fileName1 = date('YmdHis') . "." . $image1->getClientOriginalExtension();
            $image1->storeAs('public/scan_gambar_imb', $fileName1);
        }else {
            $fileName1 = $request->emp_scan_gambar_imb;
        }

        if ($request->hasFile('scan_zoning')) {
            if (Storage::exists('public/scan_zoning/'.$request->emp_scan_zoning)) {
                // dd('exist');
                Storage::delete('public/scan_zoning/'.$request->emp_scan_zoning);
            }
            $image2 = $request->file('scan_zoning');
            // $destinationPath = 'public/scan_imb/';
            $fileName2 = date('YmdHis') . "." . $image2->getClientOriginalExtension();
            // $image->move($destinationPath, $profileImage);
            $image2->storeAs('public/scan_zoning', $fileName2);
        }else {
            $fileName2 = $request->emp_scan_zoning;
        }


w        Tower::where('gid', $id)->update([

            'gid' => $request->gid,
            'provider' => $request->provider,
            'tipe_tower' => $request->tipe_tower,
            'tinggi_tower' => $request->tinggi_tower,
            'sk_imb' => $request->sk_imb,
            'alamat_pemohon' => $request->alamat_pemohon,
            'alamat_tower' => $request->alamat_tower,
            'kelurahan' => $request->kelurahan,
            'kecamatan' => $request->kecamatan,
            'scan_imb' => $fileName,
            'scan_gambar_imb' => $fileName1,
            'scan_zoning' => $fileName2,
            'jenis_data' => $request->jenis_data,


        ]);


        return redirect('/menara')->with('success_update', 'Data Telah Terupdate');


    }






    public function import_data_user(Request $request)
    {
        # code...


        Excel::import(new UsersImport, request()->file('file_user'));

        return redirect('/menara')->with('sukses_import', 'Data Berhasil Diimport');

    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tower  $tower
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tower $tower)
    {
        //
    }
}
