		 <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('home')?>">Home</a></li>
              <li class="breadcrumb-item active">Daftar Pesanan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card card-secondary">
						<div class="card-header">
							<h3 class="card-title">Daftar Pesanan</h3>
						</div>
		 				<div class="card-body">
							<table class="table">
								<thead>
									<tr>
										<th>No</th>
										<th>Kode Pesanan</th>
										<th>Nama Pemesan</th>
										<th>Bukti pembayaran</th>
										<th>Status</th>
                                        <th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $i=1; ?>
									<?php foreach($pesanan as $u){ ?>
									<tr>
										<td><?php echo $i; ?></td>
										<td><?php echo $u->Kode ?></td>
										<td><?php echo $u->Nama_lengkap ?></td>
										<td>
                                            <?php
												if ($u->bukti_pembayaran != NULL){
													$url = str_replace("./admin/", "", $u->bukti_pembayaran);
													$image = base_url($url); 
												}else{
													$image = base_url('assets/template/adminlte/dist/img/logoH.png');
												}
											
											?>
											<a href="<?= $image ?>" target="_blank">
												<img src="<?php echo $image?>" width="150px" />
											</a>
                                        </td>
										<td><?php echo $u->Status ?></td>
                                        <td>
											<?php if($u->Status == 'process') {?>
												<a href="<?php echo site_url('pesanan/konfirm/'.$u->ID)?>">
												<i class="fa fa-edit fa-2" title="Proces"></i>
											</a>
											<?php } ?>
											<a href="<?php echo site_url('pesanan/detail/'.$u->ID)?>">
												<i class="fa fa-eye fa-4" title="Detail"></i>
											</a>
										</td>
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


		
		
    