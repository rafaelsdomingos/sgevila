<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateAlunoFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:255|min:3',
            'nacionalidade' => 'nullable|string',
            'naturalidade' => 'nullable|string',
            'sexo' => 'nullable|string',
            'nascimento' => 'date',
            'genero' => 'nullable|string',
            'raca' => 'nullable|string',
            'endereco' => 'nullable|string',
            'bairro' => 'nullable|string',
            'cidade' => 'nullable|string',
            'uf' => 'nullable|string',
            'cep' => 'nullable|string',
            'regional' => 'nullable|string',
            'fone1' => 'nullable|string',
            'fone2' => 'nullable|string',
            'email' => 'nullable|string',
            'deficiencia' => 'nullable|boolean',
            'tipo_deficiencia' => 'nullable|string',
            'alergia' => 'nullable|boolean',
            'tipo_alergia' => 'nullable|string',
            'escolaridade' => 'nullable|string',
            'serie' => 'nullable|string',
            'turno' => 'nullable|string',
            'instituicao' => 'nullable|string',
            'tipo_instituicao' => 'nullable|string',
            'rg' => 'nullable|string',
            'emissor' => 'nullable|string',
            'uf_emissor' => 'nullable|string',
            'cpf' => 'nullable|string',
            'mae' => 'nullable|string',
            'rgmae' => 'nullable|string',
            'emissor_rg_mae' => 'nullable|string',
            'uf_rg_mae' => 'nullable|string',
            'pai' => 'nullable|string',
            'rgpai' => 'nullable|string',
            'emissor_rg_pai' => 'nullable|string',
            'uf_rg_pai' => 'nullable|string',
            'nome_contato1' => 'nullable|string',
            'fone_contato1' => 'nullable|string',
            'email_contato1' => 'nullable|string',
            'nome_contato2' => 'nullable|string',
            'fone_contato2' => 'nullable|string',
            'email_contato2' => 'nullable|string',
            'nome_contato3' => 'nullable|string',
            'fone_contato3' => 'nullable|string',
            'email_contato3' => 'nullable|string',
            'transporte' => 'nullable|boolean',
            'cia' => 'nullable|string',
            'comp_endereco' => 'nullable|boolean',
            'dec_matricula' => 'nullable|boolean',
            'atestado' => 'nullable|boolean',
            'renda' => 'nullable|boolean',
            'certidao' => 'nullable|boolean',
            'rg_responsavel' => 'nullable|boolean',
            'foto' => 'nullable|boolean',
        ];
    }
}
