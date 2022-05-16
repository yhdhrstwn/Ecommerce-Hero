        <!-- my css -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/umum/')?>style.css">
        <title>Transaksi</title>
    </head>
    <body>
    
        <!-- main -->
        <section>   
            <div class="container">
              <div class="main-body">
                <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <div class="card mt-5 mb-5">
                      <div class="card-body" style="position: relative;padding-bottom: 25px;">
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
                      </div>
                    </div>
                  </div> 
                </div>
              </div>
              <div class="main-body">
                <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <div class="card mb-5">
                      <h3 class="mt-2 ms-2 mb-2">Identitas Penerima</h3>
                      <p class="ms-3">Pastikan jika nama,email,nomor telpon, dan alamat anda sudah sesuai. <br>Jika ingin melakukan perubahan anda dapat mengedit profile anda!</p>
                      <form action="<?= site_url('transaksi/bayar/'.$transaksi->Id_pembayaran) ?>" method="POST" enctype="multipart/form-data">
                        <div class="card-body">
                          <input type="hidden" name="Id_transaksi">
                          <div class="row mb-3">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Nama Penerima</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              <p><?php echo $transaksi->Nama_lengkap; ?></p>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              <p><?php echo $transaksi->Email; ?></p>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              <p><?php echo $transaksi->No_HP; ?></p>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Alamat</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              <p><?php echo $transaksi->Alamat; ?></p>
                            </div>
                          </div>
                          <div class="row mb-4">
                            <div class="col-sm-3">
                              <h6 class="mb-0">BANK</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              <select name="bank" id="bank"  class="form-control select2bs4 select2-hidden-accessible" style="width: 100%; margin-top: -11px;">
                                <option value="pilih">--Pilih bank--</option>
                                <?php foreach($bank as $b) { ?>
                                  <option value="<?php echo $b->ID ?>" data-keterangan="<?php echo $b->rek  . " a.n ".$b->an ?>"><?php echo $b->bank ?></option>
                                <?php } ?>
                              </select>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <div class="col-sm-3">
                              <h6 class="mb-0">No Rekening</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              <p id="norekDetail">-</p>
                            </div>
                          </div>
                          <div class="row mb-3">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Bukti Transfer</h6>
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
        </section>
        <!-- end main -->