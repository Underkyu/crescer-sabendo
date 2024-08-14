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
        $senha = $req->input('Senha');
        $c_senha = $req->input('C_Senha');
        $validator = Validator::make($req->all(), [
            'Nome' => 'required|string|max:255',
            'CNPJ' => 'nullable|string|size:18|unique:ongs,CNPJ',
            'Responsavel' => 'nullable|string|max:255',
            'CPF' => 'nullable|string|size:11',
            'Endereco' => 'nullable|image|mimes:jpeg,png,jpg,gif,pdf|max:2048',
            'CEP' => 'nullable|string|max:10',
            'Estado' => 'nullable|string|size:2',
            'Cidade' => 'nullable|string|max:50',
            'Complemento' => 'nullable|string|max:255',
            'Telefone' => 'nullable|string|max:15',
            'Linkdoacao' => 'nullable|url',
            'Sobre' => 'nullable|string',
            'Email' => 'nullable|email|unique:ongs,Email',
            'Senha' => 'nullable|string|min:8',
            'Id_Voluntario' => 'nullable|integer|exists:voluntarios,Id_Voluntario',
            'Id_Curso' => 'nullable|integer|exists:cursos,Id_Curso',
        ], [
            'Nome.required' => 'O campo nome deve ser preenchido',
            'Nome.string' => 'O campo nome deve ser uma string',
            'Nome.max' => 'O campo nome deve ter no máximo :max caracteres',
            'CNPJ.size' => 'O CNPJ deve ter exatamente :size caracteres',
            'CNPJ.unique' => 'O CNPJ informado já está em uso',
            'Responsavel.string' => 'O campo responsável deve ser uma string',
            'Responsavel.max' => 'O campo responsável deve ter no máximo :max caracteres',
            'CPF.size' => 'O CPF deve ter exatamente :size caracteres',
            'Endereco.image' => 'A Foto deve ser uma imagem válida',
            'Endereco.mimes' => 'A Foto deve estar em um dos formatos: jpeg, png, jpg, gif',
            'Endereco.max' => 'A Foto não pode ter mais que 2MB',
            'CEP.max' => 'O campo CEP deve ter no máximo :max caracteres',
            'Estado.size' => 'O estado deve ter exatamente :size caracteres',
            'Cidade.max' => 'O campo cidade deve ter no máximo :max caracteres',
            'Complemento.max' => 'O campo complemento deve ter no máximo :max caracteres',
            'Telefone.max' => 'O campo telefone deve ter no máximo :max caracteres',
            'Linkdoacao.url' => 'O campo link de doação deve ser uma URL válida',
            'Email.email' => 'O campo e-mail deve ser um endereço de e-mail válido',
            'Email.unique' => 'O e-mail informado já está em uso',
            'Senha.min' => 'A senha deve ter pelo menos :min caracteres',
            'Id_Voluntario.integer' => 'O ID do voluntário deve ser um número inteiro',
            'Id_Voluntario.exists' => 'O ID do voluntário não existe',
            'Id_Curso.integer' => 'O ID do curso deve ser um número inteiro',
            'Id_Curso.exists' => 'O ID do curso não existe',
        ]);

        if ($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();


        $ong = new Ong();


        if ($c_senha !== $senha) return redirect()->back()->withInput()->withErrors(['senha' => 'senhas não coincidem']);


        if ($req->hasFile('Foto')) {
            if ($ong->Foto) {
                Storage::disk('public')->delete($ong->Endereco);
            }
            $path = $req->file('Endereco')->store('fotos_ongs', 'public');
            $ong->Endereco = $path;
            $ong->save();
        }
        Session::put('ong', $ong);
        return redirect('/ong/account');
    }
}
