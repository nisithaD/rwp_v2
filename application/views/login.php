<!DOCTYPE html>
<html lang="en">
<head>
    <title>Isuru Apparel (PVT) Ltd. | Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/public/vendor/bootstrap/css/bootstrap.min.css')?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/public/fonts/font-awesome-4.7.0/css/font-awesome.min.css')?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/public/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/public/vendor/animate/animate.css')?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/public/vendor/css-hamburgers/hamburgers.min.css')?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/public/vendor/animsition/css/animsition.min.css')?>">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/public/css/util.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/public/css/main.css')?>">
    <!--===============================================================================================-->
</head>
<body style="background-color: #666666;">

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form action="<?php echo base_url('auth/login') ?>" method="post" class="login100-form validate-form">
                <span class="login100-form-title p-b-43">
						Isuru Apparel (pvt) Ltd.
					</span>
					<span style="font-size: 25px" class="login100-form-title p-b-43">
						Login to continue
					</span>

                <?php echo validation_errors(); ?>

                <?php if(!empty($errors)) {
                    echo $errors;
                } ?>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input type="email"  class="input100" name="email" id="email" autocomplete="off">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Email</span>
                </div>


                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input type="password" class="input100" name="password" id="password" autocomplete="off">
                    <span class="focus-input100"></span>
                    <span class="label-input100">Password</span>
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Login
                    </button>
                </div>
            </form>

            <div class="login100-more" style="background-image: url('<?php echo base_url('assets/public/images/bg-01.jpg')?>');">
            </div>
        </div>
    </div>
</div>

<!--===============================================================================================-->
<script src="<?php echo base_url('assets/public/vendor/jquery/jquery-3.2.1.min.js')?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/public/vendor/animsition/js/animsition.min.js')?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/public/vendor/bootstrap/js/popper.js')?>"></script>
<script src="<?php echo base_url('assets/public/vendor/bootstrap/js/bootstrap.min.js')?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/public/vendor/select2/select2.min.js')?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/public/vendor/daterangepicker/moment.min.js')?>"></script>
<script src="<?php echo base_url('assets/public/vendor/daterangepicker/daterangepicker.js')?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/public/vendor/countdowntime/countdowntime.js')?>"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url('assets/public/js/main.js')?>"></script>


</body>
</html>