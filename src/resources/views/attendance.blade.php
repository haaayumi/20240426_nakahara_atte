@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance.css') }}">


@section('page-title','Date')

@section('content')
  <table class="attendance">
    <tr class="attendance-table_row">
      <th class="attendance-table_header">名前</th>
      <th class="attendance-table_header">勤務開始</th>
      <th class="attendance-table_header">勤務終了</th>
      <th class="attendance-table_header">休憩時間</th>
      <th class="attendance-table_header">勤務時間</th>
    </tr>
    <tr class="attendance-table_row">
      <td class="attendance-table_item"></td>
      <td class="attendance-table_item"></td>
      <td class="attendance-table_item"></td>
      <td class="attendance-table_item"></td>
      <td class="attendance-table_item"></td>
    </tr>
  </table>
