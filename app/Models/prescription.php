<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prescription extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','medicine_name','strength','amount','instructions'];
    //protected $table = 'prescription';
}
