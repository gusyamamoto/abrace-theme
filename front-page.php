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
 * @package Abrace_Theme
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	while (have_posts()) :
		the_post();

		// get_template_part( 'template-parts/content', 'page' );

	?>
		<section id="hero">
			<div class="hero-container">
				<?php get_template_part('template-parts/content', 'bluedots') ?>

				<div class="typing-container">
					<span id="typing-text"></span>
				</div>

			</div>
			<?php get_template_part('template-parts/content', 'button-orc') ?>
			<img class="logo-abrace" src="<?php echo get_template_directory_uri(); ?>./assets/logo_abrace.png" alt="Logo Abrace">

		</section>

		<section id="servicos">
			<?php get_template_part('template-parts/content', 'servicos') ?>
		</section>

		<section id="parceiros">
			<?php
			get_template_part('template-parts/content', 'parceiros');
			// get_template_part('template-parts/content', 'button-orc');
			?>
		</section>
	<?php

	endwhile; // End of the loop.
	?>

</main><!-- #main -->

<?php
get_footer();
