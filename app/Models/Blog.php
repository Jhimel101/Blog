<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'slug'];

    public function getRouteKeyName()
        {
            return 'slug';
        }
        
    public function comments()
        {
            return $this->hasMany(Comment::class)->whereNull('parent_id');
        }    

}

