<?php

namespace App\Http\Controllers;

use App\Models\Slf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $data_search = DB::table('slf')->where($kolom1, 'LIKE', '%' . $nilai1 . '%')->where($kolom2, 'LIKE', '%' . $nilai2 . '%')->where($kolom3, 'LIKE', '%' . $nilai3 . '%')->get();

        return view('slf.index_search', compact('data_search'));

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
    public function show(Slf $slf)
    {
        //
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
    public function update(Request $request, Slf $slf)
    {
        //
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
