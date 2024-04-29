@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">

@section('page-title','会員登録' )

@section('content')
  <form action="" class="register">
    <div class="form_group">
      <div class="form_input">
        <input type="text" class="name" name="name" value="" placeholder="名前" >
      </div>
      <div class="form_input">
        <input type="email" class="email" name="email" value="" placeholder="メールアドレス">
      </div>
      <div class="form_input">
        <input type="password" class="password" name="password" value="" placeholder="パスワード">
      </div>
      <div class="form_input">
        <input type="password" class="password_confirmation" name="password_confirmation" value="" placeholder="確認用パスワード">
      </div>

      <div class="form_button">
        <button class="form_button-submit" type="submit">会員登録</button>
      </div>
    </div>

    <div class="login">
      <span>アカウントをお持ちのからはこちらから</span>
      <span><a href="/login">ログイン</a></span>
    </div>

  </form>
@endsection
