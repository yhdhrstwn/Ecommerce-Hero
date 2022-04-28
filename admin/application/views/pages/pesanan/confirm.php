<div class="content-wrapper">

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Product</h1>
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
                        <h3 class="card-title">Confirm</h3>
                        <div class="card-tools">
                            <a href="<?php echo site_url('pesanan')?>" class="btn btn-block btn-outline-secondary btn-sm">Kembali</a>
                        </div>
                    </div>
                    <?php echo validation_errors(); ?>
                    <form action="<?php echo site_url('pesanan/note')?>" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                        <div class="form-group">
                            <input type="hidden" name="ID" value="<?= $ID; ?>"> 
                            <label>Aksi</label>
                            <select class="form-control select2bs4 select2-hidden-accessible" style="width: 100%;" data-select2-id="17" tabindex="-1" aria-hidden="true" name="Status">
                                <option selected="selected" data-select2-id="19" value="process">Process</option>
                                <option data-select2-id="80" value="success">Success</option>
                                <option data-select2-id="81" value="failed">Failed</option>
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
                            <label for="exampleInputFile">Gambar proses pengiriman/bukti transfer<span class="text-danger" >*jika barang failed</span> </label>
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile" name="Gambar" value="">
                                <label class="custom-file-label" for="exampleInputFile">Masukkan Gambar</label>
                            </div>
                            </div> 
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Note</label>
                            <textarea class="form-control" rows="3" placeholder="Note" name="Note" value=""></textarea>
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

