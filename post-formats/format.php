
<?php
/*
* This is the default post format.
*
* So basically this is a regular post. if you don't want to use post formats,
* you can just copy ths stuff in here and replace the post format thing in
* single.php.
*
* The other formats are SUPER basic so you can style them as you like.
*
* Again, If you want to remove post formats, just delete the post-formats
* folder and replace the function below with the contents of the "format.php" file.
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
  <header class="article-header entry-header">
    <a href="<?php echo esc_url( get_permalink() ); ?>"><h1 class="entry-title single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1></a>
  </header> <?php // end article header ?>

  <section class="entry-content cf" itemprop="articleBody">
    <?php the_content();?>
  </section> <?php // end article section ?>

  <footer class="article-footer">
  <?php the_date('Y-m-d', '<p>Posted: ', '</p>'); ?>
  <?php printf( __( '<p>Categories: ', 'bonestheme' ).'%1$s', get_the_category_list(', ') ); ?></p>
  </footer> <?php // end article footer ?>

  <?php //comments_template(); ?>

</article> <?php // end article ?>
