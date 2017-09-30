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
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
		</header><!-- .entry-header -->
		<?php  if(has_tag('one')){ ?>
		<table>
			<thead>
				<tr>
					<th>ขนาดปลา</th>
					<th>จำนวนตัว/กิโล</th>
					<th>ราคา/กิโล</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Size L</td>
					<td>10 – 12 ตัว </td>
					<td>400</td>
				</tr>
				<tr>
					<td>Size XL</td>
					<td>8 – 10 ตัว </td>
					<td>450</td>
				</tr>
			</tbody>
			</table>
		<?php  }else{ ?>
		<table>
			<thead>
				<tr>
					<th>ขนาดปลา</th>
					<th>จำนวนตัว/กิโล</th>
					<th>ราคา/กิโล</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Size L</td>
					<td>10 – 12 ตัว </td>
					<td>500</td>
				</tr>
				<tr>
					<td>Size XL</td>
					<td>8 – 10 ตัว </td>
					<td>550</td>
				</tr>
			</tbody>
			</table>
			<?php  } ?>
		<?php counter_post_thumbnail(); ?>
		
		<?php
			/* Translators: %s: title of the post. */
			the_content( sprintf( __( 'Continue reading %s', 'counter' ), the_title( '<span class="screen-reader-text">"', '"</span>', false ) ) );
		?>
		
	<!-- .entry-content -->
	</article>
 </div>
<?php }else{ ?>
<div class="col-lg-4 col-sm-6 col-xs-12 img-post-custom">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php counter_post_thumbnail(); ?>
		<header class="entry-header">
			<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
		</header><!-- .entry-header -->
		
	<!-- .entry-content -->
	</article>
 </div>
<?php } ?>

