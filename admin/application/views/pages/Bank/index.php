		 <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Bank</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('home')?>">Home</a></li>
              <li class="breadcrumb-item active">Daftar Bank</li>
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
							<h3 class="card-title">Daftar Bank</h3>
							<div class="card-tools">
								<a href="<?php echo site_url('bank/add')?>" class="btn btn-block btn-outline-primary btn-sm">Tambah Bank</a>
							</div>
						</div>
		 				<div class="car-body">
							<table class="table">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama BANK</th>
										<th>Nomor Rekening</th>
										<th>Atas Nama</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $i=1; ?>
									<?php foreach($jenis as $u){ ?>
									<tr>
										<td><?php echo $i; ?></td>
										<td><?php echo $u->bank ?></td>
										<td><?php echo $u->rek ?></td>
										<td><?php echo $u->an ?></td>
										<td>
											<a href="<?php echo site_url('bank/edit/'.$u->ID)?>">
												<i class="fa fa-edit" title="Edit"></i>
											</a>
											<a href="<?php echo site_url('bank/hapus/'.$u->ID)?>">
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


		
		
    