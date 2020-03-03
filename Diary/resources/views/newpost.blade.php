@extends('layout')

@section('title')
投稿画面
@endsection

<head>
    <link rel="stylesheet" type="text/css" href="css/newpost.css">
</head>
<body>
@section('content')
<div class="container">
    <h1>物件情報記入画面</h1>
<form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
    @csrf
    <div class="newpost">
        <div class="post1">
            <div class="post1-tema">
                <h2>基本情報</h2>
            </div>
            <div class="post1-content">
                <div class="li-content">
                    <label>物件名</label>
                    <div class="basic"><input name="ename" id="ename" placeholder="物件名を記入"></div>
                </div>
                <div class="li-content">
                    <label>価格</label>
                    <div class="basic"><input name="eprice" id="eprice" placeholder="物件価格を記入"></div>
                </div>
                <div class="li-content">
                    <label>物件紹介文</label>
                    <textarea style="width:70%;" name="ewords" id="ewords" placeholder="物件紹介文を記入"></textarea>
                </div>
                <div class="li-content">
                    <label>物件立地(googleframeURL)</label>
                    <div class="basic"><input name="epurl" id="epurl" placeholder="物件立地のURLを記入"></div>
                </div>
                <div class="li-content">
                    <label>youtubeULR</label>
                    <div class="basic"><input name="eyurl" id="eyurl" placeholder="youtubeURLを記入"></div>
                </div>
                <div class="li-content">
                    <label>物件画像</label>
                    <div class="basic"><input type="file" name="eimg" id="eimg" placeholder="画像選択"></div>
                </div>
            </div>
        </div>



        <div class="post2">
            <div class="post1-tema">
                <h2>物件詳細情報</h2>
            </div>
            <div class="post1-content">
                <div class="li-content2">
                    <div class="detail">
                    <label>種別</label>
                    <input name="ekind" id="ekind" placeholder="種別を記入">
                    </div>
                </div>
                <div class="li-content2">
                    <div class="detail">
                    <label>完成予定</label>
                    <input name="ebuild" id="ebuild" placeholder="完成予定年 / 日付を記入">
                    </div>
                </div>
                <div class="li-content2">
                    <div class="detail">
                    <label>立地</label>
                    <input name="eplace" id="eplace" placeholder="住所を記入">
                    </div>
                </div>
                <div class="li-content2">
                    <div class="detail">
                    <label>階数</label>
                    <input name="efloor" id="efloor" placeholder="物件の総階数を記入">
                    </div>
                </div>
                <div class="li-content2">
                    <div class="detail">
                    <label>総戸数</label>
                    <input name="eroom" id="erooom" placeholder="物件の総戸数を記入">
                    </div>
                </div>
                <div class="li-content2">
                    <div class="detail">
                    <label>占有面積戸</label>
                    <input name="eshare" id="eshare" placeholder="物件の占有面積を記入(~㎡)">
                    </div>
                </div>
                <div class="li-content2">
                    <div class="detail">
                    <label>間取り</label>
                    <input name="erange" id="erange" placeholder="物件の間取りを記入(~㎡)">
                    </div>
                </div>
                <div class="li-content2">
                    <div class="detail">
                    <label>土地権利</label>
                    <input name="eright" id="eright" placeholder="土地権利を記入">
                    </div>
                </div>
                <div class="li-content2">
                    <div class="detail">
                    <label>想定実質利回り</label>
                    <input name="eyield" id="eyield" placeholder="想定実質利回りを記入">
                    </div>
                </div>

                <div class="li-content">
                    <label style="width:15%">条件</label>
                    <textarea name="econdition" id="econdition"　style="width:85%;" placeholder="物件の条件を記入"></textarea>
                </div>
                <div class="li-content2">
                    <div class="detail">
                    <label>管理費</label>
                    <input name="emanage" id="emanage" placeholder="物件の管理費を記入">
                    </div>
                </div>
                <div class="li-content2">
                    <div class="detail">
                    <label>販売状況</label>
                    <input name="esale" id="esale" placeholder="物件の販売状況を記入">
                    </div>
                </div>
                <div class="li-content">
                    <label style="width:15%">備考</label>
                    <textarea name="extra" id="extra" style="width:85%;" placeholder="物件について備考をここで記入"></textarea>
                </div>
            </div>
        </div>
        <div class="send">
            <input type="submit" name="" placeholder="物件をアップデートする">
        </div>
    </div>
</form>
</div>


@endsection
<footer>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/newpost.js"></script>
</footer>
</body>