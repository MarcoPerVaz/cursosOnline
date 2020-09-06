<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*  */
use App\VueTables\EloquentVueTables;
use App\Course;
use App\Mail\CourseApproved;
use App\Mail\CourseRejected;
use App\User;
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
            $data = $vueTables->get(new Course, ['courses.id', 'name', 'status', 'teacher_id'], ['teacher']);
            return response()->json($data);
       }
       return abort(401);
    }

    public function updateCourseStatus()
    {
        if (\request()->ajax()) {
            $course = Course::find(\request('courseId'));

            if ((int) $course->status !== Course::PUBLISHED && ! $course->previous_approved && \request('status') === Course::PUBLISHED) {
               $course->previous_approved = true;
               \Mail::to($course->teacher->user)->send(new CourseApproved($course));
            }
    
            if (\request()->ajax()) {
                $course = Course::find(\request('courseId'));
    
                if ((int) $course->status !== Course::REJECTED && ! $course->previous_rejected && \request('status') === Course::REJECTED) {
                    $course->previous_rejected = true;
                    \Mail::to($course->teacher->user)->send(new CourseRejected($course));
                }
    
                $course->status = \request('status');
                $course->save();
                return response()->json(['msg' => 'ok']);
            }
        }
        return abort(401);
    }

    public function students(User $user)
    {
        // $roles = User::where("role_id", "!=", 1)->get();
        // foreach($roles as $role)
        // {
        //     echo($role->name . "<br>");
        // }
        // dd($roles);

        return view('admin.students');
    }

    public function studentsJson()
    {
        // $roles = User::where("role_id", "!=", 1)->get();

        if (\request()->ajax()) {
            $vueTables = new EloquentVueTables;
            $data = $vueTables->get(new User, ['id', 'name', 'email', 'role_id'], ['role']);
            return response()->json($data);
        }
        return abort(401);
    }
    /*  */
}
