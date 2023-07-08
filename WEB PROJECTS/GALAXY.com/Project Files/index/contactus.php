<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$database = "login";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connect Error: " . $conn->connect_error);
    exit();
} 
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $name=$_POST['Fname'];
    $Email=$_POST['Email'];
    $Detail=$_POST['text'];

    $_SESSION['Rname']=$name;
    $_SESSION['mal']=$Email;
    $_SESSION['Response']=$Detail;

   
    $sql="INSERT INTO suggestions (`Name`, `Email`,`Details`) VALUES ('$name', '$Email', '$Detail');";
   
    if($conn->query($sql)===true){

        echo "<script>alert('Thank you for contacting us!'); window.location.href = 'contactus-mail.php';</script>";

      }
      else{
        echo"Error :".$conn->connect_error;
      }
    

   
    
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/Contactus.css">
  <style>
    .msg {
    margin: 30px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    width: 50%;
    text-align: center;
}
    
  </style>
    <title>Contact</title>
</head>
<body>


    
                <?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
        <div class="container">

            <div class="submit-form">
                <h1 class="second-text" >Contact Us</h1>
                <form  action="" method="post">
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label"><h2>Name</h2></label>
                        <input type="name"  id="name" name="Fname" placeholder=" Enter Name" required>
                      </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label" name="email"><h2>Email address</h2></label>
                      <input type="email"  id="exampleInputEmail1" name="Email" aria-describedby="emailHelp" placeholder="Enter Email">
                    </div>


                    <div class="mb-3">
                        <h2>Enter Your Suggestions</h2>
                    <textarea name="text" id="" cols="60" rows="3" name="text" placeholder="Enter Suggestions"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" >Submit</button>
                  </form>
                  
            </div>
 
            
        </div>
    </div>

    
</body>
</html>