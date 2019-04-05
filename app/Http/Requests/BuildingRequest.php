<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BuildingRequest extends FormRequest
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
            'name' => 'required|min:5|max:100',
            'rooms' => 'required|integer|max:50',
            'type' => 'required|integer',
            'status' => 'required|integer',
            'meta' => 'required|min:5|max:200',
            'small_description' => 'required|min:5|max:160',
            'long_description' => 'required|min:5',
            'longitude' => 'required',
            'Latitude' => 'required',
            'square' => 'required|min:2|max:10',
            'rent' => 'required|integer',
            'price' => 'required'
        ];
    }
}
