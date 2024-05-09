@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection


@section('page-title')
  会員登録
@endsection


@section('content')
  <form action="/register" class="register" method="post">
    @csrf
    <div class="form_group">
      <div class="form_input">
        <input type="text" class="name" name="name" id="name" value="{{ old('name') }}" placeholder="名前" />
      </div>
      <div class="form_input">
        <input type="email" class="email" name="email" id="email" value="{{ old('email')}}" placeholder="メールアドレス" />
      </div>
      <div class="form_input">
        <input type="password" class="password" name="password" id="password" placeholder="パスワード" />
      </div>
      <div class="form_input">
        <input type="password" class="password_confirmation" name="password_confirmation" id="password_confirmation" placeholder="確認用パスワード" />
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

