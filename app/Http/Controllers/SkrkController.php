<?php

namespace App\Http\Controllers;

use App\Models\Skrk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



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
    public function update(Request $request, Skrk $skrk)
    {
        //
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
