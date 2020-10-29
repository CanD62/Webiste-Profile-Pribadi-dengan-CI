 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  
                  <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab"><?= $judul_konten; ?></a></li>
                  
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                 
                  <!-- /.tab-pane -->
                  <div class="active tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      
                      <?php
                      foreach ($kontak as $id1 => $name1){
//print_r($name1);

						?>
                      <div>
                        <i class="fab fa-<?php echo $name1['icon']; ?> bg-info"></i>

                        <div class="timeline-item">
                          <!-- <span class="time"><i class="far fa-clock"></i> 5 mins ago</span> -->

                          <h3 class="timeline-header border-0"><a href="<?php echo $name1['link']; ?>" target="_blank"><?php echo $name1['nama_sosmed']; ?></a><br> <?php echo $name1['username']; ?><br> 
                          </h3>
                        </div>
                      </div>
					<?php
					}

					?>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <!-- <div>
                        <i class="fas fa-comments bg-warning"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                          <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                          <div class="timeline-body">
                            Take me to your leader!
                            Switzerland is small and neutral!
                            We are more like Germany, ambitious and misunderstood!
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                          </div>
                        </div>
                      </div> -->
                      <!-- END timeline item -->
                      <!-- timeline time label -->
                      <!-- <div class="time-label">
                        <span class="bg-success">
                          3 Jan. 2014
                        </span>
                      </div> -->
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                     <!--  <div>
                        <i class="fas fa-camera bg-purple"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                          <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                          <div class="timeline-body">
                            <img src="http://placehold.it/150x100" alt="...">
                            <img src="http://placehold.it/150x100" alt="...">
                            <img src="http://placehold.it/150x100" alt="...">
                            <img src="http://placehold.it/150x100" alt="...">
                          </div>
                        </div>
                      </div> -->
                      <!-- END timeline item -->
                      <div>
                        <i class="far fa-id-card bg-gray"></i>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                 
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
          <?php $this->load->view('home/t_/puput'); ?> 
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
