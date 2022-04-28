      <!-- my css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/css/umum/')?>style.css" />
      <title>Profile</title>
  </head>
  <body>
      
      <!-- main -->
        <div class="container">
            <div class="main-body">
                    <div class="row">
                        <div class="col-lg-8">
                          <form action="<?php echo site_url('profile/updateData')?>" method="post">
                                <div class="card">
                                        <div class="card-body">
                                            <input type="hidden" name="ID" value="<?php echo $listMember->ID ?>">
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Username</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" class="form-control" name="username" value="<?php echo $listMember->Username ?>">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Nama Lengkap</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" class="form-control" name="namaLengkap" value="<?php echo $listMember->Nama_lengkap ?>">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Email</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" class="form-control" name="email" value="<?php echo $listMember->Email ?>">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Nomor Telpon</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="text" class="form-control" name="noHp" value="<?php echo $listMember->No_HP ?>">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Alamat</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <textarea class="form-control" name="alamat" value=""><?php echo $listMember->Alamat ?></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-3"></div>
                                                <div class="col-sm-9 text-secondary">
                                                    <input type="submit" class="btn btn-outline-primary px-4" value="Simpan Perubahan">
                                                    <a href="<?php echo site_url('profile') ?>" class="btn btn-outline-danger">Kembali</a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                          </form>
                        </div>
                    </div>
            </div>
        </div>
      <!-- end main -->