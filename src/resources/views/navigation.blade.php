<nav class="header_nav">
  <ul class="header_list">
    @if (Auth::check())
    <li class="header_content">
      <a href="/">ホーム</a>
    </li>
    <li class="header_content">
      <a href="/attendance">日付一覧</a>
    </li>
    <li class="header_content">
      <form action="/logout" method="post">
        @csrf
        <a href="/logout">ログアウト</a>
      </form>
    </li>
    @endif
  </ul>
</nav>
