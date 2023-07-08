<?php

if(isset($_POST['User'])){

$servername="localhost";
$username="root";
$password="";
$database="spage";


$con=new mysqli($servername,$username,$password,$database);

if($con->connect_error){
  die("connect unsucessful");
}
else

$user=$_POST['User'];
$pass=$_POST['pass'];

$sql="SELECT * FROM `sindetails` WHERE UserName='$user' && Password='$pass';";
$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)>0){
}
else{
echo"<script>alert('Invalid UserName AND password')</script>";

}
$con->close();

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  
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
            margin-top: 150px;
            display: flex;
            flex-direction: column;
            padding: 40px;
            }
    </style>
    <title>LOGIN IN</title>
</head>
<body>
    

                <div class="container">
                    <div class="text-center"><h1>LOGIN</h1></div>
                

            <form action="LOGIN.php" method="post">
            <div class=" form-group " >
                <label for="exampleInputEmail1" class="form-label"><strong>User Name</strong></label>
                <input type="text" class="form-control" name="User" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"><strong>Password</strong></label>
                <input type="password" class="form-control" id="password" name="pass">
              </div>
        
 
 
              <button type="submit" class="btn btn-primary">Login In</button>
            </form>
        </div>
       
</body>
</html>


