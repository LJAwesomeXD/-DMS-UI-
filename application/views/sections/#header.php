<?php
    /** HEADER SECTION VIEW **/
    /*-----------------------*/
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="charset/utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=isset($title) ? $title  : "DesignMyShirt | " . ucfirst($this->router->fetch_method());?></title>

       <!--stylesheets-->
        <!--spectre css framework-->
        <link rel="stylesheet"
              href="<?=base_url()?>public/libs/semantic-ui/semantic.min.css">

        <!--open sans font when available-->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />

        <!--main stylesheet-->
        <link rel="stylesheet/less"
              href="<?=base_url()?>public//css/main.less">


       <!--scripts-->
        <!--jquery-->
        <script src="<?=base_url()?>public/js/jquery.min.js"></script>
        <!--semantic-->
        <script src="<?=base_url()?>public/libs/semantic-ui/semantic.min.js"></script>
        <!--less-->
        <script src="<?=base_url()?>public/js/less.min.js"></script>
        <!--main script-->
        <script src="<?=base_url()?>public/js/main.js"></script>
    </head>
    <body>
        <div class="main-view">
            <!--HEADER-->
            <div class="header-component">
                <div class="container">
                   <?php $this->load->view("templates/+logo"); ?>
                   <?php $this->load->view("templates/+menubar"); ?>
                </div>
            </div>
