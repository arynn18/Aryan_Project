<?php  


$nm = $_POST['name'];
$em = $_POST['email'];
$fb = $_POST['feedback'];
//create the connection

$con = mysqli_connect("localhost","root");
// die if the connection was not successful
if(!$con){
    die("sorry we fail to connect".mysqli_connect_error());
}
else{
echo "<br/>connection was successful ";
}

$db = mysqli_select_db($con,"aryan");
$sql = "INSERT INTO aryan_table(Name,email,feedback) VALUES (' $nm','$em','$fb')";
$cmd = mysqli_query($con,$sql);
if($cmd){
    echo "<br><br>data inserted successfully<br>";
}
else{
echo "error is : ".mysqli_error($con);
}
?>  