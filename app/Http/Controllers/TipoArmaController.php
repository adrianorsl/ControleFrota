<?php

namespace App\Http\Controllers;

use App\Models\TipoArma;
use Illuminate\Http\Request;

class TipoArmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tipoArma = array();
        if (request('find') != null)
        {
            $busca = request('find');
            $tipoArma = TipoArma::where('nome','like',"$busca%")->paginate(2);
        }
        else
            $tipoArma = TipoArma::paginate(5);
        return view("tipoArma.index",['tipoArma'=>$tipoArma]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("tipoArma.create");
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
        $c = TipoArma::create($request->all());
        return redirect()->route('tipoArma.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoArma  $tipoArma
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $tipoArma = TipoArma::find($id);
        return view('tipoArma/show', ['tipoArma'=>$tipoArma]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoArma  $tipoArma
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tipoArma = TipoArma::find($id);
        return view("tipoArma.edit", ['tipoArma'=>$tipoArma]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoArma  $tipoArma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        TipoArma::find($id)->update($request->all());
        return redirect()->route('tipoArma.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoArma  $tipoArma
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        TipoArma::destroy($id);
        return redirect()->route('tipoArma.index');
    }
}
