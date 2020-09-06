<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'school';

$conn =mysqli_connect($server,$user,$pass,$db) or 
    die("error in connecting");


    if(isset($_POST['delete'])){
        $id = $_POST['id'];
    
        $query = "DELETE FROM students WHERE SerialNo = $id";
    
        $result = mysqli_query($conn,$query);

        if($result){
            echo "<script>alert('Student Deleted')</script>";
        }
        else
	    {
		    echo "<script>alert('Error')</script>";
	    }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <label>Id</label>
        <input type="text" name="id" required="">

        <input type="submit" name="delete" value="Delete Student">
    </form>
</body>
</html>