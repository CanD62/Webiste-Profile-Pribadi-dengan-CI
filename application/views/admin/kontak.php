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
<!-- <p><a class="btn btn-info btn-sm" href="kontak/create">
                              <i class="fas fa-plus">
                              </i>
                              Upload Foto Baru
                          </a></p> -->
<?php
if ($this->session->flashdata('message')){
	echo "<div class='btn btn-block btn-info btn-lg'>".$this->session->flashdata('message')."</div>";
}

if (count($kontak)){
?>
 <table class="table table-bordered projects">
                  <thead>                  
                    <tr>
                      <th style="width: 1%">
                          #ID
                      </th>
                      <th style="width: 20%">
                          Jenis Kontak
                      </th>
                      <th style="width: 30%">
                          Data Kontak
                      </th>
                     <th style="width: 30%">
                          Url Kontak
                      </th>
                      <th style="width: 20%">Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>
 <?php
foreach ($kontak as $list){
?>                   
                    <tr>
                      <td><?=$list['id'];?></td>
                      <td><?=$list['nama_sosmed'];?></td>
                      <td><?=$list['username'];?></td>
                      <td><?=$list['link'];?></td>
                      <td class="project-actions text-left">
                        <a class="btn btn-info btn-sm" href="kontak/edit/<?=$list['id'];?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>  </td>
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