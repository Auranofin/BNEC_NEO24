<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EssayWritingTeams extends Model
{
    use HasFactory;

    protected $table = 'essay_writing_teams';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];

    public function registrationDetail()
    {
        return $this->belongsTo(RegistrationDetail::class)->whereHas('verifiedPayment');
    }
}
