<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrainingRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'training.name' => 'required|string|max:100',
            'training.title' => 'required|string|max:100',
            'training.objective' => 'required|string|max:4000',
            'training.body' => 'required|string|max:4000',
        ];
    }
}
