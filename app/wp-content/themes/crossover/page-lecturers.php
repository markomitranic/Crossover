<?php 
/*
Template Name: Lecturers Page Template
*/

get_header();
the_post();

?>

<main id="lecturers">
    <section id="hero">
        <div class="wrapper">
            <h1><?=get_field('hero_title')?></h1>
            <p class="subtitle"><?=get_field('hero_subtitle')?></p>
            <a href="<?=get_field('hero_button_1_link')?>" class="btn" title="<?=get_field('hero_button_1_label')?>"><?=get_field('hero_button_1_label')?></a>
            <a href="<?=get_field('hero_button_2_link')?>" class="btn" title="<?=get_field('hero_button_2_label')?>"><?=get_field('hero_button_2_label')?></a>
            <a href="/prijavi-se" id="red-button">Prijavi Se!</a>
        </div>
    </section>

    <section id="first">
        <div class="wrapper">
            <div class="text">
                <h2><?=get_field('first_section_title')?></h2>
	            <?=get_field('first_section_body')?>
            </div>
            <div class="buttons">
                <a href="<?=get_field('first_button_1_link')?>" class="btn fill arrow-left" title="<?=get_field('first_button_1_label')?>"><?=get_field('first_button_1_label')?></a>
                <a href="<?=get_field('first_button_2_link')?>" class="btn fill arrow-left" title="<?=get_field('first_button_2_label')?>"><?=get_field('first_button_2_label')?></a>
            </div>
        </div>
    </section>

    <section id="lecturers" style="background-image: linear-gradient( rgba(26, 25, 21, 0.9), rgba(26, 25, 21, 0.9) ), url('http://crossover.rs/wp-content/uploads/2017/08/knez-mihailova.jpg');">
        <div class="wrapper">
            <ul>

	            <?php foreach (get_field('lecturers') as $lecturer) :?>
                    <li>
                        <div class="bio">
                            <h3><?=$lecturer['name']?></h3>
                            <blockquote>"<?=$lecturer['quote']?>"</blockquote>
	                        <?=$lecturer['bio']?>
                        </div>
                        <div class="photo" style="background-image: url('<?=$lecturer['photo']['sizes']['medium']?>');">
                            <img src="<?=$lecturer['photo']['sizes']['medium']?>" alt="<?=$lecturer['photo']['alt']?>">
                        </div>
                    </li>
	            <?php endforeach; ?>

            </ul>
        </div>
    </section>

</main>

<footer>
<?php get_footer(); ?>
