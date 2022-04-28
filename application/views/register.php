<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

    <head>
        <title>Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!-- Custom Theme files -->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- //Custom Theme files -->
        <!-- web font -->
        <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
        <!-- //web font -->
        <!-- My CSS -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/register/')?>style.css" />
    </head>
    <body style="background-image: url(<?php echo base_url("admin/assets/images/")?>img.jpg);">
        <!-- main -->
        <div class="main-w3layouts wrapper">
            <h1>REGISTER</h1>
            <div class="main-agileinfo">
                <div class="agileits-top">
                    <form action="<?php echo site_url('member/submitregister')?>" method="post">
                        <input class="text" type="text" name="Username" placeholder="Username" required="">
                        <input class="text w3lpass" type="text" name="Nama_Lengkap" placeholder="Nama Lengkap" required="">
                        <input class="text" type="text" name="Alamat" placeholder="Alamat" required="">
                        <input class="text w3lpass" type="number" name="No_HP" placeholder="Nomor Handphone" required="">
                        <input class="text email" type="email" name="Email" placeholder="Email" required="">
                        <input class="text" type="password" name="Password" placeholder="Password" required="">
                        <div class="wthree-text">
                            <label class="anim">
                                <input type="checkbox" class="checkbox" required="">
                                <span>Saya Menyetujui <a href="<?= site_url('member/syarat')?>" style="color: #fff;" class="asu">Syarat & Ketentuan</a></span>
                            </label>
                            <div class="clear"> </div>
                        </div>
                        <input type="submit" value="Register">
                    </form>
                    <p>Sudah punya akun? <a href="<?php echo site_url('member')?>"> Login Sekarang!</a></p>
                </div>
            </div>
            <!-- copyright -->
            <div class="colorlibcopy-agile">
                <p>© 2022 Ujian Praktik Kelulusan | By <a href="#" target="_blank">Yehuda Hero Setiawan</a></p>
            </div>
            <!-- //copyright -->
            <ul class="colorlib-bubbles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <!-- //main -->
    </body>
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
        </script>
</html>