<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="https://kreasi.nurulfikri.ac.id" class="brand-link">
        <img src="<?php echo base_url('dist/img/logo.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light"> EONS</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo base_url('dist/img/avatar4.png') ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">
              <?php
                if($this->session->has_userdata('USERNAME')){
                  echo $this->session->userdata('USERNAME');
                }
              ?>
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
               <li> 
              <a href="<?php echo base_url("index.php/kegiatan/dasboard") ?>" class="nav-link"> 
                <i class="nav-icon fas fa-tachometer-alt"></i> 
                <p> 
                  Dashboard 
                </p> 
              </a> 
            </li> 
          <?php
            if($this->session->userdata('ROLE')=='admin'){
          ?>
            <li> 
              <a href="<?php echo base_url("index.php/daftar/index") ?>" class="nav-link"> 
                <i class="nav-icon fas fa-book-open"></i> 
                <p> 
                  Daftar 
                   
                </p> 
              </a> 
            </li> 
            <li> 
              <a href="<?php echo base_url("index.php/jeniskegiatan/index") ?>" class="nav-link"> 
                <i class="nav-icon fas fa-archive"></i> 
                <p> 
                  jenis kegiatan 
                   
                </p> 
              </a> 
            </li> 
            <li> 
              <a href="<?php echo base_url("index.php/kategoripeserta/index") ?>" class="nav-link"> 
                <i class="nav-icon fas fa-address-book"></i> 
                <p> 
                  kategori peserta 
                   
                </p> 
              </a> 
            </li> 
          <?php
            }
          ?>
            <li> 
              <a href="<?php echo base_url("index.php/kegiatan/index") ?>" class="nav-link"> 
                <i class="nav-icon fas fa-chart-line"></i> 
                <p> 
                  kegiatan 
                   
                </p> 
              </a> 
            </li> 
          <?php
            if($this->session->userdata('ROLE')=='admin'){
          ?>
            <li> 
              <a href="<?php echo base_url("index.php/users/index") ?>" class="nav-link"> 
                <i class="nav-icon fas fa-user"></i> 
                <p> 
                  users 
                   
                </p> 
              </a> 
            </li> 
          <?php
            }
          ?>
            <li> 
              <a href="<?php echo base_url("index.php/login/logout")?>" class="nav-link"> 
                <i class="nav-icon fas fa-sign-out-alt"></i> 
                <p> 
                  Logout 
                   
                </p> 
              </a> 
            </li> 
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
