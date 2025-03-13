<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MinorParticipant extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'age',
        'date_of_birth',
        'city',
        'father_or_guardian_name',
        'father_or_guardian_phone',
        'address',
        'observation',
        'minor_activity_id', 
    ];

    public function minorActivity()
    {
        return $this->belongsTo(MinorActivity::class, 'minor_activity_id');
    }
}


