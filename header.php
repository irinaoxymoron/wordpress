<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon/apple-touch-icon-114x114.png" />

   <?php wp_head(); ?>
</head>
<body<?php if ( !is_front_page() && !is_home() ) : ?> class="inside"<?php endif ?>>

<aside class="aside">
    <div class="aside__button" title="menu">
        <div class="aside__row"></div>
        <div class="aside__row"></div>
        <div class="aside__row"></div>
    </div>
    <div class="aside__content">
        <div class="user__info">
            <?php echo get_the_post_thumbnail(4); ?>
            <h2 class="user__title"><?php echo get_bloginfo('name'); ?></h2>
            <p class="user__description"><?php echo get_bloginfo('description'); ?></p>
        </div>
        <nav class="main-nav">
            <ul class="main-nav__list">
                <li class="main-nav__item"><a href="index.php" class="main-nav__link">Портфолио</a></li>
                <li class="main-nav__item"><a href="../about.html" class="main-nav__link">Обо мне</a></li>
                <li class="main-nav__item"><a href="../contacts.html" class="main-nav__link">Контакты</a></li>
            </ul>

            <?php wp_nav_menu('menu=left_mnu'); ?>
        </nav>
    </div>
</aside>
<div class="content<?php if ( is_front_page() && is_home() ) : ?> gallery<?php endif ?>">