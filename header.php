<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<header>
    <div class="logo">
        <?php echo get_custom_logo(); ?>
    </div>
    <h1><a href="<?php echo esc_url( home_url( '/' ) ) ?>"><?php bloginfo('name') ?></a></h1>
</header>
<body>

    <div>