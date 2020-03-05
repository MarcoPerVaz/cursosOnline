<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSocialAccount extends Model
{
    /*  */
        /* Fillable */
        protected $fillable = [ 'user_id', 'provider', 'provider_uid' ];
        /* Timestamps */
        public $timestamps = false;
        /* Relations */
        public function user() {
            return $this->belongsTo(User::class);
        }
    /*  */
}
