<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'id','blog_name','blog_description','blog_title','publish_date','keyword','status',
    ];
}
