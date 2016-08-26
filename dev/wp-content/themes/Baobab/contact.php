<?php
/*
      Template Name: Contact
*/
get_header('home');
?>
<main class="container__size">
	<div class="fil-ariane__size">
		<p class="fil-ariane__chemin">
			<a href="<?php echo get_home_url(); ?>" class="fil-ariane__link"><?php _e('Accueil','b');?></a>
			<span class="fil-ariane__separator">/</span>
			<a href="<?php the_permalink();?>" class="fil-ariane__link"><?php _e('Contact','b');?></a>
		</p>
	</div>
	<div class="contact">
		<h2 aria-level="2" class="contact__title"><?php the_title();?></h2>
		<div class="contact__numero">
			<div class="contact__type">
				<p class="contact__name">
					<?php the_field('contact_first-title');?>
				</p>
				<p class="contact__tel">
					<?php the_field('contact_whatsapp');?>
				</p>
			</div>
			<div class="contact__type">
				<p class="contact__name">
					<?php the_field('contact_second-title');?>
				</p>
				<p class="contact__tel">
					<?php the_field('contact_belgique');?>
				</p>
			</div>
		</div>
		<div class="contact__form">
				<?php echo do_shortcode( '[contact-form-7 id="221" title="Contact"]' ); ?>
		</div>

	</div>
<?php
    get_footer();
