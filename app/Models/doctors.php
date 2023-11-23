<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctors extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name','specialty'];

    public $table = 'doctors';
}
