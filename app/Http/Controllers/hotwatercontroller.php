<?php

namespace App\Http\Controllers;

use App\Models\hotwater;
use Illuminate\Http\Request;
use DB;
class hotwatercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hotwater2');
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
        $hotwater =new hotwater();
        $hotwater->name=$request->input('name');
        $hotwater->address=$request->input('address');
        $hotwater->true=$request->input('true');
        $hotwater->mobile=$request->input('mobile');
        $hotwater->latitude=$request->input('latitude');
        $hotwater->longitude=$request->input('longitude');
        $hotwater->save();
        return redirect("hotwater");
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $hotwaters = hotwater::all();
        // $users = DB::select('select * from hotwaters');
        return view('findhotwater',['users'=>$hotwaters]);
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
