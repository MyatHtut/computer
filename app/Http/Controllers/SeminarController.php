<?php

namespace App\Http\Controllers;

use App\Seminar;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class SeminarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

//    public function json()
//    {
//        $semi=Seminar::orderBy('id','DESC')->paginate(2);
//            return Response::json(['products'=>$semi]);
//    }
    public function index()
    {
        $seminar=Seminar::all();
        return view('seminar.semiview')->with('seminars',$seminar);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seminar.createseminar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\Seminarequest $request)
    {
        Seminar::create($request->all());
        return redirect('semi');
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
        $semi=Seminar::find($id);
        return view('seminar.edit')->with('semi',$semi);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\Seminarequest $request, $id)
    {
        $ex=Seminar::find($id);

        $ex->name=$request->input('name');
        $ex->venue=$request->input('venue');
        $ex->organizer=$request->input('organizer');
        $ex->time=$request->input('time');
        $ex->_from=$request->input('_from');
        $ex->_to=$request->input('_to');
        $ex->image_url=$request->input('image_url');
        $ex->type=$request->input('type');
        $ex->ticket_place=$request->input('ticket_place');
        $ex->tel=$request->input('tel');
        $ex->deception=$request->input('deception');
        $ex->save();

        return redirect('semi');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $semi=Seminar::destroy($id);
         return redirect('semi');
    }
}
