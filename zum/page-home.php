<?php /* Template Name: Page: Home*/ ?>

<?php get_header(); ?>

<div class="marketing-image seo">
	testimonial
</div>
<div class="promo">
	<!-- <a href="#">3 Months Free - Fan us on facebook and then sign up for service. It's that easy!</a> -->
</div>

<div class="plans">
	<div class="plan fleft mach1">
		<h2>Mach 1</h2>
		<ul>
			<li>1 Domain Name</li>
			<li>1 Database</li>
			<li>100MB Disk Space</li>
			<li>FTP Access</li>
			<li>1000MB Transfer</li>
			<li><strong>Only $10 / Month</strong></li>
		</ul>
		<h3><a href="/signup/">Signup!</a></h3>
	</div>
	<div class="plan fleft mach2 popular">
		<h2>Mach 2</h2>
		<ul>
			<li>2 Domain Names</li>
			<li>5 Database</li>
			<li>800MB Disk Space</li>
			<li>FTP Access</li>
			<li>Unlimited Transfer</li>
			<li><strong>Only $20 / Month</strong></li>
		</ul>
		<h3><a href="/signup/">Signup!</a></h3>
	</div>
	<div class="plan fleft mach10">
		<h2>Mach 10</h2>
		<ul>
			<li>10 Domain Names</li>
			<li>20 Database</li>
			<li>8GB Disk Space</li>
			<li>FTP + SSH Access</li>
			<li>Unlimited Transfer</li>
			<li><strong>Only $40 / Month</strong></li>
		</ul>
		<h3><a href="/signup/">Signup!</a></h3>
	</div>
</div>

<div class="pitches">
	<ul>
		<li>24/7/365 Online Support</li>
		<li>99.9% Uptime Guarantee</li>
		<li>User-Friendly Plesk Interface</li>
		<li>Automated Online Billing</li>
		<li>One-Click Application Installation</li>
	</ul>
</div>
<div style="float: none; clear: both;">
	
</div>
<div id="meat" style="margin-top: 2.8em;">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div style="padding: 28px; background-color: #e5e5e5;">		
			<h2>
				<?php the_title(); ?>
			</h2>
			<p><?php the_content(); ?></p>
		</div>
	<?php endwhile; endif; ?>





<div class="updates">
	<?php wp_reset_query(); ?>
	<?php query_posts('showposts=2'); ?>
	
	<div class="update">
		<h2 style="margin-bottom: 0.85em;"> 
			Z&uuml;m Blog
			<span class="tagline">Updates and Helpful Info</span>	
		</h2>
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>	
				<div style="margin-bottom: 1.5em;">
					<h3 ><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
					<span class="post-date"><?php the_date(); ?></span>
					<p style="margin-top: 0.2em"><?php echo preg_replace('/<p>(.+?)<\/p>/','$1',get_the_excerpt()); ?></p>
				</div>					
			
	<?php endwhile;endif; ?>
				</div>	</div>

	
</div>
<div class="payments">
	We accept Paypal, Visa, and More
</div>

<script type="text/javascript" charset="utf-8">
	$('.home').wrap('<em>');
</script>

<?php get_footer(); ?>