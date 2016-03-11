<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createblogrequest;
use Illuminate\Http\Request;
use App\Blog;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function json()
    {
        $blog=Blog::orderBy('id','latest')->paginate(2);
        return response()->json($blog);
    }
    public function index()
    {
        $blog= Blog::all();
        return view('blog.exview')->with('blogs',$blog);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.ex');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Createblogrequest $request)
    {
        Blog::create($request->all());

        return redirect('blog');

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
        Blog::destroy($id);
        return redirect('ex');

    }
}
