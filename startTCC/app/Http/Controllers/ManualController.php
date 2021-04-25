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
        $nome = filter_var($_REQUEST['nome'], FILTER_SANITIZE_STRING);
        $quantSemanas = filter_var($_REQUEST['quantSemanas'], FILTER_SANITIZE_NUMBER_INT);
        $quantConteudos = filter_var($_REQUEST['quantConteudos'],FILTER_SANITIZE_NUMBER_INT);

        $cronograma = [
            'nome' => $nome,
            'area' => 'Criação do Usuário',
            'tipo' => 'Cronograma Manual',
            'quantSemanas' => $quantSemanas,
            'quantConteudos' => $quantConteudos,
            'fim' => 0,
        ];

        \DB::transaction(function () use ($cronograma, $quantSemanas, $quantConteudos) {
            $cronogramaObj = Auth::user()->cronogramas()->create($cronograma);
            $i3=0;
            for ($i2 = 0; $i2 < $quantConteudos; $i2++) {
                for ($i = 0; $i < $quantSemanas; $i++) {

                    $conteudos = 'Conteúdo';
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
    public function update(Request $request, $cronograma)
    {
        $cronograma = Cronograma::find($cronograma);
        $cronograma->fim = 1;

        $cronograma->save();
        return redirect()->route('cronogramas.show',$cronograma);

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
