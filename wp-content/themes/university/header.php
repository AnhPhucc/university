<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Fictional University</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="site-header">
        <div class="container container-new">
            <h1 class="school-logo-text float-left">
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
            <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>

            <div class="site-header__menu group">

                <div class="contens">
                    <nav class="main-navigation">

                        <ul>
                            <h1 class="school-logo-text float-left hiden">
                                <a href="<?php echo site_url('/'); ?>"><strong>Fictional</strong> University</a>
                            </h1>
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'themeLocationOne'
                                )
                            );
                            ?>
                        </ul>
                    </nav>
                    <div class="site-header__util">
                        <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
                        <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
                        <span class="search-trigger js-search-trigger"><i class="fa fa-search"
                                aria-hidden="true"></i></span>
                    </div>
                </div>
                <div class="bong">

                </div>
            </div>


        </div>
    </header>