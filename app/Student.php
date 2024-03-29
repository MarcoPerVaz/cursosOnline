<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Student
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Student whereUserId($value)
 * @mixin \Eloquent
 */
class Student extends Model
{
    /*  */
        /* Fillable */
        protected $fillable = ['user_id', 'title'];
        /* Appends */
        protected $appends = ['courses_formatted'];
        /* Relations */
        public function courses() {
            return $this->belongsToMany(Course::class);
        }

        public function user() {
            return $this->belongsTo(User::class)->select('id', 'role_id', 'name', 'email');
        }

        /*  */
        public function getCoursesFormattedAttribute()
        {
            return $this->courses->pluck('name')->implode('<br />'); /* Retorna curso 1 <br> curso 2 <br> curso 3 */
        }
    /*  */
}

/* Notas
    *Se pueden crear consultas desde las relaciones
     *Con select solo obtendrá el id, role_id, name e email de la relación 
*/
