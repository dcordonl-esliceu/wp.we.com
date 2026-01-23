<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>MotosserasWeb</title>
</head>
<body <?php body_class(); ?>>
<div class="cabecera">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'infobasic' ); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo esc_url( home_url( '/acerca-de' ) ); ?>">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url( "contacto" ) ?>">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
