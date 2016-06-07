<?php
/*
      Template Name: Contact
*/
get_header('home');
?>
<main class="container__size">
	<div class="fil-ariane__size">
		<p class="fil-ariane__chemin">
			<a href="<?php echo get_home_url(); ?>" class="fil-ariane__link"><?php _e('Accueil','b');?></a> >
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
		<form class="contact__form" action="index.html" method="post">
			<fieldset>
				<div class="contact__form-info">
					<input type="text" class="contact__form-detail" name="name" placeholder="Nom" value="">
					<input type="email" class="contact__form-detail" name="email" placeholder="Mail" value="">
					<input type="tel" class="contact__form-detail" name="tel" placeholder="Téléphone" value="">
				</div>
				<textarea name="name" class="contact__form-message" rows="20" cols="40" placeholder="Message"></textarea>
				<input type="submit" class="contact__form-button" name="send" value="Envoyez">
			</fieldset>
		</form>
	</div>
<?php
    get_footer();
