<!DOCTYPE html>
<html lang="en">

<head>
    <title>FishBox -- Input Barang</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?= base_url('assets_input/images/icons/favicon.ico'); ?>" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('assets_input/vendor/bootstrap/css/bootstrap.min.css'); ?>" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('assets_input/fonts/font-awesome-4.7.0/css/font-awesome.min.css'); ?>" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets_input/vendor/animate/animate.css'); ?>" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('assets_input/vendor/css-hamburgers/hamburgers.min.css'); ?>" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets_input/vendor/select2/select2.min.css'); ?>" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets_login/css/util.css'); ?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets_login/css/main.css'); ?>" />
    <!--===============================================================================================-->
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="<?= base_url('assets_input/images/cewe1.png'); ?>" alt="PNG" />
                </div>
                <form class="login100-form validate-form" method="post" action="<?= base_url('input'); ?>">
                    <span class="login100-form-title"> Input Barang </span>
                    <div class="wrap-input100 validate-input" data-validate="Username required">