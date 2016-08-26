<?php
/*
      Template Name: Don
*/
get_header('home');
?>
<main class="container__size">
	<div class="fil-ariane__size">
		<p class="fil-ariane__chemin">
			<a href="<?php echo get_home_url(); ?>" class="fil-ariane__link"><?php _e('Accueil','b');?></a>
			<span class="fil-ariane__separator">/</span>
			<a href="<?php the_permalink('218');?>" class="fil-ariane__link"><?php _e('Don','b');?></a>
		</p>
	</div>
	<div class="second-don">
		<h2 aria-level="2" class="second-don__title"><?php the_title();?></h2>
		<form class="second-don__form" action="index.php" method="post">
			<fieldset>
                <input type="number" value="5" class="second-don__form-detail">
				<textarea name="name" class="second-don__form-message" rows="20" cols="40" placeholder="Message"></textarea>
				<input type="submit" class="second-don__form-button" name="send" value="Envoyez">
			</fieldset>
		</form>
	</div>
<?php
    get_footer();
