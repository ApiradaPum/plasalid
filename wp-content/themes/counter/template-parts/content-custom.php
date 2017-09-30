<?php
/**
 * The default template used for displaying post content in index.php
 *
 * @package Counter
 */

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<?php if(in_category('ปลาสลิด')){ ?>
<div class="col-lg-6 col-sm-6 col-xs-12 img-post-custom plasalid">
<?php }else{ ?>
<div class="col-lg-4 col-sm-6 col-xs-12 img-post-custom">
<?php } ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php counter_post_thumbnail(); ?>
		<header class="entry-header">
			<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
		</header><!-- .entry-header -->
	<!-- .entry-content -->
	</article>
 </div>
