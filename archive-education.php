<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="wrap cf">
				<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
					<?php
					/*the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );*/
					?>
					<?php if (is_category('Blog')) : ?>
					<h1>Blog, using blog template</h1>
					<?php elseif (is_category('Education')) :?>
					<h1>Education, using education template</h1>
					<?php elseif (is_category('Press')) :?>
					<h1>Press, using press template</h1>
					<?php endif;?>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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


