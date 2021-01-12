      
<?php

// put your code here

include("dbFunctions.php");

$exType = $_POST['exercise'];
$duration = $_POST['duration'];
;

//echo $person_name;
//echo $district;
//print_r($_POST);

$query = "INSERT INTO exercise(exercise_type, duration) 
          VALUES 
          ('$exType', '$duration')";

$status = mysqli_query($link, $query) or die(mysqli_error($link));

if ($status) {
    $msg = "Activity successfully recorded<br/>";
} else {
    $msg = "Activity failed.<br/>";
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
        <a href="http://localhost/c273/c273_Assignment/HomePageLog.html#">click here to return to home screen </a>
    </body>
</html>
