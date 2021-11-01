<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="mainstyle.css">
</head>


<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Hospital Management System </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto ">
      <li class="nav-item active">
        <a class="nav-link" href="plist.php">Patient Details <span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="main.php">Add patient<span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Payment status<span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Help <span class="sr-only"></span></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">

      <button class="btn btn-outline-success my-2 my-sm-0" href="" type="submit">logout</button>
    </form>
  </div>
</nav>
<div class="container-fluid p-0">
<div class="row" id="body-row">
    <div class="col">

        <div class="card">
            <h4 class="card-header">payment</h4>
            <div class="card-body">
            <form action="backend.php" method="post">

            <div class="form-group"><label>ID</label></div>
            <div class="form-group"><input class="form-control" type="text" name="paymentid" placeholder=""></div>
            <div class="form-group"><label>paymentstatus</label></div>
            <div class="form-group">
                 <select class="form-group" name="payment">
                <option value="done">done</option>
                <option value="n/a">n/a</option>
            </select></div>
            <div class="form-group"><button class="btn btn-dark btn-block"  name="pupdate">done </button></div>
        </form>
            </div>    
        </div>
    </div><!-- Main Col END -->
    
</div><!-- body-row END -->
  
  
</div><!-- container -->
</body>
</html>