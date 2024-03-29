<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\validation\Rule;

class PostRequest extends FormRequest
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
            'title' => ['string', 'required', 'max:255'],
            'slug' => ['string', 'required', 'max:255', Rule::unique('posts')->ignore($this->slug, 'slug')],
            'excerpt' => ['nullable', 'max:250'],
            'body' => ['nullable'],
            'published_at' => ['nullable'],//por ahora
            'category' => ['required'],
            'status' => ['required'],
            'tags.*' => ['nullable'],
            'image' => ['nullable', 'mimes:jpeg,jpg,png']
        ];
    }
}
