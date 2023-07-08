<?php
$servername="localhost";
$username="root";
$password="";
$databas="spage";
if(isset($_POST['User'])){



$conn=new mysqli($servername,$username,$password,$databas);

if($conn->connect_error){
  die("connect Error 404".$conn->connect_error);
}
else{
  echo"connect success";
}
$username=$_POST['User'];
$password=$_POST['pass'];
$oldusername=$_POST['old'];


$sql="UPDATE `sindetails` SET `UserName`='$username',`Password`='$password' WHERE UserName='$oldusername';";
if($conn->query($sql)===true){

  echo"<script>alert('Data Updated Successfuly')</script>";

}
else{
  echo"Error :".$conn->connect_error;
}

$conn->close();

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>UPDATE</title>
    <style>
        body{
            background:rebeccapurple;
        }
        .container{
            justify-content: center;
            align-items: center;
            text-align: center;
            flex-direction: row;
            background: #9acd32;
            margin-top: 140px;
            display: flex;
            flex-direction: column;
            padding: 20px;
            }
             a{
              color: black;
              
            }
    </style>
</head>
<body>
    <div class="container">
        <div class="text-center"><h1>Update Details</h1></div>
  

<form action="Update.php" method="post" id="mform" >
<div class="mb-3" >
    <label for="name" class="form-label"><strong> Enter old User Name</strong></label>
    <input type="text" class="form-control" name="old" >
  </div>
<div class="mb-3" >
    <label for="name" class="form-label"><strong> New User Name</strong></label>
    <input type="text" class="form-control" name="User" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"><strong> New Password</strong></label>
    <input type="password" class="form-control" id="password" name="pass">

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"><strong>Confirm Password</strong> </label>
    <input type="password" class="form-control" id="cpassword" name="cpass">
  </div>


  <button type="submit" class="btn btn-primary" id="buttont" >Submit</button>
</form>








</body>
</html>