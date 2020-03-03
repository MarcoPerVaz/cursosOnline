<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSocialAccount extends Model
{
    /*  */
        /* Realtions */
        public function user() {
            return $this->belongsTo(User::class);
        }
    /*  */
}
