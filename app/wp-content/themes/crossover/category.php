<?php get_header(); ?>

<main id="category">
	<section id="hero">
		<div class="wrapper">
			<h1>Kategorija: <br><?=get_queried_object()->name?></h1>
			<a href="<?=get_field('hero_button_1_link', 450)?>" class="btn" title="<?=get_field('hero_button_1_label', 450)?>"><?=get_field('hero_button_1_label', 450)?></a>
			<a href="<?=get_field('hero_button_2_link', 450)?>" class="btn" title="<?=get_field('hero_button_2_label', 450)?>"><?=get_field('hero_button_2_label', 450)?></a>
		</div>
	</section>

	<?php foreach (get_term_children(get_queried_object_id(), 'category') as $categoryId) :
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
								<p>Obuka: 1 Dan | 6 casova<br>CK503GRS</p>
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