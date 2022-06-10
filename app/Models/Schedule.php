<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = [
        'patients_id',
        'doctors_id',
        'reason',
        'date',
        'time',
        'confirmed',
        'diagnosis'

    ];
    public function doctors()
	{
		return $this->belongsTo(Doctor::class, 'doctors_id' , 'id');
	}

    public function patients()
	{
		return $this->belongsTo(Patient::class, 'patients_id' , 'id');
	}
}


