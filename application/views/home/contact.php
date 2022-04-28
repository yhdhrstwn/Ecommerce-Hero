    <!-- my css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/contact/')?>style.css" />
    <title>HERO | Contact</title>
  </head>
  <body>
    <!-- Navbar -->
    <section class="satu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand text-dark fs-3" href="#">HERO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link active text-dark fs-5" aria-current="page" href="<?php echo site_url('home')?>">Home</a>
              <a class="nav-link text-dark fs-5" href="<?php echo site_url('product')?>">Product</a>
              <a class="nav-link text-dark fs-5" href="<?php echo site_url('about')?>">About</a>
              <a class="nav-link text-dark fs-5" href="<?php echo site_url('contact')?>">Contact</a>
              <?php
              $login = $this->session->userdata('member_id');
              if (!$login){
                ?>
                <a class="nav-link text-dark fs-5" href="<?php echo site_url('member')?>">Login</a>
              <?php }else{?>
                <a class="nav-link text-dark fs-5" href="<?php echo site_url('profile')?>">Profile</a>
              <?php } ?>
            </div>
          </div>
        </div>
      </nav>
    </section>
    <!-- end navbar -->

    <!-- jumbotron -->
    <section class="dua">
      <div class="jumbotron jumbotron-fluid" style="background-image: url(<?php echo base_url('admin/').$listJumbotron->Gambar?>";>
        <div class="container"></div>
      </div>
    </section>
    <!-- end jumbotron -->

    <!-- main -->
    <div class="container">
      <div class="main-body">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card">
              <form action="<?php echo site_url('contact/send')?>" enctype="multipart/form-data" method="POST">
                <div class="card-body">
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" class="form-control" name="namaLengkap" value="<?php echo $listPengguna->Nama_lengkap?>">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" class="form-control" name="email" value="<?php echo $listPengguna->Email?>">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="text" class="form-control" name="no_hp" value="<?php echo $listPengguna->No_HP?>">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Pesan</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <textarea type="text" name="pesan" class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Images</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <input type="file" name="gambar" class="form-control"></input>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9 text-secondary">
                      <input type="submit" class="btn btn-primary px-4" value="Send ">
                      <i class="bi bi-send"></i>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end main -->

    <!-- cart -->
    <a href="<?php echo site_url('cart')?>" class="cart">
      <img src="<?php echo base_url("admin/assets/images/")?>cart.png" width="65px" height="65px" alt="...">
    </a>
    <!-- end cart -->
