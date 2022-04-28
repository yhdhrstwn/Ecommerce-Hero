         <div class="content-wrapper">

    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('home')?>">Home</a></li>
              <li class="breadcrumb-item active">Add</li>
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
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Add Products</h3>
              <div class="card-tools">
                <a href="<?php echo site_url('product')?>" class="btn btn-block btn-outline-secondary btn-sm">Kembali</a>
              </div>
						</div>
            <?php echo validation_errors(); ?>
            <form action="<?php echo site_url('product/simpan')?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama" name="Nama_barang" value="<?php echo set_value('Nama_barang');?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Stok</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Stok" name="Stok_barang" value="<?php echo set_value('Stok_barang');?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Harga" name="Harga_barang" value="<?php echo set_value('Harga_barang');?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Kategori</label>
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" id="customRadio1" name="Kategori" name="Kategori" value="Pria">
                      <label for="customRadio1" class="custom-control-label">Pria</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" id="customRadio2" name="Kategori" name="Kategori" value="Wanita">
                      <label for="customRadio2" class="custom-control-label">Wanita</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Jenis</label>
                    <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true" name="Jenis">
                      <option selected="selected" data-select2-id="19" value="Sendal">Sendal</option>
                      <option data-select2-id="80" value="Sepatu">Sepatu</option>
                      <option data-select2-id="81" value="Sendal Sepatu">Sendal Sepatu</option>
                    </select>
                      <span class="select2 select2-container select2-container--bootstrap4 select2-container--below select2-container--focus" dir="ltr" data-select2-id="18" style="width: 100%;">
                        <span class="selection">
                          <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-oylh-container">
                            <span class="select2-selection__arrow" role="presentation">
                              <b role="presentation"></b>
                            </span>
                          </span>
                        </span>
                        <span class="dropdown-wrapper" aria-hidden="true">                        
                        </span>
                      </span>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Deskripsi</label>
                    <textarea class="form-control" rows="3" placeholder="Deskripsi" name="Deskripsi" value="<?php echo set_value('Deskripsi');?>"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Gambar</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="Gambar" value="<?php echo set_value('Gambar');?>">
                        <label class="custom-file-label" for="exampleInputFile">Masukkan Gambar</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
					</div>

				</div>
			</div>
		</div>
	</section>
   
</div>

