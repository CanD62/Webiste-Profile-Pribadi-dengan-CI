
 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
         
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <div class="card-title">
                  <?= $judul_konten; ?>
                </div>
              </div>
              <div class="card-body">
                <div class="row">
                  <?php
                  // var_dump($galeri);
                  foreach ($galeri as $key => $value) {
       
                    ?>
                    <div class="col-sm-2">
                    <a href="<?php echo base_url(); ?>lte3/dist/img/<?=$value['photo'];?>" data-toggle="lightbox" data-title="<?=$value['keterangan'];?>" data-gallery="gallery">
                      <img src="<?php echo base_url(); ?>lte3/dist/img/<?=$value['photo'];?>" width="300px" height="300px" class="img-fluid mb-2" alt="Foto Keluarga"/>
                    </a>
                  </div>
                  
                  <?php
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>