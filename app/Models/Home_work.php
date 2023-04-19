<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home_work extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'deadline',
        'teacher_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'teacher_id');
    }

}
