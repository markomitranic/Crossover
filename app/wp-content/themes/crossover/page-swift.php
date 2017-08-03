<?php 
/*
Template Name: SWIFT Page Template
*/

get_header();
the_post();

?>

<main id="swift">
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
                <h2>Kreirajte svoju aplikaciju uz SWIFT!</h2>
                <p>Savladajte SWIFT programski jezik I od prvog časa započnite rad na sostvenim aplikacijama uz podršku mentora.</p>
                <p>Nakon kursa bićete sposobni da samostalno razvijate aplikacije i postavite ih  na App Store na korišćenje.</p>
                <a href="#" class="big-button-with-icon pdf">Detaljan program kursa</a>
            </div>
            <div class="images">
                <div class="large" style="background-image: url('assets/photos/xcode.png');">
                    <img src="assets/photos/xcode.png" alt="" class="large">
                </div>
                <div class="small" style="background-image: url('assets/photos/watch-hand.jpg');">
                    <img src="assets/photos/watch-hand.jpg" alt="" class="small">
                </div>
            </div>
        </div>
    </section>

    <section id="second">
        <div class="wrapper">
            <div class="text">
                <h2>Zašto iOS programiranje?</h2>
                <p>Po najnovijim istraživanjima, iOS programeri su najtraženiji kadar u Srbiji. Razvoj aplikacija za iOS uređaje je izuzetno dobro plaćena i tražena pozicija kod nas i u svetu.</p>
                <p>Razvijanje apliakcija možete raditi samostalno ili u okviru programerskog tima, a Vaša zarada zavisi isključivo od Vaše spremnosti da učite i radite.</p>
            </div>
            <div class="benfits-grid">
                <ul>
                    <li>
                        <div style="background-image: url('assets/serbia-light.svg');"></div>
                        <p><span>€ 1.000</span>Prosečna plata u Srbiji</p>
                    </li>
                    <li>
                        <div style="background-image: url('assets/app-store-light.svg');"></div>
                        <p><span>70 %</span>Godišnji rast iOS industrije</p>
                    </li>
                    <li>
                        <div style="background-image: url('assets/apple-logo-light.svg');"></div>
                        <p><span>80 milijardi $</span>Isplaćeno programerima</p>
                    </li>
                    <li>
                        <div style="background-image: url('assets/upwork-logo-light.svg');"></div>
                        <p><span>2.400</span>Freelance poslova na UpWork</p>
                    </li>
                    <li>
                        <div style="background-image: url('assets/certificate-light.svg');"></div>
                        <p><span>800</span>SWIFT Programera u Srbiji</p>
                    </li>
                    <li>
                        <div style="background-image: url('assets/brain-money-light.svg');"></div>
                        <p><span>35 $</span>Radni Sat iOS programera</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section id="third">
        <div class="wrapper">
            <div class="image" style="background-image: url('assets/photos/ucionica.jpg');">
                <img src="assets/photos/ucionica.jpg" alt="">
            </div>
            <h2>Kako izgleda kurs SWIFT programskog jezika?</h2>
            <p>Naša predavanja se zasnivaju na praktičnom radu na pravim projektima, i rezultat svakog predavanja i vežbe je kod/aplikacija. Paralelno sa predavanjima ćete raditi na sopstvenim aplikacijama uz podršku od strane iskusnog profesora.</p>
            <p>Kursevi su podeljeni u 5 predmeta. Četiri programerska predmeta u trajanju od po 28 dana, na kojima ćete naučiti da pravite iOS aplikacije za App Store.</p>
            <p>Termini nastave su prilagođeni zaposlenima i studentima.</p>
            <a href="#" class="big-button-with-icon pdf">Detaljan program kursa</a>
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