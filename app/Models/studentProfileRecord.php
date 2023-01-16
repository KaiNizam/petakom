<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentProfileRecord extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'StudentID',
        'student_name',
        'student_email',
        'studentPhone_num',
        'student_gender',
        'home_address',
        'program',
        'password',
        
    ];
}   
