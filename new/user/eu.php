<?PHP
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
$u_id=$_GET['link'];

$name=$_POST['name'];
$address=$_POST['address'];
$password=$_POST['password'];
$phno=$_POST['phno'];
$email=$_POST['email'];

$sql="update users set name='$name',address='$address',password='$password',phno='$phno',email='$email' where u_id='$u_id'";

if (mysqli_query($conn, $sql)) {


    echo "<SCRIPT type='text/javascript'> //not showing me this
        
       window.location.replace(\"http:users.php\");
    </SCRIPT>";


} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn); 
?>