<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<?php require_once 'process.php' ;

$mysqli= new mysqli('localhost','root','crud@001','crud') or die(mysqli_error($mysqli));
//or die(mysqli_error($mysqli));
$result = $mysqli->query('SELECT * from crud') or die(mysqli_error($mysqli));

?>

<div class="text-center">
        <table class="table" >
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <?php
                while($row= $result->fetch_assoc()): ?>
                <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['location']; ?></td>
                <td><a href="index.php?edit=<?php echo $row['id']?> " class='btn btn-info'>Edit</a></td>
                <td><a href="index.php?delete=<?php echo $row['id']?> " class='btn btn-danger'>Delete</a></td></tr>
                            <?php endwhile; ?>
        </table>
    
</div>
</div> 
<div class="text-center">
<form action="process.php" method="POST"> 
<div class="form-group">
<label> Enter your name</label>
<input type="text" name="name" value="enter your name">
</div>
<div class="form-group">
<label> Enter your Location:-</label>

<input type="text" name="location" value="enter your Location">
</div>
<div class="form-group">

<button type="submit" name="save">Save</button>
</div>

</form>
    </div>
</body>
</html>