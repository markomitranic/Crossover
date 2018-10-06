<?php if (get_field('popup_active', 'option')) : ?>
<?php $news = get_field('news_items', 'option'); ?>

<aside id="news-popup" data-cookie-version="<?=get_field('cookie_version', 'option')?>">
    <div id="wrapper">

        <div id="exit-button"></div>
        <p>Novo u Crossover Trening Centru:</p>

        <?php if (count($news) >= 1) : $item = $news[0]; ?>
        <div class="slide-wrapper">
            <div class="left">
                <article class="slide-big" style="background-image: url(<?=$item['figure']['sizes']['large']?>)">
                    <div class="content">
                        <p class="description"><?=$item['description']?></p>
                        <h1><?=$item['title']?></h1>
                    </div>
                    <a href="<?=$item['button_link']?>" target="_blank" title="<?=$item['button_text']?>" class="button">
                        <?=$item['button_text']?>
                    </a>
                </article>
            </div>

            <div class="right">
                <?php if (count($news) >= 2) : $item = $news[1]; ?>
                <article class="slide-small" style="background-image: url(<?=$item['figure']['sizes']['medium']?>)">
                    <a href="<?=$item['button_link']?>" target="_blank" title="<?=$item['button_text']?>" class="card-link">
                        <p class="description"><?=$item['description']?></p>
                        <h1><?=$item['title']?></h1>
                    </a>
                </article>
                <?php endif; ?>
                <?php if (count($news) >= 2) : $item = $news[2]; ?>
                <article class="slide-small" style="background-image: url(<?=$item['figure']['sizes']['medium']?>)">
                    <a href="<?=$item['button_link']?>" target="_blank" title="<?=$item['button_text']?>" class="card-link">
                        <p class="description"><?=$item['description']?></p>
                        <h1><?=$item['title']?></h1>
                    </a>
                </article>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>

        <div class="cta">
            <p class="call-to-action-text">Već znaš koji kurs te zanima?<br>Zašto čekaš, javi nam se već sad!</p>
            <a href="/prijavi-se/" target="_blank" class="button">Prijavi se</a>
        </div>
    </div>
    <div id="curtain"></div>
</aside>
<?php endif; ?>