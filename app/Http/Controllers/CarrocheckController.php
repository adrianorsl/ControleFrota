<?php

namespace App\Http\Controllers;

use App\Models\Armas_ocor_municoes;
use App\Models\Carrocheck;
use App\Models\Usuario_has_ocorrencia;
use Illuminate\Http\Request;

class CarrocheckController extends Controller
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
                $carrocheck = Carrocheck::where('id','like',"$busca%")->paginate(5);
            
            }
            else
                $carrocheck = Carrocheck::paginate(10);
        return view("carrocheck.index",['carrocheck'=>$carrocheck]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    
        return view("carrocheck.create");
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
        $carrocheck = Carrocheck::create($request->all());
        $usuarioOco = Usuario_has_ocorrencia::create($request->all());
        $armaOcoMun = Armas_ocor_municoes::create($request->all());
        return redirect()->route('carrocheck.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carrocheck  $carrocheck
     * @return \Illuminate\Http\Response
     */
    public function show($ocorrencia_id)
    {
        //
        $carrocheck = Carrocheck::find($ocorrencia_id);
        return view('carrocheck.show', ['carrocheck'=>$carrocheck]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carrocheck  $carrocheck
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $carrocheck = Carrocheck::find($id);
        return view('carrocheck.edit', ['carrocheck'=>$carrocheck]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Carrocheck  $carrocheck
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        Carrocheck::find($id)->update($request->all());
        return redirect()->route('carrocheck.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Carrocheck  $carrocheck
     * @return \Illuminate\Http\Response
     */
    public function destroy($ocorrencia_id)
    {
        //
      
        Carrocheck::destroy($ocorrencia_id);
        return redirect()->route('carrocheck.index');
    }
}
