<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Book;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){

        $books=  Book::all();
        return view('admin.home' ,compact('books'));
    }
     public function login(){

        return view('auth.login');
     }

}
