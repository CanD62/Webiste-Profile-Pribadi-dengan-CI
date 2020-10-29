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

<?= form_open_multipart('admin/bio/edit');?>
                <div class="card-body">
                  
                  <input type="hidden" name="id" value="<?=$biodata['id'];?>" />
                  <div class="form-group">
                    <label >Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_lengkap" value="<?=$biodata['nama_lengkap'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File Foto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="foto" class="custom-file-input" id="exampleInputFile">
                        <input type="hidden" name="old_foto" value="<?=$biodata['photo'];?>" />
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label >Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="<?=$biodata['alamat'];?>">
                  </div>
                  <div class="form-group">
                    <label >Skill</label>
                    <input type="text" class="form-control" name="skill" value="<?=$biodata['skill'];?>">
                  </div>
                  
                  <div class="form-group">
                    <label >Quotes</label>
                    <input type="text" class="form-control" name="quotes" value="<?=$biodata['quotes'];?>">
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