<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'name',
    ];

    // relationships
    public function projects() {
        return $this->belongsToMany(Project::class, 'project_category')->withTimestamps();
    } 
}
