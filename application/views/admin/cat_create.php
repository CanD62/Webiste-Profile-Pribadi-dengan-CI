  <section class="col-lg-9 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-filter mr-1"></i>
                  <?= $judul; ?>
                </h3>
               
              </div><!-- /.card-header -->
              <div class="card-body">
<h1><?php echo $judul;?></h1>

<?php
echo form_open('admin/categories/create');
echo "<p><label for='catname'>Name</label><br/>";
$data = array('name'=>'name','id'=>'catname','size'=>25);
echo form_input($data) ."</p>";

echo "<p><label for='short'>Short Description</label><br/>";
$data = array('name'=>'shortdesc','id'=>'short','size'=>40);
echo form_input($data) ."</p>";

echo "<p><label for='long'>Long Description</label><br/>";
$data = array('name'=>'longdesc','id'=>'long','rows'=>5, 'cols'=>'40');
echo form_textarea($data) ."</p>";

echo "<p><label for='status'>Status</label><br/>";
$options = array('active' => 'active', 'inactive' => 'inactive');
echo form_dropdown('status',$options) ."</p>";


echo "<p><label for='order'>Sort Order</label><br/>";
$data = array('name'=>'sortorder','id'=>'order','size'=>5);
echo form_input($data) ."</p>";




echo form_submit('submit','create category');
echo form_close();


?>
   </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

           

          
            <!-- /.card -->
          </section>