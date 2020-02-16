<?php
$conn = new mysqli('localhost', 'root', '', 'gdb');
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$sql="INSERT INTO `tab` (`name`, `email`,`pass`,`cpass`) VALUES ('$name', '$email','$pass','$cpass')";
if ($conn->query($sql) === TRUE) {
    echo "data inserted";
}
else
{
    echo "failed";
}

?>
