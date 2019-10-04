<?php 
/*
Template Name: SWIFT Page Template
*/

get_header();
the_post();

?>

<?php get_template_part('_Partials/news-popup'); ?>

<main id="swift">
    <section id="hero">
        <div class="wrapper">
            <img class="aatc-hero-logo" src="<?= get_template_directory_uri() ?>/assets/aatc-logo-white.svg" alt="Apple Authorized Training Provider Logo White">
            <h1><?=get_field('hero_title')?></h1>
            <p class="subtitle"><?=get_field('hero_subtitle')?></p>
            <a href="<?=get_field('hero_button_1_link')?>" class="btn" title="<?=get_field('hero_button_1_label')?>"><?=get_field('hero_button_1_label')?></a>
            <a href="<?=get_field('hero_button_2_link')?>" class="btn" title="<?=get_field('hero_button_2_label')?>"><?=get_field('hero_button_2_label')?></a>
            <a href="/prijavi-se" id="red-button">Prijavi Se!</a>
        </div>
    </section>

    <section id="first">
        <div class="wrapper">
            <div class="text">
                <h2><?=get_field('first_section_title')?></h2>
	            <?=get_field('first_section_body')?>
                <a href="<?=get_category_link(get_field('first_program_pdf'))?>" class="big-button-with-icon pdf">Detaljan program kursa</a>
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
            <div class="text">
                <h2><?=get_field('second_section_title')?></h2>
	            <?=get_field('second_section_body')?>
            </div>
            <div class="benfits-grid">
                <ul>

                    <?php foreach (get_field('benefits') as $benefit) :?>
                        <li>
                            <div style="background-image: url('<?=$benefit['icon']['sizes']['miniature']?>');"></div>
                            <p><span><?=$benefit['first_line']?></span><?=$benefit['additional_text']?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>

    <section id="third">
        <div class="wrapper">
            <div class="image" style="background-image: url('<?=get_field('third_image')['sizes']['large']?>');">
                <img src="<?=get_field('third_image')['sizes']['large']?>" alt="<?=get_field('third_image')['alt']?>">
            </div>
            <h2><?=get_field('third_section_title')?></h2>
	        <?=get_field('third_section_body')?>
            <a href="<?=get_category_link(get_field('first_program_pdf'))?>" class="big-button-with-icon pdf">Detaljan program kursa</a>
            <div class="application-next-groups">
                <?php $nextGroups = nextGroupsForCategories([get_field('first_program_pdf')]); ?>
                <p>Polasci sledećih grupa:</p>
                <ul>
                    <?php foreach ($nextGroups as $group) : ?>
                        <li>
                            <a href="<?=$group['permalink']?>"><?=$group['title']?><br><?=$group['nextDate'] ? date('d.m.Y', $group['nextDate']->getTimestamp()) : ''?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <a href="#">Prijavi se odmah!</a>
            </div>
        </div>
    </section>

</main>

<footer>
<?php get_footer(); ?>
