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
<?php get_template_part('footer-newsletter'); ?>
<?php get_footer(); ?>
