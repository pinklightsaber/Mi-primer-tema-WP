<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
<meta charset=" <?php bloginfo('charset') ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> <?php bloginfo( 'the_title' ); ?> </title>
<?php wp_head() ?>
</head>
<body>


<?php get_header() ?>

<h1>Mi primer tema</h1>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { 
	 the_post(); ?>
		
		<?php the_title(); ?>
		<?php the_content() ?>

	<?php }; ?>

<?php }; ?>

<?php get_footer() ?>
	
</body>