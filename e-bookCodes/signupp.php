	<?php

	define('DB_NAME','dev');
	define('DB_USER','root');
	define('DB_PASSWORD','');
	define('DB_HOST','localhost');
	
	$link=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
	
	$db_selected=mysql_select_db(DB_NAME,$link);
	
	
	
	$val1=$_POST['name'];
	$val2=$_POST['phone'];
	$val3=$_POST['email'];
	$val4=$_POST['password'];
	
	
	$sql="INSERT INTO checkt (name,phone,email,password) VALUES ('$val1','$val2','$val3','$val4')";
	if(!mysql_query($sql)) {
		echo "Already user exits";
	}
	else {
		echo "data entered successfuly";
		header("Location: index.html");
	}
	
	mysql_close();
	?>