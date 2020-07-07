<?php


$mysqli= new mysqli('localhost','root','crud@001','crud') or die(mysqli_error($mysqli));

if(isset($_POST['save'])){
    $name = $_POST['name'];
    $location = $_POST['location'];

    $mysqli->query("INSERT INTO crud (name,location) VALUES('$name','$location')");

}

