<?php

namespace App\Http\Controllers;
use App\Fav;
use App\Favitem;
use App\Exhibition;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FavController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function json(){
        $favitem=Favitem::all();
        $favitem2=Fav::all();
        $favplus=$favitem AND $favitem2;
        return $favplus;

    }

    public function addfav($exId){
        $fav=Fav::where('user_id',Auth::user()->id)->first();
        if(!$fav){
            $fav=new fav();
            $fav->user_id=Auth::user()->id;
            $fav->save();
        }

        $favitem=new Favitem();
        $favitem->fav_id=$fav->id;
        $favitem->exhibition_id=$exId;
        $favitem->save();

        return "your done buddy";
        
    }
    public function showfav(){
        $fav=Fav::where('user_id',Auth::user()->id)->first();

        if(!$fav){
            $fav=new fav();
            $fav->user_id=Auth::user()->id;
            $fav->save();
        }

        $favshows=$fav->FavItems;
//        $favshows=$fav->user();

        return view('fav.fav',['favshows'=>$favshows]);
    }
    public function index()
    {
        //
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
        //
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
}
