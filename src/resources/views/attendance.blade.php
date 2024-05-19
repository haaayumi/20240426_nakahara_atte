@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/attendance.css') }}">



@section('page-title')
  <span class="arrow left"><a href="?ym={{ $prev }}"><</a></span>
  <span>{{ $attendance_title }}</span>
  <span class="arrow right"><a href="?ym={{ $next }}">></a></span>
@endsection


@section('content')
  <table class="attendance">
    <tr class="attendance-table_row">
      <th class="attendance-table_header">名前</th>
      <th class="attendance-table_header">勤務開始</th>
      <th class="attendance-table_header">勤務終了</th>
      <th class="attendance-table_header">休憩時間</th>
      <th class="attendance-table_header">勤務時間</th>
    </tr>

    @foreach ($attendances as $attendance)
    <tr class="attendance-table_row">
      <td class="attendance-table_item">
        {{ $attendance->user->name }}
      </td>
      <td class="attendance-table_item">
        {{ $attendance->attendance_in }}
      </td>
      <td class="attendance-table_item">
        {{ $attendance->attendance_out }}
      </td>
      <td class="attendance-table_item">
        {{ $attendance->formatted_break_duration  }}
      </td>
      <td class="attendance-table_item">
        {{ $attendance->total_time }}
      </td>
    </tr>
    @endforeach
  </table>

  <div class="pagination-links">
    {{ $attendances->links() }}
  </div>

@endsection

