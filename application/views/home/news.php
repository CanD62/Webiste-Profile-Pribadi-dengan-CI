<html>
<head>
<title></title>
</head>
<body>
<div id="text">
	
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css" />	
	<table id="table" >
	
		<?php	
			
			
			foreach($berita as $m)
			{
			//$hasil = substr($m['isiberita'],0,300); // ambil sebanyak 260 karakter
				echo" <div id=bg_title><a href='".base_url()."index.php/template/news/".$m->no."'>".$m->judul."</a></div>
				<div id=isi_berita >
				<b>Ditulis oleh:</b> ".$m->penulis." <b>Tanggal: </b>".$m->waktu." WIB<br>
				
				".$m->isiberita." 
				
				
				</div>";
			}
	
		/*
			foreach($about as $m)
			{
				echo "<tr>".$m->judul."</tr> 
					<td>".$m->konten."</td>"; 						
						
			}		*/	
		?>
	</table>	
</div>
</body>
</html>