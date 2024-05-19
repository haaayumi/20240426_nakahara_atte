<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function breaktime()
    {
        return $this->hasMany(Breaktime::class, 'attendance_id');
    }

    // public function break_duration()
    // {
    //     $breaktime = Breaktime::where('attendance_id', $this->id)->latest()->first();
    //     return $this->breaktime ? $this->breaktime->break_duration : '00:00:00';
    // }
}
