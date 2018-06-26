<?php

get_header();
the_post();
?>

<?php get_template_part('_Partials/news-popup'); ?>

<main id="post">

	<section id="hero">
		<div class="wrapper">
            <img class="aatc-hero-logo" src="<?= get_template_directory_uri() ?>/assets/aatc-logo-white.svg" alt="Apple Authorized Training Provider Logo White">
			<h1><?=get_the_title()?></h1>
			<a href="<?=get_field('hero_button_1_link', 450)?>" class="btn" title="<?=get_field('hero_button_1_label', 450)?>"><?=get_field('hero_button_1_label', 450)?></a>
			<a href="<?=get_field('hero_button_2_link', 450)?>" class="btn" title="<?=get_field('hero_button_2_label', 450)?>"><?=get_field('hero_button_2_label', 450)?></a>
            <a href="/prijavi-se" id="red-button">Prijavi Se!</a>
		</div>
	</section>

    <section id="class-schedule">
        <div class="wrapper">
            <div class="heading unselectable">Spisak Polaska Narednih Grupa</div>
            <div class="timetable">
                <div class="table-header">
                    <p>Datum početka</p>
                    <p>Cena</p>
                </div>
                <ul class="table-content">
                    <?php if (get_field('schedule')) : ?>
                        <?php foreach (get_field('schedule') as $timeSlot) : ?>
                            <?php $schedule = get_field('schedule'); ?>
                            <?php $liClass = ($timeSlot === reset($schedule)) ? 'next' : '' ; ?>
                            <?php $startDate = DateTime::createFromFormat('d/m/Y H:i e', $timeSlot['start_date'] . ' 18:00 Europe/Belgrade'); ?>
                            <li class="<?=$liClass?>">
                                <p>
                                    <a href="https://crossover.rs/prijavi-se/">
                                        <?=($startDate) ? date('d. F Y', $startDate->getTimestamp()) : 'Po zahtevu';?>
                                    </a>
                                </p>
                                <p>
                                    <a href="https://crossover.rs/prijavi-se/">
                                        <?=($timeSlot['price']) ? $timeSlot['price'] : 'Pozovite'?>
                                    </a>
                                </p>
                            </li>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <li>
                            <p>Nema zakazanih termina za ovaj kurs. <a href="/kontakt">Kontaktirajte nas</a> za više detalja.</p>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </section>

	<div id="course-description">
		<div class="wrapper">
			<div class="wrapper-inner">
				<h2>Course Description</h2>
				<p class="course-type"><?=get_field('course_type')?></p>
				<div class="wysiwyg">
					<?=the_content()?>
				</div>
                <div class="application-button-round">
					<?php
					if (get_field('schedule') && !empty(get_field('schedule'))) {
						$nextDate = DateTime::createFromFormat('d/m/Y H:i e', get_field('schedule')[0]['start_date'] . ' 18:00 Europe/Belgrade');
						$nextDate = date('d.m.Y', $nextDate->getTimestamp());
					} else {
						$nextDate = 'Po zahtevu';
					}
					?>
                    <a href="https://crossover.rs/prijavi-se/">
                        <p>Sledeća grupa polaznika: <?=$nextDate?></p>
                        <p>Prijavi se odmah!</p>
                        <p>&#9757;</p>
                    </a>
                </div>
			</div>
		</div>
	</div>

	<?php
    foreach (get_the_category() as $category) :
        $the_query = new WP_Query([
            'cat'               => $category->term_id,
            'posts_per_page'    => -1,
            'post__not_in'      => [get_the_ID()]
        ]);
        if ( $the_query->have_posts() ) : ?>
            <aside id="related-articles">
                <div class="wrapper">
                    <div class="inner-wrapper">
                        <h2><?=$category->name?></h2>
                        <ul>
                            <?php while ( $the_query->have_posts() ) :
                                $the_query->the_post(); ?>
                            <li>
                                <article>
                                    <a href="<?=get_the_permalink()?>"><?=get_the_title()?></a>
                                    <p><?=get_field('course_type')?></p>
                                </article>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                </div>
            </aside>
    <?php
        endif;
        wp_reset_postdata();
    endforeach;
    ?>

</main>

<footer>
<?php get_footer(); ?>
