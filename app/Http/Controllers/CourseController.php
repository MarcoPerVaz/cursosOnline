<?php

namespace App\Http\Controllers;

/*  */
use App\Course;
use App\Mail\NewStudentInCourse;
/*  */

class CourseController extends Controller
{
    /*  */
    public function show(Course $course)
    {
        // $course->with( [
        $course->load( [
            'category' => function ($q) {
                $q->select('id', 'name');
            },
            'goals' => function($q){
                $q->select('id', 'course_id', 'goal');
            },
            'level' => function($q){
                $q->select('id', 'name');
            },
            'requirements' => function($q) {
                $q->select('id', 'course_id', 'requirement');
            },
            'reviews.user',
            'teacher'
        ])->get();
        
        $related = $course->relatedCourses();
        
        return view('courses.detail', compact('course', 'related'));
    }

    public function inscribe(Course $course)
    {
        // return new NewStudentInCourse($course, "admin"); /* Para hacer preview del mail  */
        $course->students()->attach(auth()->user()->student->id); /* Registra en la tabla pivote course_student */
        \Mail::to($course->teacher->user)->send(new NewStudentInCourse($course, auth()->user()->name));
        return back()->with('message', ['success', __("Inscrito correctamente al curso")]);
    }
    /*  */
}

/* Notas:
    *Si se usa with en la consulta no carga las relaciones
    *Si se usa load en la consulta si carga las relaciones
*/
