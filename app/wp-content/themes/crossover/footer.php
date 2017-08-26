
<section id="newsletter">
    <div class="wrapper">
        <div class="open-day">
            <h3><?=get_field('open_day_heading', 'option')?></h3>
			<?=get_field('open_day_body', 'option')?>
        </div>
        <div class="newsletter">
			<?= do_shortcode('[contact-form-7 id="790" title="Contact Form"]') ?>
        </div>
    </div>
</section>

<section id="last-block">
    <div class="wrapper">
        <div class="contact">
            <h3>Kako do nas?</h3>
            <p><?=get_field('footer_contact', 'option')?></p>
        </div>
        <div class="social">
            <h3>Budite u toku sa novostima i aktuelnim kursevima prijavom na newsletter:</h3>
            <ul class="icons">
                <?php wp_nav_menu([
                        'theme_location' => 'social-footer-menu',
                        'container' => false,
                        'items_wrap' => '%3$s'
                ]); ?>
            </ul>
        </div>
    </div>
    <div class="copyright">&copy 2003-2017 Crossover, YU Epicentar d.o.o.</div>
</section>
</footer>

<?php wp_footer(); ?>

</body>
</html>
