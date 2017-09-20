<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

	<div class="wrap">
	<div id="primary">
		<main id="main" role="main">

			<div class="main-banner">
				<div class="container">
					<p class="main-banner--title">
                        идеальные брови на целый год за 1.5 часа по спеццене
                    </p>

					<div class="main-carousel--wrapper">
						<div class="main-carousel--half carousel-half">
							<div class="slider-title slider-title-top">
                                до
                            </div>
							<div class="main-carousel owl-carousel owl-theme">
								<div class="owl-item">
									<img src="<? echo get_template_directory_uri() ?>/resources/images/carousel/1A0GXC3734I.jpg"
									     alt="">
								</div>
																<div class="owl-item">
									<img src="<? echo get_template_directory_uri() ?>/resources/images/carousel/2.jpg"
									     alt="">
								</div>
																<div class="owl-item">
									<img src="<? echo get_template_directory_uri() ?>/resources/images/carousel/6.jpg"
									     alt="">
								</div>
							</div>
							<div class="slider-title slider-title-bottom">
                                после
                            </div>
						</div>

						<div class="main-carousel--half">
							<ul class="main-slide-ul">
                                <li>1990 вместо 5990</li>
                                <li>Дипломированные специалисты</li>
                                <li>Сертифицированные материалы</li>
                                <li>Стерильные иглы и инструменты</li>
                            </ul>

							<div class="dfr">
                            <div class="main-banner-form-title">
                                получи<br>
                                скидку<br>
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAABCAYAAAArbAWVAAAAEElEQVQIW2OMiYn5z0BjAADMJQIVV/MzFwAAAABJRU5ErkJggg=="
                                     alt="">50%<img
			                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAABCAYAAAArbAWVAAAAEElEQVQIW2OMiYn5z0BjAADMJQIVV/MzFwAAAABJRU5ErkJggg=="
			                            alt="">
                            </div>
                            <form action="/ajax/send.php" method="post" class="main-banner-form">
                                <input type="hidden" name="title" value="Заявка на получение скидки 50%">
                                 <input type="tel" name="tel" required class="form-el input valid tel-mask"
                                        placeholder="+7 ___ ___-__-__">

                                <button type="submit" class="form-el submit" formnovalidate="">отправить заявку</button>
                            </form>
                        </div>
						</div>
					</div>
				</div>
			</div>

			<div class="folio-block">
				<div class="container">
					<?php get_template_part('template-parts/block/folio'); ?>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- .wrap -->

<?php get_footer();
