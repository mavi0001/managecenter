<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdultParticipant extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'age',
        'cin',
        'date_of_birth',
        'city',
        'gender',
        'email',
        'address',
        'phone_number',
        'activity_name',
        'observation',
    ];
}
