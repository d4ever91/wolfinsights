<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

<?php wp_head(); ?>
	
	<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Corporation",
  "name": "Wolf Insights",
  "url": "https://wolfinsights.com/",
  "logo": "https://wolfinsights.com/logo/",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "8968182409",
    "contactType": "sales",
    "areaServed": "IN"
  },
  "sameAs": [
    "https://www.facebook.com/Wolf-Insights-105830574611068/",
    "https://twitter.com/wolfinsights",
	  "https://www.pinterest.com/Wolf_Insights/",
	  "https://www.linkedin.com/company/wolf-insights",
    "https://www.instagram.com/wolfinsights/",
    "https://www.youtube.com/channel/UCQ_TkVh0D9jACHg5LAJpW_g"
  ]
}
</script>
	
	<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Why Choose Wolf Insights",
    "item": "https://wolfinsights.com/about-us/why-choose-us/"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "What We do",
    "item": "https://wolfinsights.com/about-us/what-we-do/"  
  }]
}
</script>
	<meta name="google-site-verification" content="s1EAO_fxUIwJkEIh83oh9ZZmYbcAtzxa8QxtZOLIWSs" />
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
