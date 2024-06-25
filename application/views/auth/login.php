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

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?php echo get_theme_uri('custom/auth/form/images/signin-image.jpg'); ?>" alt="sing up image"></figure>
                        <p class="copyright-agileinfo"> Pergi Ke <?php echo anchor(base_url(), get_store_name()); ?></p>
                        
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">Silahkan Login</h2>
                        <?php if ($flash_message) : ?>
            <div class="flash-message" style=" color: red;">
                <?php echo $flash_message; ?>
            </div><br><br>
            <?php endif; ?>

            <?php if ($redirection) : ?>
            <div class="flash-message" style="color: #778899;">
                Silahkan login untuk melanjutkan...
            </div><br><br>
            <?php endif; ?>

            <?php echo form_open('auth/login/do_login'); ?>
                        <form method="POST" class="register-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" value="<?php echo set_value('username', $old_username); ?>" placeholder="Username" minlength="4" maxlength="16" required>
                            </div>
                            <?php echo form_error('username'); ?>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" placeholder="Password" required>
                            </div>
                            <?php echo form_error('password'); ?>
                            <div class="form-group form-button">
                                <input type="submit" class="form-submit" value="Log in"/>
                            </div>
                            <div class="form-group">
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>Belum Punya Akun? Silahkan 
                                    <a href="<?php echo site_url('auth/register'); ?>" class="term-service">Buat Akun</a></label>
                            </div>
                            <?php echo form_close(); ?>
                        </form>
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