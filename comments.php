<?php 
//include 'dbh.php';
$uid=$date=$msg="";
function setComments($con){
	function quote_smart($value,$con)
		{
		   // Stripslashes
		   if (get_magic_quotes_gpc()) {
		       $value = stripslashes($value);
		   }
		   $value=trim($value);
		   // Quote if not integer
		   if (!is_numeric($value)) {
       $value = mysqli_real_escape_string($con,$value);
   }
		   return $value;
		}
	$uid=$date=$msg="";
	if(isset($_POST['commentSubmit'])){
		$uid=htmlspecialchars($_POST['uid']);
		$uname=htmlspecialchars($_POST['uname']);
		$placeid=htmlspecialchars($_POST['placeid']);
		$msg=htmlspecialchars($_POST['msg']);
		$uid=quote_smart($uid,$con);
		$uname=quote_smart($uname,$con);
		$placeid=quote_smart($placeid,$con);
		$msg=quote_smart($msg,$con);
		$sql="INSERT into review(Review,user)values('$msg','$uname')";
		$result = mysqli_query($con,$sql);

		header("Location: CoxBazar.php");
        exit;


	}
	
}

function getComments($con){
	

	
}

 ?>