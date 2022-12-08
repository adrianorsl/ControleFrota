<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condicao;

class CondicaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $condicao = array();
        if (request('find') != null)
        {
            $busca = request('find');
            $condicao = Condicao::where('nome','like',"$busca%")->paginate(5);
        }
        else
            $condicao = Condicao::paginate(10);
        return view("condicao.index",['condicao'=>$condicao]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("condicao.create");
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
        $c = Condicao::create($request->all());
        return redirect()->route('condicao.index');
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
        $condicao = Condicao::find($id);
        return view('condicao/show', ['condicao'=>$condicao]);
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
        $condicao = Condicao::find($id);
        return view("condicao.edit", ['condicao'=>$condicao]);
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
        Condicao::find($id)->update($request->all());
        return redirect()->route('condicao.index');
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
        Condicao::destroy($id);
        return redirect()->route('condicao.index');
    }
}
