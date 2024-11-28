<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'birthday' => 'nullable|date',
        ];
    }

    /**
     * Ottieni i messaggi di errore personalizzati.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Il nome dell\'autore è obbligatorio.',
            'name.string' => 'Il nome dell\'autore deve essere una stringa.',
            'name.max' => 'Il nome dell\'autore deve essere massimo 255.',
            'birthday.date' => 'Il compleanno dell\'autore deve essere una data.'
        ];
    }
}
