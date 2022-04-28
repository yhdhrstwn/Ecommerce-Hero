<div class="content-wrapper">

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Admin</h1>
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
                        <h3 class="card-title">Add Admin</h3>
                        <div class="card-tools">
                          <a href="<?php echo site_url('admin')?>" class="btn btn-block btn-outline-secondary btn-sm">Kembali</a>
                        </div>
                    </div>
                <?php echo validation_errors(); ?>
                <form action="<?php echo site_url('admin/simpan')?>" method="post">
                    <div class="card-body">
                        <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Username" name="username" value="<?php echo set_value('username');?>">
                        </div>

                        <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Email" name="email" value="<?php echo set_value('email');?>">
                        </div>

                        <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password" name="password" value="<?php echo set_value('password');?>">
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

