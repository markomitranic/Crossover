<?php

get_header();
the_post();
?>

<main id="post">

	<section id="hero">
		<div class="wrapper">
			<h1><?=get_the_title()?></h1>
			<a href="<?=get_field('hero_button_1_link', 450)?>" class="btn" title="<?=get_field('hero_button_1_label', 450)?>"><?=get_field('hero_button_1_label', 450)?></a>
			<a href="<?=get_field('hero_button_2_link', 450)?>" class="btn" title="<?=get_field('hero_button_2_label', 450)?>"><?=get_field('hero_button_2_label', 450)?></a>
		</div>
	</section>

    <section id="class-schedule">
        <div class="wrapper">
            <div class="heading unselectable">Pregledajte Spisak Termina</div>
            <div class="timetable">
                <div class="table-header">
                    <p>Datum početka</p>
                    <p>Cena</p>
                </div>
                <ul class="table-content">
                    <?php if (get_field('schedule')) : ?>
                        <?php foreach (get_field('schedule') as $timeSlot) : ?>
                            <?php $startDate = DateTime::createFromFormat('d/m/Y H:i e', $timeSlot['start_date'] . ' 18:00 Europe/Belgrade'); ?>
                            <li>
                                <p><?=date('d. F Y', $startDate->getTimestamp())?></p>
                                <p><?=($timeSlot['price']) ? $timeSlot['price'] : 'Pozovite'?></p>
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
			</div>
		</div>
	</div>

	<?php
    foreach (get_categories() as $category) :
        $the_query = new WP_Query([
            'cat'               => $category->term_id,
            'posts_per_page'    => -1,
            'post__not_in'      => [get_the_ID()]
        ]);
        if ( $the_query->have_posts() ) : ?>
            <aside id="related-articles">
                <div class="wrapper">
                    <div class="inner-wrapper">
                        <h2>Svi kursevi u kategoriji: macOS and OS C Training</h2>
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
<?php get_template_part('footer-newsletter'); ?>
<?php get_footer(); ?>
