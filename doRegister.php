      
<?php

// put your code here

include("dbFunctions.php");

$username = $_POST['name'];
$password = $_POST['pw'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$Dob = $_POST['Dob'];
$activeLvl = $_POST['ActiveLvl'];

//echo $person_name;
//echo $district;
//print_r($_POST);

$query = "INSERT INTO User(username,password, height, weight, DoB, active) 
          VALUES 
          ('$username','$password', '$height', '$weight', STR_TO_DATE('$Dob', '%d/%m/%Y'),'$activeLvl')";

$status = mysqli_query($link, $query) or die(mysqli_error($link));

if ($status) {
    $msg = "user registered successfully.<br/>";
} else {
    $msg = "user registration failed.<br/>";
}

?>
<!DOCTYPE HTML>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php echo $msg; ?>
        <br>
        <a href="http://localhost/c273/c273_Assignment/HomePage.html#">click here to return to home screen to login </a>
    </body>
</html>
