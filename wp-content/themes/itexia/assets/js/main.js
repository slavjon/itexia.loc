// ANIMATIONS
document.addEventListener("DOMContentLoaded", function(event) {
  fadeInAnimations();
});

function fadeInAnimations() {
  $(".hero-block h1").not(".counter").textillate({ in: {
      effect: 'fadeInUp',
      initialDelay: 500,
      autoStart: false,
      delay: 50,
      sync: true,
      shuffle: false,
      reverse: false
    },
    callback: function() {
      $(".hero-block .btn-dark, .hero-block .btn-circles").addClass("visible");
      $(".hero-block h2, .hero-block .basic-text").textillate({ in: {
          effect: 'fadeInUp',
          delay: 30,
          sync: true,
          shuffle: false,
          reverse: false
        },
        callback: function() {
          $(".hero-block .btn-dark, .hero-block .btn-circles").addClass("visible");
        },
        type: 'word'
      });
    },
    type: 'word'
  });

  $(".hero-block--solutions h2").textillate({ in: {
      effect: 'fadeInUp',
      initialDelay: 500,
      autoStart: false,
      delay: 50,
      sync: true,
      shuffle: false,
      reverse: false
    },
    callback: function() {
      $(".hero-block .btn-dark, .hero-block .btn-circles").addClass("visible");
    },
    type: 'word'
  });

  if ($(".hero-block--company").length > 0) {

    window.onload = function() {
      $(".text").addClass("animate");
      $(".abs-img").addClass("animate");
    }

    let flower = bodymovin.loadAnimation({
      container: document.getElementById('flower'),
      renderer: 'svg',
      loop: true,
      autoplay: true,
      path: siteData.templateDirectoryUri + '/data/flower.json'
    });

    let heart = bodymovin.loadAnimation({
      container: document.getElementById('heart'),
      renderer: 'svg',
      loop: true,
      autoplay: true,
      path: siteData.templateDirectoryUri + '/data/heart.json'
    });

    let flag = bodymovin.loadAnimation({
      container: document.getElementById('flag'),
      renderer: 'svg',
      loop: true,
      autoplay: true,
      path: siteData.templateDirectoryUri + '/data/flag.json'
    });

    let star = bodymovin.loadAnimation({
      container: document.getElementById('star'),
      renderer: 'svg',
      loop: true,
      autoplay: true,
      path: siteData.templateDirectoryUri + '/data/star.json'
    });

    let bike = bodymovin.loadAnimation({
      container: document.getElementById('bike'),
      renderer: 'svg',
      loop: true,
      autoplay: true,
      path: siteData.templateDirectoryUri + '/data/bike.json'
    });

    $(".community__list").waypoint({
      handler: function(direction) {
        if (direction == 'down') {
          $(".company-community .community__list .list-item > *").addClass("animate");
        }
      },
      offset: '50%'
    });
  }
}

// MOBILE MENU
function preventDefault(e) {
  e.preventDefault();
}

function disableScroll() {
  document.body.addEventListener("touchmove", preventDefault, {
    passive: false
  });
}

function enableScroll() {
  document.body.removeEventListener("touchmove", preventDefault);
}

$(".hamburger.hamburger--spin").on("click", function() {
  $(this).toggleClass("is-active");
  if (!$(this).hasClass("is-active")) {
    enableScroll();
    $(".mobile-menu").removeClass("open_menu");
  } else {
    disableScroll();
    $(".mobile-menu").addClass("open_menu");
  }
});

// SCROLL DOWN
$(window).scroll(function() {
  if ($(window).scrollTop() >= 200) {
    $(".header").addClass("sticky");
  } else {
    $(".header").removeClass("sticky");
  }
});

$(document).on('click', '.btn-circles', function(event) {
  event.preventDefault();
  $('html, body').animate({
    scrollTop: $($.attr(this, 'href')).offset().top
  }, 1500);
});

$(".demo-btn").magnificPopup({
  type: 'inline',
  preloader: false,
  removalDelay: 300,
  mainClass: 'my-mfp-zoom-in'
});

$(".partners__carousel .slider").slick({
  infinite: true,
  slidesToShow: 5,
  slidesToScroll: 1,
  prevArrow: $("#b1p"),
  nextArrow: $("#b1n"),
  dots: true,
  appendDots: $(".partners__carousel .slider-optionals .slider-dots"),
  autoplay: true,
  autoplaySpeed: 2500,
  responsive: [{
      breakpoint: 1280,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 675,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 425,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

$(".reviews__carousel .slider").slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  prevArrow: $("#b9p"),
  nextArrow: $("#b9n"),
  dots: true,
  appendDots: $(".reviews__carousel .slider-optionals .slider-dots"),
  speed: 500,
  fade: true,
  cssEase: 'linear',
  autoplay: true,
  autoplaySpeed: 2500
});

$(".block-10__carousel .slider").slick({
  infinite: false,
  slidesToShow: 4,
  slidesToScroll: 2,
  prevArrow: $("#b10p"),
  nextArrow: $("#b10n"),
  dots: true,
  appendDots: $(".block-10__carousel .slider-optionals .slider-dots"),
  responsive: [{
      breakpoint: 1536,
      settings: {
        variableWidth: true
      }
    },
    {
      breakpoint: 1278,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 575,
      settings: {
        variableWidth: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

$(".quotation__carousel .slider").slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  prevArrow: $("#qsp"),
  nextArrow: $("#qsn"),
  dots: true,
  appendDots: $(".quotation__carousel .slider-optionals .slider-dots"),
  speed: 500,
  fade: true,
  cssEase: 'linear',
  autoplay: true,
  autoplaySpeed: 2500
});

$(".videos__carousel .slider").slick({
  infinite: false,
  slidesToShow: 5,
  slidesToScroll: 5,
  prevArrow: $("#v-sp"),
  nextArrow: $("#v-sn"),
  dots: true,
  appendDots: $(".videos__carousel .slider-optionals .slider-dots"),
  responsive: [{
      breakpoint: 1680,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 4
      }
    }, {
      breakpoint: 1441,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2
      }
    }, {
      breakpoint: 1278,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 675,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

$(".company-partners__carousel .slider").slick({
  infinite: true,
  slidesToShow: 6,
  slidesToScroll: 6,
  prevArrow: $("#cp-sp"),
  nextArrow: $("#cp-sn"),
  dots: true,
  appendDots: $(".company-partners__carousel .slider-optionals .slider-dots"),
  responsive: [{
      breakpoint: 1680,
      settings: {
        slidesToShow: 5,
        slidesToScroll: 5
      }
    }, {
      breakpoint: 1441,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 3
      }
    }, {
      breakpoint: 1278,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 575,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});

function scrollCounter() {
  var a = 0;
  $(window).scroll(function() {
    if ($(".block-5__list").length) {
      var oTop = $(".block-5__list").offset().top - window.innerHeight;
      if (a == 0 && $(window).scrollTop() > oTop) {
        $(".block-5__list .list-item .number").each(function() {
          var $this = $(this),
            countTo = $this.attr('data-count');
          $({
            countNum: $this.text()
          }).animate({
            countNum: countTo
          }, {
            duration: 2000,
            easing: 'swing',
            step: function() {
              $this.text(Math.floor(this.countNum));
            },
            complete: function() {
              $this.text(this.countNum);
            }
          });
        });
        a = 1;
      }
    }
  });
}

scrollCounter();

//if ($(window).width() > 575) {
//
//    var columns = 3;
//
//    var $ul = $(".footer .footer-nav ul"),
//        $elements = $ul.children("li"),
//        breakPoint = Math.ceil($elements.length / columns);
//    $ordered = $('<div></div>');
//
//    function appendToUL(i) {
//        if ($ul.children().eq(i).length > 0) {
//            $ordered.append($ul.children().eq(i).clone());
//        } else $ordered.append($('<li></li>'));
//    }
//
//    function reorder($el) {
//        $el.each(function () {
//            $item = $(this);
//
//            if ($item.index() >= breakPoint) return false;
//
//            appendToUL($item.index());
//            for (var i = 1; i < columns; i++) {
//                appendToUL(breakPoint * i + $item.index());
//            }
//        });
//
//        $ul.html($ordered.children().css('width', 100 / columns + '%'));
//    }
//
//    reorder($elements);
//}

function modalVideo() {
  function openVideo(video) {
    const modal = $(".ui.modal");
    let iframe = document.querySelector(".ui.modal video source");
    let videoPlayer = document.querySelector(".ui.modal video");

    iframe.setAttribute("src", video);
    videoPlayer.setAttribute("src", video);
    videoPlayer.play();
    $('html').css('overflow', 'hidden');
    $('body').css({ 'overflow': 'hidden', 'padding-right': '15px' });
    disableScroll();

    modal.modal({
      onHide: function() {
        iframe.setAttribute("src", "");
        videoPlayer.setAttribute("src", "");
        videoPlayer.pause();
        $('html').css('overflow', '');
        $('body').css({ 'overflow': '', 'padding-right': '0' });
        enableScroll();
      }
    });

    modal.modal('setting', 'transition', 'fade').modal("show");
  }

  const videoBtn = document.querySelectorAll(".popup-btn");

  videoBtn.forEach((el) => {
    el.addEventListener("click", (e) => {
      e.preventDefault();

      let video = el.getAttribute("data-src");

      openVideo(video);
    });
  });
}

modalVideo();

if ($(".videos__carousel").length > 0) {
  $(".videos__carousel .slider .slide .img-popup").magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    closeBtnInside: false,
    fixedContentPos: false,
    mainClass: 'mfp-no-margins mfp-with-zoom',
    image: {
      verticalFit: true
    },
    zoom: {
      enabled: true,
      duration: 300
    },
    callbacks: {
      open: function() {
        $('html').css('overflow', 'hidden');
        $('body').css({ 'overflow': 'hidden', 'padding-right': '15px' });
        disableScroll();
      },
      close: function() {
        $('html').css('overflow', '');
        $('body').css({ 'overflow': '', 'padding-right': '0' });
        enableScroll();
      }
    }
  });
}
