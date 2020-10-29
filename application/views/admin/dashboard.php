
<?php $this->load->view('home/t_/head'); ?> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/TINYMCE/JSCRIPTS/TINY_MCE/tiny_mce_src.js"></script>
<script type="text/javascript">
		tinyMCE.init({
			// General options
			mode : "textareas",
			theme : "advanced",
			plugins : "safari,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
			// Theme options
	theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,cut,copy,paste,pastetext,pasteword,|,search,replace,|",
	theme_advanced_buttons2 :
	"styleselect,formatselect,fontselect,fontsizeselect,forecolor,backcolor",
	theme_advanced_buttons3 : "bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|",
			theme_advanced_toolbar_location : "top",
			theme_advanced_toolbar_align : "left",
			theme_advanced_statusbar_location : "bottom",
			theme_advanced_resizing : true,
			// Example content CSS (should be your site CSS)
			content_css : "css/content.css",
			// Drop lists for link/image/media/template dialogs
			template_external_list_url : "lists/template_list.js",
			external_link_list_url : "lists/link_list.js",
			external_image_list_url : "lists/image_list.js",
			media_external_list_url : "lists/media_list.js",
			// Replace values for the template plugin
			template_replace_values : {
				username : "Some User",
				staffid : "991234"
			}
		});
		
		function convLinkVC(strUrl, node, on_save) {
				strUrl=strUrl.replace("../","");
				return strUrl;
		   } 
		
		function ajaxLoad() {
		var ed = tinyMCE.get('elm');

		// Do you ajax call here, window.setTimeout fakes ajax call
		ed.setProgressState(1); // Show progress
		window.setTimeout(function() {
			ed.setProgressState(0); // Hide progress
			ed.setContent('HTML content that got passed from server.');
		}, 3000);
	}

	function ajaxSave() {
		var ed = tinyMCE.get('elm');

		// Do you ajax call here, window.setTimeout fakes ajax call
		ed.setProgressState(1); // Show progress
		window.setTimeout(function() {
			ed.setProgressState(0); // Hide progress				
		}, 3000);
	}

</script>
<!-- /TinyMCE -->
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php $this->load->view('home/t_/nav'); ?> 
  
<?php $this->load->view('admin/admin_menu'); ?> 
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 <?php
  if(($this->uri->segment(2)=='dashboard' && $this->uri->segment(3)!=='users') && ($this->uri->segment(2)=='dashboard' && $this->uri->segment(3)!=='create') && ($this->uri->segment(2)=='dashboard' && $this->uri->segment(3)!=='edit')) {

 $this->load->view($main);
  } else{ 


?>
<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
       
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
         
          <!-- Left col -->
        
              
                  <!-- Morris chart - Sales -->
                 
           <?php $this->load->view($main);?>


           
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <!-- KANAN -->
          

          
            <?php  $this->load->view('home/t_/puput'); ;?>

      <!--  -->
       
<?php
        } ?>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $this->load->view('home/t_/footer'); ?> 
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->




<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo base_url(); ?>lte3/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>lte3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url(); ?>lte3/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>lte3/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo base_url(); ?>lte3/dist/js/demo.js"></script>

<!-- PAGE SCRIPTS -->
<script src="<?php echo base_url(); ?>lte3/dist/js/pages/dashboard2.js"></script>
  <script src="<?php echo base_url(); ?>lte3/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
          <script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
