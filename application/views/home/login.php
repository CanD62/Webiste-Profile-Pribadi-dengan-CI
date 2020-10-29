 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
          <!-- /.col -->
          <div class="col-md-6">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  
                  <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab"><?= $judul_konten; ?></a></li>
                  
                </ul>
              </div><!-- /.card-header -->
      
    <div class="card-body login-card-body">
      <p class="login-box-msg">Masuk untuk melanjutkan<?php if($this->session->flashdata('result')<>'')
		echo "<p align='center' style='color:red'>".$this->session->flashdata('result')."</p>";
	?></p>

     <form name='login' action='<?php echo base_url();?>index.php/page/ceklogin' method='post' >
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Nama Pengguna">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control"  name="password" placeholder="Kata Sandi">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Ingat saya
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

     <!--  <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->

            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        <?php $this->load->view('home/t_/puput'); ?> 
          <div class="col-3">
            <div class="card card-primary">
              <div class="card-header">
                <div class="card-title">
                  Logo Universitas Stekom
                </div>
              </div>
              <div class="card-body">
                <div class="row">
               <center>
                    <div class="col-sm-11">
                    <a href="<?php echo base_url(); ?>lte3/dist/img/logo_stekom.png" data-toggle="lightbox" data-title="Universitas Stekom" data-gallery="gallery">
                      <img src="<?php echo base_url(); ?>lte3/dist/img/logo_stekom.png" class="img-fluid mb-5" alt="Foto Keluarga"/>
                    </a>
                  </div>
                  </center>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
