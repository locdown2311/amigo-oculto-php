<!DOCTYPE html>
<html>

    <head>
        <title><?php echo $titulo; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/foundation.css'); ?>" />

        <script src="<?php echo base_url('assets/js/vendor/modernizr.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/vendor/jquery.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/foundation.min.js'); ?>"></script>
        <script>
            $(document).ready(function () {
                $(document).foundation();
            });
        </script>

    </head>
    <!-- Navigation -->
    <body>
        <nav class="top-bar" data-topbar role="navigation">
            <ul class="title-area">
                <li class="name">
                    <h1><a href="<?php echo base_url(''); ?>">AMIGO OCULTO</a></h1>
                </li>
                <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>

            <section class="top-bar-section">
                <!-- Left Nav Section -->
                <ul class="left">
                    <li><a href="<?php echo base_url('add'); ?>">CADASTRAR</a></li>
                </ul>
                <ul class="left">
                    <li><a href="<?php echo base_url('sorteio'); ?>">SORTEAR</a></li>
                </ul>
                <ul class="left">
                    <li><a href="<?php echo base_url('resultados'); ?>">RESULTADOS</a></li>
                </ul>
            </section>
        </nav>
