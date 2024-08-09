<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
class AlunoController
{
    public function create(Request $req)
    {   
        $senha = $req->input('Senha');
        $c_senha = $req->input('C_Senha');
        
        $validator = Validator::make($req->all(), [
            'nome_aluno' => 'required|string|max:255',
            'cpf_aluno' => 'required|string|size:11|unique:alunos,CPF',
            'aniversario_aluno' => 'required|date',
            'nome_resp' => 'nullable|string|max:255',
            'cpf_resp' => 'nullable|string|size:11',
            'aniversario_resp' => 'nullable|date',
            'telefone' => 'nullable|string|max:15',
            'endereco' => 'nullable|string|max:255',
            'cep' => 'nullable|string|max:10',
            'estado' => 'nullable|string|max:50',
            'cidade' => 'nullable|string|max:50',
            'complemento' => 'nullable|string|max:255',
            'email' => 'required|email|unique:alunos,Email',
            'senha' => 'required|string|min:8',
            'c_senha' => 'required|string|same:senha',
        ], [
            'nome_aluno.required' => 'O campo nome do aluno deve ser preenchido',
            'cpf_aluno.required' => 'O campo CPF do aluno deve ser preenchido',
            'cpf_aluno.size' => 'O CPF do aluno deve ter exatamente :size caracteres',
            'aniversario_aluno.required' => 'O campo data de nascimento do aluno deve ser preenchido',
            'email.required' => 'O campo e-mail deve ser preenchido',
            'email.email' => 'O campo e-mail deve ser um endereço de e-mail válido',
            'email.unique' => 'O e-mail informado já está em uso',
            'senha.required' => 'O campo senha deve ser preenchido',
            'senha.min' => 'A senha deve ter pelo menos :min caracteres',
            'c_senha.required' => 'O campo confirmação de senha deve ser preenchido',
            'c_senha.same' => 'A confirmação da senha não coincide com a senha',
        ]);
    
        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();
        

        
        $aluno = new Aluno();
        $aluno->Nome = $req->input('nome_aluno');
        $aluno->CPF = $req->input('cpf_aluno');
        $aluno->Nascimento = $req->input('aniversario_aluno');
        $aluno->Nome_Responsavel = $req->input('nome_resp');
        $aluno->CPF_Responsavel = $req->input('cpf_resp');
        $aluno->Nascimento_Responsavel = $req->input('aniversario_resp');
        $aluno->Telefone = $req->input('telefone');
        $aluno->Endereco = $req->input('endereco');
        $aluno->CEP = $req->input('cep');
        $aluno->Estado = $req->input('estado');
        $aluno->Cidade = $req->input('cidade');
        $aluno->Complemento = $req->input('complemento');
        $aluno->Email = $req->input('email');
        $aluno->Senha = Hash::make($senha);

        if ($c_senha !== $senha) return redirect()->back()->withInput()->withErrors(['senha' => 'senhas não coincidem']);
       
        // Salvar o aluno no banco de dados
        $aluno->save();

        // Armazenar dados do aluno na sessão (opcional)
        Session::put('aluno', $aluno);
        return redirect('');   
    }
}
