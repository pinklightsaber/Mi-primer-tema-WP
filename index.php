<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
<meta charset=" <?php bloginfo('charset') ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> <?php bloginfo( 'the_title' ); ?> </title>
<?php wp_head() ?>
</head>
<body>

<!-- Llama al header -->
<?php get_header() ?>

<!-- Título -->
<h1>Mi primer tema</h1>

<!-- Loop -->

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>
			
		<?php the_title(); ?>
		<?php the_content() ?>
	<?php } ?>
<?php } else { ?>
	No hay nada
<?php } wp_reset_query(); ?>

<!-- Llama al footer -->
<?php get_footer() ?>
	
</body>