<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    // Define the primary key for the model
    protected $primaryKey = 'candidate_id';

    // Specify the fillable attributes for mass assignment
    protected $fillable = ['candidate_name', 'party_affiliation', 'election_position'];
}
