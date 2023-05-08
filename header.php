<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo the_title(); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php wp_head();?>

    </head>

    <body <?php body_class(); ?>>
        <nav class="navbar navbar-expand-lg navbar-dark bg-jitu p-0" id="d_topbar">
            <div class="container menu-cont">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ul1">
                    <li class="nav-item">
                        <a class="nav-link active link_p" aria-current="page" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link_p" href="#">Careers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link_p" href="#">Contacts</a>
                    </li>
                </ul>
            </div> 
        </nav>

        <nav class="navbar navbar-expand-lg navbar-light bg-white p-0">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo esc_url(get_template_directory_uri());?>/assets/img/logo-jitu-red.svg" alt="The Jitu Red Company logo" width="150" class="d-inline-block align-text-top">
                </a>
                <div class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </div>
                <div class="nav-lev1 collapse navbar-collapse" id="navbarText">
                    <div>
                        <span id="extra_linkz">
                            <div><a class="nav-link active link_p2" aria-current="page" href="#">About</a></div> 
                            <div><a class="nav-link link_p2" href="#">Careers</a></div>
                            <div style="padding-left: 20px;"><a class="nav-link link_p2" href="#">Contacts</a></div>
                        </span>
                    </div>
                    <div class="navbar-nav ul2">
                        <a class="nav-link active link_p2" aria-current="page" href="#">Technology</a>
                        <a class="nav-link link_p2" href="#">BPO</a>
                        <a class="nav-link link_p2" href="#">Training</a>
                    </div>
                </div>
            </div>
        </nav>