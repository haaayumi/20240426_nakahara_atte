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
    public function attendancein(Request $request)
    {
        $user = Auth::user();

        $attendancein = now();

        $attendance = new Attendance();
        $attendance->user_id = $user->id;
        $attendance->attendancein = $attendancein;
        $attendance->save();

        return redirect('/');

    }

    // 勤務終了
    public function attendanceout(Request $request)
    {
        $user = Auth::user();

        $attendanceout = now();

        $attendance = new Attendance();
        $attendance->user_id = $user->id;
        $attendance->attendanceout = $attendanceout;
        $attendance->save();

        return redirect('/');
    }

    // 休憩開始
    public function breakin(Request $request)
    {
        $user = Auth::user();

        $breakin = now();

        $breaktime = new Breaktime();
        $breaktime->user_id = $user->id;
        $breaktime->breakin = $breakin;
        $breaktime->save();

        return redirect('/');
    }

    // 休憩終了
    public function breakout(Request $request)
    {
        $user = Auth::user();

        $breakout = now();

        $breaktime = new Breaktime();
        $breaktime->user_id = $user->id;
        $breaktime->breakout = $breakout;
        $breaktime->save();

        return redirect('/');
    }

}
