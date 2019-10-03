<?php



$username = $_POST['username'];
$password = $_POST['password'];

echo "username: " , $username;
echo " password: " , $password;

// Create connection
$conn = new mysqli("localhost","root","root","user");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    while($row = mysqli_fetch_array($result)) {
        $success = true;
    }
    if($success == true) {
        $_SESSION['username']= $username;

        header("location: welcome.php");

        //redirect to home page
    } else {
        echo '<div class="alert alert-danger">Oops! It looks like your username and/or password are incorrect. Please try again.</div>';
    }
?>
