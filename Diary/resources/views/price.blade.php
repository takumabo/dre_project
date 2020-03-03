@extends('layout')

@section('title')
ダナン不動産紹介アプリ
@endsection

<head>
    <link rel="stylesheet" type="text/css" href="css/price.css">
</head>
<body>
@section('content')
<div class="top-wrapper">
    <div class="pull-down">
        <select class="classic">
          <option>High Price Order</option>
          <option>Low Price Order</option>
          <option>--several prices --</option>
          <option>more than 30,000,000JPY　〜</option>
          <option>20,000,000JPY to 29,999,999JPY</option>
          <option>10,000,000JPY to 19,999,999JPY</option>
          <option> ~ less than 9,999,999JPY</option>
        </select>
    </div>
</div>

<div class="estate-contents">
    <div>
        
    </div>
</div>

@endsection

<footer>
 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="js/price.js"></script>
</footer>
</body>