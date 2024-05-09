<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('attendance', compact('prev', 'next', 'attendance_title'));
    }

    

}
