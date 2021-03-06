<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTicketRequest extends FormRequest
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
            'theme' => 'required|string',
            'categories' => 'required|array',
            'message' => 'required|string',
            'photo.*' => 'mimes:png,jpg,jpeg',
            'status' => 'required|in:1'
        ];
    }
}
