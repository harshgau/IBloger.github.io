    <?php
$con= mysqli_connect('localhost','root');
if($con){
    echo "connection sucessful";
}
else{
    echo "no connection";
}
 
 mysqli_select_db($con,'web1userdata');
 $Username = $_POST['Username'];
$Mobile = $_POST['Mobile'];
$email = $_POST['email'];
$password = $_POST['password'];
$comments = $_POST['comments'];
$query = "insert into userinfodata(Username,Mobile,email,password,comments) values('$Username','$Mobile','$email','$password','$comments') ";
mysqli_query($con,$query);
echo "$query";
 
header('location:index.html');

?>
 
