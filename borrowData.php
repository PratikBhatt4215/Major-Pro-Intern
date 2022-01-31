<?php

$con = mysqli_connect('localhost','root');
if($con){
    echo "Connection Successfull";
}else{
    echo "No Connection";
}

mysqli_select_db($con,'majorproject');

$user = $_POST['user'];
$bookname = $_POST['bookname'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$branch = $_POST['branch'];
$registration = $_POST['registration'];
$borrowdate = $_POST['borrowdate'];

$query =" insert into majorPro (user, bookname,  mobile, email, branch, registration, borrowdate ) 
values ('$user', '$bookname', '$mobile', '$email' , '$branch' , '$registration' , '$borrowdate') ";

echo "$query";

mysqli_query($con, $query);

header('location:borrow.php');


?>