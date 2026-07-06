/*==================================================
mv_swiper
==================================================*/
let mv_swipeOption = {
  loop: true,
  allowTouchMove: false, //スワイプ無効
  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  speed: 2000,
}
new Swiper('.mv_swiper', mv_swipeOption);

/*==================================================
scroll hint
==================================================*/
document.addEventListener('DOMContentLoaded', function () {
  const scrollArea = document.querySelector('.scroll_area');
  const hint = document.querySelector('.scroll_hint');

  const onScroll = () => {
    hint.style.display = 'none';
    scrollArea.removeEventListener('scroll', onScroll);
  };

  scrollArea.addEventListener('scroll', onScroll);
});


/*==================================================
カレンダー
==================================================*/
// 画像の切り替えを管理する変数
let currentMonth = true; // 最初は当月の画像を表示

// 次へボタンをクリックしたときの処理
document.getElementById('next-btn').addEventListener('click', function() {
  // 画像と月の切り替え
  if (currentMonth) {
    document.getElementById('calendar-image-tougetu').style.display = 'none';
    document.getElementById('calendar-image-jigetu').style.display = 'block';
    document.getElementById('calendar-month-tougetu').style.display = 'none';
    document.getElementById('calendar-month-jigetu').style.display = 'block';
    document.getElementById('prev-btn').style.display = 'block'; // 前へボタンを表示
    document.getElementById('next-btn').style.display = 'none'; // 次へボタンを非表示
  } else {
    document.getElementById('calendar-image-jigetu').style.display = 'none';
    document.getElementById('calendar-image-tougetu').style.display = 'block';
    document.getElementById('calendar-month-jigetu').style.display = 'none';
    document.getElementById('calendar-month-tougetu').style.display = 'block';
    document.getElementById('prev-btn').style.display = 'none'; // 前へボタンを非表示
    document.getElementById('next-btn').style.display = 'block'; // 次へボタンを表示
  }

  // 現在の状態を更新
  currentMonth = !currentMonth;
});

// 前へボタンをクリックしたときの処理
document.getElementById('prev-btn').addEventListener('click', function() {
  // 画像と月の切り替え
  if (currentMonth) {
    document.getElementById('calendar-image-tougetu').style.display = 'none';
    document.getElementById('calendar-image-jigetu').style.display = 'block';
    document.getElementById('calendar-month-tougetu').style.display = 'none';
    document.getElementById('calendar-month-jigetu').style.display = 'block';
    document.getElementById('prev-btn').style.display = 'block'; // 前へボタンを表示
    document.getElementById('next-btn').style.display = 'none'; // 次へボタンを非表示
  } else {
    document.getElementById('calendar-image-jigetu').style.display = 'none';
    document.getElementById('calendar-image-tougetu').style.display = 'block';
    document.getElementById('calendar-month-jigetu').style.display = 'none';
    document.getElementById('calendar-month-tougetu').style.display = 'block';
    document.getElementById('prev-btn').style.display = 'none'; // 前へボタンを非表示
    document.getElementById('next-btn').style.display = 'block'; // 次へボタンを表示
  }

  // 現在の状態を更新
  currentMonth = !currentMonth;
});
