@extends('layouts.default')

@section('page-title','ログイン')


@section('content')
  <form action="" class="register">
    <div class="form_group">
      <div class="form_input">
        <input type="email" class="email" name="email" value="" placeholder="メールアドレス">
      </div>
      <div class="form_input">
        <input type="password" class="password" name="password" value="" placeholder="パスワード">
      </div>

      <div class="form_button">
        <button class="form_button-submit" type="submit">ログイン</button>
      </div>
    </div>

    <div class="register">
      <span>アカウントをお持ちのからはこちらから</span>
      <span><a href="/register">会員登録</a></span>
    </div>

  </form>
@endsection
