<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Abrace_Theme
 */

?>

<footer id="colophon" class="site-footer">
	<div class="footer-main">
		<div class="footer-left">
			<div class="footer-logos-left">
				<img class="logo-footer" src="<?php echo get_template_directory_uri(); ?>./assets/abrace-logo-white.png" alt="Logo Abrace">
				<div class="social-logos">					
					<a class="social-link" href="https://www.facebook.com/AbraceOCP/" target="_blank">
						<?php echo file_get_contents(get_template_directory() . '/assets/facebook-logo.svg'); ?>
					</a>

					<?php
					// Get the SVG file content for Instagram
					$svg_content = file_get_contents(get_template_directory() . '/assets/instagram-logo.svg');

					// Add the class "insta-logo" to the <svg> tag
					if ($svg_content) {
						$svg_content = preg_replace('/<svg\b/', '<svg class="insta-logo"', $svg_content);
						// Wrap the Instagram logo in <a> tag
						echo '<a class="social-link" href="https://www.instagram.com/abrace_certificadora/" target="_blank">' . $svg_content . '</a>';
					}
					?>
				</div>

			</div>
			<nav class="nav-footer">
				<h3>Menu</h3>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav>
		</div>

		<div class="footer-right">
			<h3>ABRACE<br>
			Avaliações Brasil Da Conformidade e Ensaio LTDA</h3>
			Avenida Jabaquara, 2049 - 9º Andar<br>
			Saúde - 04045-003 - São Paulo - SP<br>
			+55 11 5575 6987<br>
			abrace@abracesp.org.br<br>
			CNPJ - 10.454.517/0001-04</p>
		</div>
	</div>

	<div class="site-info">
		<?php
		/* translators: 1: Theme name, 2: Theme author. */
		printf(
			esc_html__('Design by%s%s', 'text-domain'),
			'&nbsp;',
			'<a href="https://ghyamamoto.com">Gustavo Yamamoto</a>'
		);


		?>
		<p class="footer-direitos">
			<?php
			echo esc_html__('©2025 Abrace - Todos os direitos reservados', 'abrace-theme');
			?>
		</p>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>