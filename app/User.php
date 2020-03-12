<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
/*  */
use Laravel\Cashier\Billable;
/*  */

/**
 * App\User
 *
 * @property int $id
 * @property int $role_id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string|null $picture
 * @property string|null $stripe_id
 * @property string|null $card_brand
 * @property string|null $card_last_four
 * @property string|null $trial_ends_at
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCardBrand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCardLastFour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereStripeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereTrialEndsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use Notifiable, Billable;

    /*  */
    protected static function boot() 
    {
        parent::boot();
        static::creating( function(User $user) {
            if ( ! \App::runningInConsole() ) {
                $user->slug = str_slug($user->name . " " . $user->lastname, '-');
            }
        });
    }
    /*  */

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    

    /*  */
        /* Operación ternaria que obtiene el role del usuario logueado o si es invitado */
        public static function navigation()
        {
            return auth()->check() ? auth()->user()->role->name : 'guest';
        }
        /* Relations */
        public function role()
        {
            return $this->belongsTo(Role::class);
        }

        public function student()
        {
            return $this->hasOne(Student::class);
        }

        public function teacher()
        {
            return $this->hasOne(Teacher::class);
        }

        public function socialAccount()
        {
            return $this->hasOne(UserSocialAccount::class);
        }
    /*  */
}
