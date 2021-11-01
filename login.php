<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body style="background: #3e3e3e;">
    <div class="login-dark" style="height: 695px;">
        <form action="backend.php" method="post">
           <div> <h2 class="text-center" >Admin Login Form</h2></div>
            <div class="illustration"><i class="ion-person" ></i></div>
            <div class="form-group"><input class="form-control" type="username" name="username" placeholder="username"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"  id="myInput"></div>
            <div class="form-group"><input type="checkbox" onclick="myFunction()">  Show Password</div>
            <div class="form-group"><button class="btn btn-primary btn-block"  name="login">Log In</button></div>
            <a class="forgot" href="recovery.html">Forgot your email or password?</a>
        </form>
        </div>
    <script src="vis.js"></script>

</body>
</html>   

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>