<?php /* Template Name: Page */ ?>

<?php get_header(); ?>


<div id="meat" style="min-height: 400px; margin-top: 0px; width: 100%">
	<div class="updates" style="margin-top: 0px">
		<div>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
					<div class="update">
						<div style="margin-top: 3em">
							<h3 style="font-size:2.25em; margin-bottom: 0.5em;"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
							
							<div style="margin-top: 1em"><?php the_content(); ?></div>
						</div>					
					</div>		

			<?php endwhile;endif; ?>


		</div>
	</div>
</div>

<?php get_footer(); ?>