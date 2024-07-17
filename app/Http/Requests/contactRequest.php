<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
// custom balidation classes // cleaner code both ways apply (in controller and in request)
class contactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; //return true to authorise 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            
            
                        'email' => ['required','email'],//ensure email format 
                        'contact' => ['required','max:200']//max 200 letter 
            
            
                //     ],[ 
                //         'email.email' => 'Must be written in email format'
                //     ]//overwrite/change the error message
                //     );
        ];
    }

    // now for overwriting error messages
    public function message(){
     
              return [      'email.email' => 'Must be written in email format'];
                //overwrite/change the error message
    }
}
