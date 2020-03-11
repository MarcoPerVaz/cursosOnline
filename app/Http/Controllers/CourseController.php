<?php

namespace App\Http\Controllers;

/*  */
use App\Course;
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
        ])->withCount(['students', 'reviews'])->get();

        dd($course);
    }
    /*  */
}

/* Notas:
    *Si se usa with en la consulta no carga las relaciones
    *Si se usa load en la consulta si carga las relaciones
*/
