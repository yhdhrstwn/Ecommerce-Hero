    <!-- my css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/about/')?>style.css" />
    <title>HERO | About</title>
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

    <!-- Main -->
    <section class="tiga">
      <div class="container">
        <h4 style="text-align: center; " class="mt-5 mb-5">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta consequatur illum architecto"</h4>
        <h2>Tentang Perusahaan</h2>
        <img src="<?php echo base_url('admin/assets/images/')?>img.jpg" alt="kk" width="300px" height="300px" style="margin: 10px 0 10px 400px;">
        <p style="text-align: justify; text-indent: 0.3in;" class="ms-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut laudantium dolorem adipisci ullam sequi at consequuntur provident rem? Ipsam quis veniam assumenda repudiandae, officiis expedita voluptas atque odio! Delectus, quod illo, quisquam iure quae ut aspernatur exercitationem, corrupti eveniet iusto animi. Consequatur alias nulla amet ab, deleniti aperiam quibusdam accusamus possimus cum eius sed? Voluptatum ex nesciunt tempore ea totam ab quidem, assumenda architecto blanditiis fugit nihil cupiditate id laboriosam. Ut, suscipit explicabo placeat aliquam, voluptatum eaque reiciendis in alias aliquid itaque necessitatibus. Corporis eligendi rerum eum fugiat atque consectetur expedita distinctio debitis itaque! Atque nesciunt adipisci veritatis corrupti assumenda.</p>


        <h2 class="mt-2">Sejarah Perusahaan</h2>
        <p style="text-align: justify; text-indent: 0.3in;" class="ms-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur eaque quis dolorem, ab aperiam mollitia porro. Adipisci earum rem non dolorum, voluptas quos, saepe nobis sit sunt ducimus officiis excepturi harum beatae sapiente laboriosam perspiciatis quasi modi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, sapiente?</p>
        <p style="text-align: justify; text-indent: 0.3in;" class="ms-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aut laudantium dolorem a5dipisci ullam sequi at consequuntur provident rem? Ipsam quis veniam assumenda repudiandae, officiis expedita voluptas atque odio! Delectus, quod illo, quisquam iure quae ut aspernatur exercitationem, corrupti eveniet iusto animi. Consequatur alias nulla amet ab, deleniti aperiam quibusdam accusamus possimus cum eius sed? Voluptatum ex nesciunt tempore ea totam ab quidem, assumenda architecto blanditiis fugit nihil cupiditate id laboriosam. Ut, suscipit explicabo placeat aliquam, voluptatum eaque reiciendis in alias aliquid itaque necessitatibus. Corporis eligendi rerum eum fugiat atque consectetur expedita distinctio debitis itaque! Atque nesciunt adipisci veritatis corrupti assumenda.</p>
        <p style="text-align: justify; text-indent: 0.3in;" class="ms-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit placeat, fugiat doloremque numquam in esse corrupti recusandae, provident iste dolor deleniti minima atque sint expedita amet iure voluptate cumque eligendi aspernatur nostrum. Accusamus sunt ullam aspernatur officia nihil dolorum veniam velit, natus, reprehenderit quam voluptatibus beatae odio incidunt fuga excepturi obcaecati dolores numquam ex necessitatibus nobis. Minus aperiam facilis itaque molestiae explicabo nulla similique cupiditate?</p>
        
      </div>

    </section>
    <!-- End Main -->

    <!-- cart -->
    <a href="<?php echo site_url('cart')?>" class="cart">
      <img src="<?php echo base_url("admin/assets/images/")?>cart.png" width="65px" height="65px" alt="...">
    </a>
    <!-- end cart -->
