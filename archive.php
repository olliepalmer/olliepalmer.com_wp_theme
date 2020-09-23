<?php get_header(); ?>

	<div id="content">

		<?php if (is_category('Blog')) : ?>
			<div class="subhead b-log">
				<div class="wrap b-log">	
					<div class="m-all t-3of3 d-7of7 topnote b-log">
						<p>Blog! New and updated. Filter articles by type: <a href="http://olliepalmer.com/category/blog/">Blog</a> <a href="http://olliepalmer.com/category/education/talks">Talks</a> <a href="http://olliepalmer.com/category/education/workshops/">Workshops</a> <a href="http://olliepalmer.com/category/press/">Press</a> <a href="http://olliepalmer.com/category/friends/">Friends' projects</a></p>
					</div>
				</div>
			</div>
			<?php endif;?>
			<!--
			<?php if (is_category('null')) : ?>
			<div class="subhead v-log">
				<div class="wrap v-log">	
					<div class="m-all t-3of3 d-7of7 topnote v-log">
						<p style="text-style:uppercase">New! This section of the website is dedicated to experimental videos. One per week, starting November 2015. Subscribe via <a href="https://www.youtube.com/subscription_center?add_user=olliepalmerdotcom">YouTube</a>.</p>
					</div>
				</div>
			</div>
		<?php endif;?>
		-->

		<div id="inner-content" class="wrap cf">
				<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
					<?php
					/*the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );*/
					?>
					<?php if (is_category('Blog')) : ?>
					<!--<h1 class="page-title">Blog</h1>-->
					<?php elseif (is_category('Education')) :?>
					<!--<h1 class="page-title">Education</h1>-->
					<?php elseif (is_category('Press')) :?>
					<!--<h1 class="page-title">Press</h1>-->
					<?php endif;?>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php if (in_category('219')) continue; ?>
					<?php
							/*
							 * Ah, post formats. Nature's greatest mystery (aside from the sloth).
							 *
							 * So this function will bring in the needed template file depending on what the post
							 * format is. The different post formats are located in the post-formats folder.
							 *
							 *
							 * REMEMBER TO ALWAYS HAVE A DEFAULT ONE NAMED "format.php" FOR POSTS THAT AREN'T
							 * A SPECIFIC POST FORMAT.
							 *
							 * If you want to remove post formats, just delete the post-formats folder and
							 * replace the function below with the contents of the "format.php" file.
							*/
							get_template_part( 'post-formats/format', get_post_format() );
							?>

					<?php endwhile; ?>

							<?php bones_page_navi(); ?>

					<?php else : ?>

							<article id="post-not-found" class="hentry cf">
								<header class="article-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
								</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
								</section>
								<footer class="article-footer">
										<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
								</footer>
							</article>

					<?php endif; ?>

				</main>
			<?php get_sidebar(); ?>
		</div>
	</div>

<?php get_footer(); ?>


