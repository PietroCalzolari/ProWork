<?php

/**
 * Template part for displaying Navigation
 *
 * @package brisko
 */

?>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>


<!-- ----------------------------- -->


<div class="align-items-center brisko-navigation padding">




	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<svg class="navbar-brand fill" xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 72 72">
			<path d="M67.812 16.141a26.246 26.246 0 0 1-7.519 2.06 13.134 13.134 0 0 0 5.756-7.244 26.127 26.127 0 0 1-8.313 3.176A13.075 13.075 0 0 0 48.182 10c-7.229 0-13.092 5.861-13.092 13.093 0 1.026.118 2.021.338 2.981-10.885-.548-20.528-5.757-26.987-13.679a13.048 13.048 0 0 0-1.771 6.581c0 4.542 2.312 8.551 5.824 10.898a13.048 13.048 0 0 1-5.93-1.638c-.002.055-.002.11-.002.162 0 6.345 4.513 11.638 10.504 12.84a13.177 13.177 0 0 1-3.449.457c-.846 0-1.667-.078-2.465-.231 1.667 5.2 6.499 8.986 12.23 9.09a26.276 26.276 0 0 1-16.26 5.606A26.21 26.21 0 0 1 4 55.976a37.036 37.036 0 0 0 20.067 5.882c24.083 0 37.251-19.949 37.251-37.249 0-.566-.014-1.134-.039-1.694a26.597 26.597 0 0 0 6.533-6.774z"></path>
		</svg>
		<a class="navbar-brand" href="http://project-work.test/" style="margin-left: 10px;">Blog</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="http://project-work.test/">Blog <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="http://project-work.test/?cat=3">Events</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="http://project-work.test/?cat=5">Product</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="http://project-work.test/?cat=4">Insights</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="http://project-work.test/?cat=4">Company</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="http://project-work.test/?cat=4">Other blogs</a>
				</li>
			</ul>

		</div>
		<div class="navbar">
			<div class="display-right">
				<select class="form-control" id="ciao">
					<option>prova</option>
				</select>
				<button class="btn rounded-pill white-border">Sign up</button>
			</div>
		</div>
	</nav>






	<div class="<?php Brisko\Theme::options()->navigation_width(); ?> d-flex flex-column flex-md-row align-items-center">
		<div class="mr-md-auto d-flex flex-column flex-md-row align-items-center">
			<?php if (has_custom_logo()) : ?>
				<div id="the-logo">
					<?php the_custom_logo(); ?>
				</div>
			<?php endif; ?>
			<div class="site-title" id="site-title">
				<a class="site-name" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
					<h4 class="body-home site-description fill">Product</h4>
					<?php // bloginfo( 'name' );
					?> Introducing mixed media: Videos, images, and GIFs together in one Tweet
				</a>
				<?php
				$brisko_description = get_bloginfo('description', 'display');
				if ($brisko_description || is_customize_preview()) :
				?>
					<small class="site-description text-muted align-items-center">
						<?php // echo $brisko_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
						?>
						<p>By <a class="link" href="https://blog.twitter.com/en_us/authors.Twitter">Twitter</a> on Wednesday, 5 October 2022</p>
					</small>
				<?php endif; ?>
			</div>
		</div>

		<!-- Back up 1 -->

	</div>
</div>
