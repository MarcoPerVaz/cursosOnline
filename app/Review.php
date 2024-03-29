<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Review
 *
 * @property int $id
 * @property int $course_id
 * @property int $user_id
 * @property float $rating
 * @property string|null $comment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Review whereUserId($value)
 * @mixin \Eloquent
 */
class Review extends Model
{
    /*  */
        /* Fillable */
        protected $fillable = ['course_id', 'user_id', 'rating', 'comment'];
        /* Relations */
        public function course()
        {
            return $this->belongsTo(Course::class);
        }

        public function user()
        {
            return $this->belongsTo(User::class);
        }
    /*  */
}
