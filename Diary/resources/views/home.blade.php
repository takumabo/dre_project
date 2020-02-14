
@extends('layout')

@section('title')
ダナン不動産紹介アプリ
@endsection
<head>
    <link rel="stylesheet" type="text/css" href="css/home.css">
</head>

<body>

@section('content')
    <div class="top-wrapper">
        <div class="webcontent">
            <a href="{{ route('newestate') }}">
                <div class="font_awesome"><i class="far fa-building"></i></div>
                <p>最新物件を見る</p>
            </a>
        </div>
        <div class="webcontent">
            <a href="{{ route('location') }}">
                <div class="font_awesome"><i class="fas fa-map-marked-alt"></i></div>
                <p>ロケーションで見る</p>
            </a>
        </div>
        <div class="webcontent">
            <a href="#">
                <div class="font_awesome"><i class="fas fa-money-check-alt"></i></div>
                <p>物件価格で見る</p>
            </a>
        </div>
    </div>
@endsection

<footer>
    <script src="js/home.js"></script>
</footer>
</body>
</html>