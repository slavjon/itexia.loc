let animationF = bodymovin.loadAnimation({
    container: document.getElementById('hero-block__ill'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: siteData.templateDirectoryUri + '/data/main-ill.json'
});

let animationA = bodymovin.loadAnimation({
    container: document.getElementById('d3'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: siteData.templateDirectoryUri + '/data/phone-ill.json'
});

let animationL1 = bodymovin.loadAnimation({
    container: document.getElementById('block-6-i1'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: siteData.templateDirectoryUri + '/data/block-6-i1.json'
});

let animationL2 = bodymovin.loadAnimation({
    container: document.getElementById('block-6-i2'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: siteData.templateDirectoryUri + '/data/block-6-i2.json'
});

let animationL3 = bodymovin.loadAnimation({
    container: document.getElementById('block-6-i3'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: siteData.templateDirectoryUri + '/data/block-6-i3.json'
});

let d1 = $("#d1");
let d2 = $("#d2");
let d3 = $("#d3");

let waypointD1 = new Waypoint({
    element: document.getElementById("d1"),
    handler: function () {
        d1.addClass("animate");
    },
    offset: "50%"
});

let waypointD2 = new Waypoint({
    element: document.getElementById("home-block-2"),
    handler: function () {
        d2.addClass("animate");
    },
    offset: "60%"
});

let waypointD3 = new Waypoint({
    element: document.getElementById("d3"),
    handler: function () {
        d3.addClass("animate");
        $(".block-3__text h2, .block-3__text .basic-text").textillate({
            in: {
                effect: 'fadeInUp',
                initialDelay: 500,
                autoStart: false,
                delay: 50,
                sync: true,
                shuffle: false,
                reverse: false
            },
            type: 'word'
        });
    },
    offset: "50%"
});

let waypointD4 = new Waypoint({
    element: document.getElementById("home-block-7"),
    handler: function () {
        $(".block-7__illustration").addClass("animate");
        $(".block-7 h2").textillate({
            in: {
                effect: 'fadeInUp',
                initialDelay: 500,
                autoStart: false,
                delay: 50,
                sync: true,
                shuffle: false,
                reverse: false
            },
            type: 'word'
        });
        $(".block-7 .btn-dark").addClass("animate");
    },
    offset: "50%"
});

let waypointD5 = new Waypoint({
    element: document.getElementById("d5"),
    handler: function () {
        $(".block-9__text").addClass("animate");
    },
    offset: "50%"
});

//$(".advantages-list").waypoint(function (direction) {
//    var $self = $(this);
//    if (direction == 'down') {
//        var target = $(".advantages-list__item .item-img");
//        var hold = 500;
//        $.each(target, function (i, t) {
//            var img = $(t);
//            setTimeout(function () {
//                img.addClass("animate");
//            }, i * hold);
//        });
//    }
//}, {
//    offset: "60%"
//});

//$(".block-5__text").waypoint(function (direction) {
//    var $self = $(this);
//    if (direction == 'down') {
//        var target = $(".block-5__list .list-item .item-img");
//        var hold = 500;
//        $.each(target, function (i, t) {
//            var img = $(t);
//            setTimeout(function () {
//                img.addClass("animate");
//            }, i * hold);
//        });
//    }
//}, {
//    offset: "40%"
//});

//$(".companies__list").waypoint(function (direction) {
//    var $self = $(this);
//    if (direction == 'down') {
//        var target = $(".companies__list .list-item .item-img");
//        var hold = 500;
//        $.each(target, function (i, t) {
//            var img = $(t);
//            setTimeout(function () {
//                img.addClass("animate");
//            }, i * hold);
//        });
//    }
//}, {
//    offset: "60%"
//});
