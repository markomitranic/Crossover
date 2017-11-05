<?php 
/*
Template Name: Generic Page Template
*/

get_header();
the_post();
?>

<main id="post">

	<section id="hero">
		<div class="wrapper">
            <img class="aatc-hero-logo" src="<?= get_template_directory_uri() ?>/assets/aatc-logo-white.svg" alt="Apple Authorized Training Provider Logo White">
			<h1><?=get_the_title()?></h1>
			<p class="subtitle"><?=get_field('hero_subtitle')?></p>
			<a href="<?=get_field('hero_button_1_link')?>" class="btn" title="<?=get_field('hero_button_1_label')?>"><?=get_field('hero_button_1_label')?></a>
			<a href="<?=get_field('hero_button_2_link')?>" class="btn" title="<?=get_field('hero_button_2_label')?>"><?=get_field('hero_button_2_label')?></a>
			<a href="/prijavi-se" id="red-button">Prijavi Se!</a>
		</div>
	</section>

	<div id="course-description">
		<div class="wrapper">
			<div class="wrapper-inner">
				<div class="wysiwyg">
					<?=the_content()?>
				</div>
			</div>
		</div>
	</div>

</main>

<footer>
<?php get_footer(); ?>
