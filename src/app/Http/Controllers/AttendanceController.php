<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Breaktime;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    public function index()
    {
        if(isset($_GET['ym'])){
            $ym = $_GET['ym'];
        }else{
            $ym = date('Y-n-j');
        }

        $base_date = strtotime($ym);
        $prev = date('Y-n-j',strtotime("-1 day", $base_date));
        $next = date('Y-n-j',strtotime("+1 day", $base_date));
        $attendance_title = date("y-n-j", $base_date);

        // 勤務開始・終了時間表示
        $attendances = Attendance::where('attendance_date', $attendance_title)->get();


        // 休憩合計時間表示
        $attendances->each(function($attendance) {
            $totalBreakDuration = $attendance->breaktime->sum('break_duration');

            $attendance->total_break_duration = $totalBreakDuration;
            $attendance->formatted_break_duration = gmdate('H:i:s', $totalBreakDuration);

            // 勤務時間合計表示
            $attendance_in = strtotime($attendance->attendance_in);
            $attendance_out = strtotime($attendance->attendance_out);

            $totalTime = ($attendance_out - $attendance_in) - $totalBreakDuration;
            $attendance->total_time = gmdate('H:i:s', $totalTime);

        });

        return view('attendance', compact('prev', 'next', 'attendance_title','attendances', ));


    }

}
