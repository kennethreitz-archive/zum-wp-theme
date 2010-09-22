<?php /* Template Name: Page */ ?>

<?php get_header(); ?>


<div id="meat" style="min-height: 400px; margin-top: 0px">
	<div class="updates" style="margin-top: 0px">
		<div>

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
					<div class="update">
						<div>
							<h3 style="font-size:2.25em;"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
							<span class="post-date fright" style="font-size:1.15em;"><?php the_date(); ?></span>
							<div style="margin-top: 1em"><?php the_content(); ?></div>
						</div>					
					</div>		

			<?php endwhile;endif; ?>

		</div>
		<div id="comments">
			<div id="disqus_thread"></div><script type="text/javascript" src="http://disqus.com/forums/zumhosting/embed.js"></script></a>
		</div>
	</div>
</div>



<div class="pitches" style="margin-top: 2.5em;">
	<ul>
		<li>24/7/365 Online Support</li>
		<li>99.9% Uptime Guarantee</li>
		<li>User-Friendly Plesk Interface</li>
		<li>Automated Online Billing</li>
		<li>One-Click Application Installation</li>
	</ul>
</div>

<?php get_footer(); ?>