<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'num_afi',
        'address',
        'status'
    ];

    public function Appoint(){
        //un paciente a un medico hasOne(Doctor::class)
        //un paciente puede tener muchos turnos
        return $this->hasMany(Appoint::class);
    }
}
