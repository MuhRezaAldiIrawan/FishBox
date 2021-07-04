<!DOCTYPE html>
<html lang="en">

<head>
    <title>REGISTRATION FORM UNTUK TOKO</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url('assets_toko/images/icons/favicon.ico'); ?>" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('assets_toko/vendor/bootstrap/css/bootstrap.min.css'); ?>" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('assets_toko/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets_toko/vendor/animate/animate.css'); ?>" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('assets_toko/vendor/css-hamburgers/hamburgers.min.css'); ?>" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets_toko/vendor/select2/select2.min.css'); ?>" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets_toko/css/util.csss'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets_toko/css/main.css'); ?>" />
    <!--===============================================================================================-->
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="<?= base_url('assets_toko/images/cewe.png'); ?>" alt="PNG" />
                </div>
                <form class="login100-form validate-form" method="post" action="<?= base_url('toko'); ?>">
                    <span class="login100-form-title"> Buat Toko </span>
                    <div class="wrap-input100 validate-input" data-validate="Username required">