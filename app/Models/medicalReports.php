<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicalReports extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'medicalreport'];

    public $table = 'medicalreports';
}
