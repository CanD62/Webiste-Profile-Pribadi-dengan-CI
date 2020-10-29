<?php
$udata = array('name'=>'username','id'=>'u','size'=>15);
$pdata = array('name'=>'password','id'=>'p','size'=>15);


echo form_open("template/verify");
echo form_label('username','u') ."<br/>";
echo form_input($udata) . "</p>";
echo form_label('password','p') ."<br/>";
echo form_password($pdata) . "</p>";
echo form_submit('submit','Login');
echo form_close();


?>
