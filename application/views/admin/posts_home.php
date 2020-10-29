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
<p><a class="btn btn-info btn-sm" href="posts/create">
                              <i class="fas fa-plus">
                              </i>
                              Create new post
                          </a></p>
<?php
if ($this->session->flashdata('message')){
	echo "<div class='message'>".$this->session->flashdata('message')."</div>";
}

if (count($posts)){
?>
 <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th>#ID</th>
                      <th>Judul Posts</th>
                      <th>Status</th>
                      <th><center>Action</center></th>
                    </tr>
                  </thead>
                  <tbody>
 <?php
foreach ($posts as $list){
?>                   
                    <tr>
                      <td><?=$list['id'];?></td>
                      <td><?=$list['title'];?></td>
                      <td><?=$list['status'];?></td>
                      <td class="project-actions text-center">
                        <a class="btn btn-info btn-sm" href="posts/edit/<?=$list['id'];?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a> <a class="btn btn-danger btn-sm" href="posts/delete/<?=$list['id'];?>">
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