<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
     protected $fillable = ['title', 'description', 'comments', 'fav_ost', 'final_note'];
}
