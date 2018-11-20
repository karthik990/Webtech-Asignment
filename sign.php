<html>

<?php
extract($_POST);
echo 'trying to sign in as '.$uname;
$db = mysqli_connect('localhost','uma1','','Users');
if(isset($db)){

//	mysql_select_db('test');
$sql = "INSERT INTO Login(userName, password) VALUES ('".$uname."','".$pwd."')";
	//echo $stmt;
	$res=mysqli_query($db,$sql);
	//print_r($res);

	session_start();
	$_SESSION['uname'] = $uname;
	echo "Thank you for signing in $uname"."<br/>";
	echo "<br/>"."Go to <a href='/WT/index.html'>Home page</a>";
		/*
		$arr = mysqli_fetch_array($res,MYSQLI_ASSOC);
		$item[1] = new Item();
		$item[1]->name = $arr["name"];
		*/

}
?>
</html>
