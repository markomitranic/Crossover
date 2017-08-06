<?php get_header(); ?>

<main id="post">

	<section id="hero">
		<div class="wrapper">
			<h1>Greška 404</h1>
			<p class="subtitle">Na žalost stranica koju ste tražili nije pronađena. U nastavku vam nudimo neke dalje mogućnosti za pretragu.</p>
			<a href="<?=get_field('hero_button_1_link', 450)?>" class="btn" title="<?=get_field('hero_button_1_label', 450)?>"><?=get_field('hero_button_1_label', 450)?></a>
			<a href="<?=get_field('hero_button_2_link', 450)?>" class="btn" title="<?=get_field('hero_button_2_label', 450)?>"><?=get_field('hero_button_2_label', 450)?></a>
		</div>
	</section>

	<div id="course-description">
		<div class="wrapper">
			<div class="wrapper-inner">
				<div class="404">
					<img style="margin:0 auto; display: block;" src="<?= get_template_directory_uri() ?>/assets/404.gif" alt="TV static 404 error not found">
				</div>
			</div>
		</div>
	</div>

</main>

<footer>
	<?php get_template_part('footer-newsletter'); ?>
	<?php get_footer(); ?>
