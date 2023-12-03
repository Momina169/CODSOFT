<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'dateofbirth' => 'required|date',
            'gender' => 'required|in:male,female,other',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'concern' => 'required|string|max:255',
        ];
    }
}
