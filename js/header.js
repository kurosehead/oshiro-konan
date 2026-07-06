/*==================================================
ヘッダー 少しスクロールしたら上から下りてくる
==================================================*/
$(function() {
  var headNav = $(".header_inner");
  $(window).on('load scroll', function () {
    //現在の位置が100px以上かつ、クラスvisibleが付与されていない時
    if($(this).scrollTop() > 100 && headNav.hasClass('visible') == false) {
      //headerの高さ分上に設定
      headNav.css({"top": '-100px'});
      //クラスvisibleを付与
      headNav.addClass('visible');
      //位置を0に設定し、アニメーションのスピードを指定
      headNav.animate({"top": 0},600);
    }
    //現在の位置が50px以下かつ、クラスvisibleが付与されている時にvisibleを外す
    else if($(this).scrollTop() < 50 && headNav.hasClass('visible') == true){
      headNav.removeClass('visible');
    }
  });
});