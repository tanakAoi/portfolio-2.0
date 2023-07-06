<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ) ?> | <?php bloginfo( 'description' ) ?></title>
    <link rel="stylesheet" href="https://use.typekit.net/oqw7gwu.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <?php wp_head(); ?>
</head>
<body id="top" <?php body_class(); ?>>
    <div class="container">

        <!-- Header -->
        <header class="header">
            <div class="header__inner">
                <a href="index.php" class="header__logo">
                    <svg id="Lager_2" data-name="Lager 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 157.48 157.61">
                        <polygon class="cls-1" points="60.81 66.62 45.41 29.91 29.73 66.62 60.81 66.62"/>
                        <path class="cls-1" d="m71.62,66.62h84.93C150.22,16.83,91.92-15,46.19,7.18l25.43,59.44Z"/>
                        <path class="cls-1" d="m108.17,76.72h-32.23l10.86,25.38h-11.28l-10.73-25.85H25.74l-11,25.85H3.6c11.81,42.27,63.15,67.55,104.58,49.72v-75.1Z"/>
                        <path class="cls-1" d="m118.85,76.72v69.83c23.68-13.96,39.51-40.43,38.6-69.83h-38.6Z"/>
                        <path class="cls-1" d="m44.89,7.77C11.14,22.94-8.45,65.33,3.54,101.92L44.89,7.77Z"/>
                    </svg>
                </a>
                <ul class="header__menu">
                    <li class="menu__item"><a href="#about" class="menu__link">About me</a></li>
                    <li class="menu__item"><a href="#contact" class="menu__link">Contact</a></li>
                    <span class="menu__item mode-toggle material-symbols-outlined">dark_mode</span>
                </ul>
            </div>
        </header>