<div class="content-wrapper">    
  <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="clearfix hidden-md-up"></div>

            <div class="col-12 col-sm-6 col-md-4 mt-5">
              <a href="<?php echo site_url('pesanan') ?>">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-text" style="color: black;">Ordered</span>
                    <span class="info-box-number" style="color: black;"><?php echo $jumlahPesanan; ?></span> 
                  </div>
                </div>
              </a>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mt-5">
              <a href="<?php echo site_url('member') ?>">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text" style="color: black;">Costumer</span>
                      <span class="info-box-number" style="color: black;"><?php echo $jumlahUser; ?></span>
                    </div>
                </div>
              </a>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mt-5">
              <a href="<?php echo site_url('contact') ?>">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-text" style="color: black;">Inbox</span>
                    <span class="info-box-number" style="color: black;"><?php echo $jumlahInbox; ?></span>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card card-secondary">
                <div class="card-header">
                  <h3 class="card-title">Daftar Laporan</h3>
                  <div class="card-tools">
                    <a href="<?php echo site_url('home/export')?>" class="btn btn-block btn-outline-danger btn-sm">Export Laporan</a>
                  </div>
                </div>
                <div class="car-body">
                  <table class="table" id="mauexport">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Tanggal Beli</th>
                        <th>Nama Pembeli</th>
                        <th>Nama Barang</th>
                        <th>Jumlah Beli</th>
                        <th>Harga Barang</th>
                        <th>Size</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; ?>
                      <?php foreach($laporan as $u){ ?>
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $u->tanggal_beli ?></td>
                        <td><?php echo $u->Nama_lengkap ?></td>
                        <td><?php echo $u->Nama_barang ?></td>
                        <td><?php echo $u->Jumlah ?></td>
                        <td>IDR <?php echo number_format($u->Harga_barang)?></td>
                        <td><?php echo $u->Size ?></td>
                      </tr>
                      <?php $i++; ?>
                      <?php } ?>
                    </tbody>
                  </table>
              
                </div>
              </div>

            </div>
          </div>
        </div>
  </section>
</div>