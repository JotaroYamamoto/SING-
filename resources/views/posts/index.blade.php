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
        <a class='header__right--post' href="">投稿</a>
        <a class='header__right--mypage' href="">マイページ</a>
      </div>
    </header>



    <div class='main'>
      <div class='main--contents'>
        <div class='main-index'>
          <div class='TT'>新着投稿</div>
        </div>
        <div class= 'apost'>
          <div class='postimg'>
            <img src="https://upload.wikimedia.org/wikipedia/en/e/e7/Help%21_%28The_Beatles_album_-_cover_art%29.jpg">
          </div>
          <div class='postview'>
            <div class='posttitle'><span>Yesterday</span> / <span>The Beatles</span></div>
            <div class='postby'><div class='postbyname'>投稿者:JotaroYamamoto</div><div>SING!:321</div></div>
          </div>
        </div>
        <div class= 'apost'>
          <div class='postimg'>
            <img src="https://media.udiscovermusic.com/img/essentials/Queen/albums-400x400/a-night-at-the-opera.jpg">
          </div>
          <div class='postview'>
            <div class='posttitle'><span>Bohemian Rhapsody</span> / <span>Queen</span></div>
            <div class='postby'>投稿者:JotaroYamamoto</div>
          </div>
        </div>
        <div class= 'apost'>
          <div class='postimg'>
            <img src="https://img.snowrecords.com/lp/9000/8149.jpg">
          </div>
          <div class='postview'>
            <div class='posttitle'><span>Dancing Queen</span> / <span>ABBA</span></div>
            <div class='postby'>投稿者:JotaroYamamoto</div>
          </div>
        </div>
        <div class= 'apost'>
          <div class='postimg'>
            <img src="https://images-na.ssl-images-amazon.com/images/I/61aRHnk3hDL._SY355_.jpg">
          </div>
          <div class='postview'>
            <div class='posttitle'><span>Smells Like Teen Spirit</span> / <span>Nirvana</span></div>
            <div class='postby'>投稿者:JotaroYamamoto</div>
          </div>
        </div>
        <div class= 'apost'>
          <div class='postimg'>
            <img src="https://images-na.ssl-images-amazon.com/images/I/91kny7EUh5L._AC_SL1425_.jpg">
          </div>
          <div class='postview'>
            <div class='posttitle'><span>Basket Case</span> / <span>Green Day</span></div>
            <div class='postby'>投稿者:JotaroYamamoto</div>
          </div>
        </div>
        <div class= 'apost'>
          <div class='postimg'>
            <img src="https://images-na.ssl-images-amazon.com/images/I/71s0enhlXcL._AC_SL1500_.jpg">
          </div>
          <div class='postview'>
            <div class='posttitle'><span>Sugar</span> / <span>Maroon 5</span></div>
            <div class='postby'>投稿者:JotaroYamamoto</div>
          </div>
        </div>
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