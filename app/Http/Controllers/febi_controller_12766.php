<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class febi_controller_12766 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data =febi_model_12766::all();
        return view('customer',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('customer_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = new febi_12766_model();
	$data->nama = $request->nama;
	$data->email = $request->email;
	$data->password = $request->password;
	$data->save();
	return redirect()->route('customer.index')->with('alert-success','Berhasil Menambahkan Data!');
    }
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
      	$data=febi_12766_model::where('id',$id)->get();
		return view('edit',compact('data'));
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
       $data =febi_12766_model::where('id',$id)->first();
	  $data->Nama = $request ->Nama;
	  $data->Email = $request ->Email;
	  $data->NoHP = $request ->Password;
	  $data->save();
	  return redirect()->route('customer.index')->with(
	  'alert-success','Data berhasil di ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $data=febi_12766_model::where('id',$id)->first();
	   $data->delete();
	   return redirect()->route('customer.index')->with('alert-success','Data berhasil di Hapus !');
    }
}
