
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <!-- my bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
        <!-- my icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
        <!-- my fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre:wght@300&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
        <!-- my css -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/login/')?>style.css">
    </head>
    <body>
        <?php
        $error = $this->session->flashdata('error');
        if ( $error){
          echo "<div class='pesan'>".$error."</div>";
        }
        ?>
        <div class="body" style="background-image: url(<?php echo base_url("admin/assets/images/")?>Profile.png);"></div>
            <?php echo validation_errors(); ?>
            <form action="<?php echo site_url('member/login')?>" method="POST">
                <div class="grad"></div>
                <div class="header">
                <h5 style="
                    position: absolute;
                    margin-left: 215px;
                    top: -80px;
                    width: 249px;
                    text-shadow: 1px 1px #666;
                    color: #ddd;
                "> Anda Harus Login Terlebih Dahulu!</h5>
                    <div>Hero<span>Shop</span></div>
                </div>
                <br>
                <div class="login">
                        <input type="email" placeholder="Email" name="email" value="<?php echo set_value('email'); ?>"><br>
                        <input type="password" placeholder="Password" name="password"><br>
                        <input type="submit" value="Login">
                        <br>
                        <h6 class="mt-2 " style="color: #ddd;text-shadow: 1px 1px #444;">Belum Punya akun? <a href="<?php echo site_url('member/register')?>" class="text-decoration-none text-register fs-6" style="color: #ddd;">Register sekarang!</a></h6>
                </div>
            </form>
    </body>
    </html>