<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendMail;

class ProblemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('problema');
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


        $request->validate([
            'nome' =>'required',
            'texto' =>'required',
              'assunto' =>'required',
            'email' =>'required'
        ]);

        $data = array('nome' => $request->nome, 'email'=>$request->email, 'assunto'=>$request->assunto, 'texto'=>$request->texto);
        $template_path = 'problemaContato';

            Mail::send($template_path, $data, function ($message) {
                // Set the receiver and subject of the mail.
                $message->to('vestibulei@outlook.com')->subject('Contato de Usuário');
                // Set the sender
                $message->from('vestibulei@outlook.com', 'Contato de Usuário - Vestibulei');
                $message->subject('Formulário de contato - Gerenciador de cronogramas online');
            });

        return back()
            ->with('msg', 'Sua dúvida já foi enviada para nossa equipe de contado, em breve lhe responderemos');
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
    }
}
