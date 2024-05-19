<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Breaktime;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StampController extends Controller
{
    public function index()
    {
        $loggedInUserName = Auth::user()->name;
        return view('stamp', compact('loggedInUserName'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    // 勤怠開始
    public function attendance_in(Request $request)
    {
        $user = Auth::user();
        $attendance = Attendance::where('user_id', $user->id)->latest()->first();

        $attendance_in = now();
        $attendance_date = now();

        $attendance = new Attendance();
        $attendance->user_id = $user->id;
        $attendance->attendance_in = $attendance_in;
        $attendance->attendance_date = $attendance_date;
        $attendance->save();

        return redirect('/');

    }

    // 勤務終了
    public function attendance_out(Request $request)
    {
        $user = Auth::user();
        $attendance = Attendance::where('user_id', $user->id)->latest()->first();

        if($attendance) {
            $attendance->attendance_out = now();
            $attendance->save();
        }

        return redirect('/');
    }

    // 休憩開始
    public function break_in(Request $request)
    {
        $user = Auth::user();
        $break_in = now();

        $breaktime = new Breaktime();
        $breaktime->attendance_id = $user->id;
        $breaktime->break_in = $break_in;
        $breaktime->break_duration = null;
        $breaktime->save();

        return redirect('/');
    }

    // 休憩終了
    public function break_out(Request $request)
    {
        $user = Auth::user();
        $breaktime = Breaktime::where('attendance_id', $user->id)->latest()->first();


        $breaktime->break_out = $break_out = now();
        $break_in = Breaktime::where('attendance_id', $user->id)->value('break_in');
        $break_duration_seconds = now()->diffInSeconds($break_in);

        $breaktime->break_duration = $break_duration_seconds;
        $breaktime->save();

        return redirect('/');
    }

}
