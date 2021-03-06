<?php

namespace App\Http\Controllers;

use App\UnitBase;
use App\UnitImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UnitBaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unit_base = UnitBase::all();
        return $unit_base;
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unit_base = UnitBase::find($id);
        return $unit_base;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function limit()
    {
        $unit_base = DB::table('unit_bases')->take(10)->get();
//        $unit_base = UnitBase::all();
        return $unit_base;
    }

    public function special()
    {
        $unit_special = DB::table('unit_bases')
            ->where('special', '=', '1')
            ->take(10)->get();
        return $unit_special;
    }
}
