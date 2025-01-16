<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDevice extends Model
{
    use HasFactory;

    public const DEVICE_TYPE_BROWSER = 1;
    public const DEVICE_TYPE_MOBILE  = 2;
    public const DEVICE_TYPE_UNKNOWN = 3;
    protected $fillable = [
        'user_id',
        'token_id',
        'device_id',
        'device_name',
        'device_type',
        'browser',
        'os',
        'ip',
        'location'
    ];
}
