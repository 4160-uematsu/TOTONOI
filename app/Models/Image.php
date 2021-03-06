<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    // use SoftDeletes;
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    protected $fillable = [
        'user_id',
        'image_name',
        'image_path',
        'comments',
    ];
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}


