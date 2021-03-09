<?php

namespace App\Http\Controllers;

use App\Models\Conteudo;
use App\Models\Cronograma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManualController extends Controller
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
        $cronograma = [
            'nome' => $request->nome,
            'area' => 'Criação do Usuário',
            'tipo' => 'Cronograma Manual',
            'quantSemanas' => $request->quantSemanas,
            'quantConteudos' => $request->quantConteudos,
        ];

        $num = $request->quantSemanas;
        $num2 = $request->quantConteudos;
        $area = $request->area;

        \DB::transaction(function () use ($cronograma, $num, $area, $num2) {
            $cronogramaObj = Auth::user()->cronogramas()->create($cronograma);
            $i3=0;
            for ($i2 = 0; $i2 < $num2; $i2++) {
                for ($i = 0; $i < $num; $i++) {

                    $conteudos = 'Conteudo';
                    $materias = 'Matéria';
                    $i3++;

                    $data = date('d');

                    $semana = [
                        'conteudos' => $conteudos,
                        'materias' => $materias,
                    ];

                    $cronogramaObj->semanas()->create($semana)->save();

                }
            }
        });
        $user =  \DB::table('cronogramas')->latest('updated_at')->first();
        return \redirect()->route('cronogramas.edit',$user->id)->with('mensagem', 'Criado com sucesso!');
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
    public function update(Request $request, Cronograma $cronograma)
    {
        //
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
