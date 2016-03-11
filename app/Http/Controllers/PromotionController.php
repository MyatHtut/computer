<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promotion;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function json()
    {
        $pro=Promotion::all();
        return $pro;
    }
    public function index()
    {
        $pro=Promotion::all();
       return view('proform.proview')->with('pros',$pro);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proform.procreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CreatePromotionRequest $request)

    {
        Promotion::create($request->all());
        return redirect('pro');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pro=Promotion::find($id);
        return view('proform.proshow',compact('pro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pro=Promotion::find($id);
        return view('proform.proedit',compact('pro'));
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
        $ex=Promotion::find($id);

        $ex->name=$request->input('name');
        $ex->venue=$request->input('venue');
        $ex->organizer=$request->input('organizer');
        $ex->time=$request->input('time');
        $ex->_from=$request->input('_from');
        $ex->_to=$request->input('_to');
        $ex->image_url=$request->input('image_url');
        $ex->rate=$request->input('rate');
        $ex->tel=$request->input('tel');
        $ex->deception=$request->input('deception');
        $ex->save();

        return redirect('pro');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Promotion::destroy($id);
        return redirect('pro');
    }
}
