@extends('layout')

@section('title')
ダナン不動産紹介アプリ(最新物件)
@endsection

<head>
    <link rel="stylesheet" type="text/css" href="css/location.css">
</head>
<body>
@section('content')
<div class="location-map">
   <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1kHpinHwIOdfEJwZUZTh4GlZPegpncr2D" width="640" height="480"></iframe>
</div>
@endsection

<footer>
 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="js/location.js"></script>
</footer>
</body>