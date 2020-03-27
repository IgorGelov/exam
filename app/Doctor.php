<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function setPatient(Patient $patient)
    {
        $this->patient()->associate($patient);
    }

    protected $fillable = [
        'name',
        'surname',
        'embg',
    ];

    public function patient()
    {
        $this->hasMany(Patient::class, 'family_doctor_id', 'id');
    }
}
