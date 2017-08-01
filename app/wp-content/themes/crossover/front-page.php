<?php
// Front Page
get_header();
?>

<main id="homepage">
    <section id="hero">
        <canvas id="homepage-canvas"></canvas>
        <div class="wrapper">
            <h1><?=get_field('hero_title')?></h1>
            <p class="subtitle"><?=get_field('hero_subtitle')?></p>
            <ul id="channel-logos">
                <li class="apple">
                    <div class="logo">
                        <img src="<?= get_template_directory_uri() ?>/assets/aatc-logo-white.svg" alt="Apple Authorized Training Provider Logo White">
                    </div>
                </li>

                <?php foreach (get_field('channel_logos') as $item) :?>
                    <li>
                        <div class="logo" style="background-image: url('<?=$item['logo']['sizes']['miniature']?>');">
                            <img src="<?=$item['logo']['sizes']['miniature']?>" alt="<?=$item['logo']['alt']?>">
                        </div>
                        <div class="description">
                            <p class="company-name"><?=$item['title']?></p>
                            <p class="company-description"><?=$item['description']?></p>
                        </div>
                    </li>
                <?php endforeach; ?>

            </ul>
        </div>
    </section>

    <section id="hero-cards">
        <div class="wrapper">
            <div id="cards">
                <ul>

                    <?php foreach (get_field('cards_selection') as $card) :?>
                        <li style="background-image: linear-gradient( rgba(26, 25, 21, <?=$card['darken']?>), rgba(26, 25, 21, <?=$card['darken']?>) ), url('<?=$card['background_image']['sizes']['medium']?>');">
                            <a href="<?=$card['card_link']?>">
                                <p><?=$card['text']?></p>
                            </a>
                        </li>
                    <?php endforeach; ?>

                </ul>
            </div>
            <?=get_field('facebook_embed_code')?>
        </div>
    </section>

    <section id="technology-picker">
        <div class="wrapper">
            <h2><?= get_field('picker_section_title') ?></h2>
            <p class="subtitle"><?= get_field('picker_section_subtitle') ?></p>
            <div class="picker-flex">
                <ul class="choices">
                    <li>
                        <div class="technology-logo" style="background-image: url('<?= get_template_directory_uri() ?>/assets/swift-logo-dark.svg');"></div>
                        <p class="technology-title">SWIFT</p>
                    </li>
                    <li>
                        <div class="technology-logo" style="background-image: url('<?= get_template_directory_uri() ?>/assets/apple-logo-dark.svg');"></div>
                        <p class="technology-title">Apple IT</p>
                    </li>
                    <li>
                        <div class="technology-logo" style="background-image: url('<?= get_template_directory_uri() ?>/assets/ibm-logo-dark.svg');"></div>
                        <p class="technology-title">IBM</p>
                    </li>
                    <li>
                        <div class="technology-logo" style="background-image: url('<?= get_template_directory_uri() ?>/assets/microsoft-logo-dark.svg');"></div>
                        <p class="technology-title">Microsoft</p>
                    </li>
                    <li>
                        <div class="technology-logo" style="background-image: url('<?= get_template_directory_uri() ?>/assets/lenovo-logo-dark.svg');"></div>
                        <p class="technology-title">LenovoT</p>
                    </li>
                    <li>
                        <div class="technology-logo" style="background-image: url('<?= get_template_directory_uri() ?>/assets/cisco-logo-dark.svg');"></div>
                        <p class="technology-title">Cisco</p>
                    </li>
                    <li>
                        <div class="technology-logo" style="background-image: url('<?= get_template_directory_uri() ?>/assets/oracle-logo-dark.svg');"></div>
                        <p class="technology-title">Oracle</p>
                    </li>
                    <li>
                        <div class="technology-logo" style="background-image: url('<?= get_template_directory_uri() ?>/assets/logic-logo-dark.svg');"></div>
                        <p class="technology-title">Logic Pro</p>
                    </li>
                    <li>
                        <div class="technology-logo" style="background-image: url('<?= get_template_directory_uri() ?>/assets/finalcut-logo-dark.svg');"></div>
                        <p class="technology-title">Final Cut Pro</p>
                    </li>
                </ul>
                <div class="timetable">
                    <div class="table-header">
                        <p>Naziv</p>
                        <p>Datum</p>
                        <p>Stanje</p>
                    </div>
                    <ul class="table-content">
                        <li>
                            <p><a href="#">A0 Uvod u SWIFT programski jezik</a></p>
                            <p>22.05.2017</p>
                            <p>Popunjen</p>
                        </li>
                        <li>
                            <p><a href="#">A0 Uvod u SWIFT programski jezik</a></p>
                            <p>22.05.2017</p>
                            <p>Popunjen</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="testimonials" style="background-image: linear-gradient( rgba(26, 25, 21, 0.8), rgba(26, 25, 21, 0.8) ), url('http://crossover.rs/wp-content/uploads/2017/08/nasa-space-station.jpg');">
        <div class="wrapper">
            <div class="description">
                <h2><?= get_field('testimonials_section_title') ?></h2>
                <div class="subtitle">
                    <p><?= get_field('testimonials_section_body') ?></p>
                </div>
                <ul class="statistics">

                    <?php foreach (get_field('statistics') as $card) :?>
                        <li>
                            <p class="large"><?=$card['large']?></p>
                            <p class="small"><?=$card['small']?></p>
                        </li>
                    <?php endforeach; ?>

                </ul>
            </div>
            <ul class="people">

                <?php foreach (get_field('testimonial_quotes') as $card) :?>
                    <li>
                        <div class="image" style="background-image: url('<?=$card['photo']['sizes']['thumbnail']?>');"></div>
                        <div class="about">
                            <blockquote><?=$card['quote_text']?></blockquote>
                            <p class="author"><?=$card['name']?>,<br><?=$card['institution']?></p>
                        </div>
                    </li>
                <?php endforeach; ?>

            </ul>
        </div>
    </section>
</main>

<footer>

<?php get_footer(); ?>