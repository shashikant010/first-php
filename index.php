<?php
$server="localhost";
$user="root";
$password="";
$con=mysqli_connect($server,$user,$password);
// if(!$con){
//     die("connection to this database failed due to ".mysqli_connect_error());
// }
$name=mysqli_real_escape_string($con,$_POST['name']);
$age=mysqli_real_escape_string($con,$_POST['age']);
$gender=mysqli_real_escape_string($con,$_POST['gender']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$phone=mysqli_real_escape_string($con,$_POST['phone']);
$other=mysqli_real_escape_string($con,$_POST['desc']);
$sql="INSERT INTO `trip`.`trip`(`name`, `age`, `gender`, `email`, `phone`, `other`) VALUES ($name,$age,$gender,$email,$phone,$other,current_timestamp())";
echo $sql;
if($con->query($sql)==true){
    echo "successfull submitted";
}
else{
    echo "error : $sql".$con->error;
}
$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="IIT Kharagpur">
    <div class="container">
        <h1>Welcome to IIT Kharagpur US Trip form</h3>
        <p>Enter your details and submit this form to confirm your participation in the trip </p>
        <!-- <?php
        if($insert == true){
        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
        }
    ?> -->
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button> 
        </form>
    </div>
    <script src="index.js"></script>
    <!-- INSERT INTO `trip`(`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('[value-1])','[value-2])','[value-3])','[value-4])','[value-5])','[value-6])','[value-7])','[value-8])') -->
</body>
</html>x