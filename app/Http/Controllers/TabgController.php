<?php

namespace App\Http\Controllers;

use App\Models\Tabg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function update(Request $request, Tabg $tabg)
    {
        //
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
