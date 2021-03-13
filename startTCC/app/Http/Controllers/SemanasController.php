<?php

namespace App\Http\Controllers;

use App\Models\Cronograma;
use App\Models\Semana;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SemanasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $semanas = Semana::all();
        // $semanas = Semana::where('cronograma_id',Cronograma::cronograma()->id)->get();
        return view('semanas', ['semanas' => $semanas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Semanas  $semanas
     * @return \Illuminate\Http\Response
     */


    public function show(Semana $semana)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Semanas  $semanas
     * @return \Illuminate\Http\Response
     */
    public function edit(Semanas $semanas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Semanas  $semanas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $conteudos = filter_var($_REQUEST['conteudos'], FILTER_SANITIZE_STRING);
        $materias = filter_var($_REQUEST['materias'], FILTER_SANITIZE_STRING);


        $semanas = Semana::find($id);
        $semanas->conteudos = $conteudos;
        $semanas->materias = $materias;
        $semanas->save();
        return redirect()->back()->with('success', 'Editado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Semanas  $semanas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Semanas $semanas)
    {
        //
    }
}
