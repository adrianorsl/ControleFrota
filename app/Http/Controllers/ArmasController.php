<?php

namespace App\Http\Controllers;

use App\Models\Armas;
use Illuminate\Http\Request;

class ArmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $arma = new Armas();
        $tipoArma = array();
        if (request('find') != null)
        {
            $busca = request('find');
            $arma = Armas::where('numero','like',"$busca%")->get();
        }
        else
            $arma = Armas::all();
        return view("armas.index",['armas'=>$arma]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("armas.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $arma = Armas::create($request->all());
        return redirect()->route('arma.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Armas  $armas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $armas = Armas::find($id);
        return view('arma.show', ['armas'=>$armas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Armas  $armas
     * @return \Illuminate\Http\Response
     */
    public function edit(Armas $armas)
    {
        //
        $armas = new Armas();
        $armas = Armas::find($armas->id);
        return view("arma.edit", ['armas'=>$armas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Armas  $armas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Armas $armas)
    {
        //
        $armas = new Armas();
        Armas::find($armas->id)->update($request->all());
        return redirect()->route('arma.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Armas  $armas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Armas::destroy($id);
        return redirect()->route('arma.index');
    }
}
