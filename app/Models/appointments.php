<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointments extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'doctor_id','clinic_number','date','time'];

    public $table = 'appointments';
}
