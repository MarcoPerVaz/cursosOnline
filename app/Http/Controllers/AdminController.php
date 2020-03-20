<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*  */
use App\VueTables\EloquentVueTables;
use App\Course;
/*  */

class AdminController extends Controller
{
    /*  */
    public function courses()
    {
        return view('admin.courses');
    }

    public function coursesJson()
    {
       if (\request()->ajax()) {
            $vueTables = new EloquentVueTables;
            $data = $vueTables->get(new Course, ['id', 'name', 'status'], ['reviews']);
            return response()->json($data);
       }
       return abort(401);
    }
    /*  */
}
