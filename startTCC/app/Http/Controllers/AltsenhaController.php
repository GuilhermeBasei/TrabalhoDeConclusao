<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AltsenhaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('altSenha');
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
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $senha1 = filter_var($_REQUEST['senha1'], FILTER_SANITIZE_STRING);
        $senha2 = filter_var($_REQUEST['senha2'], FILTER_SANITIZE_STRING);
        $oldsenha = filter_var($_REQUEST['oldsenha'], FILTER_SANITIZE_STRING);



        if($senha1 == $senha2 && strlen($request->senha1)>=8 ){
            if(password_verify($oldsenha,Auth::user()->password)){
                $User = User::find(Auth::user()->id);
                $User->password = Hash::make($senha1);
                $User->save();
                return redirect()->route('altsenha.index')->with('mensagem', 'Editado com sucesso!');
            }
            else{
                return redirect()->route('altsenha.index')->with('mensagemerro', 'Senha antiga incorreta!');
            }

        }
        else{
            return redirect()->route('altsenha.index')->with('mensagemerro', 'Senhas novas não coincidem ou não contém 8 caracteres');
        }






    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        //
    }
}
