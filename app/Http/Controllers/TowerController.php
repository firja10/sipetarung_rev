<?php

namespace App\Http\Controllers;

use App\Models\Tower;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Yajra\DataTables;

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


        $data_search = DB::table('tower_surabaya')->where($kolom1, 'LIKE', '%' . $nilai1 . '%')->where($kolom2, 'LIKE', '%' . $nilai2 . '%')->where($kolom3, 'LIKE', '%' . $nilai3 . '%')->get();

        return view('menara.index_search', compact('data_search'));


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
    public function show(Tower $tower)
    {
        //
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
    public function update(Request $request, Tower $tower)
    {
        //
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
