<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoverThumbnail extends Model
{
    //
    protected $fillable = [
        'cover_thumbnail',
        'project_id',
    ];

    // relationship
    public function project() {
        return $this->belongsTo(Project::class);
    }
}
