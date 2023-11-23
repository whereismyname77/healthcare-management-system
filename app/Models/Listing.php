<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model     
{
    use HasFactory;


    protected $fillable = ['title', 'company', 'location', 'website', 'email', 'description', 'tags' , 'logo', 'user_id'];

    public function scopeFilter($query, array $filter){
        if($filter['tag'] ?? false){
            $query->where('tags','like', '%'. request('tag').'%');
        }

        if($filter['search'] ?? false){
            $query->where('title','like', '%'. request('search').'%')
            ->orWhere('description','like', '%'. request('search').'%')
            ->orWhere('tags','like', '%'. request('search').'%');

        }
    }

    //relationship to user
    public function user(){
        return $this->belognsTo(User::class, 'user_id');
    }




}
