<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdultActivity extends Model
{
    use HasFactory;

    protected $fillable = [
        'activity_name',
        'year',
        'start_date',
        'end_date',
        'location_name',
        'province',
        'number_of_participants',
        'city',
        'organizer_names',
    ];

    public function adultParticipants()
    {
        return $this->hasMany(AdultParticipant::class, 'adult_activity_id');
    }
}
