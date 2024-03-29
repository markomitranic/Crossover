<?php

get_header();

$term = get_queried_object();

$children = get_terms( $term->taxonomy, array(
	'parent'    => $term->term_id,
	'hide_empty' => false
) );

if ($children) {
	$categories = get_term_children( get_queried_object_id(), 'category' );
} else {
	$categories = [ $term->term_id ];
}
?>


<main id="category">
	<section id="hero">
		<div class="wrapper">
            <img class="aatc-hero-logo" src="<?= get_template_directory_uri() ?>/assets/aatc-logo-white.svg" alt="Apple Authorized Training Provider Logo White">
			<h1>Kategorija: <br><?=get_queried_object()->name?></h1>
			<a href="<?=get_field('hero_button_1_link', 450)?>" class="btn" title="<?=get_field('hero_button_1_label', 450)?>"><?=get_field('hero_button_1_label', 450)?></a>
			<a href="<?=get_field('hero_button_2_link', 450)?>" class="btn" title="<?=get_field('hero_button_2_label', 450)?>"><?=get_field('hero_button_2_label', 450)?></a>
			<a href="/prijavi-se" id="red-button">Prijavi Se!</a>
		</div>
	</section>

    <?php if ($children) : ?>
        <section id="courses-category-list">
            <div class="wrapper">
                <ul>

				    <?php $the_query = new WP_Query([
					    'category__in' => [$term->term_id],
					    'posts_per_page'   => -1,
				    ]);
				    if ( $the_query->have_posts() ) :
					    while ( $the_query->have_posts() ) :
						    $the_query->the_post(); ?>
                            <li>
                                <a href="<?=get_the_permalink()?>"><?=get_the_title()?></a>
                                <p><?=get_field('course_type')?></p>
                            </li>
					    <?php endwhile;
				    endif;
				    wp_reset_postdata(); ?>

                </ul>
            </div>
        </section>
    <?php endif; ?>

	<?php foreach ($categories as $categoryId) :
		$category = get_category($categoryId);
		if ($category->category_count <= 0) { continue; } ?>
		<section id="courses-category-list">
			<div class="wrapper">
				<h2><?=$category->name?> (<?=$category->category_count?>)</h2>
				<ul>

					<?php $the_query = new WP_Query([
						'cat' => $categoryId,
						'posts_per_page'   => -1,
					]);
					if ( $the_query->have_posts() ) :
						while ( $the_query->have_posts() ) :
							$the_query->the_post(); ?>
							<li>
								<a href="<?=get_the_permalink()?>"><?=get_the_title()?></a>
								<p><?=get_field('course_type')?></p>
							</li>
						<?php endwhile;
					endif;
					wp_reset_postdata(); ?>

				</ul>
			</div>
		</section>
	<?php endforeach; ?>

</main>

<footer>
<?php get_footer(); ?>
