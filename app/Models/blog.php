<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    protected $connection = 'mysql_second';

    protected $fillable = [
        'user_id', 'title', 'body',
    ];
}
