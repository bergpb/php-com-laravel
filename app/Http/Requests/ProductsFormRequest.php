<?php

namespace estoque\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsFormRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|max:100',
            'descricao' => 'required|max:255',
            'valor' => 'required|numeric',
            'quantidade' => 'required|numeric'
        ];
    }

    public function messages() {
        return [
            'nome.required' => 'Campo nome deve ser preenchido.',
            'descricao.required' => 'Campo descrição deve ser preenchido.',
            'valor.required' => 'Campo valor deve ser preenchido.',
            'quantidade.required' => 'Campo quantidade deve ser preenchido.'
        ];
    }
}
