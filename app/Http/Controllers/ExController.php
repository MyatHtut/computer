<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exhibition;
use App\Http\Requests\CreateExFormRequest;
use App\Http\Requests;
use Validates;
use App\Http\Controllers\Controller;

class ExController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function json()
    {
        $spec=Exhibition::orderBy('id','latest')->paginate(2);
        return response()->json($spec);
    }
    public function index()
    {
      $ex= Exhibition::all();
         return view('form.exview')->with('exs',$ex);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form.ex');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateExFormRequest $request)
    {
        Exhibition::create($request->all());

        return redirect('ex');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ex=Exhibition::find($id);
        return view('form.exshow',compact('ex'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ex=Exhibition::find($id);

        return view('form.exedit')->with('ex',$ex);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {


//        $ex=Exhibition::find($id);
//
//        $ex->name=$request->input('name');
//        $ex->venue=$request->input('venue');
//        $ex->company=$request->input('company');
//        $ex->time=$request->input('time');
//        $ex->_from=$request->input('_from');
//        $ex->_to=$request->input('_to');
//        $ex->image_url=$request->input('image_url');
//        $ex->type=$request->input('type');
//        $ex->tel=$request->input('tel');
//        $ex->deception=$request->input('deception');
//        $ex->save();
//
//        return redirect('ex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Exhibition::destroy($id);
        return redirect('ex');

    }
}
