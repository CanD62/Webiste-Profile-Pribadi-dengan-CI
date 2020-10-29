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
<p><a class="btn btn-info btn-sm" href="galeri/create">
                              <i class="fas fa-plus">
                              </i>
                              Upload Foto Baru
                          </a></p>
<?php
if ($this->session->flashdata('message')){
	echo "<div class='btn btn-block btn-info btn-lg'>".$this->session->flashdata('message')."</div>";
}

if (count($galeri)){
?>
 <table class="table table-bordered projects">
                  <thead>                  
                    <tr>
                      <th style="width: 1%">
                          #ID
                      </th>
                      <th style="width: 20%">
                          Foto
                      </th>
                      <th style="width: 30%">
                          Keterangan
                      </th>
                    
                      <th style="width: 20%">Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>
 <?php
foreach ($galeri as $list){
?>                   
                    <tr>
                      <td><?=$list['id'];?></td>
                      <td> 
                                  <img alt="Foto Keluarga" height="100px" width="100px" src="<?php echo base_url(); ?>lte3/dist/img/<?=$list['photo'];?>">
                              </td>
                      <td><?=$list['keterangan'];?></td>
                      <td class="project-actions text-left">
                        <a class="btn btn-info btn-sm" href="galeri/edit/<?=$list['id'];?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a> <a class="btn btn-danger btn-sm" href="galeri/delete/<?=$list['id'];?>">
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