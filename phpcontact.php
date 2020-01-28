<?php
if($_POST){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$comments=$_POST['commments'];

	//Here Write Sql Insert commeand to srote 
	//the data into database as well as send acknowledgement mail 


	//Here i'm considering both sql insert and send mail success so $result=1
	$result=1;

	if($result){
		echo "success";
	}

exit();
}
?>