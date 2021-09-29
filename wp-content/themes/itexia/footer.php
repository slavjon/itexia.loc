<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package itexia
 */

?>
<footer class="footer site-footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 offset-lg-0 col-lg-6 offset-xl-1 col-xl-6">
				<div class="footer-nav">
					<ul>
						<li><a href="#">Unternehmen</a></li>
						<li><a href="#">Karriere</a></li>
						<li><a href="#">Kontakt</a></li>
						<li><a href="#">Impressum</a></li>
						<li><a href="#">AGB</a></li>
						<li><a href="#">Datenschutzerklarung</a></li>
					</ul>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-2">
				<div class="footer-link">
					<a href="mailto:office@itexia.com">office@itexia.com</a>
					<a href="tel:+49(0)35141885050">+49(0) 351 41 88 50 50</a>
				</div>
			</div>
			<div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-2">
				<div class="footer-social">
					<a href="#">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icons/footer-icons/twitter.svg" alt="">
					</a>
					<a href="#">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icons/footer-icons/youtube.svg" alt="">
					</a>
					<a href="#">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icons/footer-icons/linkedIn.svg" alt="">
					</a>
					<a href="#">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icons/footer-icons/instagram.svg" alt="">
					</a>
					<a href="#">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icons/footer-icons/facebook.svg" alt="">
					</a>
					<a href="#">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/icons/footer-icons/xing.svg" alt="">
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 nextpage">
				<a href="https://nextpage.agency" target="_blank">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/nextpage-logo.svg" alt="">
					<span>Made by Nextpage</span>
				</a>
			</div>
		</div>
	</div>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>
</div><!-- .content-wrapper -->
</main> <!-- .main -->
<script>
            var animationF = bodymovin.loadAnimation({
                container: document.getElementById('hero-block__ill'),
                renderer: 'svg',
                loop: true,
                autoplay: true,
                path: '../data/main-ill.json'
            });

            var animationA = bodymovin.loadAnimation({
                container: document.getElementById('d3'),
                renderer: 'svg',
                loop: true,
                autoplay: true,
                path: '../data/phone-ill.json'
            });

            var animationL1 = bodymovin.loadAnimation({
                container: document.getElementById('block-6-i1'),
                renderer: 'svg',
                loop: true,
                autoplay: true,
                path: '../data/block-6-i1.json'
            });

            var animationL2 = bodymovin.loadAnimation({
                container: document.getElementById('block-6-i2'),
                renderer: 'svg',
                loop: true,
                autoplay: true,
                path: '../data/block-6-i2.json'
            });

            var animationL3 = bodymovin.loadAnimation({
                container: document.getElementById('block-6-i3'),
                renderer: 'svg',
                loop: true,
                autoplay: true,
                path: '../data/block-6-i3.json'
            });

            var d1 = $("#d1");
            var d2 = $("#d2");
            var d3 = $("#d3");

            var waypointD1 = new Waypoint({
                element: document.getElementById("d1"),
                handler: function() {
                    d1.addClass("animate");
                },
                offset: "50%"
            });

            var waypointD2 = new Waypoint({
                element: document.getElementById("d2"),
                handler: function() {
                    d2.addClass("animate");
                },
                offset: "50%"
            });

            var waypointD3 = new Waypoint({
                element: document.getElementById("d3"),
                handler: function() {
                    d3.addClass("animate");
                    $(".block-3__text h2, .block-3__text .basic-text").textillate({ in: {
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

            var waypointD4 = new Waypoint({
                element: document.getElementById("d4"),
                handler: function() {
                    $(".block-7__illustration").addClass("animate");
                    $(".block-7 h2").textillate({ in: {
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

            var waypointD5 = new Waypoint({
                element: document.getElementById("d5"),
                handler: function() {
                    $(".block-9__text").addClass("animate");
                },
                offset: "50%"
            });

            $(".advantages-list").waypoint(function(direction) {
                var $self = $(this);
                if (direction == 'down') {
                    var target = $(".advantages-list__item .item-img");
                    var hold = 500;
                    $.each(target, function(i, t) {
                        var img = $(t);
                        setTimeout(function() {
                            img.addClass("animate");
                        }, i * hold);
                    });
                }
            }, {
                offset: "60%"
            });

            $(".block-5__text").waypoint(function(direction) {
                var $self = $(this);
                if (direction == 'down') {
                    var target = $(".block-5__list .list-item .item-img");
                    var hold = 500;
                    $.each(target, function(i, t) {
                        var img = $(t);
                        setTimeout(function() {
                            img.addClass("animate");
                        }, i * hold);
                    });
                }
            }, {
                offset: "40%"
            });

            $(".companies__list").waypoint(function(direction) {
                var $self = $(this);
                if (direction == 'down') {
                    var target = $(".companies__list .list-item .item-img");
                    var hold = 500;
                    $.each(target, function(i, t) {
                        var img = $(t);
                        setTimeout(function() {
                            img.addClass("animate");
                        }, i * hold);
                    });
                }
            }, {
                offset: "60%"
            });
        </script>
</body>

</html>