<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="id-ID">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php echo get_store_name(); ?></title>

    <!-- Font Icon -->
    <link href="<?php echo get_theme_uri('custom/auth/form/fonts/material-icon/css/material-design-iconic-font.min.css'); ?>" rel="stylesheet" media="all">

    <!-- Main css -->
    <link href="<?php echo get_theme_uri('custom/auth/form/css/style.css'); ?>" rel="stylesheet" media="all">
</head>
<body>

    <div class="main">

           <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Silahkan Daftar</h2>
                        <?php echo form_open('auth/register/verify'); ?>
                        <form method="POST" class="register-form">
                            <div class="form-group">
                                <label><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" placeholder="Nama lengkap" name="name" value="<?php echo set_value('name'); ?>" required>
                            <?php echo form_error('name'); ?>
                            </div>
                            <div class="form-group">
                                <label><i class="zmdi zmdi-email"></i></label>
                                <input minlength="10" type="email" placeholder="Email" name="email" value="<?php echo set_value('email'); ?>" required>
                                    <?php echo form_error('email'); ?>
                            </div>
                            <div class="form-group">
                                <label><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" placeholder="No. HP" minlength="9" maxlength="15" name="phone_number" value="<?php echo set_value('phone_number'); ?>" required>
                                    <?php echo form_error('phone_number'); ?>
                            </div>
                            <div class="form-group">
                                <label><i class="zmdi zmdi-lock"></i></label>
                                <input type="text" placeholder="Alamat" name="address" value="<?php echo set_value('address'); ?>" required>
                            <?php echo form_error('address'); ?>

                            </div>
                            <div class="form-group">
                                <label><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="text" placeholder="Username" minlength="4" maxlength="16" name="username" value="<?php echo set_value('username'); ?>" required>
                                    <?php echo form_error('username'); ?>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>" required>
                                    <?php echo form_error('password'); ?>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" class="form-submit" value="Register"/>
                            </div>
                            <div class="form-group">
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>Sudah Punya Akun? Silahkan 
                                    <a href="<?php echo site_url('auth/login'); ?>" class="term-service">Login</a></label>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="<?php echo get_theme_uri('custom/auth/form/images/signup-image.jpg'); ?>" alt="sing up image"></figure>
                         <p class="copyright-agileinfo"> Pergi Ke <?php echo anchor(base_url(), get_store_name()); ?></p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="<?php echo get_theme_uri('vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo get_theme_uri('js/main.js'); ?>"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>