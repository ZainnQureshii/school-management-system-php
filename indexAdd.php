<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="./bootstrap-3.3.7-dist/css/bootstrap.min.css">

	<!-- Latest font-awesome -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- jQuery library -->
	<script src="./bootstrap-3.3.7-dist/jquery/jquery.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="./bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1., maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="indexStyle.css">
    
    <title>Smart School</title>

</head>
<body>
   
    <div class="container">
        <div class="signUpLogin">
            <i class="fa fa-user"></i> <a href="signup.html"> Sign Up</a> 
            <i class="fa fa-user"></i> <a href="login.html"> Login</a>
        </div>
        <div class="page-header">
            <img src="background-image.png" width="150" class="img-responsive" style="float: left;" alt="">
            <h1 style="padding: 50px 0px 0px 50px; font-size: 5rem;">Smart School System</h1>
            <form style="text-align: center;">
                <input type="text" name="Search" placeholder="Search Here....">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
        <hr>
        <nav>
            <ul class="nav nav-tabs nav-justified">
                <li><a href="">Home</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Products</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Contact Us</a></li>
            </ul>
        </nav>
        <br>
      
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" style=" width:100% !important;">
                <div class="carousel item active">
                    <img src="s-pics/1.jpg" class="d-block img-fluid" alt="">
                </div>
                <div class="carousel item">
                    <img src="s-pics/2.png" class="d-block img-fluid" alt="">
                </div>
                <div class="carousel item">
                    <img src="s-pics/4.png" class="d-block img-fluid" alt="">
                </div>
            </div>
        </div>
        
        <br>
        <div class="col-md-3">
            <h5>By Category</h5>
            <nav>
                <ul class="nav">
                    <li><a href="">Add New Student</a></li>
                    <li><a href="">Update Information</a></li>
                    <li><a href="">Delete Student</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-md-9">
            <h3>Add Student</h3>
            
            <table>
                <form action="POST">
                    <label><i class="fa fa-user"></i> Fullname</label>
                    <input type="text"  class="form-control" placeholder="Enter Username" id="" required="">
                    <br>
                    <label><i class="fa fa-user"></i> Course</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter Username" id="" required="">
                    <br>
                    <label><i class="fa fa-key"></i> Age</label>
                    <input type="pass" name="pass" class="form-control" placeholder="Enter Password" id="" required="">
                    <br>
                    <input type="submit" name="add" class="btn btn-primary" value="Sign Up">
                </form>
            </table>
        </div>
        
        <br>
        <hr>
        <div class="footer">
           
            <h5>Copyrights Smart School System</h5>
        </div>
    </div>
    
</body>
</html>

<?php
    include 'db.php';
    if(isset($_POST['add'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];
    
        $query = "INSERT into login VALUES('$user','$pass')";
    
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