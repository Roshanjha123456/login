<?php
$insert = false;
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);
if(!$con){
    die("connection failed" . mysqli_connect_error());
}

//echo "success connecting to the db";

 
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$Email = $_POST['Email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];




$sql = " INSERT INTO `trip`.`trip`(`name`, `age`, `gender`, `Email`, `Phone`, `desc`, `dt`) VALUES ('$name', '$age', '$gender', '$Email', '$phone', '$desc', current_timestamp());";
//echo $sql;

if($con->query($sql) == true){
  //  echo "syccess inserted";
  $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
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
    <link rel="stylesheet" href="style.css">
    <title>welcome to trip</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
</head>
<body>
    <img class = "bg" src="2.k.jpg" alt="">
    <div class=container>
        <h1>Trip to goa </h1>
        <p>Enter your details(College Trip)</p>
        <?php
        if($insert == true){
         echo "<p class='submitMsg'>Thanks for submitting your form</form></p>";
        }
        ?>
        
        <form action="index.php" method="post">
            <input type="trxt" name="name" id="name" placeholder="Enter your name">
            <input type="trxt" name="age" id="age" placeholder="Enter your age">
            <input type="trxt" name="gender" id="gender" placeholder="Enter your gender">
            <input type="trxt" name="Email" id="Email" placeholder="Enter your Email">
            <input type="trxt" name="phone" id="phone" placeholder="Enter your Phone no">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>
          
        </form>
    </div>
    <script src="index.js"></script>
</body>

</html>
        