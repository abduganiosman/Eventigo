<?php
// Include config file
//require_once "config.php";



$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$pre = $_POST['check'];

//echo "username: " , $username;
//echo " password: " , $password;
//echo " firstname: " , $firstname;
//echo " lastname: " , $lastname;
//echo " address: " , $address;
//echo " premium: " , $pre;



// Create connection
$conn = new mysqli("localhost","root","root","user");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$query = "select count(*) as cntUser from user where username='".$username."'";

$result = mysqli_query($conn,$query);

$row = mysqli_fetch_array($result);

$count = $row['cntUser'];

if ($count == 0){
  //avaliable
  echo "avaliable";
}else{
  //not avi
  echo "not avaliable";

}



$sql = "INSERT INTO users (username, password, firstname, lastname, address, premium)
VALUES ('$username', '$password', '$firstname', '$lastname', '$address', '$pre')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";

    session_destroy();
    header("location: login.php");
    exit();

} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;

    echo "Username is taken";
    session_destroy();
    header("location: signup.html");
    exit();

}

$conn->close();

















//jhujh

?>
