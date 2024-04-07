<?php

namespace App\Store\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required',
            'address.street' => 'required',
            'address.number' => 'required',
            'address.complement' => 'sometimes|nullable',
            'address.district' => 'required',
            'address.city' => 'required',
            'address.state' => 'required',
            'address.postal_code' => 'required',
            'active' => 'required|boolean',
        ];
    }
}
