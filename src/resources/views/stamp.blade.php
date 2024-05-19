@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/stamp.css') }}">
@endsection


@section('page-title')
{{ $loggedInUserName }}さんお疲れ様です！
@endsection


@section('content')
<div class="form">
  <div class="form_group">
    <form action="/stamp/attendance_in" class="form_attendance" method="post">
      @csrf
      <div class="form_stamp">
        <button class="form_stamp-submit" type="submit">勤務開始</button>
      </div>
    </form>
    <form action="/stamp/attendance_out" class="form_attendance" method="post">
      @csrf
      <div class="form_stamp">
        <button class="form_stamp-submit" type="submit">勤務終了</button>
      </div>
    </form>
    <form action="/stamp/break_in" class="form_break" method="post">
      @csrf
      <div class="form_stamp">
        <button class="form_stamp-submit" type="submit">休憩開始</button>
      </div>
    </form>
    <form action="/stamp/break_out" class="form_break" method="post">
      @csrf
      <div class="form_stamp">
        <button class="form_stamp-submit" type="submit">休憩終了</button>
      </div>
    </form>
  </div>
</div>
@endsection

