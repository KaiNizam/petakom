<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VotingRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'CandidateID',
        'StudentID',
        'candidate_name',
        'candidate_program',
        'candidate_year',
        'manifesto',
        'image',
        'vote_result'
    ];
}
