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
              <li class="breadcrumb-item active">Daftar Admin</li>
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
							<h3 class="card-title">Daftar Admin</h3>
							<div class="card-tools">
								<a href="<?php echo site_url('admin/add')?>" class="btn btn-block btn-outline-primary btn-sm">Tambah admin</a>
							</div>
						</div>
		 				<div class="car-body">
							<table class="table">
								<thead>
									<tr>
										<th>No</th>
										<th>Username</th>
										<th>Email</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $i=1; ?>
									<?php foreach($admins as $u){ ?>
									<tr>
										<td><?php echo $i; ?></td>
										<td><?php echo $u->Username ?></td>
										<td><?php echo $u->Email ?></td>
										<td>
											<a href="<?php echo site_url('admin/edit/'.$u->ID)?>">
												<i class="fa fa-edit" title="Edit"></i>
											</a>
											<a href="<?php echo site_url('admin/hapus/'.$u->ID)?>">
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


		
		
    