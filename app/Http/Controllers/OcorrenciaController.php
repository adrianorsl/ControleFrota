<?php

namespace App\Http\Controllers;

use App\Models\Carrocheck;
use App\Models\Ocorrencia;
use App\Models\Usuario_has_ocorrencia;
use Illuminate\Http\Request;
use App\Http\Controllers\CarrocheckController;

class OcorrenciaController extends Controller
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
                $ocorrencia = Ocorrencia::where('datainicio','like',"$busca%")->paginate(5);
            
            }
            else
                $ocorrencia = Ocorrencia::paginate(10);
        return view("ocorrencia.index",['ocorrencia'=>$ocorrencia]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("ocorrencia.create");
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
        $ocorrencia = Ocorrencia::create($request->all());
        
        return redirect()->route('carrocheck.create', ['id'=>$ocorrencia->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ocorrencia  $ocorrencia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $ocorrencia = Ocorrencia::find($id);
        return view('ocorrencia.show', ['ocorrencia'=>$ocorrencia]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ocorrencia  $ocorrencia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $ocorrencia = Ocorrencia::find($id);
        return view("ocorrencia.edit", ['ocorrencia'=>$ocorrencia]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ocorrencia  $ocorrencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        Ocorrencia::find($id)->update($request->all());
        return redirect()->route('ocorrencia.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ocorrencia  $ocorrencia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Ocorrencia::destroy($id);
        return redirect()->route('ocorrencia.index');
    }
}
