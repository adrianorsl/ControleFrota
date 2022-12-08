<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $veiculo = array();
        if (request('find') != null)
        {
            $busca = request('find');
            $veiculo = Veiculo::where('numero','like',"$busca%")->paginate(5);
        }
        else
            $veiculo = Veiculo::paginate(10);
        return view("veiculo.index",['veiculo'=>$veiculo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("veiculo.create");
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
        $c = Veiculo::create($request->all());
        return redirect()->route('veiculo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $veiculo = Veiculo::find($id);
        return view('veiculo/show', ['veiculo'=>$veiculo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $veiculo = Veiculo::find($id);
        return view("veiculo.edit", ['veiculo'=>$veiculo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        Veiculo::find($id)->update($request->all());
        return redirect()->route('veiculo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Veiculo::destroy($id);
        return redirect()->route('Veiculo.index');
    }
}
