<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserDetailRequest extends FormRequest
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
            'display_name' => ['required', 'string', 'max:255'],
            'location' => ['string', 'max:255', 'nullable'],
            'skill_level' => ['string', 'max:255', 'nullable'],
            'favourtie_spot' => ['string', 'max:255', 'nullable'],
            'riding_style' => ['string', 'max:255', 'nullable'],
            'bio' => ['string', 'max:5000', 'nullable'],
            'tagline' => ['string', 'max:255', 'nullable'],
            'social_links'   => ['nullable', 'array'],
            'social_links.*' => ['string', 'max:255'],
            'current_setup'  => ['string', 'max:5000', 'nullable'],
            'profile_picture' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'social_links' => $this->social_links ? array_map('trim', explode(',', $this->social_links)) : []
        ]);
    }
}
