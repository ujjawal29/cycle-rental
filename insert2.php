<?php
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST,'lastname');
$country = filter_input(INPUT_POST, 'country');
$subject = filter_input(INPUT_POST,'subject');
if (!empty($firstname)){
if (!empty($lastname)){
if (!empty($country)){
if (!empty($subject)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "puride2";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO contact (firstname, lastname, country, subject)
values ('$firstname','$lastname','$country','$subject')";
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
}
}
}
else {
 echo "All field are required";
 die();
}
?>