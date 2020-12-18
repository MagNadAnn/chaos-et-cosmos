<?php
/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
} ?>

<footer class="site-footer">

<div class="chimney">

	<div class="footer__logo"></div>

	<?php if ( has_nav_menu( 'footer' ) ) : ?>

		<?php wp_nav_menu(array(
			'menu' => 'Footer', 
			'menu_class' => 'footer-site__links',
			'walker' => new CSS_Menu_WalkerFooter()
		)); ?>

	<?php endif; ?>

	<?php wp_footer(); ?>
	
</div>

</footer>

</body>
</html>
