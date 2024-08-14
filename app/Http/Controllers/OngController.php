<?php

namespace App\Http\Controllers;

use App\Models\Ong;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;;

class OngController
{
    public function create(Request $req)
    {
        $senha = $req->input('senha');
        $c_senha = $req->input('c_senha');
        $validator = Validator::make($req->all(), [
            'nome_ong' => 'required|string|max:255',
            'cnpj_ong' => 'nullable|string|size:18|unique:ongs,CNPJ',
            'resp_ong' => 'nullable|string|max:255',
            'cep' => 'nullable|string|max:10',
            'estado' => 'nullable|string|size:2',
            'cidade' => 'nullable|string|max:50',
            'complemento' => 'nullable|string|max:255',
            'telefone' => 'nullable|string|max:15',
            'linkdoacao' => 'nullable|url',
            'sobre' => 'nullable|string',
            'email' => 'nullable|email|unique:ongs,Email',
            'senha' => 'nullable|string|min:8'
        ], [
            'nome_ong.required' => 'O campo nome deve ser preenchido',
            'nome_ong.string' => 'O campo nome deve ser uma string',
            'nome_ong.max' => 'O campo nome deve ter no máximo :max caracteres',
            'cnpj_ong.size' => 'O CNPJ deve ter exatamente :size caracteres',
            'cnpj_ong.unique' => 'O CNPJ informado já está em uso',
            'resp_ong.string' => 'O campo responsável deve ser uma string',
            'resp_ong.max' => 'O campo responsável deve ter no máximo :max caracteres',
            'cep.max' => 'O campo CEP deve ter no máximo :max caracteres',
            'estado.size' => 'O estado deve ter exatamente :size caracteres',
            'cidade.max' => 'O campo cidade deve ter no máximo :max caracteres',
            'complemento.max' => 'O campo complemento deve ter no máximo :max caracteres',
            'telefone.max' => 'O campo telefone deve ter no máximo :max caracteres',
            'linkdoacao.url' => 'O campo link de doação deve ser uma URL válida',
            'email.email' => 'O campo e-mail deve ser um endereço de e-mail válido',
            'email.unique' => 'O e-mail informado já está em uso',
            'senha.min' => 'A senha deve ter pelo menos :min caracteres',
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();


        $ong = new Ong();
        $ong->Nome = $req->input('nome_ong');
        $ong->CNPJ = $req->input('cnpj_ong');
        $ong->Responsavel = $req->input('resp_ong');
        $ong->CEP = $req->input('cep');
        $ong->Estado = $req->input('estado');
        $ong->Cidade = $req->input('cidade');
        $ong->Complemento = $req->input('complemento');
        $ong->Telefone = $req->input('telefone');
        $ong->Linkdoacao = $req->input('link_doacao');
        $ong->Sobre = $req->input('ativ_ong');
        $ong->Email = $req->input('email');
        $ong->Senha = Hash::make($req->input('senha'));


        if ($c_senha !== $senha) return redirect()->back()->withInput()->withErrors(['senha' => 'senhas não coincidem']);

        if ($req->hasFile('compro_endereco')) {
            $ong->Endereco = $req->file('compro_endereco')->store('fotos', 'public');
        }
        else{
            $ong->Endereco = "erro";
        }


        $ong->save();
        Session::put('ong', $ong);
        return redirect('/ong/account');
    }
}
