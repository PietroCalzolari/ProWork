<?php

/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package brisko
 */

?>
<div class="container left-rail-container flex">
	<div class="sinistra column column-4">
		<a class="row linka" href="https://www.twitter.com/TwitterLatAm"><img alt="@${twtrHandle}" class="twitter-image" src="https://pbs.twimg.com/profile_images/1354488983514877953/2h5PKcgK_200x200.jpg"></a>
		<div class="row">
			<a class="col col-3 linka" href="https://www.twitter.com/TwitterLatAm">‎@TwitterLatAm‎</a>
			<img alt="verified" class="col col-3 verified" src="https://blog.twitter.com/etc/designs/blog-twitter/public/icons-svg/verified2.svg">
		</div>
		<div class="row">
			<div class="col col-6 stacca"></div>
		</div>
		<div class="row">
			<h2 class="piccolo">Only on Twitter</h2>
		</div>
		<div class="row">
			<a href="https://twitter.com/Twitter" class="linka">@Twitter</a>
		</div>
		<div class="row">
			<a href="https://twitter.com/hashtag/OnlyOnTwitter" class="linka">#OnlyOnTwitter</a>
		</div>
	</div>
	<div class="column column-8 centro">
		<div class="post-article">
			<?php Brisko\Theme::post_thumbnail(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
				<span class="product">Product</span>
					<?php
					if (is_singular()) :
						the_title('<h2 class="post-title">', '</h1>');
					else :
						the_title(sprintf('<h2 class="post-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
					endif;
					?>
					<?php brisko_before_entry_meta(); ?>
					<div class="entry-meta ">
						<?php brisko_posted_by(); ?>
						<br><?php brisko_posted_on(); ?>
					</div><!-- .entry-meta -->
					<?php brisko_after_entry_meta(); ?>
				</header><!-- .entry-header -->
				<div class="entry-content">
					<?php
					the_content(
						sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'brisko'),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							wp_kses_post(get_the_title())
						)
					);
					?>
				</div><!-- .entry-content -->
				<footer class="entry-footer ">
					<?php brisko_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</article><!-- #post-<?php the_ID(); ?> -->
		</div><!-- post-article -->
	</div>
</div>
