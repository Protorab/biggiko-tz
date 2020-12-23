<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package biggiko.tz
 */

get_header();
?>

<main class="main" role="main">
	<section class="section top__section">
		<div class="wrapper top__wrapper">
			<h1 class="title top__title">
				Buy car, or sell your's <br />Just do wat you wont do
			</h1>
			<p class="top__text">
				Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo
				possimus ratione commodi corrupti vero quis quod iste distinctio
				omnis velit, perferendis quibusdam earum suscipit nihil ducimus sed
				officiis doloremque ad.
			</p>
			<a href="#ss" data-subject="top-btn" class="btn btn__active show__form">
				Get started
			</a>
		</div>
	</section>
	<section class="section catalog__section">
		<h2 class="title catalog__title">Catalog</h2>
		<div class="wrapper catalog__wrapper">
			<div class="catalog">
				<div class="catalog__item">
					<a href="#" class="catalog__item-img">
						<img src="img/catalog/img__1.jpg" alt="img" />
					</a>
					<div class="catalog__item-description">
						<h4 class="catalog__item-title">Car-1</h4>
						<div class="description__item">
							<span>car brand </span><span>brand-1</span>
						</div>
						<div class="description__item">
							<span>car type </span><span>type-1</span>
						</div>
						<div class="description__item">
							<span>car color </span><span>color-1</span>
						</div>
						<div class="description__item">
							<span>car year </span><span>year-1</span>
						</div>
					</div>
					<div class="catalog__item-btns">
						<a href="" class="btn catalog__btn">order</a>
						<a href="#" class="catalog__more">more info</a>
					</div>
				</div>
			</div>
			<div class="pagination">
				<a href="#" class="pagination__item">
					<i class="fas fa-chevron-left"></i>
				</a>

				<a href="#" class="pagination__item current">1</a>
				<a href="#" class="pagination__item">2</a>
				<a href="#" class="pagination__item">3</a>
				<a href="#" class="pagination__item">
					<i class="fas fa-chevron-right"></i>
				</a>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
