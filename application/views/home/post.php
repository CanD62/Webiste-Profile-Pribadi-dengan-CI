<h2><?php
echo ($post['title']);
?></h2>
<?php
echo "Tgl : ",($post['pubdate']);
echo " | Category: ",($post['tags']);
echo auto_typography($post['isi']);
?>
<center>------------------------------------------------------------------------------</center>
<h3>Comments</h3>
<?php
if (count($comments)){
	foreach ($comments as $key => $list){
		echo "<b>Comment by ".$list['name'].":</b><br/>\n";
		echo auto_typography($list['isi']);
	}
	echo "<br/>";
}
?>

<p><b>Add your comment:</b></p>

<?php
echo form_open("page/addcomment");
echo form_label('your name','name') ."<br/>";
$data = array('name'=>'name','id'=>'name','size'=>25);
echo form_input($data) ."</p>";

echo form_label('your email','email') ."<br/>";
$data = array('name'=>'email','id'=>'email','size'=>25);
echo form_input($data) ."</p>";

echo form_label('your comment','comment') ."<br/>";
$data = array('name'=>'isi','id'=>'comment','rows'=>5, 'cols'=>'30');
echo form_textarea($data) ."</p>";

echo form_hidden('post_id',$post['id']);
echo form_submit('submit','add comment');
echo form_close();
?>

