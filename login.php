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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="LoginStyle.css">
</head>
<body>
        
    <div class="container">
        <div class="logo">
             <img src="./background-image.png" width="200" height="200" alt=""> <h1 style="padding: 50px 0px 0px 50px; font-size: 5rem;">Smart School System</h1>  
        </div>
        <br>
        <br>
        <br>
        <div class="page-header">
            <h2>Welcome to Our School</h2>
        </div>
        <br>
        <form>
            <label><i class="fa fa-user"></i> Username</label>
            <input type="text" name="username" class="form-control" placeholder="Enter Username" id="" required="">
            <br>
            <label><i class="fa fa-key"></i> Password</label>
            <input type="pass" name="pass" class="form-control" placeholder="Enter Password" id="" required="">
            <br>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <hr>
        <h5 style="margin-left: 20px;">Not a Member? Sign Up <a href="signup.html">Here</a></h5>
    </div>
</body>
</html>