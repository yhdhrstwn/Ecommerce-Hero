
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo site_url('') ?>" class="brand-link">
      <img src="<?php  echo base_url('assets/template/adminlte')?>/dist/img/logoH.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">HEROShop</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php  echo base_url('assets/template/adminlte')?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <?php $u = $this->session->userdata('Username'); ?>
          <a href="#" class="d-block">Hallo, <?php echo $u ?>
          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="<?php echo site_url('home')?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-box"></i>
              <p>
                Manage shop
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url('images')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Images</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('product')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url('bank')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bank</p>
                </a>
              </li>
            </ul>
          </li>
					
          
					<li class="nav-item">
            <a href="<?php echo site_url('pesanan') ?>" class="nav-link">
              <i class="nav-icon fas fa-boxes"></i>
              <p>
                Ordered
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="<?php echo site_url('contact')?>" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Inbox
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="<?php echo site_url('member')?>" class="nav-link">
              <i class="nav-icon fa fa-user-circle"></i>
              <p>
                Costumer
              </p>
            </a>
          </li>

					<li class="nav-item">
            <a href="<?php echo site_url('admin')?>" class="nav-link">
              <i class="nav-icon fa fa-user-circle"></i>
              <p>
                Admin
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
