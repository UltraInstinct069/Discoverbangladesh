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
		$uname=htmlspecialchars($_POST['uname']);
		$msg=htmlspecialchars($_POST['msg']);
		$uname=quote_smart($uname,$con);
		$msg=quote_smart($msg,$con);
		$sql="INSERT into review(Review,user)values('$msg','$uname')";
		$result = mysqli_query($con,$sql);
	}
}
function getComments($con){	

}

 ?>