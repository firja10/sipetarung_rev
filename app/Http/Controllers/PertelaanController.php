<?php

namespace App\Http\Controllers;

use App\Models\Pertelaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function show(Pertelaan $pertelaan)
    {
        //
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
    public function update(Request $request, Pertelaan $pertelaan)
    {
        //
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
