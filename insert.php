<?php
$name = filter_input(INPUT_POST, 'contact-name');
$phno = filter_input(INPUT_POST, 'contact-phno');
$email = filter_input(INPUT_POST, 'contact-email');
$msg = filter_input(INPUT_POST, 'contact-project');
if (!empty($name)){
if (!empty($email)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "m4you";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO contactus (name,email,phno,msg)
values ('$name','$phno','$email','$msg')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>
