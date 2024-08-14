<?php

namespace App\Http\Controllers;

use App\Models\VagaVoluntario;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class VagaVoluntarioController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $req)
    {
        /*$validator = Validator::make($req->all(), [
            'Nome' => 'required|string|max:255',
            'CPF' => 'required|string|size:14|unique:professores,cpf',
            'Nascimento' => 'required|date',
            'Telefone' => 'nullable|string|max:15',
            'Formacao' => 'nullable|string|max:255',
            'Email' => 'required|email|unique:professores,email',
            'Senha' => 'required|string|min:8',
            'C_Senha' => 'required|string|same:Senha',
        ], [
            'Nome.required' => 'O campo nome deve ser preenchido',
            'CPF.required' => 'O campo CPF deve ser preenchido',
            'CPF.size' => 'O campo CPF deve ter exatamente :size caracteres',
            'Nascimento.required' => 'O campo data de nascimento deve ser preenchido',
            'Email.required' => 'O campo email deve ser preenchido',
            'Email.email' => 'O campo email deve ser um endereço de e-mail válido',
            'Email.unique' => 'O e-mail informado já está em uso',
            'Senha.required' => 'O campo senha deve ser preenchido',
            'Senha.min' => 'A senha deve ter pelo menos :min caracteres',
            'C_Senha.required' => 'O campo confirmação de senha deve ser preenchido',
            'C_Senha.same' => 'A confirmação da senha não coincide com a senha',
        ]); */

        $vaga = new VagaVoluntario();

        $vaga->Nomearea = $req->input('name-ar');
        $vaga->Telefone = $req->input('tel-cont');
        $vaga->Email = $req->input('email');
        $vaga->Cidade = $req->input('cidade');
        $vaga->Sobre = $req->input('voluntarios');
        $vaga->Dias = $req->input('day');
        $vaga->Horario = $req->input('hour');
        $vaga->Id_Ong = session('ong')->Id_Ong;

        $vaga->save();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(VagaVoluntario $vagaVoluntario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VagaVoluntario $vagaVoluntario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, VagaVoluntario $vagaVoluntario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VagaVoluntario $vagaVoluntario)
    {
        //
    }
}
