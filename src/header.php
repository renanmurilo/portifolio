<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link href="https://fonts.googleapis.com/css?family=La+Belle+Aurore" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <title><?php echo wp_title(); ?></title>
</head>

<body>

    <div id="menu-nav">
        <a class="logo" href="#"><img src="" alt=""></a>

        <nav class="menu">
            <a href="<?php echo site_url();?>/index" class="home-link active"><i class="lnr lnr-home"></i></a>
            <a href="<?php echo site_url();?>/skills"><i class="lnr lnr-cog"></i></a>
            <a href="<?php echo site_url();?>/mywork"><i class="lnr lnr-eye"></i></a>
            <a href="<?php echo site_url();?>/contato"><i class="lnr lnr-envelope"></i></a>
        </nav>
        <ul>
            <li>
                <a href="https://www.facebook.com/renan.dossantosgomes" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li>
                <a href="https://www.linkedin.com/in/renanmurilo/" target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </li>
            <li>
                <a href="https://github.com/renanmurilo" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
            </li>
        </ul>
    </div>