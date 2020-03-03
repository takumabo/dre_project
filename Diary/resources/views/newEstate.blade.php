@extends('layout')

@section('title')
ダナン不動産紹介アプリ(最新物件)
@endsection

<head>
    <link rel="stylesheet" type="text/css" href="css/newEstate.css">
</head>
<body>
@section('content')


<div class="content">
@foreach ($diaries as $diary)
  <div class="estate1">
    <a class="modal-open" data-target="modal{{$diary->id}}">
            <div class="estate-img1">
                <img src="{{ asset($diary->eimg) }}">
            </div>
            <div class="estate-bg2">
                <div class="estate-text">
                     <h3>{{ $diary->eprice }}</h3>
                     <h3>{{ $diary->ename }}</h3>
                     <br>
                     <p>間取り：</p><p>{{ $diary->erange }}</p>
                     <p>面積：</p><p>{{ $diary->eshare }}</p>
                     <p>条件：</p><p>{{ $diary->econdition}}</p>
                  </div>
            </div>
     </a>
<!-- モーダルエリアここから -->
    <section id="modal{{$diary->id}}" class="modalArea">
      <div id="modalBg" class="modalBg"></div>
      <div class="modalWrapper">
        <div class="modalContents">
            <div class="modal-img">
              <img src="{{ asset($diary->eimg) }}">
            </div>

            <div class="modal-map">
                <iframe src="{{$diary->epurl}}" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
            <div class="modal-text">
                <h1>{{ $diary->ename }}</h1><h2>{{ $diary->eprice }} JPY</h2>
                <p>{{ $diary->ewords }}</p>
                <div class="modal-youtube">
                    <iframe id="player"  src="{{$diary->eyurl}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="modal-detail">
                <h2>物件情報</h2>
                <div class="detail-content">
                    <table>
                      <tr>
                        <th>種別</th>
                        <td>{{$diary->ekind}}</td>
                      </tr>
                      <tr>
                        <th>完成予定</th>
                        <td>{{$diary->ebuild}}</td>
                      </tr>
                      <tr>
                        <th>立地</th>
                        <td>{{$diary->eplace}}</td>
                      </tr>
                      <tr>
                        <th>価格</th>
                        <td>{{$diary->eprice}}</td>
                      </tr>
                      <tr>
                        <th>階数</th>
                        <td>{{$diary->efloor}}</td>
                      </tr>
                      <tr>
                        <th>総戸数</th>
                        <td>{{$diary->eroom}}</td>
                      </tr>
                      <tr>
                        <th>占有面積戸</th>
                        <td>{{$diary->eshare}}</td>
                      </tr>
                      <tr>
                        <th>間取</th>
                        <td>{{$diary->erange}}</td>
                      </tr>
                      <tr>
                        <th>土地権利</th>
                        <td>{{$diary->eright}}</td>
                      </tr>
                      <tr>
                        <th>想定実質利回り</th>
                        <td>{{$diary->eyield}}</td>
                      </tr>
                      <tr>
                        <th>条件</th>
                        <td>{{$diary->econdition}}</td>
                      </tr>
                      <tr>
                        <th>管理費</th>
                        <td>{{$diary->emanage}}</td>
                      </tr>
                      <tr>
                        <th>販売状況</th>
                        <td>{{$diary->esale}}</td>
                      </tr>
                      <tr>
                        <th>備考</th>
                        <td>{{$diary->extra}}</td>
                      </tr>
                    </table>
                </div>

            </div>
        </div>
        <div id="closeModal" class="closeModal">
          ×
        </div>
      </div>
    </section>
  </div>
@endforeach
</div>
<!-- モーダルエリアここまで -->
@endsection

<footer>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <script src="js/newEstate.js"></script>
</footer>
</body>