<?php

namespace App\Http\Controllers;

/*  */
use App\Course;
use App\Review;
use App\Mail\NewStudentInCourse;
use App\Http\Requests\CourseRequest;
use App\Helpers\Helper;
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

    public function suscribed()
    {
        $courses = Course::whereHas('students', function($query) { /* Esta opción es usando Query Builder */
            $query->where('user_id', auth()->id());
        })->get();
        // auth()->user()->student->courses; /* Esta opción es usando Eloquent */

        return view('courses.suscribed', compact('courses'));

    }

    public function addReview()
    {
        // dd(request()->all());/* Por si se quiere probar la información que recibe request */
        Review::create([
            "user_id" => auth()->id(),
            "course_id" => request('course_id'),
            "rating" => (int) request('rating_input'),
            "comment" => request('message'),
        ]);
        return back()->with('message', ['sucess', __("Muchas gracias por valorar el curso")]);
    }

    public function create()
    {
        $course = new Course();
        $btnText = __("Enviar curso para revisión");
        return view('courses.form', compact('course', 'btnText'));
    }

    public function store(CourseRequest $course_request)
    {
        $picture = Helper::uploadFile('picture', 'courses'); 
        $course_request->merge(['picture'    => $picture]);
        $course_request->merge(['teacher_id' => auth()->user()->teacher->id]);
        $course_request->merge(['status'     => Course::PENDING]);

        // dd($course_request->except('_token'));

        Course::create($course_request->input());

        return back()
            ->with('message', ['success', __("Curso enviado correctamente, rebirá un correo con cualquier información")]);
    }

    public function edit($slug)
    {
        $course = Course::with(['requirements', 'goals'])->withCount(['requirements', 'goals'])
            ->whereSlug($slug)->first();
        $btnText = __("Actualizar curso");
        return view('courses.form', compact('course', 'btnText'));
    }

    public function update(CourseRequest $course_request, Course $course)
    {
        if ($course_request->hasFile('picture')) {
            \Storage::delete('courses/' . $course->picture); /* Se elimina la imagen antigüa físicamente */
            $picture = Helper::uploadFile('picture', 'courses'); /* Se sube la imagen físicamente */
            $course_request->merge(['picture' => $picture]); /* Se une el campo request con la variable $picture */
        }
        $course->fill($course_request->input())->save(); /* Actualiza la información en BD */
        return back()->with('message', ['success', __("Curso actualizado")]);
    }
    /*  */
}

/* Notas:
    *Helper::uploadFile('picture', 'courses'); 
        *Dónde picture es le nombre del arhcivo recibido de request()
        *Dónde courses es la ruta de la carpeta donde se guardan las imágenes storage\app\public\courses
    *$course_request->merge(['picture' => $picture]);
        *Se une el helper con el FormRequest creando la variable picture
    *Course::create($course_request->input());
        *Se van a insertar todos los campos provenientes de request()
*/
