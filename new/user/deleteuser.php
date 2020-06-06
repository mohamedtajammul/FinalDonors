<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "donate";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if($_GET['link']!= null)
$cat=$_GET['link'];

$sql = "DELETE FROM users where u_id='$cat'";

if(mysqli_query($conn, $sql))
{
$message="deleted succesfully";
echo "<SCRIPT type='text/javascript'> //not showing me this
        window.location.replace(\"http:users.php\");
    </SCRIPT>";
}
else
{
	 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
