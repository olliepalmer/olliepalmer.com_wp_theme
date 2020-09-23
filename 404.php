<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<main id="main" class="m-all t-3of3 d-7of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<article id="post-not-found" class="hentry cf">

							<header class="article-header">

								<h1>404: Nothing here</h1>

							</header>

							<section class="entry-content">

								<p>That is odd. You have arrived here, and there is nothing to see.</p>
								<p>If this keeps happening, please <a href="mailto:somethingbroke@olliepalmer.com">contact Ollie</a></p>
								<br><br>

								<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
								    <div>
								        <input type="search" id="s" name="s" value="" / style="">
								        <button type="submit" id="searchsubmit" ><?php _e('Search for something else instead','bonestheme'); ?></button>
								    </div>
								</form>

							</section>

						</article>


					</main>

				</div>

			</div>

<?php get_footer(); ?>
