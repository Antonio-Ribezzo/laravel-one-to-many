<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'type_id'=>'nullable',
            'title'=>'required|max:255',
            'description'=>'nullable',
            'buyer'=>'nullable',
            'cover_image'=>'nullable','image',
            'project_date'=>'nullable',
            'programming_languages'=>'required',
            'link'=>'required'
        ];
    }
}
