<?php 
/*
Template Name: AR Kit Page Template
*/

get_header();
the_post();

?>

<?php get_template_part('_Partials/news-popup'); ?>

<main id="arkit">
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

    <section id="first">
        <div class="wrapper">
            <div class="text">
                <h2><?=get_field('first_section_title')?></h2>
	            <?=get_field('first_section_body')?>
                <div class="application-button-round-small">
                    <a href="https://crossover.rs/prijavi-se/" target="_blank">
                        <p>Prijavi se odmah! &#9757;</p>
                    </a>
                </div>
            </div>
            <div class="images">
                <div class="large" style="background-image: url('<?=get_field('large_image')['sizes']['large']?>');">
                    <img src="<?=get_field('large_image')['sizes']['large']?>" alt="<?=get_field('large_image')['alt']?>" class="large">
                </div>
                <div class="small" style="background-image: url('<?=get_field('small_image')['sizes']['medium']?>');">
                    <img src="<?=get_field('small_image')['sizes']['medium']?>" alt="<?=get_field('large_image')['alt']?>" class="small">
                </div>
            </div>
        </div>
    </section>

    <section id="second">
        <div class="wrapper">
            <div class="text">
                <h2><?=get_field('second_section_title')?></h2>
	            <?=get_field('second_section_body')?>
            </div>
            <div class="benfits-grid">
                <ul>

                    <?php foreach (get_field('benefits') as $benefit) :?>
                        <li>
                            <div style="background-image: url('<?=$benefit['icon']['sizes']['miniature']?>');"></div>
                            <p><span><?=$benefit['first_line']?></span><?=$benefit['additional_text']?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>

    <section id="third">
        <div class="wrapper">
            <div class="image" style="background-image: url('<?=get_field('third_image')['sizes']['large']?>');">
                <img src="<?=get_field('third_image')['sizes']['large']?>" alt="<?=get_field('third_image')['alt']?>">
            </div>
            <h2><?=get_field('third_section_title')?></h2>
	        <?=get_field('third_section_body')?>
        </div>
    </section>

    <section id="fourth">
        <div class="wrapper">
            <h2></h2>
            <div class="body">
                <div class="image" style="background-image: url('<?=get_field('fourth_image')['sizes']['large']?>');">
                    <img src="<?=get_field('fourth_image')['sizes']['large']?>" alt="<?=get_field('fourth_image')['alt']?>">
                </div>
                <div class="text">
					<?=get_field('fourth_section_body')?>
                </div>
            </div>
        </div>
    </section>

    <section id="signup-bottom">
        <div class="wrapper">
            <div class="application-button-round">
                <a href="https://crossover.rs/prijavi-se/" target="_blank">
                    <p>Sledeća grupa polaznika</p>
                    <p>Prijavi se odmah!</p>
                    <p>&#9757;</p>
                </a>
            </div>
        </div>
    </section>

</main>

<footer>
<?php get_footer(); ?>
