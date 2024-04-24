<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Irec Baltic</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="styles/style.css"> -->

    <?php wp_head(); ?>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.theme.min.css">
</head>

<body>
    <div class="fix">
    <div class="container">
        <div class="tower-header">
            <a href="#">
                <img src="<?php the_field('logo','options') ?>"alt="logo">
            <nav>
                <ul>
                    <li id="page1_link" class="active">
                        <a href="#">Apie mus</a>
                    </li>
                    <li id="page2_link">
                        <a href="#services">Teikiamos paslaugos</a>
                    </li>
                    <li id="page3_link">
                        <a href="#client">Mūsų klientai</a>
                    </li>
                    <li id="page4_link">
                        <a href="foto.html">Foto galerija</a>
                    </li>
                    <li id="page5_link">
                        <a href="#contact">Kontaktinė forma</a>
                    </li>
                    <li id="page5_link">
                        <a href="map.html">SVG map</a>
                    </li>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    </div>