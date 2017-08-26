<?php 
/*
Template Name: Payment Page Template
*/

get_header();
the_post();

?>

<main id="payment">
    <section id="hero">
        <div class="wrapper">
            <h1><?=get_field('hero_title')?></h1>
            <p class="subtitle"><?=get_field('hero_subtitle')?></p>
            <a href="<?=get_field('hero_button_1_link')?>" class="btn" title="<?=get_field('hero_button_1_label')?>"><?=get_field('hero_button_1_label')?></a>
            <a href="<?=get_field('hero_button_2_link')?>" class="btn" title="<?=get_field('hero_button_2_label')?>"><?=get_field('hero_button_2_label')?></a>
        </div>
    </section>

    <section id="first">
        <div class="wrapper">
            <div class="text">
                <h2><?=get_field('first_section_title')?></h2>
	            <?=get_field('first_section_body')?>
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
            <h2><?=get_field('second_section_title')?></h2>
	        <?=get_field('second_section_body')?>
        </div>
    </section>

    <section id="third">
        <div class="wrapper">
            <div class="image" style="background-image: url('<?=get_field('third_image')['sizes']['large']?>');">
                <img src="<?=get_field('third_image')['sizes']['large']?>" alt="<?=get_field('third_image')['alt']?>">
            </div>
            <h2><?=get_field('third_section_title')?></h2>
	        <?=get_field('third_section_body')?>
            <a href="<?=get_field('third_button_link')?>" class="btn fill arrow-left" title="<?=get_field('third_button_label')?>"><?=get_field('third_button_label')?></a>
        </div>
    </section>

</main>

<footer>
<?php get_footer(); ?>
