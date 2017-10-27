<?php 
/*
Template Name: Sign Up Page Template
*/

get_header();
the_post();

?>

<main id="signup">
    <section id="hero">
        <div class="wrapper">
            <h1><?=get_field('hero_title')?></h1>
            <p class="subtitle"><?=get_field('hero_subtitle')?></p>
            <a href="<?=get_field('hero_button_1_link')?>" class="btn" title="<?=get_field('hero_button_1_label')?>"><?=get_field('hero_button_1_label')?></a>
            <a href="<?=get_field('hero_button_2_link')?>" class="btn" title="<?=get_field('hero_button_2_label')?>"><?=get_field('hero_button_2_label')?></a>
            <a href="/prijavi-se" id="red-button">Prijavi Se!</a>
        </div>
    </section>

    <section id="contact-form">
        <div class="wrapper">
            <div class="background" style="background-image: url('<?=get_field('first_background_image')['sizes']['hero']?>');">
                <div class="form-panel">
                    <h2><?=get_field('first_section_title')?></h2>
	                <?=get_field('first_form_description')?>
	                <?=do_shortcode('[contact-form-7 id="790" title="Contact Form"]')?>
                </div>
            </div>
        </div>
    </section>

</main>

<footer>
<?php get_footer(); ?>