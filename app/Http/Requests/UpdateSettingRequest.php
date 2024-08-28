<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
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
           'address' => ['required', 'string', 'max:255'],
           'phone' => ['required', 'numeric'],
           'email' => ['required', 'email', 'max:255'],
           'facebook' => ['required', 'url', 'max:255'],
           'twitter' => ['required', 'url', 'max:255'],
           'youtube' => ['required', 'url', 'max:255'],
           'linkedin' => ['required', 'url', 'max:255'],
           'instagram' => ['required', 'url', 'max:255'],

        ];
    }

    public function attributes()
    {
        return [
            'address'=>__('keywords.address'),
            'phone'=>__('keywords.phone'),
            'email'=>__('keywords.email'),
            'facebook'=>__('keywords.facebook'),
            'twitter'=>__('keywords.twitter'),
            'youtube'=>__('keywords.youtube'),
            'linkedin'=>__('keywords.linkedin'),
            'instagram'=>__('keywords.instagram'),
            
        ];
    }
}
