<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubmisstionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'personal' => 'array',
                'personal.name' => 'required|string|max:255',
                'personal.name_generated_id' => 'nullable|integer',
                'personal.age' => 'present|alpha_num|max:255',
                'personal.gender' => 'present|alpha|max:15',
                'personal.gender_used_binary' => 'nullable|boolean',
                'personal.location' => 'present|string|max:255',
                'personal.nationality' => 'present|string|max:255',
                'personal.email' => 'present|email',
            'corrections' => 'array',
                'corrections.*.rating' => 'required|integer',
                'corrections.*.theme' => 'required|string|max:255',
                'corrections.*.meaning' => 'present|string|max:255',
            'experience' => 'array',
                'experience.*.word' => 'required|string|max:255',
                'experience.*.similar' => 'required|string|max:255',
                'experience.*.usage' => 'present|string|max:255',
        ];
    }
}
