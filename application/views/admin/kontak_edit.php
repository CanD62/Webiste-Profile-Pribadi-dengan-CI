  <section class="col-lg-9 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-user-circle mr-1"></i>
                  <?= $judul; ?>
                </h3>
               
              </div><!-- /.card-header -->
              <div class="card-body">

<?= form_open('admin/kontak/edit');?>
                <div class="card-body">
                  
                  <input type="hidden" name="id" value="<?=$kontak['id'];?>" />
                  <div class="form-group">
                    <label >Jenis Kontak</label>
                    <input type="text" class="form-control" name="nama_sosmed" value="<?=$kontak['nama_sosmed'];?>" disabled>
                  </div>
                 
                  
                  <div class="form-group">
                    <label >Data Kontak</label>
                    <input type="text" class="form-control" name="username" value="<?=$kontak['username'];?>">
                  </div>
                  <div class="form-group">
                    <label >Url Kontak</label>
                    <input type="text" class="form-control" name="link" value="<?=$kontak['link'];?>">
                  </div>
                  
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              <?=form_close();?>
   </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

           

          
            <!-- /.card -->
          </section>