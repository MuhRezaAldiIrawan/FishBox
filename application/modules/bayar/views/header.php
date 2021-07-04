<!DOCTYPE html>
<html lang="en">

<head>
    <title>FORM BAYAR</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url('assets_bayar/images/icons/favicon.ico'); ?>" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('assets_bayar/vendor/bootstrap/css/bootstrap.min.css'); ?>" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('assets_bayar/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets_bayar/vendor/animate/animate.css'); ?>" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('assets_bayar/vendor/css-hamburgers/hamburgers.min.css'); ?>" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets_bayar/vendor/select2/select2.min.css'); ?>" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets_bayar/css/util.csss'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets_bayar/css/main.css'); ?>" />
    <!--===============================================================================================-->
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="<?= base_url('assets_bayar/images/money.png'); ?>" alt="PNG" />
                </div>
                <form class="login100-form validate-form" method="post" action="<?= base_url('bayar'); ?>">
                    <span class="login100-form-title"> Checkout </span>
                    <div class="wrap-input100 validate-input" data-validate="Username required">