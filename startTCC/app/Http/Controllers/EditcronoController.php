<?php

namespace App\Http\Controllers;

use App\Models\Cronograma;
use App\Models\Semana;
use Illuminate\Http\Request;

class EditcronoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cronograma  $cronograma
     * @return \Illuminate\Http\Response
     */
    public function show(Cronograma $cronograma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cronograma  $cronograma
     * @return \Illuminate\Http\Response
     */
    public function edit(Cronograma $cronograma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cronograma  $cronograma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $semana=new Semana();
        $semana->cronograma_id=$id;
        $semana->conteudos='Conteudo';
        $semana->materias='Materia';
        $semana->save();

        return back()
            ->with('msg', 'Adicionado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cronograma  $cronograma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cronograma $cronograma)
    {
        //
    }
}
