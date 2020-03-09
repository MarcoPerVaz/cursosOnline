<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*  */
use App\Course;
/*  */

class HomeController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::withCount(['students'])
                    ->with('category', 'teacher', 'reviews')
                    ->where('status', Course::PUBLISHED)
                    ->paginate(12);

                    // dd($courses);
        // return view('home');
        return view('home', compact('courses'));
    }
}
