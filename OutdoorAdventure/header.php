<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <?php wp_head(); ?>
    <title>Outdoor Adventure</title>
</head>

<body>
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="<?php echo site_url('')?>">Home</a>
            </li>
            <li>
                <a href="<?php echo site_url('/about');?>">About</a>
            </li>
            <li>
                <a href="<?php echo site_url('/services');?>">Services</a>
            </li>
            <li>
                <a href="<?php echo site_url('/projects');?>">Projects</a>
            </li>
            <li>
                <a href="<?php echo site_url('/contact');?>">Contact</a>
            </li>
            
        </ul>
    </div>

    <nav>
        <div id="logo-img">
                  <img src="<?php echo get_TEMPLATE_DIRECTORY_URI(); ?>/img/white-logo.png" alt="outdoor logo">
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <a class="active" href="<?php echo site_url('');?>">Home</a>
            </li>
             <li>
                <a href="<?php echo site_url('/about')?>">About</a>
            </li>
            <li>
                <a href="<?php echo site_url('/services')?>">Services</a>
            </li>
            <li>
                <a href="<?php echo site_url('/projects')?>">Projects</a>
            </li>
            <li>
                <a href="<?php echo site_url('/contact')?>">Contact</a>
            </li>
            <li>
                <a class="take-action" href="#">TAKE ACTION</a>
            </li>
        </ul>
    </nav>

    