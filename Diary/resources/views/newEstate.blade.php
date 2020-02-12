@extends('layout')

@section('title')
ダナン不動産紹介アプリ
@endsection

<head>
    <link rel="stylesheet" type="text/css" href="css/newEstate.css">
</head>
<body>
@section('content')

<div class="content">

    <div class="estate">
        <div class="estate-img">
            <img src="">
        </div>

        <div class="cover-content">
          <div class="estate-bg1">
              <div class="estate-text">
                 <h3>¥27,000,000</h3>
                 <h3>Hoi An<br>Golden Sea</h3>
                 <br>
                 <p>間取り：2BR</p>
                 <p>面積：106㎡</p>
                 <p>条件：年5回の◯○の支払い+5%還元</p>
              </div>
              
          </div>
        </div>
    </div>


    <div class="estate">
        <div class="estate-img">
            <img src="">
        </div>
        <div class="estate-bg2">
            
        </div>
    </div>


</div>

@endsection

<script src="js/newEstate.js"></script>
</body>