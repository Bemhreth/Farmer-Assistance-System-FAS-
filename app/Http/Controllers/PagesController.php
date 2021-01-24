<?php

namespace App\Http\Controllers;

use App\Helpers\UserSystemInfoHelper;


use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;


 class PagesController extends Controller
{
      public function index(){

     
        return view('pages.index');
    }   

    public function impacts(){
        return view('pages.impacts');
    }
    public function consultancy(){
        return view('pages.consultancy');
    }
    public function machinery(){
        return view('pages.machinery');
    }
    public function blog(){
        return view('pages.blog');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function hire(){
        return view('pages.new-post');
    }
    public function freelancers(){
        return view('pages.freelancers');
    }
    

}