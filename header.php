<!DOCTYPE html>
<html>

<head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <div class="min-h-screen flex flex-col justify-between">

        <header
            class="w-full h-28 sm:h-24 px-6 py-8 sm:px-[2vw] sm:py-[1vh] fixed top-0 z-20 bg-white sm:flex sm:items-center">
            <div class="absolute inset-0 w-full h-full" style="display: none;" id="menu-mobile">
                <?php wp_nav_menu(array('theme_location' => 'header-menu-mobile')); ?></div>
            <h1 class="sr-only"><a><?php bloginfo('name'); ?></a></h1>
            <h2 class="sr-only"><?php bloginfo('description'); ?></h2>
            <nav class="w-full flex justify-between items-center">
                <div class="flex items-center">
                    <a href="<?php echo home_url('/'); ?>">
                        <img class=" w-[70px] sm:w-20" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg"
                            alt="Logo">
                    </a>
                    <a href="<?php echo home_url('/'); ?>">
                        <img class=" w-[70px] sm:w-20 hidden md:block" src="<?php echo get_template_directory_uri(); ?>/img/logoName.svg"
                            alt="nom de la société">
                    </a>
                </div>
                <a href="<?php echo home_url('/'); ?>">
                    <div class="flex flex-col items-center w-[70px] font-extrabold text-[#0D38AA] sm:hidden">
                        <div class="text-lg">E-CAR</div>
                        <div class="text-xl">VTC</div>
                    </div>
                </a>
                <div class="flex flex-col items-center sm:hidden w-[70px] h-7 justify-center z-20 relative" id="icon"
                    onclick="toggleMenu()">
                    <div id="burger"
                        class="relative w-9 h-0.5 bg-[#0D38AA] after:w-9 after:h-0.5 after:bg-[#0D38AA] after:top-3 after:block after:absolute before:w-9 before:h-0.5 before:bg-[#0D38AA] before:-top-3 before:block before:absolute">
                    </div>
                </div>


                <div class="absolute sm:relative">
                    <?php wp_nav_menu(array('theme_location' => 'header-menu-desktop')); ?></div>

            </nav>
        </header>