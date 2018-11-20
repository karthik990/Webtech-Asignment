<html>

<?php
extract($_POST);
echo 'trying to login as '.$uname."</br>";
$db = mysqli_connect('localhost','uma1','','Users'); 
if(isset($db)){

//	mysql_select_db('test');
	$stmt = "SELECT * FROM Login where userName='".$uname."'and password='".$pwd."'"; 
	//echo $stmt;
	$res=mysqli_query($db,$stmt);
//	print_r($res);
	if(mysqli_num_rows($res)>0){

		session_start();
		$_SESSION['uname'] = $uname;
		echo "Welcome $uname"."<br/>";
		echo "<br/>"."Go to <a href='/WT/index.html'>Home page</a>";
		/*
		$arr = mysqli_fetch_array($res,MYSQLI_ASSOC);
		$item[1] = new Item();
		$item[1]->name = $arr["name"];
		*/
	}
	else{

		echo "Want to sign up?<a href='/WT/sign_up.html'>Yes</a>
		<a href='/WT/index.html'>No</a>";
	}
}
?>
</html>
