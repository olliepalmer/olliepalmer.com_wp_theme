<?php
/*
 Template Name: About page template
 *
*/
 ?>

 <?php get_header(); ?>

 <div id="content">

 	<div id="inner-content" class="wrap cf">

 		<main id="main" class="m-all t-3of3 d-7of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

 			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

 			<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

 				<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'medium') ); ?>
		     	<div class="folio_image" style="height:400px;background:url('<?php echo $url?>'); background-position:center; background-size:cover; margin-top:1.5em;">
		     	</div>

					<header class="article-header">

						<h1 class="single-title centred"><?php the_title(); ?></h1>

					</header>

					<section class="entry-content cf">
						<?php the_content();?>
					</section> <!-- end article section -->

				</article>

			<?php endwhile; ?>

		<?php else : ?>

		<article id="post-not-found" class="hentry cf">
			<header class="article-header">
				<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
			</header>
			<section class="entry-content">
				<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
			</section>
			<footer class="article-footer">
				<p><?php _e( 'This is the error message in the single-custom_type.php template.', 'bonestheme' ); ?></p>
			</footer>
		</article>

	<?php endif; ?>

</main>

</div>

</div>

<?php get_footer(); ?>
