<?php 
include("db.php");
session_start();
function quote_smart($value,$con)
    {
       // Stripslashes
       if (get_magic_quotes_gpc()) {
           $value = stripslashes($value);
       }
       $value=trim($value);
       // Quote if not integer
       $value = mysqli_real_escape_string($con,$value);
       return $value;
    }
if($_SERVER["REQUEST_METHOD"] == "POST") {
		$search = htmlspecialchars($_POST['search']);
		$search=quote_smart($search,$con);
		$sql="SELECT * FROM SiteInfo
            WHERE (`Division` LIKE '%".$search."%') OR (`Details` LIKE '%".$search."%')";
		$result = mysqli_query($con,$sql);
         
        if(mysqli_num_rows($result) > 0){ // if one or more rows are returned do following
             
            while($results = mysqli_fetch_array($result)){
                echo "<p><h3>".$results['Division']."</h3>
                <h3>".$results['Thana']."</h3>".$results['Details']."</p>";
            }
             
        }
        else{
            echo "No results";
        }
         
	}
?>