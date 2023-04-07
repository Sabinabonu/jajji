<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function class()
    {
        return view('pages.class');
    }
    public function achievements()
    {
        return view('pages.achievements');
    }
    public function blog(){
        return view('pages.blog');
    }
    public function gallery(){
        return view('pages.gallery');
    }
    public function team(){
        return view('pages.team');
    }
    
}
