<?php 
/*
Template Name: Contact Page Template
*/

get_header();
the_post();

?>

<?php get_template_part('_Partials/news-popup'); ?>

<main id="contact">
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

    <section id="contact-map">
        <div class="wrapper">
            <div class="background" style="background-image: url('<?=get_field('second_background_image')['sizes']['hero']?>');">
                <div class="address-panel">
                    <h2><?=get_field('second_section_title')?></h2>
	                <?=get_field('second_description')?>
                    <p><?=get_field('second_address')?></p>
                    <p><?=get_field('second_contact_points')?></p>
                    <a href="<?=get_field('google_maps_link')?>" class="btn fill arrow-left" target="_blank">Prikaži na mapi</a>
                </div>
            </div>
        </div>
    </section>

</main>

<footer>
<?php get_footer(); ?>
