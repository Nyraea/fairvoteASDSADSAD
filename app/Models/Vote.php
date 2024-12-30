<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Candidate;
use App\Models\User;

class Vote extends Model
{
    use HasFactory;

    protected $fillable = ['voter_id', 'candidate_id'];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id', 'candidate_id');
    }

    public function voter()
    {
        return $this->belongsTo(User::class, 'voter_id', 'id');
    }
}
?>