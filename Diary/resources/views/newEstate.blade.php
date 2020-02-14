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
    <a id="openModal">
        <div class="estate1">
            <div class="estate-img1">
                <img src="{{ asset('/storage/newEstate/defu1.jpeg') }}">
            </div>
            <div class="estate-bg2">
                <div class="estate-text">
                     <h3>¥27,000,000</h3>
                     <h3>Hoi An<br>Golden Sea</h3>
                     <br>
                     <p>間取り：1BR</p>
                     <p>面積：52㎡</p>
                     <p>条件：年20日間のホテルコンドミアム</p>
                  </div>
            </div>
        </div>
    </a>

    <a href="">
        <div class="estate1">
            <div class="estate-img1">
                <img src="{{ asset('/storage/newEstate/defu2.jpeg') }}">
            </div>
            <div class="estate-bg2">
                <div class="estate-text">
                     <h3>¥18,000,000</h3>
                     <h3>Aria<br>Da Nang</h3>
                     <br>
                     <p>間取り：1BR</p>
                     <p>面積：52㎡</p>
                     <p>条件：年20日間のホテルコンドミアム</p>
                  </div>
            </div>
        </div>
    </a>

    <a href="">
        <div class="estate1">
            <div class="estate-img1">
                <img src="{{ asset('/storage/newEstate/defu2.jpeg') }}">
            </div>
            <div class="estate-bg2">
                <div class="estate-text">
                     <h3>¥18,000,000</h3>
                     <h3>Rise<br>Mount</h3>
                     <br>
                     <p>間取り：1BR</p>
                     <p>面積：52㎡</p>
                     <p>条件：年20日間のホテルコンドミアム</p>
                  </div>
            </div>
        </div>
    </a>

</div>

<!-- モーダルエリアここから -->
<section id="modalArea" class="modalArea">
  <div id="modalBg" class="modalBg"></div>
  <div class="modalWrapper">
    <div class="modalContents">
        <div class="modal-img">
          <img src="{{ asset('/storage/newEstate/defu1.jpeg') }}">
        </div>
        <div class="modal-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3796.1242545463956!2d108.24420060049202!3d16.0779878669008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc6eeac18a1830e50!2z44OV44Kp44O844Od44Kk44Oz44OI44OQ44Kk44K344Kn44Op44OI44Oz44O744OA44OK44Oz!5e0!3m2!1sja!2s!4v1581585359499!5m2!1sja!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <div class="modal-text">
            <h1>HOi An Golden Sea</h1><h2>¥27,000,000 JPY</h2>
            <p>THis is sample text.Please write your passage here.THis is sample text.Please write your passage here.THis is sample text.Please write your passage here.THis is sample text.Please write your passage here.THis is sample text.Please write your passage here.THis is sample text.Please write your passage here.THis is sample text.Please write your passage here.THis is sample text.Please write your passage here.THis is sample text.Please write your passage here.</p>
            <div class="modal-youtube">
                <iframe id="player"  src="https://www.youtube.com/embed/OB7KTtUcxV0?enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="modal-detail">
            <h2>物件情報</h2>
            <div class="detail-content">
                <table>
                  <tr>
                    <th>種別</th>
                    <td>ホテルコンド</td>
                  </tr>
                  <tr>
                    <th>完成予定</th>
                    <td>2022年</td>
                  </tr>
                  <tr>
                    <th>立地</th>
                    <td>ダナン国際空港から15分、市街地まで7分、ビーチまで30秒</td>
                  </tr>
                  <tr>
                    <th>価格</th>
                    <td>2,700万円〜</td>
                  </tr>
                  <tr>
                    <th>階数</th>
                    <td>58階</td>
                  </tr>
                  <tr>
                    <th>総戸数</th>
                    <td>1186戸</td>
                  </tr>
                  <tr>
                    <th>占有面積戸</th>
                    <td>28㎡</td>
                  </tr>
                  <tr>
                    <th>間取</th>
                    <td>Studio、1BR、2BR、3BR</td>
                  </tr>
                  <tr>
                    <th>土地権利</th>
                    <td>ロングタームリース</td>
                  </tr>
                  <tr>
                    <th>想定実質利回り</th>
                    <td>約8%</td>
                  </tr>
                  <tr>
                    <th>条件</th>
                    <td>家具付、ディベロッパーと5年間の利益シェア（80％：20％＝オーナー：ディベロッパー）、5年後は新たな条件での利益シェアまたは不動産管理会社へ賃貸・実需使用。</td>
                  </tr>
                  <tr>
                    <th>管理費</th>
                    <td>管理費：約6,500円〜</td>
                  </tr>
                  <tr>
                    <th>販売状況</th>
                    <td>販売中</td>
                  </tr>
                  <tr>
                    <th>備考</th>
                    <td>海に面した、ミーケビーチ周辺で比較的高層なマンションです。その他、1~4回には４棟統合ショッピングモール(2021年完成予定)が併設される予定です。</td>
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
<!-- モーダルエリアここまで -->

@endsection

<script src="js/newEstate.js"></script>
</body>