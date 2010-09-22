<?php get_header(); ?>

<div class="updates" style="margin-top: 0px; min-height: 300px">
	<?php wp_reset_query(); ?>
	<?php query_posts('showposts=8'); ?>
	
	<div class="update" style="margin-top: 3em; margin-bottom: 80px!important">
		<h3 style="font-size: 1.75em; margin-bottom: 1em;"> 
			Z&uuml;m Blog
			<span class="tagline">Updates and Helpful Info</span>	
		</h3>
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>	
			<div style="margin-bottom: 2em;">
				<h4 style="display:inline"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
				<span class="post-date"><?php the_date(); ?></span>
				<p style="line-height: 20px; font-size: 15px"><?php echo preg_replace('/<p>(.+?)<\/p>/','$1',get_the_excerpt()); ?></p>
			</div>					
			
	<?php endwhile;endif; ?>
	
	</div>	</div>

<?php get_footer(); ?>