<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AbastecimientoRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'id_abastecimiento' => 'required',
			'id_proveedor' => 'required',
			'id_fabricante' => 'required',
			'id_combustible' => 'required',
			'cantidad' => 'required',
			'fecha_abastecimiento' => 'required',
        ];
    }
}
