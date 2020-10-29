<?php
if (count($posts)){
	foreach ($posts as $key => $list){
		echo "<h2>".$list['title']."</h2>\n";
		echo "Tgl: ".$list['pubdate']."";
		echo " | category: ".$list['tags']."";
		echo auto_typography(word_limiter($list['isi'], 40));
		echo anchor('page/post/'.$list['id'],'Baca selengkapnya >>');
		echo '<hr>';
	}
	echo "";
}

?>