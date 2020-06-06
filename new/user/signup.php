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

$name=$_POST['name'];
$address=$_POST['address'];
$password=$_POST['password'];
$phno=$_POST['phno'];
$email=$_POST['email'];

$sql="insert into users (name,address,phno,email,password)
VALUES ('$name','$address','$phno','$email','$password')";

if (mysqli_query($conn, $sql)) {


    
       header('Location: ../admin_home.html');




} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn); 
?>