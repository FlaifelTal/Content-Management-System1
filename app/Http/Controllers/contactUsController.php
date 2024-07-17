<?php

namespace App\Http\Controllers;

use App\Http\Requests\contactRequest;
use Illuminate\Http\Request;

class contactUsController extends Controller
{



    public function index()
    {
        return view('contact');
    }
    // public function handlecontact(Request $request) {

    // $request->validate(
    //     [
    //         'email' => ['required','email'],//ensure email format 
    //         'contact' => ['required','max:200']//max 200 letter 


    //     ],[ 
    //         'email.email' => 'Must be written in email format'
    //     ]//overwrite/change the error message
    //     );
    // }
    //cleaner code now use request class 
    public function handlecontact(contactRequest $request)
    {
        return $request;
    }
}
