<?php //echo site_url('product/detail/'.$ID)?>
    <!-- my css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/')?>style.css" />
    <title>Home | HERO</title>
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
              <a class="nav-link active text-dark fs-5" aria-current="page" href="#">Home</a>
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

    <!-- Slider -->
    <section class="dua mb-4">
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <?php 
          $x = 0;
          foreach($sliders as $u){ ?>
            <?php
            $active = '';
            if ($x == 0){
              $active = "active";
            }
            ?>
            <div class="carousel-item <?php echo $active?>">
              <img src="<?php echo base_url('admin/'.$u->Gambar)?>" class="d-block w-100" alt="..." />
            </div>
          <?php 
            $x++;
          } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <!-- end slider -->

    <!-- card -->
    <section class="tiga">
      <h3 class="ms-4" style=" display: inline;">Product Populer</h3>
      <a href="<?php echo site_url('product/populer/') ?>" class="text-decoration-none fs-5" style=" float: right; margin-right: 15px; margin-top: 10px; color: #333;">Show all>></a>
      <div class="container mt-3 mb-4">
        <?php
          foreach($populer as $u){
            ?>
        <a href="<?php echo site_url('product/detail/'.$u->slug) ?>" class="text-decoration-none">
          <div class="card shadow-sm p-3 mb-5 bg-body rounded me-3">
            <img src="<?php echo base_url('admin/').$u->Gambar?>" alt="sendal sepatu" />
            <h4><?php echo $u->Nama_barang?></h4>
            <h6>IDR <?php echo number_format($u->Harga_barang)?></h6>
            <button class="btn btn-outline-secondary">Detail</button>
          </div>
        </a>
        <?php
          }
          ?>
        <a href="<?php echo site_url('product/populer/') ?>">
          <div class="card-icon">
            <div class="tinggi"></div>
            <i class="bi bi-arrow-right-circle-fill fs-1"></i>
          </div>
        </a>
      </div>

      <h3 class="ms-4" style=" display: inline;">New Product</h3>
      <a href="<?php echo site_url('product/new/') ?>" class="text-decoration-none fs-5" style=" float: right; margin-right: 15px; margin-top: 10px; color: #333;">Show all>></a>
      <div class="container mt-3 mb-4">
        <?php
          foreach($news as $u){
            ?>
        <a href="<?php echo site_url('product/detail/'.$u->slug) ?>" class="text-decoration-none">
          <div class="card shadow-sm p-3 mb-5 bg-body rounded me-3">
            <img src="<?php echo base_url('admin/').$u->Gambar?>" alt="sendal sepatu" />
            <h4><?php echo $u->Nama_barang?></h4>
            <h6>IDR <?php echo number_format($u->Harga_barang)?></h6>
            <button class="btn btn-outline-secondary">Detail</button>
          </div>
        </a>
        <?php
          }
          ?>
        <a href="<?php echo site_url('product/new/') ?>">
          <div class="card-icon">
            <div class="tinggi"></div>
            <i class="bi bi-arrow-right-circle-fill fs-1"></i>
          </div>
        </a>
      </div>

      <h3 class="ms-4" style=" display: inline;">All Product</h3>
      <a href="<?php echo site_url('product')?>" class="text-decoration-none fs-5" style=" float: right; margin-right: 15px; margin-top: 10px; color: #333;">Show all>></a>
      <div class="container mt-3 mb-4">
        <?php
          foreach($listBarang as $u){
            ?>
        <a href="<?php echo site_url('product/detail/'.$u->slug) ?>" class="text-decoration-none">
          <div class="card shadow-sm p-3 mb-5 bg-body rounded me-3">
            <img src="<?php echo base_url('admin/').$u->Gambar?>" alt="sendal sepatu" />
            <h4><?php echo $u->Nama_barang?></h4>
            <h6>IDR <?php echo number_format($u->Harga_barang)?></h6>
            <button class="btn btn-outline-secondary">Detail</button>
          </div>
        </a>
        <?php
          }
          ?>
        <a href="<?php echo site_url('product')?>">
          <div class="card-icon">
            <div class="tinggi"></div>
            <i class="bi bi-arrow-right-circle-fill fs-1"></i>
          </div>
        </a>
      </div>
    </section>
    <!-- end card -->
    
    <!-- gender -->
    <section class="empat">
      <h3 class="mt-4 ms-4">Man and Woman</h3>
      <div class="container">
        <a href="<?php echo site_url('men')?>" class="text-decoration-none">
          <div class="card text-white mt-3">
                <img src="<?php echo base_url('admin/'.$prias->Gambar)?>" class="card-img" alt="..." />
              <div class="card-img-overlay"></div>
          </div>
        </a>
        <a href="<?php echo site_url('women')?>" class="text-decoration-none">
          <div class="card text-white mt-3">
                <img src="<?php echo base_url('admin/'.$wanitas->Gambar)?>" class="card-img" alt="..." />
              <div class="card-img-overlay"></div>
          </div>
        </a>
      </div>
    </section>
    <!-- end gender -->

    <!-- cart -->
    <a href="<?php echo site_url('cart') ?>" class="cart">
      <img src="<?php echo base_url("admin/assets/images/")?>cart.png" width="65px" height="65px" alt="...">
    </a>
    <!-- end cart -->


