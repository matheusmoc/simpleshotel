<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProdutoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome_produto' => 'nullable|max:30',
            'tipo' => 'required',
            'preco' => 'required',
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'cpf.min' => 'O CPF precisa ter 11 números',
    //         'cpf.max' => 'O CPF precisa ter 11 números',
    //         'cpf.unique' => 'O CPF informado já está cadastrado.',
    //         'cep.min' => 'O CEP precisa ter 8 números',
    //         'cep.max' => 'O CEP precisa ter 8 números',
    //     ];
    // }

}
