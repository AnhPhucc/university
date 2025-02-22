<footer class="site-footer">
    <div class="site-footer__inner container container--narrow">
        <div class="group">
            <div class="site-footer__col-one">
                <h1 class="school-logo-text school-logo-text--alt-color">

                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        <?php
                        $name = get_bloginfo('name');
                        $nameString = explode(' ', $name);
                        for ($i = 0; $i < count($nameString); $i++) {
                            if ($i == 0) {
                                echo '<strong>' . $nameString[$i] . '</strong>';
                            } else {
                                echo '<span>' . $nameString[$i] . '</span>';
                            }
                        }
                        ?>
                    </a>
                </h1>
                <p><a class="site-footer__link" href="#"><?php dynamic_sidebar('custom-footer-widget'); ?></a></p>
            </div>

            <div class="site-footer__col-two-three-group">
                <div class="site-footer__col-two">
                    <h3 class="headline headline--small">Explore</h3>
                    <nav class="nav-list">
                        <!-- <ul>
              
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'themeLocationThree'
                            )
                        );
                        ?>
                    </nav>
                </div>

                <div class="site-footer__col-three">
                    <h3 class="headline headline--small">Learn</h3>
                    <nav class="nav-list">
                        <!-- <ul>
                  <li><a href="#">Legal</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Careers</a></li>
                </ul> -->
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'themeLocationTwo'
                            )
                        );
                        ?>
                    </nav>
                </div>
            </div>

            <div class="site-footer__col-four">
                <h3 class="headline headline--small">Connect With Us</h3>
                <nav>
                    <ul class="min-list social-icons-list group">
                        <li>
                            <a href="#" class="social-color-facebook"><i class="fa fa-facebook"
                                    aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#" class="social-color-twitter"><i class="fa fa-twitter"
                                    aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#" class="social-color-youtube"><i class="fa fa-youtube"
                                    aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#" class="social-color-linkedin"><i class="fa fa-linkedin"
                                    aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#" class="social-color-instagram"><i class="fa fa-instagram"
                                    aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>