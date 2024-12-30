<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VoteCount extends Model
{
    protected $primaryKey = 'vote_count_id';

    protected $fillable = ['candidate_id', 'vote_count'];
    
    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id', 'candidate_id');
    }
    
}
