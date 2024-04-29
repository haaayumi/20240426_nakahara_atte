<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atte</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/navigation.css') }}" />

</head>

<body>
  <header class="header">
    <div class="header_inner">
      <a href="/" class="header_logo">Atte</a>
    </div>
    @include('navigation')
  </header>

  <main>
    <section class="form">
      <div class="form_title">
        <h2>@yield('page-title')</h2>
      </div>
      @yield('content')
    </section>
  </main>
</body>

  <footer class="footer">
    <p>Atte,inc</p>
  </footer>

</body>
</html>