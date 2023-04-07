<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBreedRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'size' => 'required|in:Tiny,Small,Medium,Large',
            'friendliness' => 'required|min:1|max:5',
            'trainability' => 'required|min:1|max:5',
            'shedding_amount' => 'required|min:1|max:5',
            'exercise_needs' => 'required|min:1|max:5',
        ];
    }
}
