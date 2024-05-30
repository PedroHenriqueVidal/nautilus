<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
    <?php do_action(wp_enqueue_scripts()) ?>
    <link rel="stylesheet" href="<?=file_get_contents('/assets/css/styles.css')?>">
</head>

<body <?php body_class(); ?> style="margin: 0;">
    <?php wp_body_open(); ?>
    <header>
        <img src="<?=get_theme_file_uri('/assets/img/brand-persona-logo-4x.png') ?>" alt="" id="LogoBrandPersona" style="margin-left: 151px;">

        <a href="" style="width:53px; height:41px; margin-left: 400px;">Home</a>
        <a href="" style="width:159px;">Por que Brand Persona</a>
        <a href="" style="width:74;">O mercado</a>
        <a href="" style="width:69px;">Vantagens</a>
        <a href="" style="width:105px;">Como funciona</a>
        <a href="" style="width:60px;">O combo</a>
        <a href="" style="width:56px;">Contato</a>
    </header> 
    
    
    