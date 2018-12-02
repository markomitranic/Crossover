<?php
/*
Template Name: Event Page Template
*/

get_header();
the_post();
?>

<?php get_template_part('_Partials/news-popup'); ?>

<main id="event">

	<section id="hero">
		<div class="wrapper">
            <img class="aatc-hero-logo" src="<?= get_template_directory_uri() ?>/assets/aatc-logo-white.svg" alt="Apple Authorized Training Provider Logo White">
			<h1><?=get_the_title()?></h1>
			<p class="subtitle"><?=get_field('hero_subtitle')?></p>
			<a href="<?=get_field('hero_button_1_link')?>" class="btn" title="<?=get_field('hero_button_1_label')?>"><?=get_field('hero_button_1_label')?></a>
			<a href="<?=get_field('hero_button_2_link')?>" class="btn" title="<?=get_field('hero_button_2_label')?>"><?=get_field('hero_button_2_label')?></a>
			<a href="/prijavi-se" id="red-button">Prijavi se!</a>
		</div>
	</section>

	<div id="course-description">
		<div class="wrapper">
			<div class="wrapper-inner">
				<div class="wysiwyg">
					<?=the_content()?>
				</div>
			</div>
		</div>
	</div>

    <section id="questions">
        <h2>Questions & Answers</h2>
        <ul>
            <li>
                <h3>What?</h3>
                <p>Workshop type event. Attendees sleep and live on the boat. Work plan includes presentations according to curriculum, assignments, brain storming, discussions, ideas interchange and other learning activities.</p>
            </li>
            <li>
                <h3>Where?</h3>
                <p>This event will be arranged in area of North Sporades, on islands Skiathos, Skopelos, Alonnisos and more. Our journey starts from port of Skiathos island.</p>
            </li>
            <li>
                <h3>When?</h3>
                <p>This specific event will happen from Saturday, June 2nd. 2019 until Saturday, June 9th, 2019. Embarkation is scheduled for Saturday, afternoon.</p>
            </li>
            <li>
                <h3>Where do we sleep?</h3>
                <p>On the sailboat. It is equipped with cabins for two. This is not a five-star accommodation, it is rather, regular comfort for sailboat.</p>
            </li>
            <li>
                <h3>What do we eat?</h3>
                <p>You do not take care about the food. It will be prepared in great Greek restaurants on islands. Our battler takes care about heating food, serving and all the cleaning after meals. Wide choice of fruits and beverages will be available all the time.</p>
            </li>
            <li>
                <h3>How about travel and medical insurance?</h3>
                <p>All attendees will have medical and travel insurance on the level which is higher than basic. However, we can discuss additional insurance options with every single attendee.</p>
            </li>
            <li>
                <h3>How do we travel to Skiathos?</h3>
                <p>In June, there are few airplane lines to Skiathos. Additionally, there is a ferry line from Volos to Skiathos. Of course, we will help you to plan your trip in details and will give you more info upon request.</p>
            </li>
            <li>
                <h3>What is included to the price?</h3>
                <p>Accommodation on the sailboat for seven nights. Food and beverages. Basic insurance. Sailing for this period with all expenses covered. Battler services. Professional training. All day support from trainer. Opportunity to learn a little bit about sailing and act as sailing crew or even skipper.</p>
            </li>
        </ul>
    </section>

</main>

<footer>
<?php get_footer(); ?>
