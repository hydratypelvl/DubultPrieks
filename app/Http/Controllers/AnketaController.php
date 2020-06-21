<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anketa;
use App\Date;
use Alert;

class AnketaController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('auth', ['except' => ['anketa']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $anketas = Anketa::all();
        return view('anketa/index', compact('anketas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dates = Date::all();
        return view('anketa/create', compact('dates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'date' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'carnumber' => 'required',
            'email' => 'required',
            'number' => 'required',
            'comment' => 'max:250'
        ]);
        $pieteikums = new Anketa();

        $pieteikums->date = request('date');
        $pieteikums->name = request('name');
        $pieteikums->surname = request('surname');
        $pieteikums->carnumber = request('carnumber');
        $pieteikums->email = request('email');
        $pieteikums->number = request('number');
        $pieteikums->comment = request('comment');

        $pieteikums->save();
        $name =  $pieteikums->name;
        
        if(mb_substr($name, -1) == 's' || mb_substr($name, -1) == 'š'){
            $name = mb_substr($name, 0, -1);
            Alert::success('Paldies '.$name.'!', 'Ar jums drīzumā sazināsies dubultprieka komanda!');
            return redirect('/');
        }else {
            Alert::success('Paldies '.$name, 'Ar jums drīzumā sazināsies dubultprieka komanda!');
            return redirect('/');
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
        $anketa = Anketa::findOrFail($id);
        return view('anketa/show', compact('anketa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anketa = Anketa::findOrFail($id);
        $datums = Date::findOrFail($id);
        
        return view('anketa.edit', compact('anketa', 'datums'));
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
        $anketa = Anketa::findOrFail($id);
        $anketa->delete();
        Alert::info('Veiksmīgi!', 'Pieteikums Dzēsts no datubāzes!');

        return redirect('/pieteikumi');
    }
}
