<?php 
/*
Template Name: Questions Page Template
*/

get_header();
the_post();

?>

<main id="questions">
    <section id="hero">
        <div class="wrapper">
            <h1>Najčešća Pitanja</h1>
            <p class="subtitle">Svakog petka održavamo otvorena vrata, kada se možete uživo upoznati sa našim programom i profesorima.</p>
            <a href="#" class="btn">Izbor Kurseva</a>
            <a href="#" class="btn">Plaćanje</a>
        </div>
    </section>

    <section id="questions">
        <div class="wrapper">
            <ol>

	            <?php foreach (get_field('questions') as $key => $question) :?>
                    <li>
                        <h2><?=$key+1?>. <?=$question['question']?></h2>
	                    <?=$question['answer']?>
                    </li>
	            <?php endforeach; ?>

            </ol>
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