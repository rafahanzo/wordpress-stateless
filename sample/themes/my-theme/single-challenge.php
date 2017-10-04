<?php

get_header();
the_post();



?>

<div class="wrap">
	
	<div id="event-hero">
		
		
		<h2><?php the_title(); ?></h2>
		<h3>From <?php the_field('stardate'); ?> to <?php the_field('deadline'); ?></h3>
		<h4><?php echo "Description: "; ?>
			<?php the_field( 'description' ); ?><br>
			<?php echo "Reward: "; ?>
			<?php the_field( 'reward' ); ?>
		</h4>
		
	</div>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php the_content(); ?>
		</main>
	</div>
	
</div>

<?php get_footer(); ?>