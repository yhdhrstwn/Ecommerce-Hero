    <!-- my css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/gender/')?>style.css" />
    <title>New Product</title>
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

    <!-- card -->
    <section class="tiga">
      <!-- shoes -->
      <h3 class="mt-4 ms-4">New product</h3>
      <div class="container mt-3">
          <?php foreach($new as $u) { ?>
            <a href="<?php echo site_url('product/detail/'.$u->slug) ?>" class="text-decoration-none">
            <div class="card shadow-sm p-3 mb-5 bg-body rounded me-2">
                <img src="<?php echo base_url('admin/').$u->Gambar?>" alt="sendal sepatu" />
                <h4><?php echo $u->Nama_barang?></h4>
                <h6>IDR <?php echo number_format($u->Harga_barang)?></h6>
                <button class="btn btn-outline-secondary">Detail</button>
            </div>
            </a>
            <?php } ?>
      </div>
      <!-- end shoes -->

    </section>
    <!-- end card -->

    <!-- cart -->
    <a href="<?php echo site_url('cart')?>" class="cart">
      <img src="<?php echo base_url("admin/assets/images/")?>cart.png" width="65px" height="65px" alt="...">
    </a>
    <!-- end cart -->
