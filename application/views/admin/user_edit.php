  <section class="col-lg-9 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-users mr-1"></i>
                  <?= $judul; ?>
                </h3>
               
              </div><!-- /.card-header -->
              <div class="card-body">
<h1><?php echo $judul;?></h1>

<?php
echo form_open('admin/dashboard/edit');
echo "<p><label for='uname'>Username</label><br/>";
$data = array('name'=>'username','id'=>'uname','size'=>25, 'value'=>$admin['username']);
echo form_input($data) ."</p>";

echo "<p><label for='email'>Email</label><br/>";
$data = array('name'=>'email','id'=>'email','size'=>50, 'value'=>$admin['email']);
echo form_input($data) ."</p>";

echo "<p><label for='pw'>Password</label><br/>";
$data = array('name'=>'password','id'=>'pw','size'=>25, 'value'=>$admin['password']);
echo form_password($data) ."</p>";

echo "<p><label for='status'>Status</label><br/>";
$options = array('active' => 'active', 'inactive' => 'inactive');
echo form_dropdown('status',$options, $admin['status']) ."</p>";

echo form_hidden('id',$admin['id']);
echo form_submit('submit','Update User');
echo form_close();


?>
                   </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

           

          
            <!-- /.card -->
          </section>