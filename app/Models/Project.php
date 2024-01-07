<?php 
// app/Models/Project.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'short', 'text', 'image'];

    // Als je geen timestamps wilt, kun je dit uitschakelen
    // public $timestamps = false;
}

