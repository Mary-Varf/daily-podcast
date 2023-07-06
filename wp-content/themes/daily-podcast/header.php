<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Podcast</title>
    <?php wp_head(); ?>
</head>
<body>
<main>
    <header>
        <div class="container">
            <div class="header">
                <a href="<?php echo site_url(); ?>" class="header-logo">
                    <img src="<?php echo INTERNO_IMG_DIR ?>/logo.svg" alt="Logo">
                </a>

                <?php
                wp_nav_menu( [
                    'menu'            => 'Main Menu',
                    'container'       => 'nav',
                    'menu_class'      => 'header__nav',
                ] );
                ?>
                <button class="btn-primary" onclick="openModal()">Subscribe</button>
            </div>
        </div>
    </header>