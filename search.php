<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package alterego
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

		<!-- if we have a search query and some results -->
		<?php if ( have_posts() and get_search_query() ) : ?>
			<header class="page-header pa3 measure-wide center">
				<h1 class="page-title">
					<?php
					printf( esc_html__( 'Search Results for: %s', 'alterego' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->
			<ul class="products">
				<?php while ( have_posts() and get_search_query() ) : the_post();
					wc_get_template_part( 'content', 'product' );
				endwhile; ?>
			</ul>
		<?php endif; ?>

		<!-- if we no search query, show the search form -->
		<?php if ( !get_search_query() or !have_posts() ) : ?>
			<div class="pa3 measure-wide center">
				<h1 class="page-title">Search</h1>
				<?php get_search_form(); ?>
			</div>
		<?php endif; ?>

	</main><!-- #main -->

<?php
get_footer();
