<!DOCTYPE html>
<?php include("backend.php"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body>
    
<div class="container">

<div class="title-box">
  <h1>Doctor details</h1>
  <a href="main.php" class="btn btn-dark btn-nueva" ><b><</b></a>
  <br>  <br>  
  
</div>


<table class="table   table-hover">
  <thead>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>Department</th>
    </tr>
  </thead>
  <tbody>
<?php dgetData(); ?>

  </tbody>
</table>

</div>
</body>
</html>
