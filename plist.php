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
  <h1>Patient details</h1>
  <a href="main.php" class="btn btn-dark btn-nueva" ><b><</b></a>
  <br>  <br>  
  
</div>


<table class="table   table-hover">
  <thead>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>age</th>
      <th>sex</th>
      <th>problem</th>
      <th>phone no</th>
      <th>Date</th>
      <th>patment status </th>

      <th>Doctor assignmed </th>
      <th>update Patient  data </th>

    </tr>
  </thead>
  <tbody>
<?php pgetData(); ?>

  </tbody>
</table>

</div>
</body>
</html>
