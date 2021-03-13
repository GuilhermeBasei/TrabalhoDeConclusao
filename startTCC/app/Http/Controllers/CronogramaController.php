<?php

namespace App\Http\Controllers;

use App\Models\Conteudo;
use App\Models\Cronograma;
use App\Models\Semana;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CronogramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cronogramas = Cronograma::where('user_id', Auth::user()->id)->get();
        return view('cronogramas', ['cronogramas' => $cronogramas]);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nome = filter_var($_REQUEST['nome'], FILTER_SANITIZE_STRING);
        $area = filter_var($_REQUEST['area'], FILTER_SANITIZE_STRING);
        $quantSemanas = filter_var($_REQUEST['quantSemanas'], FILTER_SANITIZE_NUMBER_INT);
        $quantConteudos = filter_var($_REQUEST['quantConteudos'],FILTER_SANITIZE_NUMBER_INT);

       $cronograma = [
            'nome' => $nome,
            'area' => $area,
            'tipo' => $request->tipo,
            'fim' => $request->fim,
            'quantSemanas' => $quantSemanas,
            'quantConteudos' => $quantConteudos,

        ];



        \DB::transaction(function () use ($cronograma, $quantSemanas, $area, $quantConteudos) {
            $cronogramaObj = Auth::user()->cronogramas()->create($cronograma);

            $i3=0;
            for ($i2 = 0; $i2 < $quantConteudos; $i2++) {
                for ($i = 0; $i < $quantSemanas; $i++) {
                    if ($area == 'Exatas') {
                        $conteudo = Conteudo::findOrFail(1);
                        $conteudos = $conteudo->conteudosExatas;
                        $conteudos = (explode("/", $conteudos));
                        $conteudos = $conteudos[$i3];
                        $materias = $conteudo->materiaExatas;
                        $materias = (explode("/", $materias));
                        $materias = $materias[$i3];
                        $i3++;
                    }   elseif ($area == 'Humanas') {
                        $conteudo = Conteudo::findOrFail(1);
                        $conteudos = $conteudo->conteudosHumanas;
                        $conteudos = (explode("/", $conteudos));
                        $conteudos = $conteudos[$i3];
                        $materias = $conteudo->materiaHumanas;
                        $materias = (explode("/", $materias));
                        $materias = $materias[$i3];
                        $i3++;
                    }   elseif ($area == 'Biológicas') {
                        $conteudo = Conteudo::findOrFail(1);
                        $conteudos = $conteudo->conteudosBiologicas;
                        $conteudos = (explode("/", $conteudos));
                        $conteudos = $conteudos[$i3];
                        $materias = $conteudo->materiaBiologicas;
                        $materias = (explode("/", $materias));
                        $materias = $materias[$i3];
                        $i3++;
                    } elseif ($area == 'Todas as áreas') {
                $conteudo = Conteudo::findOrFail(1);
                $conteudos = $conteudo->conteudosTodas;
                $conteudos = (explode("/", $conteudos));
                $conteudos = $conteudos[$i3];
                $materias = $conteudo->materiaTodas;
                $materias = (explode("/", $materias));
                $materias = $materias[$i3];
                $i3++;
            }
                    $data = date('d');

                    $semana = [

                        'conteudos' => $conteudos,
                        'materias' => $materias,
                    ];
                    $cronogramaObj->semanas()->create($semana)->save();
                }
            }
        });

        return \redirect()->route('cronogramas.index')->with('mensagem', 'Criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Cronograma $cronograma
     * @return \Illuminate\Http\Response
     */
    public function show(Cronograma $cronograma)
    {
        $semanas = $cronograma->semanas()->paginate($cronograma->quantConteudos);

        foreach ($semanas as $semana){
            $semana->array = (explode("/",$semana->conteudos));
        }
        $tt= $cronograma->created_at->format('d - M');
        return view('semanas',compact('semanas','tt'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Cronograma $cronograma
     * @return \Illuminate\Http\Response
     */
    public function edit(Cronograma $cronograma)
    {
        $semanas = $cronograma->semanas()->paginate($cronograma->quantConteudos);
        $jj = $cronograma->id;
        $ff = $cronograma->fim;
        foreach ($semanas as $semana){
            $semana->array = (explode("/",$semana->conteudos));
        }
        $tt= $cronograma->created_at->format('d - M');
        if($ff==1){
            return view('editCronograma',compact('semanas','tt','jj'));
        }
        else{
            return view('manualCreate',compact('semanas','tt','jj'));


        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Cronograma $cronograma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cronograma $cronograma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Cronograma $cronograma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cronograma $cronograma)
    {
        $cronograma->delete();
        return redirect()->route('cronogramas.index')->with('mensagemerro', 'Deletado com sucesso!');
    }


}
