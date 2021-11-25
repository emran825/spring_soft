<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class jobApplyValidate extends FormRequest
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
            //
         'name'    =>'required',
         'role'    =>'required',
         'email'   =>'required',
         'contact' =>'required',
         'city'    =>'required',
         'gender'  =>'required',
         'resume'  =>'required|mimes:pdf|max:10000'
        ];
    }


public function messages()
{
    return [
      
        'email.required' => 'The email address is required',
        'email.email'    => 'Please enter a valid email address',
        'email.unique'   => 'The email ID you entered already apply for this job',    
        
       
    ];
}
}
