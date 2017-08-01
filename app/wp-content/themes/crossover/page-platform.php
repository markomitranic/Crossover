<?php 
/*
Template Name: Platform Page Template
*/

get_header();
the_post();

?>

<main id="platform">
    <section id="hero">
        <div class="wrapper">
            <h1><?=get_field('hero_title')?></h1>
            <p class="subtitle"><?=get_field('hero_subtitle')?></p>
            <a href="#" class="btn">Izbor Kurseva</a>
            <a href="#" class="btn">Najčešća Pitanja</a>
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
        </div>
    </section>

    <section id="fourth">
        <div class="wrapper">
            <h2></h2>
            <div class="body">
                <div class="image" style="background-image: url('assets/photos/imac-office.jpg');">
                    <img src="assets/photos/imac-office.jpg" alt="">
                </div>
                <div class="text">
                    <p><strong>Šta su Vaši sledeći koraci?</strong></p>
                    <ul>
                        <li><p>Odaberite željeni kurs i utvrdite nivo znanja koji želite da postignete.</p></li>
                        <li><p>Proverite dostpunost kurseva u narednom periodu.</p></li>
                        <li><p>Upoznajte se sa uslovima pohađanja, otplate i sertifikovanja.</p></li>
                        <li><p>Postanite vrhunski IT stručnjak!</p></li>
                    </ul>
                    <p><br></p>
                    <p>Za sva dodatna pitanja, pogledajte segment Najčešća itanja ili nas kontakitrajte putem mejla.</p>
                    <a href="#" class="btn fill arrow-left">Najčešća pitanja i odgovori</a>
                </div>
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