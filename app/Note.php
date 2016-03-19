<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = 'news';
    protected $fillable = [
    'user_id',
    'title',
    'shortdesc',
    'desc'
    ];
}
