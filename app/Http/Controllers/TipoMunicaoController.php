<?php

namespace App\Http\Controllers;

use App\Models\TipoMunicao;
use Illuminate\Http\Request;

class TipoMunicaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tipoMunicao = array();
        if (request('find') != null)
        {
            $busca = request('find');
            $tipoMunicao = TipoMunicao::where('descricao','like',"$busca%")->get();
        }
        else
            $tipoMunicao = TipoMunicao::all();
        return view("tipoMunicao.index",['tipoMunicao'=>$tipoMunicao]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("tipoMunicao.create");
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
        $c = TipoMunicao::create($request->all());
        return redirect()->route('tipoMunicao.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoMunicao  $tipoMunicao
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $tipoMunicao = TipoMunicao::find($id);
        return view('tipoMunicao/show', ['tipoMunicao'=>$tipoMunicao]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoMunicao  $tipoMunicao
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tipoMunicao = TipoMunicao::find($id);
        return view("tipoMunicao.edit", ['tipoMunicao'=>$tipoMunicao]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoMunicao  $tipoMunicao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        TipoMunicao::find($id)->update($request->all());
        return redirect()->route('tipoMunicao.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoMunicao  $tipoMunicao
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        TipoMunicao::destroy($id);
        return redirect()->route('tipoMunicao.index');
    }
}
