<html>
	<body>
	<?php
		$link=mysqli_connect("localhost","root","");
		$db=mysqli_select_db($link,"dev");
		$user=$_POST['user'];
		$pass=$_POST['password'];
		$eject="select name,password from checkt";
		$ver=mysqli_query($link,$eject);
		while($qq=mysqli_fetch_row($ver))
		{
			if($qq[0]==$user && $qq[1]==$pass && $user!='dileep' && $pass!='janu'){
				header("Location: index.html");
			}
		    else if($user=='dileep' && $pass=='janu'){
				header("Location: dileep.php");
			}
			else{
				echo "either username or password is incorrect or you are not a member.";
			}
	    }
	?>
	</body>
</html>	