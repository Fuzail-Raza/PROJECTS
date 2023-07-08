
<?php
if(isset($_POST['User']))
{

$username="root";
$servername="localhost";
$password="";
$databas="spage";

$conn= new mysqli($servername,$username,$password,$databas);

if($conn->connect_error){
    die("connect Error".$conn->connect_error);
}
else{
echo"Connect Successfuly";
    
}

$username=$_POST['User'];

$sql="DELETE FROM `sindetails` WHERE UserName='$username';";

if($conn->query($sql)===TRUE){
    
}
else{
    echo"Connect Error :".$conn->connect_errno;
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
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
            margin-top: 140px;
            display: flex;
            flex-direction: column;
            padding: 40px;
            }
          #buttont{
            margin-top: 10px;
          }
    </style>
</head>
<body>
    
    <div class="container">

    <form action="Delete.php" method="post" id="mform" >
        <div class="  " >
            <h1>Enter User Name To Delete Data</h1>
            <label for="name" class="form-label"><strong>User Name</strong></label>
            <input type="text" class="form-control" name="User" >
          </div>
          <button type="submit" class="btn btn-primary" id="buttont" >Submit</button>
        </form>
    </div>
        
</body>
</html>