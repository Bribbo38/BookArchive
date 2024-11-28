<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string|min:10|max:800',
            'pages' => 'nullable|integer|min:1',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
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
            'title.required' => 'Il titolo è obbligatorio.',
            'author_id.required' => 'L\'autore è obbligatorio.',
            'author_id.exists' => 'L\'autore selezionato non esiste.',
            'category_id.required' => 'La categoria è obbligatoria.',
            'category_id.exists' => 'La categoria selezionata non esiste.',
            'description.required' => 'La descrizione è obbligatoria.',
            'description.min' => 'La descrizione deve avere almeno 10 caratteri.',
            'description.max' => 'La descrizione deve avere al massimo 800 caratteri.',
            'pages.integer' => 'Il numero di pagine deve essere un numero intero.',
            'pages.min' => 'Il numero di pagine deve essere almeno 1.',
            'cover_image.image' => 'Il file caricato deve essere un\'immagine.',
            'cover_image.mimes' => 'L\'immagine deve essere in formato jpeg, png, jpg o gif.',
            'cover_image.max' => 'L\'immagine non deve superare i 2MB.',
        ];
    }
}
