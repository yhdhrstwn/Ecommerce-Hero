		 <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Images</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('home')?>">Home</a></li>
              <li class="breadcrumb-item active">Daftar Images</li>
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
							<h3 class="card-title">Daftar Images</h3>
							<div class="card-tools">
								<a href="<?php echo site_url('images/add')?>" class="btn btn-block btn-outline-primary btn-sm">Tambah images</a>
							</div>
						</div>
		 				<div class="car-body">
							<table class="table">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Gambar</th>
										<th>Title</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $i=1; ?>
									<?php foreach($imagess as $u){ ?>
									<tr>
										<td><?php echo $i; ?></td>
										<td><?php echo $u->Nama ?></td>
										<td>
											<img src="<?php echo base_url($u->Gambar)?>" width="150px" />
										</td>
										<td><?php echo $u->Title ?></td>
										<td>
											<a href="<?php echo site_url('images/edit/'.$u->ID)?>">
												<i class="fa fa-edit fs-2" title="Edit"></i>
											</a>
											<a href="<?php echo site_url('images/hapus/'.$u->ID)?>">
												<i class="fa fa-trash fs-2" title="Hapus"></i>
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


		
		
    