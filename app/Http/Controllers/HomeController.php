<?php

namespace App\Http\Controllers;

use App\students;
use Illuminate\Http\Request;

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
    public function index()
    {
    //      return view('home');
    $students = students::latest()->paginate(5);
    return view('students.abm',compact('students'))->with('i', (request()->input('page', 1) - 1) * 5);


    }
}
