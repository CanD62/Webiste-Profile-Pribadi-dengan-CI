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
                <p><a class="btn btn-info btn-sm" href="categories/create">
                              <i class="fas fa-plus">
                              </i>
                              Create new categori
                          </a></p>

<?php
if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}

if (count($categories)){



?>


 <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th>#ID</th>
                      <th>Nama</th>
                      <th>Sort Order</th>
                      <th>Status</th>
                      <th><center>Action</center></th>
                    </tr>
                  </thead>
                  <tbody>

 <?php
foreach ($categories as $key => $list){
?>                   
                    <tr>
                      <td><?=$list['id'];?></td>
                      <td><?=$list['name'];?></td>
                      <td><?=$list['sortorder'];?></td>
                      <td><?=$list['status'];?></td>
                      <td class="project-actions text-center">
                        <a class="btn btn-info btn-sm" href="categories/edit/<?=$list['id'];?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a> <a class="btn btn-danger btn-sm" href="categories/delete/<?=$list['id'];?>">
                              <i class="fas fa-trash">
                              </i>
                              Hapus
                          </a> </td>
                     
                    </tr>
<?php
  }

}
?>                   
                  </tbody>
                </table>
                   </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

           

          
            <!-- /.card -->
          </section>