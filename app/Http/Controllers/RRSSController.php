<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RRSS;

class RRSSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rrss= RRSS::all();
        return view('rrss',compact('rrss'));
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
        $rrss= new RRSS();
        $rrss->User_rid= $request->User_id;
        $rrss->facebook= $request->facebook;
        $rrss->Instagram= $request->Instagram;
        $rrss->Twitter= $request->Twitter;
        $rrss->save();

        return back()->with('mensaje','Redes sociales guardadas');
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
        $rrss= RRSS::findOrFail($id);
        return view(rrss.edit,compact('rrss'));
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
        $updateRRSS= RRSS::find($id);
        $updateRRSS->facebook= $request->facebook;
        $updateRRSS->Instagram= $request->Instagram;
        $updateRRSS->Twitter= $request->Twitter;

        $updateRRSS->save();

        return back()->with('mensaje','Redes sociales actualizadas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroyRRSS= RRSS::find($id);
        $destroyRRSS->delete();

        return back()->with('mensaje','Redes sociales eliminadas');
    }
}
