<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hot;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entertainment=Hot::all();
        return view('Hot.hotview')->with('entertainments',$entertainment);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Hot.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\HotRequest $request)
    {
        Hot::create($request->all());

        return redirect('/hot');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entertainment=Hot::find($id);

        return view('Hot.hotshow')->with('entertainment',$entertainment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $entertainment=Hot::find($id);

        return view('Hot.hotedit')->with('entertainment',$entertainment);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request)
    {       $search=$request->get('_from');
//            $names=$request->get('search');


        $name=Hot::where('_from','like',"%$search%")
                    ->paginate(10)
                    ->appends(['search'=>$search]);


        return $name;
    }
    public function search2(){

        return view('search');

    }
    public function update(Requests\HotRequest $request, $id)
    {
        $ex=Hot::find($id);

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

        return redirect('hot');
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
