<?php


if(isset($_POST['User'])){

$servername="localhost";
$username="root";
$password="";
$databas="spage";

$conn= new mysqli($servername,$username,$password,$databas);

if($conn->connect_error){
  die("conection faield". $conn->connect_error);
}
else{
  echo"<alert>Connect Sucessfuly</alert>";

}


$username = $_POST['User'];
$pass = $_POST['pass'];


$sql="INSERT INTO `sindetails` (`UserName`, `Password`) VALUES ('$username', '$pass');";



if($conn->query($sql)===true){
  echo"Data Enter Success";
  echo"<script>alert('WELCOME')</script>";
  $wait=3;
  sleep($wait);
  header('location: http://localhost/login/LOGIN.php');


} 
else{
  echo"Data Enter Failed".$conn->error;
 
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
              margin-top: 10px;
              font-weight: 900;
              background-color: red;
              color: yellow;
              margin: 10px;
              
            }
    </style>
    <title>SIGNUP</title>
</head>
<body>
    

                <div class="container">
                    <div class="text-center"><h1>SignUp To Page</h1></div>
              

            <form action="SIGINUP.php" method="post" id="mform" >
            <div class="  " >
                <label for="name" class="form-label"><strong>User Name</strong></label>
                <input type="text" class="form-control" name="User" >
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"><strong>Password</strong></label>
                <input type="password" class="form-control" id="password" name="pass">

              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"><strong>Confirm Password</strong> </label>
                <input type="password" class="form-control" id="cpassword" name="cpass">
              </div>
 
 
              <button type="submit" class="btn btn-primary" id="buttont" >Submit</button>
            </form>
         <a href="Delete.php"> CLick To delete Data</a>
          <a href="Update.php">CLick To Update Data</a>
        </div>

    

        <script>
  // Ensure the DOM is loaded before accessing elements
  const btn = document.getElementById("buttont");
    btn.addEventListener('click', check);
    
  function check() {
    if (document.forms["mform"]["password"].value !== document.forms["mform"]["cpassword"].value) {
      alert("Password does not match");
      return false;
    } else {
      // Make sure to submit the form within the else block
      document.forms["mform"].submit();
      return true;
    }
  }
</script>

       
</body>
</html>