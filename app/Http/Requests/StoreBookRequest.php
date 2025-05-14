<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
            'title' => 'required|min:3|max:50',
            'genre' => 'required|min:5|max:80',
            'plot' => 'required',
            'cover' => 'image'
        ];
    }

    public function messages(): array{
        return [
            'title.required' => 'Titolo del libro da inserire.',
            'title.min' => 'Il campo "titolo" deve avere minimo 3 caratteri.',
            'title.max' => 'Il campo "titolo" deve avere massimo 50 caratteri.',
            'genre.required' => 'Genere del libro da inserire.',
            'genre.min' => 'Il campo "genere" deve avere minimo 5 caratteri.',
            'genre.max' => 'Il campo "genere" deve avere massimo 80 caratteri.',
            'plot.required' => 'Trama del libro da inserire.',
            'cover.required' => 'Copertina del libro da inserire.'
        ];
    }
}
