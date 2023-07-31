<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $lang = $_POST['lang'];

$con =new mysqli ('localhost','root','','formdb');
if($con){
   $sql="insert into formtb(fname,mname,lname,age,email,gender,lang)
   values('$fname','$mname','$lname','$age','$email','$gender','$lang')";
   $result=mysqli_query($con,$sql);
   if($result){
     echo "Thank You For Registering With Us...!";
   }
}else{
    die(mysqli_error($con));
}

}
?>

