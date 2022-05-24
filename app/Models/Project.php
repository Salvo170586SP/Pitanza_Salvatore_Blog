<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'description', 'img', 'language_id'
    ];

    public function languages(){
        return $this->belongsToMany('App\Models\Language');
    }
}
