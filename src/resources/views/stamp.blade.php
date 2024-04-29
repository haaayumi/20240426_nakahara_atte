@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/stamp.css') }}">


@section('page-title','さんお疲れ様です！')

@section('content')
<div class="form">
  <div class="form_group">
    <form action="" class="form_attendance">
      <div class="form_stamp">
        <button class="form_stamp-submit" type="submit">勤務開始</button>
      </div>
      <div class="form_stamp">
        <button class="form_stamp-submit" type="submit">勤務終了</button>
      </div>
    </form>
    <form action="" class="form_break">
      <div class="form_stamp">
        <button class="form_stamp-submit" type="submit">休憩開始</button>
      </div>
      <div class="form_stamp">
        <button class="form_stamp-submit" type="submit">休憩終了</button>
      </div>
    </form>
  </div>
</div>
@endsection
