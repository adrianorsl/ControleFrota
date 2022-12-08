<?php

namespace App\Http\Controllers;

use App\Models\Municoes;
use Illuminate\Http\Request;

class MunicoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (request('find') != null)
            {
                $busca = request('find');
                $municoes = Municoes::where('id','like',"$busca%")->paginate(5);
            
            }
            else
                $municoes = Municoes::paginate(10);
        return view("municoes.index",['municoes'=>$municoes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("municoes.create");
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
        $municoes = Municoes::create($request->all());
        return redirect()->route('municoes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Municoes  $municoes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $municoes = municoes::find($id);
        return view('municoes.show', ['municoes'=>$municoes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Municoes  $municoes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $municoes = Municoes::find($id);
        return view('municoes.edit', ['municoes'=>$municoes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Municoes  $municoes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        Municoes::find($id)->update($request->all());
        return redirect()->route('municoes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Municoes  $municoes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Municoes::destroy($id);
        return redirect()->route('municoes.index');
    }
}
