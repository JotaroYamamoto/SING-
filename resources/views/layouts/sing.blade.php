<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>SING!</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
  <div class='wrapper'>

    <header class='header'>
      <div class='header__left'>
        <div class='header__left--title'>SING!</div>
      </div>
      <div class='header__center'>
        <input type='text' class='header__center--search' placeholder="A SONG!">
        <div class='hd-btn'>
          <span class="fa fa-search"></span>
        </div>
      </div>
    </input>
      <div class='header__right'>
        <a class='header__right--post' href="posts/new">投稿</a>
        <a class='header__right--mypage' href="">マイページ</a>
      </div>
    </header>



    <div class='main'>
      <div class='main--contents'>
        @yield('content')
      </div>
    </div>


    <footer class='footer'>
      <div class='footer--content'>
        <div class='footer--content__left'>
          <div class='ft-title'>SING!</div>
          <div class='ft-textL'>音楽好きのための英語学習サービス</div>
        </div>
        <div class='footer--content__right'>
          <div class='ft-SING'>
            <div class='ft-SING-text'>SING!</div>
            <div class='ft-list'>
              <div class='LII'>
                <a href="">About</a>
                <a href="">利用規約</a>
                <a href="">プライバシー</a>
                <a href="">ガイドライン</a>
              </div>
              <div class='LII'>
                <a href="">API</a>
                <a href="">ご意見</a>
                <a href="">ヘルプ</a>
                <a href="">広告掲載</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>
</body>
</html>