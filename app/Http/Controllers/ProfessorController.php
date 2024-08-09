<?php

namespace App\Http\Controllers;

use App\Models\Professor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class ProfessorController
{
    /**
     * Display a listing of the resource.
     */
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $req)
    {
        $senha = $req->input('Senha');
        $c_senha = $req->input('C_Senha');

        $professor = new Professor();
        $professor->Nome = $req->input('Nome');
        $professor->CPF = $req->input('CPF');
        $professor->Nascimento = $req->input('Nascimento');
        $professor->Telefone = $req->input('Telefone');
        $professor->Formacao = $req->input('Formacao');
        $professor->Email = $req->input('Email');
        $professor->Senha = Hash::make($req->input('Senha'));

        if ($c_senha !== $senha) return redirect()->back()->withInput()->withErrors(['senha' => 'senhas não coincidem']);


        $professor->save();
        Session::put('professor', $professor);
        return redirect('/ong/account');
    }
        
}
