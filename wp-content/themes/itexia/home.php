<?php
/*
Template Name: Home-page
*/

get_header();
?>

<section class="hero-block">
	<div class="container-fluid">
		<div class="row">
			<div class="offset-md-0 col-md-6 offset-lg-1 col-lg-5 offset-xl-1 col-xl-6">
				<div class="hero-block__text">
					<h1><?php the_field('h1_title'); ?></h1>
					<a href="<?php the_field('btn-link'); ?>" class="btn-dark"><?php the_field('btn-text'); ?></a>
					<a href="#block-2" class="btn-circles">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icons/arrow-down.svg" alt="">
						<span></span>
						<span></span>
						<span></span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="hero-block__illustration" id="hero-block__ill"></div>
</section>

<section class="block-2" id="block-2">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="offset-lg-1 col-lg-5 offset-xl-1 col-xl-5">
				<div class="block-2__text" id="d2">
					<h2><?php the_field('subtitle'); ?></h2>
					<?php the_field('description'); ?>
				</div>
			</div>
			<div class="offset-lg-2 col-lg-2 offset-xl-2 col-xl-2">
				<div class="block-2__img">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logotype.svg" alt="" id="d1">
				</div>
			</div>
			<div class="offset-lg-1 col-lg-10 offset-xl-1 col-xl-10">
				<div class="partners__carousel">

					<div class="slider">
						<?php
						$count = 20;
						for ($i = 0; $i < $count; $i++) :


							$image = get_field('photo-' . $i);

							if (!empty($image)) : ?>
								<div class="slider__slide">
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								</div>
						<?php endif;
						endfor; ?>
					</div>
					<div class="slider-optionals">
						<div class="slider-dots"></div>
						<div class="slider-btns">
							<button type="button" class="slider-button slider-prev" id="b1p"></button>
							<button type="button" class="slider-button slider-next" id="b1n"></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="block-3">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-12 col-lg-5 col-xl-5 pl-0">
				<div class="block-3__illustration">
					<div id="d3"></div>
				</div>
			</div>
			<div class="col-md-12 col-lg-6 col-xl-6">
				<div class="block-3__text">
					<h2><?php the_field('s2_title'); ?></h2>
					<?php the_field('s2_description'); ?>
				</div>
			</div>
		</div>
	</div>
	<div class="decor-line">
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/illustrations/dashed-line.svg" alt="">
	</div>
</section>

<section class="block-4">
	<div class="container-fluid">
		<div class="row">
			<div class="offset-md-0 col-md-12 offset-lg-1 col-lg-10 offset-xl-1 col-xl-10">
				<h2><?php the_field('s3_title'); ?></h2>
				<div class="advantages-list">

					<div class="advantages-list__item d-flex flex-column">
						<div class="item-img">
							<img src="<?php the_field('icon-1'); ?>" alt="<?php the_field('s3_title_icon-1'); ?>">
						</div>
						<h3><?php the_field('s3_title_icon-1'); ?></h3>
						<p class="basic-text"><?php the_field('s3_icon_description-1'); ?></p>
					</div>

					<div class="advantages-list__item d-flex flex-column">
						<div class="item-img">
						<img src="<?php the_field('icon-2'); ?>" alt="<?php the_field('s3_title_icon-2'); ?>">
						</div>
						<h3><?php the_field('s3_title_icon-2'); ?></h3>
						<p class="basic-text"><?php the_field('s3_icon_description-2'); ?></p>
					</div>

					<div class="advantages-list__item d-flex flex-column">
						<div class="item-img">
						<img src="<?php the_field('icon-3'); ?>" alt="<?php the_field('s3_title_icon-3'); ?>">
						</div>
						<h3><?php the_field('s3_title_icon-3'); ?></h3>
						<p class="basic-text"><?php the_field('s3_icon_description-3'); ?></p>
					</div>

					<div class="advantages-list__item d-flex flex-column">
						<div class="item-img">
						<img src="<?php the_field('icon-4'); ?>" alt="<?php the_field('s3_title_icon-4'); ?>">
						</div>
						<h3><?php the_field('s3_title_icon-4'); ?></h3>
						<p class="basic-text"><?php the_field('s3_icon_description-4'); ?></p>
					</div>

					<div class="advantages-list__item d-flex flex-column">
						<div class="item-img">
						<img src="<?php the_field('icon-5'); ?>" alt="<?php the_field('s3_title_icon-5'); ?>">
						</div>
						<h3><?php the_field('s3_title_icon-5'); ?></h3>
						<p class="basic-text"><?php the_field('s3_icon_description-5'); ?></p>
					</div>

					<div class="advantages-list__item d-flex flex-column">
						<div class="item-img">
						<img src="<?php the_field('icon-6'); ?>" alt="<?php the_field('s3_title_icon-1'); ?>">
						</div>
						<h3><?php the_field('s3_title_icon-6'); ?></h3>
						<p class="basic-text"><?php the_field('s3_icon_description-6'); ?></p>
					</div>


				</div>
			</div>
		</div>
	</div>
</section>

<section class="block-5">
	<div class="container-fluid">
		<div class="row">
			<div class="offset-md-0 col-md-12 offset-lg-1 col-lg-10 offset-xl-1 col-xl-10">
				<div class="block-5__text">
					<div>
						<h2>Cloud-Version oder In-House-Lösung</h2>
						<h4>ab 20€ im Monat</h4>
						<a href="#" class="btn-dark">Hubspot meeting</a>
					</div>
					<div>
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/illustrations/cloud-illustration.svg" alt="">
					</div>
				</div>
				<div class="block-5__list">
					<div class="list-item">
						<div class="item-img">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icons/block-5/icon-1.svg" alt="">
						</div>
						<div>
							<h4>Kunden</h4>
							<p class="number">184</p>
						</div>
					</div>
					<div class="list-item">
						<div class="item-img">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icons/block-5/icon-2.svg" alt="">
						</div>
						<div>
							<h4>Nutzer</h4>
							<p class="number">10 500</p>
						</div>
					</div>
					<div class="list-item">
						<div class="item-img">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icons/block-5/icon-3.svg" alt="">
						</div>
						<div>
							<h4>Inventare</h4>
							<p class="number">1 800 000</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="block-6">
	<div class="container-fluid">
		<div class="row">
			<h2>Der Inventar-Manager erfolgreicher Unternehmen</h2>
			<div class="offset-md-0 col-md-12 offset-lg-1 col-lg-10 offset-xl-1 col-xl-10">
				<div class="block-6__list">
					<div class="list-item">
						<div class="item-img">
							<div id="block-6-i1"></div>
						</div>
						<div class="item-desc">
							<h3>Klar</h3>
							<p class="basic-text">Wir stehen mit beiden Beinen im Leben und nehmen die Dinge selbst in die Hand.</p>
						</div>
					</div>
					<div class="list-item">
						<div class="item-img">
							<div id="block-6-i2"></div>
						</div>
						<div class="item-desc">
							<h3>Nah</h3>
							<p class="basic-text">Wir übernehmen Verantwortung, stehen in direktem Kundenkontakt und verstehen sie.</p>
						</div>
					</div>
					<div class="list-item">
						<div class="item-img">
							<div id="block-6-i3"></div>
						</div>
						<div class="item-desc">
							<h3>Leicht</h3>
							<p class="basic-text">Wir machen einfach, was kompliziert ist.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="block-7" id="d4">
	<div class="float-lines">
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/float-lines.svg" alt="">
	</div>
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="offset-md-0 col-md-12 offset-lg-1 col-lg-5 offset-xl-1 col-xl-5">
				<h2><?php the_field('s4_title'); ?></h2>
				<a href="<?php the_field('s4_btn-link'); ?>" class="btn-dark"><?php the_field('s4_btn-text'); ?></a>
			</div>
			<div class="col-md-12 col-lg-6 col-xl-6 pr-0">
				<div class="block-7__illustration">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/illustrations/wir-sind-illustration.svg" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="block-8">
	<div class="container-fluid">
		<div class="row">
			<h2>Unsere Zielgruppe</h2>
			<div class="offset-md-0 col-md-12 offset-lg-0 col-lg-12 offset-xl-1 col-xl-10">
				<div class="companies__list">
					<div class="list-item d-flex flex-column">
						<div class="item-title">
							<h3>Kleine Unternehmen</h3>
						</div>
						<div class="item-img">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/illustrations/houses/icon-1.svg" alt="">
						</div>
						<div class="item-text">
							<p class="basic-text">Kleine Unternehmensgtobe mit bis zu 50 Angestelten und eine Niederlassung.</p>
							<a href="solutions.html#small-business" class="btn-dark">Losungen</a>
						</div>
					</div>
					<div class="list-item d-flex flex-column">
						<div class="item-title">
							<h3>MittelgroBe Unternehmen</h3>
						</div>
						<div class="item-img">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/illustrations/houses/icon-2.svg" alt="">
						</div>
						<div class="item-text">
							<p class="basic-text">Kleine Unternehmensgtobe mit bis zu 50 Angestelten und eine Niederlassung.</p>
							<a href="solutions.html#medium-business" class="btn-dark">Losungen</a>
						</div>
					</div>
					<div class="list-item d-flex flex-column">
						<div class="item-title">
							<h3>GroBe Unternehmen</h3>
						</div>
						<div class="item-img">
							<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/illustrations/houses/icon-3.svg" alt="">
						</div>
						<div class="item-text">
							<p class="basic-text">GroBe Unternehmen oder Konzernen ab 250 Angestellten und mehreren Niederlassungen</p>
							<a href="solutions.html#big-business" class="btn-dark">Losungen</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="block-9" id="d5">
	<div class="container-fluid">
		<div class="row">
			<div class="offset-md-0 col-md-12 offset-lg-1 col-lg-4 offset-xl-1 col-xl-4">
				<div class="block-9__text">
					<h2>Das sagen unsere zufriedenen Kunden</h2>
					<p class="basic-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
				</div>
			</div>
			<div class="offset-1 col-10 offset-sm-1 col-sm-10 offset-md-1 col-md-10 offset-lg-1 col-lg-5 offset-xl-2 col-xl-4">
				<div class="reviews__carousel">
					<div class="slider">
						<div class="slide">
							<div class="userpic">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/userpic-img/userpic-1.png" alt="">
							</div>
							<h4>Alejandro Rodrigez</h4>
							<p class="position">Co-Founder Herbstwest</p>
							<p class="basic-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
						<div class="slide">
							<div class="userpic">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/userpic-img/userpic-2.png" alt="">
							</div>
							<h4>Alejandro Rodrigez</h4>
							<p class="position">Co-Founder Herbstwest</p>
							<p class="basic-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
						<div class="slide">
							<div class="userpic">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/userpic-img/userpic-3.png" alt="">
							</div>
							<h4>Alejandro Rodrigez</h4>
							<p class="position">Co-Founder Herbstwest</p>
							<p class="basic-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
						<div class="slide">
							<div class="userpic">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/userpic-img/userpic-4.png" alt="">
							</div>
							<h4>Alejandro Rodrigez</h4>
							<p class="position">Co-Founder Herbstwest</p>
							<p class="basic-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>
					<div class="slider-optionals">
						<div class="slider-dots"></div>
						<div class="slider-btns">
							<button type="button" class="slider-button slider-prev" id="b9p"></button>
							<button type="button" class="slider-button slider-next" id="b9n"></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="block-10">
	<div class="container-fluid">
		<div class="row">
			<div class="offset-md-0 col-md-12 offset-lg-1 col-lg-10 offset-xl-1 col-xl-10">
				<h2>Wer wir sind</h2>
				<p class="basic-text">Das professionelle Team</p>
				<div class="block-10__carousel">
					<div class="slider">
						<div class="slide">
							<div class="slide-img">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/userpic-img/userpic-2.png" alt="">
							</div>
							<div class="slide-title">
								<p>Name Name</p>
								<span>Regisseur</span>
							</div>
						</div>
						<div class="slide">
							<div class="slide-img">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/userpic-img/userpic-3.png" alt="">
							</div>
							<div class="slide-title">
								<p>Name Name</p>
								<span>Regisseur</span>
							</div>
						</div>
						<div class="slide">
							<div class="slide-img">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/userpic-img/userpic-4.png" alt="">
							</div>
							<div class="slide-title">
								<p>Name Name</p>
								<span>Regisseur</span>
							</div>
						</div>
						<div class="slide">
							<div class="slide-img">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/userpic-img/userpic-5.png" alt="">
							</div>
							<div class="slide-title">
								<p>Name Name</p>
								<span>Regisseur</span>
							</div>
						</div>
						<div class="slide">
							<div class="slide-img">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/userpic-img/userpic-1.png" alt="">
							</div>
							<div class="slide-title">
								<p>Name Name</p>
								<span>Regisseur</span>
							</div>
						</div>
					</div>
					<div class="slider-optionals">
						<div class="slider-dots"></div>
						<div class="slider-btns">
							<button type="button" class="slider-button slider-prev" id="b10p"></button>
							<button type="button" class="slider-button slider-next" id="b10n"></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="quote-block">
	<div class="float-quotations">
		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/quotation.svg" alt="">
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="quotation">
					<p class="quotation-text">Ein Lagerbestand von mehr als 100.000 Produktvarianten – da braucht es Unerblick.</p>
					<a href="#" class="btn-dark">Beginne jetzt</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
