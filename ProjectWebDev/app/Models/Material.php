<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Course as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Material extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'material_link',
        'course_id'
    ];

    public function course(){
        return $this->belongsTo(Course::class);
    }
}

