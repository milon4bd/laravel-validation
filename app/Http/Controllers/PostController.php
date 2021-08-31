<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('post.index');
    }
    public function create(){
        return view('post.create');
    }
     
    public function store() {
        return 'hello World My name is Shimul Hossain And I am a full stack laravel developer';
    }
}
