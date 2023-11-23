<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sickLeaves extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'sickleave'];

    public $table = 'sickleaves';
}
