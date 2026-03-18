<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset=<?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <header class="mainHeader">
        <nav id="nav-menu">
            <div id="menu">
                <?php wp_nav_menu(['theme_location' => 'main']) ?>
            </div>
        </nav>
        <section class="banniere">
            <h2>Apprenez à maîtriser <span id="bn_wp">Wordpress</span></h2>
            <p>Des tutoriels complets, de débutant à expert, pour créer des sites web professionnels sans limites.</p>
        </section>
    </header>

    <main>
