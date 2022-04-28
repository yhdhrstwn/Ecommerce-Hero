      <!-- my css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/css/umum/')?>style.css" />
      <title>Profile</title>
  </head>
  <body>
      
      <!-- main -->
      <div class="container">
          <div class="main-body">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                      <input type="hidden" name="ID" value="<?php echo $listMember->ID?>">
                        <img src="<?php echo base_url('admin/assets/images/Profile.png')?>" width="150px" class="mt-3"/>
                      <div class="mt-4">
                        <h4><?php echo $listMember->Username?></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Nama Lengkap</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                      <?php echo $listMember->Nama_lengkap?>
                      </div>
                    </div>
                    <hr>
                    <div class="row ">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                      <?php echo $listMember->Email?>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Nomor Telpon</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                      <?php echo $listMember->No_HP?>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-3">
                        <h6 class="mb-0">Alamat</h6>
                      </div>
                      <div class="col-sm-9 text-secondary">
                      <?php echo $listMember->Alamat?>
                      </div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-sm-1">
                        <a class="btn btn-outline-secondary " target="__blank" href="<?php echo site_url('profile/edit')?>">Edit</a>
                      </div>
                      <div class="col-sm-11">
                          <a class="btn btn-outline-danger" href="<?php echo site_url('member/logout')?>">Logout</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <?php if($pesanan != NULL) { ?>
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                      <h2>Pesanan</h2>
                    </div>
                    <?php foreach($pesanan as $u) { ?>
                      <hr>
                      <input type="hidden" value="<?= $u->Id_pengguna ?>">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Tanggal Pesanan : </h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?php echo $u->tanggal_beli?>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Status Pesanan : </h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                          <?php echo $u->Status?>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Keterangan : </h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <?php echo $u->Note?>
                        </div>
                      </div>
                      <div class="row">
                        <div class="">
                          <a href="<?= site_url('profile/detail/'.$u->ID) ?>" class="btn btn-outline-warning mt-1">Detail Pesanan</a>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                </div>
                <?php } else { ?>
                  <?php } ?>
              </div>
            </div>
          </div>
        </div>
      <!-- end main -->