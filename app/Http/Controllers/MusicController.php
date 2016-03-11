<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entertainment;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function EntertainmentSeach(Request $request)
    {       $search=$request->get('_from');
//            $names=$request->get('search');


        $entername=Entertainment::where('_from','like',"%$search%")
            ->paginate(10)
            ->appends(['search'=>$search]);


        return $entername;
    }
    public function showform(){

        return view('music.search');

    }
    public function json()
    {
        $entertainment=Entertainment::all();
        return $entertainment;
    }
    public function index()
    {
        $entertainment=Entertainment::all();
        return view('music.view')->with('entertainments',$entertainment);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('music.musiccreate');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\Entertainmentrequest $request)
    {
        Entertainment::create($request->all());

       return redirect('/enter');
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
        $entertainment=Entertainment::find($id);

        return view('music.musicedit')->with('entertainment',$entertainment);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\Entertainmentrequest $request, $id)
    {
        $ex=Entertainment::find($id);

        $ex->name=$request->input('name');
        $ex->venue=$request->input('venue');
        $ex->organizer=$request->input('organizer');
        $ex->time=$request->input('time');
        $ex->_from=$request->input('_from');
        $ex->_to=$request->input('_to');
        $ex->image_url=$request->input('image_url');
        $ex->type=$request->input('type');
        $ex->tel=$request->input('tel');
        $ex->deception=$request->input('deception');
        $ex->save();

        return redirect('enter');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entertainment=Entertainment::destroy($id);
        return redirect('enter');
    }
}
