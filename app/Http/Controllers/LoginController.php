<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\Professor;
use App\Models\Ong;
use App\Models\Aluno;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class LoginController
{
    public function login(Request $req){
    $email = $req->input('Email');
    $senha = $req->input('Senha');

    // Verificar se o usuário é um professor, ONG ou aluno
    $professor = Professor::where('email', $email)->first();
    $ong = Ong::where('Email', $email)->first();
    $aluno = Aluno::where('Email', $email)->first();

    if ($professor !== null && Hash::check($senha, $professor->senha)) {
        
        // Iniciar sessão para o professor
        Session::put('professor', $professor);
        return redirect('/ong/account');
    }

   /*/ if ($ong !== null && Hash::check($senha, $ong->senha)) {
        // Iniciar sessão para a ONG
        Session::put('Token', $ong);
        return redirect('/ong/account');
    }

    if ($aluno !== null && Hash::check($senha, $aluno->senha)) {
        // Iniciar sessão para o aluno
        Session::put('Token', $aluno);
        return redirect('/aluno/dashboard');
    }
*/
    // Se nenhuma das condições for atendida
    return redirect()->back()->withInput()->withErrors(['email' => 'Credenciais inválidas']);
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
