<div class="content-wrapper">

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Bank</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="<?php echo site_url('home')?>">Home</a></li>
          <li class="breadcrumb-item active">Edit</li>
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
                        <h3 class="card-title">Edit Bank</h3>
                        <div class="card-tools">
                          <a href="<?php echo site_url('bank')?>" class="btn btn-block btn-outline-secondary btn-sm">Kembali</a>
                        </div>
                    </div>
        <?php echo validation_errors(); ?>
        <form action="<?php echo site_url('bank/updateData')?>" method="post">
            <div class="card-body">

                <input type="hidden" name="ID" value="<?php echo $jenis->ID?>">

                <div class="form-group">

                    <label for="exampleInputEmail1">Nama Bank</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Bank" name="bank" value="<?php echo $jenis->bank?>">
                    
                    <label for="exampleInputEmail1">Nomor Rekening</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Rekening" name="rek" value="<?php echo $jenis->rek?>">

                    <label for="exampleInputEmail1">Atas Nama</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Rekening" name="an" value="<?php echo $jenis->an?>">
                    
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

