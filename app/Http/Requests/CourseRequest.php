<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
/*  */
use App\Role;
use Illuminate\Validation\Rule;
/*  */

class CourseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
        /*  */
        return auth()->user()->role_id === Role::TEACHER;
        /*  */
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->method()) {
            case 'GET':
            case 'DELETE':
                return [];
            case 'POST': {
                return [
                    'name'          => 'required|min:5',
                    'description'   => 'required|min:30',
                    'level_id'      => [
                        'required',
                        Rule::exists('levels', 'id')
                    ],
                    'category_id'    => [
                        'required',
                        Rule::exists('categories', 'id')
                    ],
                    'picture'         => 'required|image|mimes:jpg,jpeg,png',
                    'requirements.0'  => 'required_with:requirements.1',
                    'goals.0'  => 'required_with:goals.1',
                ];
            }
            case 'PUT': {
                return [
                    'name'          => 'required|min:5',
                    'description'   => 'required|min:30',
                    'level_id'      => [
                        'required',
                        Rule::exists('levels', 'id')
                    ],
                    'category_id'    => [
                        'required',
                        Rule::exists('categories', 'id')
                    ],
                    'picture'         => 'sometimes|image|mimes:jpg,jpeg,png',
                    'requirements.0'  => 'required_with:requirements.1',
                    'goals.0'  => 'required_with:goals.1',
                ];
            }
            
        }
    }
}
