 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url(); ?>" class="brand-link">
      <img src="<?php echo base_url(); ?>lte3/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">My Web</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
     <!--  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url(); ?>lte3/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
             <li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/admin/dashboard" class="nav-link  <?php if($this->uri->segment(2)=='dashboard' && $this->uri->segment(3)!=='users' && $this->uri->segment(2)=='dashboard' && $this->uri->segment(3)!=='edit' && $this->uri->segment(2)=='dashboard' && $this->uri->segment(3)!=='create') echo $aktif; ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/admin/posts" class="nav-link <?php if($this->uri->segment(2)=='posts') echo $aktif; ?>">
              <i class="nav-icon fas fa-rss-square"></i>
              <p>
               Manage Posts
                <!--  <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/admin/categories" class="nav-link <?php if($this->uri->segment(2)=='categories') echo $aktif; ?>">
              <i class="nav-icon fas fa-filter"></i>
              <p>
               Manage Categori
                <!--  <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
        <li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/admin/galeri" class="nav-link <?php if($this->uri->segment(2)=='galeri') echo $aktif; ?>" >
              <i class="nav-icon fas fa-images"></i>
              <p>
                Manage Foto Keluarga
                <!--  <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
           <li class="nav-item">
           <a href="<?php echo base_url(); ?>index.php/admin/bio" class="nav-link <?php if($this->uri->segment(2)=='bio') echo $aktif; ?>" >
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                Manage Biodata
                <!--  <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
           <li class="nav-item">
           <a href="<?php echo base_url(); ?>index.php/admin/kontak" class="nav-link <?php if($this->uri->segment(2)=='kontak') echo $aktif; ?>" >
              <i class="nav-icon fas fa-address-book"></i>
              <p>
                Manage Kontak
                <!--  <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
           <a href="<?php echo base_url(); ?>index.php/admin/dashboard/users" class="nav-link <?php if($this->uri->segment(2)=='dashboard' && $this->uri->segment(3)=='users' || $this->uri->segment(2)=='dashboard' && $this->uri->segment(3)=='edit' || $this->uri->segment(2)=='dashboard' && $this->uri->segment(3)=='create') echo $aktif; ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Manage Pengguna
                <!--  <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
           
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>index.php/admin/dashboard/logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Keluar
               
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>