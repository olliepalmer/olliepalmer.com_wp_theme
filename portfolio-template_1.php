<?php 

/** 
* Template name: Portfolio
* Description: Page for displaying portfolio items
*
*/
?>

<?php get_header();?>

<div id="content">
<div id="inner-content" class="wrap cf">
<main id="main" class="m-all t-3of3 d-7of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
<?php
           global $post;
           $myposts = get_posts('numberposts=10&category_name=Featured Big');
           foreach($myposts as $post) :
           setup_postdata($post);
     ?>
     <a href="<?php the_permalink(); ?>">
     	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
     	<div class="folio_image" style="height:400px;background:url('<?php echo $url?>'); background-position:center">
     		<h1 style="text-align:center; line-height:400px;color:#e8e8e8;font-size:2em;letter-spacing:2px"><?php the_title(); ?></h1>
     	</div>
     </a>
 <?php endforeach; ?>
</main>
</div><!--/inner-content-->
</div><!--/content-->


<?php get_footer(); ?>