<?php

namespace App\Http\Requests\Library;

use Illuminate\Foundation\Http\FormRequest;

class LibraryCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return \Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255|unique:libraries',
            'path' => 'required|string|unique:libraries'
        ];
    }
}
