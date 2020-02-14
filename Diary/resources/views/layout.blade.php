<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ダナン不動産紹介アプリ</title>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
    <link rel="stylesheet" type="text/css" href="css/layout.css">
    <title>@yield('title')</title>
</head>
<body>
 <!-- ドロワーメニュー -->
    <div class="page">
      <header tabindex="0"><a href="{{ route('home') }}">Da Nang Real Estate Service</a></header>
          <div id="nav-container">
            <div class="bg"></div>
            <div class="button" tabindex="0">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </div>
            <div id="nav-content" tabindex="0">
              <ul>
                <li><a href="{{ route('newestate') }}">最新物件を見る</a></li>
                <li><a href="{{ route('location') }}">ロケーションで見る</a></li>
                <li><a href="#0">物件価格で見る</a></li>
                <li><a href="#0">ダナンフードロケーション</a></li>
                <li><a href="#0">ダナン観光スポット</a></li>
                <li class="small"><a href="#0">Facebook</a><a href="#0">Instagram</a></li>
              </ul>
            </div>
        </div>
    </div>

@yield('content')
    <!-- ドロワーメニュー -->

    <footer>
      <!-- ↓body閉じタグ直前でjQueryを読み込む -->
      <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="js/layout.js"></script>
    </footer>
</body>
</html>