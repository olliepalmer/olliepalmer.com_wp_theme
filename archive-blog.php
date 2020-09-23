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
					<a href="<?php echo esc_url( get_permalink() ); ?>"><h3 itemprop="headline" rel="bookmark"><?php the_title(); ?></h1></a>
					<?php the_date('Y-m-d', '<p>Posted: ', '</p>'); ?>
					<?php printf( __( '<p>Categories: ', 'bonestheme' ).'%1$s', get_the_category_list(', ') ); ?></p>

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


