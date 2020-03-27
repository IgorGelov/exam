<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }

    public function setDoctor(Doctor $doctor)
    {
        $this->doctor()->associate($doctor);
    }
}
