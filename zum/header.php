<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	
	<meta name="description" content="<?php
		if(is_home()):
			echo 'Züm Hosting offers Fast, Reliable Hosting plans for your next website.';
		else: if (have_posts()): while (have_posts()): the_post();
			echo strip_tags(get_the_excerpt()); endwhile; endif; endif;?>" />
	
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_url');?>/style.css" type="text/css" media="screen" title="no title" charset="utf-8">
	<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo get_bloginfo('template_url');?>/img/favicon.ico" />
	
	<script type="text/javascript" src="<?php echo get_bloginfo('template_url');?>/scripts/jquery-1.4.2.js"></script>
	<script type="text/javascript" src="<?php echo get_bloginfo('template_url');?>/scripts/jquery.navLite.js"></script>
	<script type="text/javascript" src="<?php echo get_bloginfo('template_url');?>/scripts/init.js"></script>
	<?php wp_head(); ?>
</head>

<body class="home">
	
	<div id="header">
		<div class="contain">
			<a href="/">
				<h1 id="site-title" class="seo">
					Z&uuml;m Hosting
				</h1>
			</a>
			<h2 id="site-tag" class="seo">
				Fast, Simple, Secure
				<span> Z&uuml;m makes hosting easy.</span>
			</h2>
				
			<ul id="nav">
				<li><a href="http://zumhosting.com/index.php" class="home">Home</a></li>
				<li><a href="/packages/">Packages</a></li>
				<li><a href="/why-zum/">Why Züm?</a></li>
				<li><a href="/support/">Support</a></li>
				<li><a href="/blog/">Blog</a></li>
			</ul>
		</div>
	</div>
	
	<div class="contain">
		
		<?php if (get_meta('header-image')): ?>
			<div id="banner" style="margin-top: 0.5em; margin-left: -10px; margin-bottom: 0.65em">
				<img src="<?php echo get_meta('header-image')?>" title="<?php echo the_title()?>" />
			</div>
		<?php endif ?>