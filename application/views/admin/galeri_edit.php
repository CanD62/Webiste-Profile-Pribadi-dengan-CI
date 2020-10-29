  <section class="col-lg-9 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-images mr-1"></i>
                  <?= $judul; ?>
                </h3>
               
              </div><!-- /.card-header -->
              <div class="card-body">
<!-- <?php
echo form_open('admin/posts/edit');

echo "<p><label for='ptitle'>Title</label><br/>";
$data = array('name'=>'title','id'=>'ptitle','size'=>25, 'value' =>$post['title']);
echo form_input($data) ."</p>";

echo "<p><label for='ptags'>Tags</label><br/>";
$data = array('name'=>'tags','id'=>'ptags','size'=>25, 'value' =>$post['tags']);
echo form_input($data) ."</p>";

echo "<p><label for='category_id'>Category </label><br/>";
echo form_dropdown('category_id',$cats,$post['category_id']) ."</p>";


echo "<p><label for='long'>Content</label><br/>";
$data = array('name'=>'isi','id'=>'long','rows'=>5, 'cols'=>'40', 'value' =>$post['isi']);
echo form_textarea($data) ."</p>";


echo "<p><label for='status'>Status</label><br/>";
$options = array('draft' => 'draft', 'published' => 'published');
echo form_dropdown('status',$options,$post['status']) ."</p>";


echo form_hidden('id',$post['id']);
echo form_submit('submit','update page');
echo form_close();


?> -->



<?= form_open_multipart('admin/galeri/edit');?>
                <div class="card-body">
                  
                  <input type="hidden" name="id" value="<?=$foto['id'];?>" />
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="foto" class="custom-file-input" id="exampleInputFile">
                        <input type="hidden" name="old_foto" value="<?=$foto['photo'];?>" />
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      
                    </div>
                  </div>
                  

                  <div class="form-group">
                    <label >Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" value="<?=$foto['keterangan'];?>">
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