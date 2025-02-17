<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    const STATUS_PUBLIC = 1;
    const STATUS_NOT_PUBLIC = 2;
    protected $fillable = [
        'title',
        'status',
        'price',
        'description',
        'URL',
        'file_zip',
        'logo',
        'user_id', 
    ];

    // relationship
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'project_category')->withTimestamps();
    }
    public function keyFeatures(){
        return $this->hasMany(KeyFeature::class);
    }
    public function coverThumbnails() {
        return $this->hasMany(CoverThumbnail::class);
    }
    
}
