<section id="last-block">
    <div class="wrapper">
        <div class="contact">
            <h3>Kako do nas?</h3>
            <p>mail: <a href="#">info@crossover.rs</a>
                <br>tel: <a href="#">+381 11 30 38 710</a>
                <br><a href="#">Andrićev Venac 12
                    <br>11000 Beograd
                    <br>(zgrada zadužbine Univerziteta u Beogradu)</a></p>
        </div>
        <div class="social">
            <h3>Budite u toku sa novostima i aktuelnim kursevima prijavom na newsletter:</h3>
            <ul class="icons">
                <?php wp_nav_menu([
                        'theme_location' => 'social-footer-menu',
                        'container' => false,
                        'items_wrap' => '%3$s'
                ]); ?>
                <li class="newsletter">
                    <form action="POST">
                        <input type="text" placeholder="Vaš E-mail">
                        <button>Submit</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <div class="copyright">&copy 2003-2017 Crossover, YU Epicentar d.o.o.</div>
</section>
</footer>

<?php wp_footer(); ?>

</body>
</html>
