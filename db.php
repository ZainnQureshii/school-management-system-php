<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'school';

$conn =mysqli_connect($server,$user,$pass,$db) or 
    die("error in connecting");


    if(isset($_POST['delete'])){
        $id = $_POST['id'];
    
        $query = "DELETE FROM students WHERE ID = $id";
    
        $result = mysqli_query($conn,$query);

        if($result){
            echo "<script>alert('Registration Successful')</script>";
        }
        else
	    {
		    echo "<script>alert('Error')</script>";
	    }

    }



?>