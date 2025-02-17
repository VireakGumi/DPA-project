<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KeyFeature extends Model
{
    //
    protected $fillable = [
        'name',
        'project_id',
    ];

    // relationship
    public function project() {
        return $this->belongsTo(Project::class);
    }
}
