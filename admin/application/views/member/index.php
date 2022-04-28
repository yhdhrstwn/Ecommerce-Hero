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
              <li class="breadcrumb-item active">Daftar Member</li>
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
							<h3 class="card-title">Daftar Pengguna</h3>
						</div>
		 				<div class="car-body">
							<table class="table">
								<thead>
									<tr>
										<th>No</th>
										<th>Username</th>
										<th>Nama Lengkap</th>
										<th>Alamat</th>
										<th>Nomor Telepon</th>
										<th>Email</th>
									</tr>
								</thead>
								<tbody>
									<?php $i=1; ?>
									<?php foreach($listPengguna as $u){ ?>
									<tr>
										<td><?php echo $i; ?></td>
										<td><?php echo $u->Username ?></td>
										<td><?php echo $u->Nama_lengkap ?></td>
										<td><?php echo $u->Alamat ?></td>
										<td><?php echo $u->No_HP ?></td>
										<td><?php echo $u->Email ?></td>
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


		
		
    