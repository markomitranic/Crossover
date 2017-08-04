<?php 
/*
Template Name: Contact Page Template
*/

get_header();
the_post();

?>

<main id="contact">
    <section id="hero">
        <div class="wrapper">
            <h1><?=get_field('hero_title')?></h1>
            <p class="subtitle"><?=get_field('hero_subtitle')?></p>
            <a href="<?=get_field('hero_button_1_link')?>" class="btn" title="<?=get_field('hero_button_1_label')?>"><?=get_field('hero_button_1_label')?></a>
            <a href="<?=get_field('hero_button_2_link')?>" class="btn" title="<?=get_field('hero_button_2_label')?>"><?=get_field('hero_button_2_label')?></a>
        </div>
    </section>

    <section id="contact-form">
        <div class="wrapper">
            <div class="background" style="background-image: url('<?=get_field('first_background_image')['sizes']['hero']?>');">
                <div class="form-panel">
                    <h2><?=get_field('first_section_title')?></h2>
	                <?=get_field('first_form_description')?>
                    <form action="">
                        <input type="text" placeholder="Ime i Prezime*">
                        <input type="text" placeholder="Broj telefona*">
                        <input type="text" placeholder="Adresa e-pošte*">
                        <input type="text" placeholder="Tekst poruke">
                        <button class="btn fill arrow-right">Pošalji!</button>
                    </form>
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