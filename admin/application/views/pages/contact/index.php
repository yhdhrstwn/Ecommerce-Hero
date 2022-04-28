		 <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Pesan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('home')?>">Home</a></li>
              <li class="breadcrumb-item active">Daftar Pesan</li>
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
							<h3 class="card-title">Daftar Pesan</h3>
							<div class="card-tools">
							</div>
						</div>
		 				<div class="car-body">
							<table class="table">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Lengkap</th>
										<th>Email</th>
										<th>Nomor Handphone</th>
										<th>Pesan</th>
										<th>Gambar</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $i=1; ?>
									<?php foreach($listPesan as $u){ ?>
									<tr>
										<td><?php echo $i; ?></td>
										<td><?php echo $u->Nama_lengkap ?></td>
										<td><?php echo $u->Email ?></td>
										<td><?php echo $u->No_HP ?></td>
										<td style="white-space:pre-line">
                                            <?php echo $u->Pesan ?>
                                        </td>
										<td>
											<?php
												if ($u->Gambar != NULL){
													$url = str_replace("./admin/", "", $u->Gambar);
													$image = base_url($url); 
												}else{
													$image = base_url('assets/template/adminlte/dist/img/logoH.png');
												}
											?>
											<a href="<?= $image; ?>" target="_blank">
												<img src="<?php echo $image?>" width="150px" />	
											</a>
                                        </td>
										<td>
											<a href="<?php echo site_url('contact/hapus/'.$u->ID)?>">
												<i class="fa fa-trash" title="Hapus"></i>
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


		
		
    