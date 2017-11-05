<?php 
/*
Template Name: Course Index Page Template
*/

get_header();
the_post();

?>

<main id="index">
    <section id="hero">
        <div class="wrapper">
            <img class="aatc-hero-logo" src="<?= get_template_directory_uri() ?>/assets/aatc-logo-white.svg" alt="Apple Authorized Training Provider Logo White">
            <h1><?=get_field('hero_title')?></h1>
            <p class="subtitle"><?=get_field('hero_subtitle')?></p>
            <a href="<?=get_field('hero_button_1_link')?>" class="btn" title="<?=get_field('hero_button_1_label')?>"><?=get_field('hero_button_1_label')?></a>
            <a href="<?=get_field('hero_button_2_link')?>" class="btn" title="<?=get_field('hero_button_2_label')?>"><?=get_field('hero_button_2_label')?></a>
            <a href="/prijavi-se" id="red-button">Prijavi Se!</a>
        </div>
    </section>

    <section id="category-index">
        <div class="wrapper">
            <div class="inner-wrapper">
                <div class="text">
                    <h2><?=get_field('index_section_title')?></h2>
		            <?=get_field('index_section_body')?>
                </div>

                <ul class="list">
		            <?php foreach (get_categories([
			            'hide_empty'       => 0,
			            'orderby' => 'name',
			            'parent'  => 0
		            ]) as $category ) : ?>

                        <li>
                            <a href="<?=get_category_link($category)?>" title="<?=$category->name?>">
					            <?=$category->name?>
                            </a>
                        </li>
		            <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>

</main>

<footer>
<?php get_footer(); ?>
