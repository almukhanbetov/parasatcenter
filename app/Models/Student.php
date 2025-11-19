<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;


    protected $table = 'students';

    protected $fillable = [
        'lastname',
        'iin',
        'course_id',
        'firm_id',
        'image',
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // -----------------------
    // RELATIONS
    // -----------------------

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function firm()
    {
        return $this->belongsTo(Firm::class);
    }

    // Если в будущем у студента будут картинки:
    public function images()
    {
        return $this->hasMany(StudentImage::class);
    }
}
