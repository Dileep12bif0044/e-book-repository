<?php
	$link=mysqli_connect('localhost','root','');
	$db=mysqli_select_db($link,'dev');
	$sac1="insert into question values ('$_POST[uname]','$_POST[question]','')";
	mysqli_query($link,$sac1);
	echo "Question uploaded successfully";
?>