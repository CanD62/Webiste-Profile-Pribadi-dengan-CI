<?php
if (count($cats)){
	foreach ($cats as $id => $name){

		echo anchor("page/category/$id", $name)."<br/>";
		 echo '<span class="product-description">
                        Semua tentang '.$name.'.
                      </span><hr/>';
	}
}
?>



