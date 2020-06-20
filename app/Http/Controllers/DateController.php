<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Date;

class DateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {   
        $dates = Date::all();
        return view('datumi/index', compact('dates'));
    }

    public function create()
    {
        return view('datumi/create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'date' => 'required'
        ]);

        $datums = new Date();
        $datums->date = request('date');
        $datums->save();
        
        Alert::success('Veiksmīgi', 'Datums pievienots veiksmīgi!');
        return redirect('/datumi');
    }

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
