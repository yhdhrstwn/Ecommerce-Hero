      <!-- my css -->
      <link rel="stylesheet" href="<?php echo base_url('assets/css/umum/')?>style.css" />
      <title>Profile</title>
  </head>
  <body>
<div class="content-wrapper">
    <div class="container">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8 mt-2 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h2>Detail Pesanan</h2>
                            <hr>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Harga Barang</th>
                                        <th>Jumlah</th>
                                        <th>Size</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; ?> 
                                    <?php foreach($detail as $u){ ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $u->Nama_barang ?></td>
                                        <td>IDR <?php echo number_format($u->Harga_barang)?></td>
                                        <td><?php echo $u->Jumlah ?></td>
                                        <td><?php echo $u->Size ?></td>
                                        <?php $hitung = $u->Harga_barang * $u->Jumlah; ?>
                                        <td>IDR <?php echo number_format($hitung)?></td>
                                    </tr>
                                    <?php $i++; ?>
                                    <?php } ?>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>IDR <?php echo number_format($detail[0]->Total)?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="">Gambar</h6>
                                </div>
                                <div class="col-sm-9"> 
                                    <?php
										if ($u->Gambar != NULL){
											$url = base_url('admin/').$u->Gambar;
											$image = $url; 
										}else{
											$image = base_url('admin/assets/template/adminlte/dist/img/logoH.png');
										}
									?>
                                    <a href="<?= $url ?>" target="_blank">
                                        <img src="<?= $image ?>" alt="ss" width="100px">
                                    </a>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-3">
                                    <h6>Note</h6>
                                </div>
                                <div class="col-sm-9">
                                    <?php echo $u->Note; ?>
                                </div>
                            </div>
                            <a href="<?php echo site_url('profile') ?>" class="btn btn-outline-primary mt-4">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>