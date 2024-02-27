<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurss extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'banner_url',
        'student_count',
    ];
}
