<?php
include("config.php");

if(isset($_POST['detailssub'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $company=$_POST['company'];
    $query="insert into detailstb(name,email,company)values('$name','$email','$company');";
    $result=mysqli_query($con,$query);
    if($result){
        echo "Added Data";
    }
}
?>