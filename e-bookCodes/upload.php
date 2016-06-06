<?php
	$target_path = "kumar/";
	$target_path = $target_path . basename( $_FILES['dileepfile']['name']);
	// echo $_FILES['dileepfile']['name'];
	$len=strlen($_FILES['dileepfile']['name']);
	// echo $len;
	$alias=$_FILES['dileepfile']['name'];
	if($alias[$len-1]=='f' &&$alias[$len-2]=='d' && $alias[$len-3]=='p')
	{
		move_uploaded_file($_FILES['dileepfile']['tmp_name'], $target_path);
		echo "File uploaded successfully";
	}
	else{
		echo "File not in pdf format";
	}
?>