<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class UpdateClienteRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        // Obtiene el id del cliente por route model binding (ajusta el nombre 'cliente' si tu ruta usa otro)
        $clienteId = $this->route('cliente') ? $this->route('cliente')->id : null;

        return [
            'nombre' => 'sometimes|required|string|max:255',
            'telefono' => 'sometimes|required|string|max:20',
            'direccion' => 'sometimes|required|string|max:500',
            'correo' => [
                'sometimes',
                'required',
                'email',
                Rule::unique('clientes', 'correo')->ignore($clienteId),
            ],
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if (empty($this->all())) {
                $validator->errors()->add('fields', 'Debes enviar al menos un campo para actualizar.');
            }
        });
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'message' => 'Validation errors',
            'errors' => $validator->errors(),
        ], 422));
    }
}
