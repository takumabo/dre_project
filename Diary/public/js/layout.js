$(function () {
  $('#openModal').click(function(){
      $('#modalArea').fadeIn();
  });
  $('#closeModal , #modalBg').click(function(){
    $('#modalArea').fadeOut();
  });
});


//api用のJSを読み込む
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
//APIを実行
 var player;
  function onYouTubeIframeAPIReady() {
  player = new YT.Player("player",{
  events: {
        'onReady': onPlayerReady,//API呼び出しの受信を開始する準備ができると起動
        'onStateChange': onPlayerStateChange// プレーヤーの状態が変わると起動
      }
  });
  }
//関数
function onPlayerReady(event) {
event.target.playVideo();
}

//関数（以下は再生後○秒で止まる仕組み）
// var done = false;
// function onPlayerStateChange(event) {console.log(3);
// if (event.data == YT.PlayerState.PLAYING && !done) {
//   setTimeout(stopVideo, 10);
//   done = true;
// }
// }
// function stopVideo() {
// player.stopVideo();
// }