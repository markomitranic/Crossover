<?php 
/*
Template Name: Questions Page Template
*/

get_header();
the_post();

?>

<main id="questions">
    <section id="hero">
        <div class="wrapper">
            <h1><?=get_field('hero_title')?></h1>
            <p class="subtitle"><?=get_field('hero_subtitle')?></p>
            <a href="<?=get_field('hero_button_1_link')?>" class="btn" title="<?=get_field('hero_button_1_label')?>"><?=get_field('hero_button_1_label')?></a>
            <a href="<?=get_field('hero_button_2_link')?>" class="btn" title="<?=get_field('hero_button_2_label')?>"><?=get_field('hero_button_2_label')?></a>
        </div>
    </section>

    <section id="questions">
        <div class="wrapper">
            <ol>

	            <?php foreach (get_field('questions') as $key => $question) :?>
                    <li>
                        <h2><?=$key+1?>. <?=$question['question']?></h2>
	                    <?=$question['answer']?>
                    </li>
	            <?php endforeach; ?>

            </ol>
        </div>
    </section>
</main>

<footer>
<?php get_footer(); ?>
