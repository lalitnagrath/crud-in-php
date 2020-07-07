<?php


// if(function_exists(mysql)){
//     echo "we have mysql";
// }else{
//     echo"we dont have mysql";
// }
$mysqli= new mysqli('localhost','root','crud@001','crud') or die(mysqli_error($mysqli));
//or die(mysqli_error($mysqli));

if(isset($_POST['save'])){
    $name = $_POST['name'];
    $location = $_POST['location'];

    $mysqli->query("INSERT INTO crud (name,location) VALUES('$name','$location')");

}

?>