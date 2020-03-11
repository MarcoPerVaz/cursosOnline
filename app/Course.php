<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Course
 *
 * @property int $id
 * @property int $teacher_id
 * @property int $category_id
 * @property int $level_id
 * @property string $name
 * @property string $description
 * @property string $slug
 * @property string|null $picture
 * @property string $status
 * @property int $previous_approved
 * @property int $previous_rejected
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereLevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course wherePicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course wherePreviousApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course wherePreviousRejected($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereTeacherId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Course whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Course extends Model
{
    /*  */
    const PUBLISHED = 1;
    const PENDING = 2;
    const REJECTED = 3;
    /*  */

    /*  */
        /*  */
        public function pathAttachment()
        {
            return "/images/courses/" . $this->picture; /* con $this se devuelve la instancia del modelo Course */
        }

        /* Model Binding */
        public function getRouteKeyName()
        {
            return 'slug';
        }
        /*  */
        /* Relations */
        public function category() {
            return $this->belongsTo(Category::class)->select('id', 'name');
        }

        public function goals() {
            return $this->hasMany(Goal::class)->select('id', 'course_id', 'goal');
        }

        public function level() {
            return $this->belongsTo(Level::class)->select('id', 'name');
        }

        public function reviews() {
            return $this->hasMany(Review::class)->select('id', 'user_id', 'course_id', 'rating', 'comment', 'created_at');
        }

        public function requirements() {
            return $this->hasMany(Requirement::class)->select('id', 'course_id', 'requirement');
        }

        public function students() {
            return $this->belongsToMany(Student::class);
        }

        public function teacher() {
            return $this->belongsTo(Teacher::class);
        }

        /* Atributo personalizado */
        public function getRatingAttribute()
        {
            return $this->reviews->avg('rating');
        }
        /* Desde la vista sería $course->rating */

        public function getCustomRatingAttribute()
        {
            return $this->reviews->avg('rating');
        }
        /* Desde la vista sería $course->custom_rating
           ó
           Desde la vista sería $course->customRating 
        */
    /*  */
}

/* Notas
    *Se pueden crear consultas desde las relaciones
     *Con select solo obtendrá el id y name de la relación 
    *Atributo personalizado permite cambiar una colección de datos
      *En este caso sacar el promedio (avg - average) al atributo rating
*/
