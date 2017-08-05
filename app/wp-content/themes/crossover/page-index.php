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
            <h1><?=get_field('hero_title')?></h1>
            <p class="subtitle"><?=get_field('hero_subtitle')?></p>
            <a href="<?=get_field('hero_button_1_link')?>" class="btn" title="<?=get_field('hero_button_1_label')?>"><?=get_field('hero_button_1_label')?></a>
            <a href="<?=get_field('hero_button_2_link')?>" class="btn" title="<?=get_field('hero_button_2_label')?>"><?=get_field('hero_button_2_label')?></a>
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
    <section id="newsletter">
        <div class="wrapper">
            <div class="open-day">
                <h3>Sledeća otvorena vrata održavamo<br>22.03.2017 u 17 časova</h3>
                <p>Ukoliko imate neko pitanje ili želite da se prijavite za kurs, upišite svoje podatke ispod, i mi ćemo Vas kontaktirati!</p>
                <p>Otvorena vrata su namenjena upoznavanju uživo budućih polaznika sa profesorima i programom obuka i sertifikacije. </p>
            </div>
            <div class="newsletter">
                <form action="">
                    <input type="text" placeholder="Ime i Prezime*">
                    <input type="text" placeholder="Adresa e-pošte*">
                    <input type="text" placeholder="Broj telefona*">
                    <input type="text" placeholder="Dodatne informacije*">
                    <button>Submit</button>
                </form>
            </div>
        </div>
    </section>

<?php get_footer(); ?>