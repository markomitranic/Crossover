<?php
/*
Template Name: Event Page Template
*/

get_header();
the_post();
?>

<?php get_template_part('_Partials/news-popup'); ?>

<main id="event">

	<section id="hero">
		<div class="wrapper">
            <img class="aatc-hero-logo" src="<?= get_template_directory_uri() ?>/assets/aatc-logo-white.svg" alt="Apple Authorized Training Provider Logo White">
			<h1><?=get_the_title()?></h1>
			<p class="subtitle"><?=get_field('hero_subtitle')?></p>
			<a href="<?=get_field('hero_button_1_link')?>" class="btn" title="<?=get_field('hero_button_1_label')?>"><?=get_field('hero_button_1_label')?></a>
			<a href="<?=get_field('hero_button_2_link')?>" class="btn" title="<?=get_field('hero_button_2_label')?>"><?=get_field('hero_button_2_label')?></a>
			<a href="/prijavi-se" id="red-button">Prijavi se!</a>
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

    <section id="gallery">
        <h2>Last Year's Gallery</h2>
		<?php
		$images = get_field('gallery');
		if( $images ): ?>
            <ul>
				<?php foreach( $images as $image ): ?>
                    <li>
                        <img src="<?=$image['url']?>" alt="<?=$image['alt']?>" />
                        <p><?=$image['caption']?></p>
                    </li>
				<?php endforeach; ?>
            </ul>
		<?php endif; ?>
    </section>

    <section id="questions">
        <h2>Questions & Answers</h2>
        <ul>
			<?php foreach (get_field('questions_answers') as $key => $question) :?>
                <li>
                    <h3><?=$key+1?>. <?=$question['question']?></h3>
                    <p><?=$question['answer']?></p>
                </li>
			<?php endforeach; ?>
        </ul>
    </section>

</main>

<footer>
<?php get_footer(); ?>
