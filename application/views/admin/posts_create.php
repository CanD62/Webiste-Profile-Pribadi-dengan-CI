  <section class="col-lg-9 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-rss-square mr-1"></i>
                  <?= $judul; ?>
                </h3>
               
              </div><!-- /.card-header -->
              <div class="card-body">
<h1><?php echo $judul;?></h1>

<?php
echo form_open('admin/posts/create');
echo "<p><label for='ptitle'>Title</label><br/>";
$data = array('name'=>'title','id'=>'ptitle','size'=>25);
echo form_input($data) ."</p>";

echo "<p><label for='ptags'>Tags</label><br/>";
$data = array('name'=>'tags','id'=>'ptags','size'=>25);
echo form_input($data) ."</p>";

echo "<p><label for='category_id'>Category </label><br/>";
echo form_dropdown('category_id',$cats) ."</p>";


echo "<p><label for='long'>Content</label><br/>";
$data = array('name'=>'isi','id'=>'long','rows'=>5, 'cols'=>'40');
echo form_textarea($data) ."</p>";


echo "<p><label for='status'>Status</label><br/>";
$options = array('draft' => 'draft', 'published' => 'published');
echo form_dropdown('status',$options) ."</p>";


echo form_submit('submit','create post');
echo form_close();


?>
   </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

           

          
            <!-- /.card -->
          </section>