<?php 
/*
Template Name: Sign Up Page Template
*/

wp_head();
the_post();

?>

<?php get_template_part('_Partials/news-popup'); ?>

<main id="signup">

    <section id="contact-form">
        <div class="wrapper">
            <div class="background" style="background-image: url('<?=get_field('first_background_image')['sizes']['hero']?>');">
                <div class="form-panel">
                    <h2><?=get_field('first_section_title')?></h2>
			<?=get_field('hero_subtitle')?>
	                <?=get_field('first_form_description')?>
	                <?=do_shortcode('[contact-form-7 id="790" title="Contact Form"]')?>
                </div>
            </div>
        </div>
    </section>

</main>

<footer>
<?php wp_footer(); ?>
