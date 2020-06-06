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

$sql = "select * FROM users where u_id='$cat'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
	$row = mysqli_fetch_assoc($result);
    $u_id=$row["u_id"]; $name=$row["name"]; $address=$row["address"];$phno=$row["phno"];$email=$row["email"];$password=$row["password"];

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yellow Bit Donors</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Advent+Pro">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aldrich">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Article-Dual-Column.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="assets/css/AXY-Contact-Us.css">
    <link rel="stylesheet" href="assets/css/AXY-Contact-Us1.css">
    <link rel="stylesheet" href="assets/css/Blog---Recent-Posts.css">
    <link rel="stylesheet" href="assets/css/Blog---Recent-Posts1.css">
    <link rel="stylesheet" href="assets/css/Button-Outlines---Pretty.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Contact-FormModal-Contact-Form-with-Google-Map.css">
    <link rel="stylesheet" href="assets/css/dh-card-image-left-dark.css">
    <link rel="stylesheet" href="assets/css/ensign-form.css">
    <link rel="stylesheet" href="assets/css/ensign-form1.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/SlideshowCarousel-fade-with-animated-captions-and-touch-swipe.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-one-B4.css">
    <link rel="stylesheet" href="assets/css/Team-one-B41.css">
    <link rel="stylesheet" href="assets/css/Team-with-rotating-cards.css">
    <link rel="stylesheet" href="assets/css/Team.css">
    <link rel="stylesheet" href="assets/css/Team1.css">
</head>

<body style="background-color:#515151;">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-center text-info" style="color:#ffa500;">sign up</h2>
        </div>
        <div class="col-12 col-sm-6 col-md-6 site-form">
            <form id="my-form" style="margin-left:410px;margin-right:-323px;margin-bottom:10px;color:rgb(0,0,0);" method="post" action="eu.php?link=<?php echo $u_id; ?>">
                <div class="form-group"><label class="sr-only" for="firstname">First Name</label><input class="form-control" type="text" value="<?PHP echo $name; ?>" name="name" placeholder="Name" autofocus="" id="firstname" style="color:rgb(0,0,0);"></div>
                <div class="form-group"><label class="sr-only" for="lastname">Address</label><input class="form-control" type="text" name="address" placeholder="Address" value="<?PHP echo $address; ?>" id="lastname" style="color:rgb(0,0,0);margin-bottom:16px;">
				<input class="form-control" type="text" name="password" placeholder="Password" id="lastname" value="<?PHP echo $password; ?>" style="color:rgb(0,0,0);padding-top:13px;margin-bottom:5px;"></div>
                <div class="form-group"><label class="sr-only" for="phonenumber">Phone Number</label><input class="form-control" type="tel" value="<?PHP echo $phno; ?>" name="phno" required="" placeholder="Phone" id="phonenumber" style="color:rgb(0,0,0);"></div>
                <div class="form-group"><label class="sr-only" for="email">Email Address</label><input class="form-control" type="email" name="email" value="<?PHP echo $email; ?>" required="" placeholder="Email" id="email" style="color:rgb(0,0,0);"></div>
                <div class="form-group"><label class="sr-only" for="messages">Last Name</label></div><button class="btn btn-light btn-lg" type="submit" id="form-btn" style="background-color:#ffffff;">save</button></form>
        </div>
        <div class="clearfix" style="margin-left:-12px;"></div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="assets/js/Contact-FormModal-Contact-Form-with-Google-Map.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/SlideshowCarousel-fade-with-animated-captions-and-touch-swipe.js"></script>
    <script src="assets/js/SlideshowCarousel-fade-with-animated-captions-and-touch-swipe1.js"></script>
</body>

</html>