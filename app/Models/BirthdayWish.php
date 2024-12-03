<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BirthdayWish extends Model
{

    protected $table = 'birthday_wishes';
    
    protected $fillable = [
        'user_first_name',
        'user_last_name',
        'user_email',
        'birthday_date',
        'birthday_boy_first',
        'birthday_boy_last',
        'birthday_email',
        'birthday_message',
    ];
}
