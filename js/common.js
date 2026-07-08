/*==================================================
PAGE TOP
==================================================*/
// $(function () {
//   const pageTop = $(".pagetop");

//   function checkWindowSize() {
//     return window.matchMedia("(max-width: 767px)").matches;
//   }

//   // 最初は非表示
//   pageTop.hide();

//   // スクロールとリサイズ時の処理をまとめて定義
//   function updatePageTop() {
//     let isSp = checkWindowSize();
//     let scroll = $(window).scrollTop();

//     // 表示・非表示の切り替え（200px以上スクロールしたら表示）
//     if (scroll > 200) {
//       pageTop.fadeIn();
//     } else {
//       pageTop.fadeOut();
//     }

//     // 表示位置を更新
//     pageTop.css({
//       position: "fixed",
//       bottom: isSp ? "80px" : "20px",
//       right: isSp ? "0" : "auto",
//       left: isSp ? "auto" : "20px",
//     });
//   }

//   // スクロール時とリサイズ時に実行
//   $(window).on("scroll resize load", updatePageTop);

//   // ページトップボタンクリックで上に戻る処理（お好みで）
//   pageTop.on("click", function () {
//     //$("html, body").animate({ scrollTop: 0 }, 500);
//     return false;
//   });
// });

/*==================================================
ハンバーガーメニュー
==================================================*/
jQuery(function ($) {
  const $body = $("body");
  const $header = $("header");
  const $headerInner = $(".header-inner");
  const $btns = $(".openbtn");
  const $hamburgers = $(".hamburger_lines");
  const $hamContents = $(".ham-contents");
  const scrollPoint = 200;

  const $lines1 = $(".hamburger_lines .line:nth-child(1)");
  const $lines2 = $(".hamburger_lines .line:nth-child(2)");
  const $lines3 = $(".hamburger_lines .line:nth-child(3)");

  function openHam() {
    $body.addClass("no-scroll");
    $header.addClass("active");
    $btns.addClass("active");
    $hamburgers.addClass("active");

    $lines1.css({
      transition: "none",
      transform: "rotate(0deg)",
      top: "",
      bottom: "",
    });

    $lines2.css({
      transition: "none",
      transform: "rotate(0deg)",
      top: "",
    });

    requestAnimationFrame(() => {
      $lines1.css({
        transition: "",
        width: "100%",
        top: "0",
        bottom: "0",
        transform: "rotate(45deg)",
      });

      $lines2.css({
        transition: "",
        width: "100%",
        top: "0",
        transform: "rotate(-45deg)",
      });

      $lines3.hide();
    });
  }

  function closeHam() {
    const isScrolled = $(window).scrollTop() > scrollPoint;

    $body.removeClass("no-scroll");
    $header.removeClass("active");
    $btns.removeClass("active");

    // 閉じた後のヘッダー表示を再計算
    $headerInner.toggleClass("visible", isScrolled);

    $lines1.css({
      transform: "rotate(0deg)",
      bottom: "auto",
    });

    $lines2.css({
      transform: "rotate(0deg)",
      top: "auto",
    });

    setTimeout(() => {
      $lines1.css({
        width: "100%",
        top: "0",
      });

      $lines2.css({
        width: "100%",
        bottom: "0",
        top: "auto",
      });

      $lines3.css({
        display: "block",
        width: "100%",
        top: "50%",
        transform: "translateY(-50%)",
      });

      $hamburgers.removeClass("active");
    }, 0);
  }

  function normalizePath(path) {
    return path.replace(/\/$/, "") || "/";
  }

  function isSamePageAnchor(href) {
    if (!href) {
      return false;
    }

    let linkUrl;

    try {
      linkUrl = new URL(href, window.location.href);
    } catch (error) {
      return false;
    }

    const currentUrl = new URL(window.location.href);

    const isSamePage =
      linkUrl.origin === currentUrl.origin &&
      normalizePath(linkUrl.pathname) === normalizePath(currentUrl.pathname);

    const hasHash = linkUrl.hash && linkUrl.hash !== "#";

    return isSamePage && hasHash;
  }

  $btns.on("click", function () {
    if ($header.hasClass("active")) {
      closeHam();
    } else {
      openHam();
    }
  });

  // ハンバーガーメニュー内のリンクをクリックしたら、
  // 同じページ内アンカーのときだけ閉じる
  $hamContents.on("click", "a", function (e) {
    const href = $(this).attr("href");

    if (!isSamePageAnchor(href)) {
      return;
    }

    const url = new URL(href, window.location.href);
    const target = document.querySelector(url.hash);

    if (!target) {
      return;
    }

    e.preventDefault();

    closeHam();

    setTimeout(function () {
      const headerHeight = $(".header-inner").outerHeight() || 0;
      const position =
        target.getBoundingClientRect().top + window.pageYOffset - headerHeight;

      window.scrollTo({
        top: position,
        behavior: "smooth",
      });

      history.pushState(null, "", url.pathname + url.search + url.hash);
    }, 100);
  });
});

/*==================================================
header-innerにvisibleをつける
==================================================*/
// jQuery(function ($) {
//   const $header = $("header");
//   const $headerInner = $(".header-inner");
//   const scrollPoint = 200;

//   // ハンバーガーの開閉イベント監視（閉じた時にvisibleが消えないようにする）
//   const observer = new MutationObserver(() => {
//     if ($header.hasClass("active")) {
//       $headerInner.addClass("visible");
//     } else {
//       if ($("body").hasClass("home")) {
//         // homeだけスクロール連動
//         const isScrolled = $(window).scrollTop() > scrollPoint;
//         $headerInner.toggleClass("visible", isScrolled);
//       } else {
//         // home以外は常にvisible
//         $headerInner.addClass("visible");
//       }
//     }
//   });

//   observer.observe($header[0], {
//     attributes: true,
//     attributeFilter: ["class"],
//   });

//   if ($("body").hasClass("home")) {
//     // homeのときだけスクロールで切り替え
//     function updateHeaderVisibility() {
//       const isScrolled = $(window).scrollTop() > scrollPoint;
//       if (!$header.hasClass("active")) {
//         $headerInner.toggleClass("visible", isScrolled);
//       }
//     }

//     $(window).on("scroll", updateHeaderVisibility);
//     updateHeaderVisibility(); // 初期実行
//   } else {
//     // home以外では常にvisible
//     $headerInner.addClass("visible");
//   }
// });

jQuery(function ($) {
  const $header = $("header");
  const $headerInner = $(".header-inner");
  const $footer = $("footer");
  const scrollPoint = 200;

  function updateHeaderVisibility() {
    const isScrolled = $(window).scrollTop() > scrollPoint;

    let isFooterArea = false;

    if ($footer.length) {
      const headerBottom = $(window).scrollTop() + $headerInner.outerHeight();
      const footerTop = $footer.offset().top;

      // header-inner の下端が footer に当たりそうになったら非表示
      isFooterArea = headerBottom >= footerTop - 500;
    }

    // footerエリアでは非表示
    if (isFooterArea) {
      $headerInner.removeClass("visible");
      return;
    }

    // ハンバーガー開いている時は表示
    if ($header.hasClass("active")) {
      $headerInner.addClass("visible");
    } else {
      $headerInner.toggleClass("visible", isScrolled);
    }
  }

  // ハンバーガー開閉時に監視
  const observer = new MutationObserver(updateHeaderVisibility);

  if ($header.length) {
    observer.observe($header[0], {
      attributes: true,
      attributeFilter: ["class"],
    });
  }

  // スクロール・リサイズ時
  $(window).on("scroll resize", updateHeaderVisibility);

  // 初期実行
  updateHeaderVisibility();
});

/*==================================================
選ばれる理由 ボタンホバーでコンテンツが切り替わる 
==================================================*/
let swiperInstance = null;

function initSwitching() {
  const isSP = $(window).width() <= 768;

  // 共通部分の初期化
  $(".switching-frame__btn .btn").off("mouseenter");

  if (isSP) {
    // SP → Swiper有効化
    if (!swiperInstance) {
      swiperInstance = new Swiper(".switching-frame__view", {
        loop: false,
        effect: "fade",
        fadeEffect: {
          crossFade: true,
        },
        pagination: {
          el: ".switching-frame__view-swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".switching-frame__view-swiper-button-next",
          prevEl: ".switching-frame__view-swiper-button-prev",
        },
      });
    }
  } else {
    // PC → Swiper破棄 + hover切替え有効化
    if (swiperInstance) {
      swiperInstance.destroy(true, true);
      swiperInstance = null;
    }

    $(".switching-frame").each(function () {
      const $frame = $(this);

      // 初期表示：1つ目をカレントにする
      $frame.find(".switching-frame__btn .btn").removeClass("is-current");
      $frame.find(".switching-frame__btn .btn").first().addClass("is-current");

      $frame.find(".switching-frame__content").removeClass("active").hide();
      $frame.find(".switching-frame__content").first()
        .addClass("active")
        .css({ display: "flex", opacity: 1 });
    });

    $(".switching-frame__btn .btn").on("mouseenter", function () {
      const $btn = $(this);
      const target = $btn.data("target");
      const $frame = $btn.closest(".switching-frame");

      // カレント切り替え
      $frame.find(".switching-frame__btn .btn").removeClass("is-current");
      $btn.addClass("is-current");

      // コンテンツ切り替え
      $frame
        .find(".switching-frame__content")
        .removeClass("active")
        .hide();

      $frame
        .find("#" + target)
        .addClass("active")
        .css({ opacity: 0, display: "flex" })
        .animate({ opacity: 1 }, 300);
    });
  }
}

// 初期化 & リサイズ対応
$(function () {
  initSwitching();

  $(window).on("resize", function () {
    initSwitching();
  });
});

/*==================================================
サイドバーカレント
==================================================*/
jQuery(function ($) {
  const $sections = $('[id^="anchor-"]');
  const $navItems = $(".aside-item");

  function updateCurrentNav() {
    const scrollTop = $(window).scrollTop();
    const windowHeight = $(window).height();
    const midPoint = scrollTop + windowHeight / 2; // 画面中央付近を基準に

    $sections.each(function () {
      const $section = $(this);
      const top = $section.offset().top;
      const bottom = top + $section.outerHeight();

      if (midPoint >= top && midPoint < bottom) {
        const id = $section.attr("id");
        $navItems.removeClass("current");
        $navItems.each(function () {
          const $a = $(this).find("a");
          if ($a.attr("href") === "#" + id) {
            $(this).addClass("current");
          }
        });
        return false; // 見つかったらループ終了
      }
    });
  }

  // 初期実行 & スクロール時
  $(window).on("scroll", updateCurrentNav);
  updateCurrentNav();
});

/*==================================================
アコーディオン
==================================================*/
$(function () {
  //料金表
  $(".price__box .price__box-inner").hide();
  $(".price__box .price__ttl").click(function () {
    $(this).next().slideToggle(300);
    $(this).toggleClass("show", 300);
  });

// 症例、料金サイドバー
$(".search-box dd").hide();
$(".search-box dt").removeClass("show");

$(".search-box dt").click(function () {
  $(this).next().slideToggle(300);
  $(this).toggleClass("show", 300);
});

  //ハンバーガー内
  // $('.nav-accordion__area').hide();
  // $('.ham-contents__nav-accordion').click(function () {
  //   $(this).next().slideToggle(300);
  //   $(this).toggleClass("show", 300);
  // });

  //ブログサイドバー アーカイブ
  $(".year-toggle").on("click", function () {
    $(this).next(".month-list").slideToggle(300);
    $(this).toggleClass("show", 300);
  });
});

jQuery(function ($) {
  $("#archive-dropdown").change(function () {
    if ($(this).val() != "") {
      window.location.href = $(this).val(); // 選択したURLにリダイレクト
    }
  });
});

/*==================================================
FAQアコーディオン
==================================================*/
function bindFaq() {
  if ($(window).width() <= 766) {
    $(".faq__a").hide();
    $(".faq__q")
      .off("click")
      .on("click", function () {
        $(this).next().slideToggle(300);
        $(this).toggleClass("show", 300);
      });
  } else {
    $(".faq__a").show(); // PCでは常に開いておくならこれ
    $(".faq__q").off("click"); // PC時はイベント解除
  }
}

$(function () {
  bindFaq();
  $(window).on("resize", bindFaq);
});

/*==================================================
SP用CTA
==================================================*/
// $(function () {
//   var $btn = $("#fixed-btn-contact");
//   var showPoint = 200; // スクロール量

//   $(window).on("scroll", function () {
//     if ($(this).scrollTop() > showPoint) {
//       $btn.addClass("show");
//     } else {
//       $btn.removeClass("show");
//     }
//   });
// });

// $(function () {
//   var $btn = $("#c-float-btn");
//   var showPoint = 200; // スクロール量

//   $(window).on("scroll", function () {
//     if ($(this).scrollTop() > showPoint) {
//       $btn.addClass("show");
//     } else {
//       $btn.removeClass("show");
//     }
//   });
// });

/*==================================================
SP用サイドバー
==================================================*/
jQuery(function ($) {
  const $openBtn = $(".btn-index");
  const $aside = $("aside");
  const $overlay = $("#aside-overlay");
  const $closeBtn = $("#aside-close");
  const $body = $("body");

  const openAside = () => {
    $aside.addClass("active");
    $overlay.addClass("active");
    $body.css("overflow", "hidden");
  };

  const closeAside = () => {
    $aside.removeClass("active");
    $overlay.removeClass("active");
    $body.css("overflow", "");
  };

  $openBtn.on("click", openAside);
  $overlay.on("click", closeAside);
  $closeBtn.on("click", closeAside);

  // アンカーリンク（通常の # 移動にする）
  $(".aside-item a[href^='#']").on("click", function () {
    closeAside();
    // デフォルトの挙動（#移動）はキャンセルせずそのまま
  });
});

/*==================================================
アンカーリンクでナビが被らないように
==================================================*/
$(document).ready(function () {
  // ヘッダーの高さを事前に計算して保持
  var headerHeight = $(".header-inner").height();

  // ページ内リンクのクリック処理
  $('a[href^="#"]').on("click", function (e) {
    e.preventDefault(); // デフォルトのリンク動作を無効化
    var href = $(this).attr("href");
    var target = $(href === "#" || href === "" ? "html" : href);

    if (target.length) {
      // ターゲットが存在する場合のみ処理
      var position = target.offset().top - headerHeight;

      // アニメーションを早くする
      $("html, body").scrollTop(position);
    }
  });
});

/*==================================================
MV swiper
==================================================*/
jQuery(function ($) {
  const mvSwiperEl = document.querySelector(".mv_swiper");

  if (!mvSwiperEl) return;

  new Swiper(mvSwiperEl, {
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    speed: 1000,
    allowTouchMove: false,
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },
  });
});

/*==================================================
flow_swiper
==================================================*/
// document.addEventListener("DOMContentLoaded", function () {
//   document.querySelectorAll(".flow_swiper").forEach((swiperEl, index) => {
//     new Swiper(swiperEl, {
//       loop: false,
//       slidesPerView: 1, // 何枚表示するか
//       speed: 500, // スライドアニメーションのスピード（ミリ秒）
//       spaceBetween: 10,
//       navigation: {
//         nextEl: `.swiper-button-next-${index}`, // 各スワイパー専用のボタンを指定
//         prevEl: `.swiper-button-prev-${index}`,
//       },
//       pagination: {
//         el: `.swiper-pagination-${index}`, // 各スワイパー専用のページネーション
//       },
//     });
//   });
// });

/*==================================================
case_swiper
==================================================*/
var case_swiper = new Swiper(".case-swiper", {
  loop: true,
  slidesPerView: "1", //何枚表示するか
  speed: 500, //スライドアニメーションのスピード（ミリ秒）
  spaceBetween: 50,
  navigation: {
    nextEl: ".case-swiper-button-next", // 次へボタンのセレクタ
    prevEl: ".case-swiper-button-prev", // 前へボタンのセレクタ
  },
  pagination: {
    el: ".case-swiper-pagination",
  },
});

/*==================================================
floor_swiper
==================================================*/
var floor_ = new Swiper(".floor-swiper", {
  loop: true,
  speed: 500, //スライドアニメーションのスピード（ミリ秒）
  spaceBetween: 50,
  slidesPerView: "2", //何枚表示するか
  spaceBetween: 50,
  navigation: {
    nextEl: ".floor-swiper-button-next", // 次へボタンのセレクタ
    prevEl: ".floor-swiper-button-prev", // 前へボタンのセレクタ
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
    },
    0: {
      slidesPerView: 1,
    },
  },
});

/*==================================================
youtube-swiper
==================================================*/
document.addEventListener("DOMContentLoaded", function () {
  const youtubeSwiperEl = document.querySelector(".youtube-swiper");

  if (!youtubeSwiperEl) return;

  const swiperWrapper = youtubeSwiperEl.querySelector(".swiper-wrapper");
  const slides = youtubeSwiperEl.querySelectorAll(".swiper-slide");
  const isMobile = window.matchMedia("(max-width: 767px)").matches;
  const canLoop = slides.length > 3 || isMobile;

  // PCのみ3件以下でswiper-wrapperに中央寄せ用クラスを付与
  if (!isMobile && slides.length <= 3 && swiperWrapper) {
    swiperWrapper.classList.add("is-center");
  }

  var case_swiper = new Swiper(".youtube-swiper", {
    loop: canLoop,
    autoplay: canLoop
      ? {
          delay: 3000,
          disableOnInteraction: false,
        }
      : false,
    slidesPerView: 3,
    speed: 500,
    spaceBetween: 20,
    navigation: {
      nextEl: ".youtube-swiper-button-next",
      prevEl: ".youtube-swiper-button-prev",
    },
    pagination: {
      el: ".youtube-swiper-pagination",
    },
    breakpoints: {
      768: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      0: {
        slidesPerView: "auto",
        spaceBetween: 15,
      },
    },
  });

  // PCのみ3件以下で矢印・ページネーション非表示
  if (!isMobile && slides.length <= 3) {
    const paginationEl = youtubeSwiperEl.querySelector(
      ".youtube-swiper-pagination"
    );
    const prevEl = youtubeSwiperEl.querySelector(".youtube-swiper-button-prev");
    const nextEl = youtubeSwiperEl.querySelector(".youtube-swiper-button-next");

    if (paginationEl) paginationEl.style.display = "none";
    if (prevEl) prevEl.style.display = "none";
    if (nextEl) nextEl.style.display = "none";
  }
});

/*==================================================
タブ
==================================================*/
$(function () {
  $(".tab__button").on("click", function () {
    // クリックされたボタンを含む .tab を基準にする
    let $tab = $(this).closest(".tab");
    let $buttons = $tab.find(".tab__button");
    let $panels = $tab.find(".tab__panel");
    let $main = $("main");

    // アクティブ切り替え
    $buttons.removeClass("active");
    $(this).addClass("active");

    // indexを使って対応するパネルを表示
    const index = $buttons.index(this);
    $panels.removeClass("show").eq(index).addClass("show");

    // flow__tab 用：main のクラス切り替え
    if ($tab.hasClass("flow__tab")) {
      if ($(this).hasClass("button-general")) {
        $main.removeClass("style-beauty").addClass("style-general");
      } else if ($(this).hasClass("button-beauty")) {
        $main.removeClass("style-general").addClass("style-beauty");
      }
    }
  });

  //---------------サブタブ---------------//
  $(".sub-tab__button").on("click", function () {
    // クリックされたボタンを含む .tab を基準にする
    let $tab = $(this).closest(".sub-tab");
    let $buttons = $tab.find(".sub-tab__button");
    let $panels = $tab.find(".sub-tab__panel");

    // アクティブ切り替え
    $buttons.removeClass("active");
    $(this).addClass("active");

    // indexを使って対応するパネルを表示
    const index = $buttons.index(this);
    $panels.removeClass("show").eq(index).addClass("show");
  });
});

/*==================================================
症例詳細 写真切り替え
==================================================*/
$(function () {
  const eventType = window.matchMedia("(hover: hover)").matches
    ? "mouseenter"
    : "click";

  $(".pose__thumbs .pose-thumb").on(eventType, function () {
    const pose = $(this).data("pose");
    const $case = $(this).closest(".case__photo-wrap");

    // サムネ active
    $(this).addClass("active").siblings().removeClass("active");

    // セット切替（3枚まとめて）
    const $sets = $case.find(".case__photo-area");
    $sets.removeClass("show").filter(`[data-pose="${pose}"]`).addClass("show");
  });
});

/*==================================================
詳細ページ よくある質問開閉
==================================================*/
// $(function () {
//   const $inner = $(".faq__inner");

//   $("#faq-open").on("click", function (e) {
//     e.preventDefault();
//     $inner.removeClass("closing").addClass("show");
//   });

//   $("#faq-close").on("click", function (e) {
//     e.preventDefault();

//     // 「閉じる」動作は、まずopacity下げてmax-heightを戻すクラスを付与して
//     $inner.addClass("closing").removeClass("show");

//     // transition終了後にclosingクラスを外す（opacity戻すため）
//     $inner.one("transitionend", function (event) {
//       if (event.originalEvent.propertyName === "max-height") {
//         $inner.removeClass("closing");
//       }
//     });
//   });
// });

/*==================================================
当院について 機器モーダル
==================================================*/
jQuery(function ($) {
  // ▼ モーダルを開く
  $(".common-modal__open").on("click", function () {
    const modalId = $(this).data("modal");
    const $targetModal = $("#" + modalId);
    if ($targetModal.length) {
      $targetModal.fadeIn(200).addClass("active");
      $("body").css("overflow", "hidden"); // 背景スクロール防止
    }
  });

  // ▼ 閉じるボタンで閉じる
  $(".common-modal__close").on("click", function () {
    const $modal = $(this).closest(".common-modal");
    $modal.fadeOut(200).removeClass("active");
    $("body").css("overflow", "");
  });

  // ▼ 背景クリックで閉じる（ここを修正）
  $(document).on("click", ".common-modal", function (e) {
    // 背景（overlay部分）だけがクリックされた時に閉じる
    if ($(e.target).is(".common-modal")) {
      $(this).fadeOut(200).removeClass("active");
      $("body").css("overflow", "");
    }
  });
});

/*==================================================
料金 サイドバー 絞り込み検索
==================================================*/
$(function () {
  const $scope = $(".post-type-archive-price");

  $scope.on("click", ".aside-item a[data-target]", function (e) {
    e.preventDefault();

    const target = $(this).data("target");
    const $li = $(this).closest(".aside-item");

    // ここでジャンプ
    const $anchor = $("#anchor-price-section");
    const headerHeight = $(".header-inner").outerHeight() || 0;

    if ($anchor.length) {
      $("html, body").stop(true).animate(
        {
          scrollTop: $anchor.offset().top - headerHeight,
        },
        400
      );
    }

    // すべての絞り込みボタンの選択解除
    $scope.find(".aside-item").removeClass("current");

    // クリックした項目だけ current 付与
    $li.addClass("current");

    // フェード絞り込み処理
    const $groups = $scope.find(".price__group");
    $groups.stop(true, true).fadeOut(200);

    setTimeout(() => {
      if (target === "worries-all" || target === "menu-all") {
        // すべて表示
        $groups.fadeIn(300);
      } else {
        // 対応するクラスのみ表示
        $groups.filter("." + target).fadeIn(300);
      }
    }, 200);

    // SP時のみモーダルを閉じる
    if (window.matchMedia("(max-width: 767px)").matches) {
      $(".aside-left").removeClass("active");
      $("#aside-overlay").removeClass("active");
      $("body").removeClass("is-fixed");
    }
  });
});


/*==================================================
予約モーダルopen/close
==================================================*/
jQuery(function ($) {
  const getReservationModalTabIndex = function (clinic) {
    return clinic === 'oguchi' ? 0 : 1;
  };

  $('.reservation-modal__open').on('click', function (e) {
    e.preventDefault();

    const clinic = $(this).data('reservationClinic') || 'konan';
    const $modal = $('.reservation-modal[data-reservation-clinic="' + clinic + '"]');

    if (!$modal.length) {
      return;
    }

    $modal.fadeIn(300, function () {
      if (window.innerWidth > 767) {
        return;
      }

      const tabIndex = getReservationModalTabIndex(clinic);
      const $tab = $modal.find('.reservation-modal__tab[data-tab-index="' + tabIndex + '"]');

      if ($tab.length) {
        $tab.trigger('click');
      }
    });
  });

  $('.reservation-modal__close').on('click', function (e) {
    e.preventDefault();
    $(this).closest('.reservation-modal').fadeOut(300);
  });

  $('.reservation-modal').on('click', function (e) {
    if (!$(e.target).closest('.reservation-modal__inner').length) {
      $(this).fadeOut(300);
    }
  });
});


/*==================================================
予約モーダル内タブ切り替え/SP
==================================================*/
jQuery(function ($) {
  const initializeReservationModalTabs = function ($modal) {
    const $modalInner = $modal.find('.reservation-modal__inner');
    const $sections = $modal.find('.reservation-modal__section');

    if (!$modalInner.length || $sections.length < 2) return;
    if ($modalInner.find('.reservation-modal__tabs').length) return;

    const $tabWrap = $('<div class="reservation-modal__tabs"></div>');

    $sections.each(function (index) {
      let title = $(this).find('.reservation-modal__heading').first().text().trim();
      let tabTitle = title;

      if (window.innerWidth <= 767) {
        if (title === '保険診療予約') {
          tabTitle = '保険診療<br>予約';
        } else if (title === '美容カウンセリング予約') {
          tabTitle = '美容カウンセリング<br>予約';
        }
      }

      const activeClass = index === 0 ? ' is-active' : '';
      const $tab = $('<button type="button" class="reservation-modal__tab' + activeClass + '" data-tab-index="' + index + '">' + tabTitle + '</button>');

      $tabWrap.append($tab);

      if (index !== 0) {
        $(this).addClass('is-hidden-sp');
      }
    });

    $modalInner.prepend($tabWrap);

    $tabWrap.on('click', '.reservation-modal__tab', function () {
      if (window.innerWidth > 767) return;

      const index = $(this).data('tab-index');

      $tabWrap.find('.reservation-modal__tab').removeClass('is-active');
      $(this).addClass('is-active');

      $sections.addClass('is-hidden-sp');
      $sections.eq(index).removeClass('is-hidden-sp');
    });
  };

  const toggleTabMode = function () {
    $('.reservation-modal').each(function () {
      const $modal = $(this);
      const $sections = $modal.find('.reservation-modal__section');
      const $tabWrap = $modal.find('.reservation-modal__tabs');

      if (!$sections.length || !$tabWrap.length) {
        return;
      }

      if (window.innerWidth > 767) {
        $sections.removeClass('is-hidden-sp');
      } else {
        let activeIndex = $tabWrap.find('.reservation-modal__tab.is-active').data('tab-index');
        if (activeIndex === undefined) activeIndex = 0;

        $sections.addClass('is-hidden-sp');
        $sections.eq(activeIndex).removeClass('is-hidden-sp');
      }
    });
  };

  $('.reservation-modal').each(function () {
    initializeReservationModalTabs($(this));
  });

  toggleTabMode();
  $(window).on('resize', toggleTabMode);
});

/*==================================================
医師経歴：言語切り替え (日本語/英語)
==================================================*/
jQuery(function ($) {
  // documentに対してイベントを貼ることで、読み込みタイミングの問題を回避します
  $(document).on("click", ".doctor-career__lang-btn", function (e) {
    e.preventDefault(); // 念のためデフォルト動作を無効化

    var $btn = $(this);
    var targetLang = $btn.attr("data-lang"); // data-langの値を取得
    var $container = $("#doctorCareer");

    console.log("Clicked:", targetLang); // 動作確認用：ブラウザのコンソールに表示されます

    if (targetLang === "ja") {
      $container.addClass("is-lang-ja").removeClass("is-lang-en");
    } else {
      $container.addClass("is-lang-en").removeClass("is-lang-ja");
    }

    // ボタンのアクティブ状態を切り替え
    $(".doctor-career__lang-btn").removeClass(
      "doctor-career__lang-btn--active"
    );
    $btn.addClass("doctor-career__lang-btn--active");
  });
});

/*==================================================
当院について：言語タブ切り替え
==================================================*/
document.querySelectorAll('.env-card').forEach((card) => {
  // アイコンだけでなくカード全体をクリック可能にする場合
  card.addEventListener('click', () => {
    card.classList.toggle('is-open');
  });
});


/*==================================================
求人詳細：募集要項タブ切り替え
==================================================*/
document.addEventListener('DOMContentLoaded', function() {
  // タブの要素とパネルの要素をすべて取得
  const tabs = document.querySelectorAll('.requirements-tab__item');
  const panels = document.querySelectorAll('.requirements-panel');

  tabs.forEach(tab => {
    tab.addEventListener('click', function() {
      // 1. すべてのタブから 'is-active' を消す
      tabs.forEach(t => t.classList.remove('is-active'));
      // 2. すべてのパネルから 'is-show' を消す
      panels.forEach(p => p.classList.remove('is-show'));

      // 3. クリックされたタブに 'is-active' を付与
      this.classList.add('is-active');

      // 4. クリックされたタブの data-tab 属性と同じ ID を持つパネルを表示
      const tabTarget = this.getAttribute('data-tab');
      // ※ IDは "tab-doctor" の形式なので、接頭辞を合わせる
      document.getElementById('tab-' + tabTarget).classList.add('is-show');
    });
  });
});


/*==================================================
gallery-swiper
==================================================*/
document.addEventListener("DOMContentLoaded", function () {
  const gallerySwiperEl = document.querySelector(".gallery-swiper");
  if (!gallerySwiperEl) return;

  const wrapper = gallerySwiperEl.querySelector(".swiper-wrapper");
  if (!wrapper) return;

  let slides = wrapper.querySelectorAll(".swiper-slide");
  const isMobile = window.matchMedia("(max-width: 767px)").matches;

  // 8枚未満なら複製して8枚まで増やす
  if (slides.length > 0 && slides.length < 8) {
    const originalSlides = Array.from(slides);
    let i = 0;

    while (wrapper.querySelectorAll(".swiper-slide").length < 8) {
      const clone = originalSlides[i % originalSlides.length].cloneNode(true);
      wrapper.appendChild(clone);
      i++;
    }
  }

  slides = wrapper.querySelectorAll(".swiper-slide");
  const canLoop = slides.length > 3;

  const caseSwiper = new Swiper(".gallery-swiper", {
    loop: canLoop,
    centeredSlides: true,
    initialSlide: 0,
    autoplay: canLoop
      ? {
          delay: 3000,
          disableOnInteraction: false,
        }
      : false,
    speed: 500,
    navigation: {
      nextEl: ".gallery-swiper-button-next",
      prevEl: ".gallery-swiper-button-prev",
    },
    pagination: {
      el: ".gallery-swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      768: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      0: {
        slidesPerView: 1.2,
        spaceBetween: 15,
      },
    },
  });

  if (!isMobile && slides.length <= 3) {
    const paginationEl = gallerySwiperEl.querySelector(".gallery-swiper-pagination");
    const prevEl = gallerySwiperEl.querySelector(".gallery-swiper-button-prev");
    const nextEl = gallerySwiperEl.querySelector(".gallery-swiper-button-next");

    if (paginationEl) paginationEl.style.display = "none";
    if (prevEl) prevEl.style.display = "none";
    if (nextEl) nextEl.style.display = "none";

    caseSwiper.params.centeredSlides = false;
    caseSwiper.update();
  }
});


/*==================================================
働きやすい職場づくり 
==================================================*/
/*==================================================
働きやすい職場づくり：最短列配置バージョン
==================================================*/
const forceLastCardToMinHeight = () => {
  const container = document.querySelector('.js-layout-container');
  if (!container) return;

  const allItems = Array.from(container.querySelectorAll('.env-card'));
  const lastItem = container.querySelector('.last-card');
  const otherItems = allItems.filter(item => item !== lastItem);

  // --- SP（768px未満）の場合の処理 ---
  if (window.innerWidth < 768) {
    // 1. 親コンテナの高さ指定を解除
    container.style.height = 'auto';
    
    // 2. すべてのカードのスタイルをリセット
    allItems.forEach(item => {
      item.style.position = '';
      item.style.width = '';
      item.style.top = '';
      item.style.left = '';
      item.style.transform = '';
    });
    return; // ここで処理を終了
  }

  // --- PC（768px以上）の場合の処理 ---
  const gap = 30;
  const columnCount = 3;
  const containerWidth = container.offsetWidth;
  const itemWidth = (containerWidth - gap * (columnCount - 1)) / columnCount;
  
  let columnBottoms = [0, 0, 0];

  otherItems.forEach((item, index) => {
    item.style.position = 'absolute';
    item.style.width = `${itemWidth}px`;
    item.style.top = '0';
    item.style.left = '0';

    const col = index % columnCount;
    const x = (itemWidth + gap) * col;
    const y = columnBottoms[col];

    item.style.transform = `translate(${x}px, ${y}px)`;
    columnBottoms[col] = y + item.getBoundingClientRect().height + gap;
  });

  if (lastItem) {
    lastItem.style.position = 'absolute';
    lastItem.style.width = `${itemWidth}px`;
    lastItem.style.top = '0';
    lastItem.style.left = '0';

    const minBottom = Math.min(...columnBottoms);
    const minIndex = columnBottoms.indexOf(minBottom);

    const x = (itemWidth + gap) * minIndex;
    const y = minBottom;

    lastItem.style.transform = `translate(${x}px, ${y}px)`;
    columnBottoms[minIndex] += lastItem.getBoundingClientRect().height + gap;
  }

  container.style.height = `${Math.max(...columnBottoms)}px`;
};

window.addEventListener('load', () => {
  forceLastCardToMinHeight();
  setTimeout(forceLastCardToMinHeight, 500);
});
window.addEventListener('resize', forceLastCardToMinHeight);


/*==================================================
InstagramとBlogの高さ調整
==================================================*/
jQuery(function ($) {
  const $instagramArea = $(".instagram__area");
  const $blogList = $(".blog__list");

  if (!$instagramArea.length || !$blogList.length) return;

  function getInstagramHeight() {
    // iframeではない通常DOMの場合
    const instagramGrid = document.querySelector(".instagram__area .media-grid.clearfix");
    if (instagramGrid) {
      return instagramGrid.getBoundingClientRect().height;
    }

    // SnapWidgetがiframeの場合はこちらを使用
    const iframe = $instagramArea.find("iframe")[0];
    if (iframe) {
      return iframe.getBoundingClientRect().height || iframe.offsetHeight;
    }

    return $instagramArea[0].getBoundingClientRect().height;
  }

  function syncBlogHeight() {
    if (window.matchMedia("(max-width: 767px)").matches) {
      $blogList[0].style.removeProperty("height");
      return;
    }

    const instagramHeight = getInstagramHeight();

    if (instagramHeight > 0) {
      $blogList.css("height", instagramHeight + "px");
    }
  }

  $(window).on("load resize", syncBlogHeight);

  const iframe = $instagramArea.find("iframe")[0];

  if (iframe) {
    iframe.addEventListener("load", syncBlogHeight);
  }

  if ("ResizeObserver" in window) {
    const observer = new ResizeObserver(syncBlogHeight);
    observer.observe($instagramArea[0]);

    if (iframe) {
      observer.observe(iframe);
    }
  }

  setTimeout(syncBlogHeight, 500);
  setTimeout(syncBlogHeight, 1500);
  setTimeout(syncBlogHeight, 3000);
  setTimeout(syncBlogHeight, 5000);

  syncBlogHeight();
});

/*==================================================
マップピン モーダル
==================================================*/
jQuery(function ($) {
  // ▼ モーダルを開く
  $(document).on("click", ".js-map-modal-open", function (e) {
    e.preventDefault();
    e.stopImmediatePropagation();

    const modalId = $(this).data("modal");
    const $targetModal = $("#" + modalId);

    if (!$targetModal.length) return;

    $("html, body").addClass("is-modal-open");

    $targetModal.stop(true, true).fadeIn(200, function () {
      $(this).addClass("active");
    });
  });

  // ▼ モーダルを閉じる共通処理
  function closeMapModal($modal) {
    $modal.stop(true, true).fadeOut(200, function () {
      $(this).removeClass("active");
    });

    $("html, body").removeClass("is-modal-open");
  }

  // ▼ 閉じるボタンで閉じる
  $(document).on("click", ".common-modal__close", function (e) {
    e.preventDefault();
    e.stopImmediatePropagation();

    const $modal = $(this).closest(".common-modal");
    closeMapModal($modal);
  });

  // ▼ 背景クリックで閉じる
  $(document).on("click", ".common-modal", function (e) {
    if ($(e.target).is(".common-modal")) {
      e.preventDefault();
      e.stopImmediatePropagation();

      closeMapModal($(this));
    }
  });

  // ▼ Escキーで閉じる
  $(document).on("keydown", function (e) {
    if (e.key === "Escape") {
      const $activeModal = $(".common-modal.active");

      if ($activeModal.length) {
        closeMapModal($activeModal);
      }
    }
  });
});
