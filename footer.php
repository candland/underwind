<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underwind
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container mx-auto p-4">
    <div class="flex flex-wrap justify-between mb-12 mt-4">
      <aside class="flex-auto w-100 lg:w-1/3 px-2 lg:pl-0">
        <?php dynamic_sidebar( 'footer-1' ); ?>
      </aside>
      <aside class="flex-auto w-100 lg:w-1/3 px-2">
        <?php dynamic_sidebar( 'footer-2' ); ?>
      </aside>
      <aside class="flex-auto w-100 lg:w-1/3 px-2 lg:pr-0">
        <?php dynamic_sidebar( 'footer-3' ); ?>
      </aside>
    </div>

    <div class="text-sm flex flex-wrap">
      <?php
        wp_nav_menu( array(
          'menu' => 'Footer',
          'menu_class' => 'footermenu',
        ) );
      ?>
      <div class="site-info w-full lg:w-1/2 text-right">
        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'underwind' ) ); ?>">
          <?php
          /* translators: %s: CMS name, i.e. WordPress. */
          printf( esc_html__( 'Proudly powered by %s', 'underwind' ), 'WordPress' );
          ?>
        </a>
        <span class="sep"> | </span>
          <?php
          /* translators: 1: Theme name, 2: Theme author. */
          printf( esc_html__( 'Theme: %1$s by %2$s.', 'underwind' ), '<a href="https://github.com/candland/underwind">underwind</a>', '<a href="https://wpsupporthq.com">WP Support HQ</a>' );
          ?>
      </div><!-- .site-info -->
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
