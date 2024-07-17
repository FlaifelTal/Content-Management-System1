<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{

    public function index(){
      
        // return DB::table('posts')->get(); //retrieves all the tables data to the page 
        // return DB::table('posts')->find(7);//retrieves data of id  7 
        // return DB::table('posts')->first();//retrieves first
        // return DB::table('posts')->where('status','=',1)->get();//more specification 
        // return DB::table('posts')->pluck('title');//retrieves a single coloumn can pass multiple as well  return DB::table('posts')->pluck('title','id');
        //more in sec 11
        return view('home');
     
    }
}
