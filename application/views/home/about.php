<?php
 //var_dump($sekolah);
foreach ($biodata_ as $id => $name){
// print_r($name);
		// echo anchor("page/category/$id", $name)."<br/>";
		//  echo '<span class="product-description">
  //                       Semua tentang '.$name.'.
  //                     </span><hr/>';
	}



?>

 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary ">
            	<div class="card-header">
                <h3 class="card-title"><?= $judul_konten; ?></h3>
              </div>
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="<?php echo base_url(); ?>lte3/dist/img/<?=$name['photo'];?>"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?=$name['nama_lengkap'];?></h3>

                <p class="text-muted text-center">Software Engineer</p>

                 

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted"><?=$name['alamat'];?></p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <?=$name['skill'];?>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Quotes</strong>

                 <p class="text-muted"><i class="fa fa-quote-left"></i> <?=$name['quotes'];?> <i class="fa fa-quote-right"></i></p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
           <!--  <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div> -->
              <!-- /.card-header -->
              <!-- <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Malibu, California</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div> -->
              <!-- /.card-body -->
            <!-- /div> -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  
                  <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Education</a></li>
                  
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                 
                  <!-- /.tab-pane -->
                  <div class="active tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <!-- <div class="time-label">
                        <span class="bg-success">
                          My Education
                        </span>
                      </div> -->
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <!-- <div>
                        <i class="fas fa-envelope bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 12:05</span>

                          <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                          <div class="timeline-body">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                            quora plaxo ideeli hulu weebly balihoo...
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-primary btn-sm">Read more</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                          </div>
                        </div>
                      </div> -->
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <?php
                      foreach ($sekolah as $id1 => $name1){
//print_r($name1);

						?>
                      <div>
                        <i class="fas fa-graduation-cap bg-info"></i>

                        <div class="timeline-item">
                          <!-- <span class="time"><i class="far fa-clock"></i> 5 mins ago</span> -->

                          <h3 class="timeline-header border-0"><a href="#"><?php echo $name1['nama_sekolah']; ?></a><br> <?php echo $name1['jurusan']; ?><br> <?php echo $name1['tahun']; ?>
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
                        <i class="far fa-clock bg-gray"></i>
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
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
