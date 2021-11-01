<!DOCTYPE html>
<?php  include('backend.php'); ?>
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
        <a class="nav-link" href="#">Add Patients<span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="paymentstatus.php">Payment status<span class="sr-only"></span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="doctorlist.php">Doctors details <span class="sr-only"></span></a>
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
        <h1>
            Appointment Booking
        </h1>
        <div class="card">
            <h4 class="card-header">Registration</h4>
            <div class="card-body">
            <form action="backend.php" method="post">
            <div class="form-group"><label>Name</label></div>
            <div class="form-group"><input class="form-control" type="text" name="pname" placeholder=""></div>
            <div class="form-group"><label>age</label></div>
            <div class="form-group"><input class="form-control" type="number" name="page" placeholder=""></div>
            <div class="form-group"><label>sex</label></div>
            <div class="form-group"><input class="form-control" type="text" name="psex" placeholder="m/f/o"></div>
            <div class="form-group"><label>problem</label></div>
            <div class="form-group"><input class="form-control" type="text" name="pproblem" placeholder=""></div>
            <div class="form-group"><label>phone number</label></div>
            <div class="form-group"><input class="form-control" type="text" name="pphone" placeholder=""></div>
            <div class="form-group"><label>Date</label></div>
            <div class="form-group"> <input type="date" name="pdate"></div>
            <div class="form-group"><label>Doctor</label></div>
            <div class="form-group">
                 <select class="form-group" name="pdoc">
                <?php doctors_select() ?>
            </select></div>
            <div class="form-group"><button class="btn btn-dark btn-block"  name="submit">Submit </button></div>
        </form>
            </div>    
        </div>
    </div>
</div>
</div>
</html>    <!-- <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <ul class="list-group">
            <li class=" txt list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>Patients</small>
            </li>
            <a href="plist.php" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-dashboard fa-fw mr-3"></span> 
                    <span class="menu-collapsed" >Patient details</span>
                </div>
            </a>
            <a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-tasks fa-fw mr-3"></span>
                    <span class="menu-collapsed">anp</span>    
                </div>
            </a>

            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>staff</small>
            </li>

            <a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-calendar fa-fw mr-3"></span>
                    <span class="menu-collapsed">sd</span>
                </div>
            </a>
            <a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-envelope-o fa-fw mr-3"></span>
                    <span class="menu-collapsed">ans</span>
                </div>
            </a>
            <a href="#" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-envelope-o fa-fw mr-3"></span>
                    <span class="menu-collapsed">RSM</span>
                </div>
            </a>

            <li class="list-group-item sidebar-separator menu-collapsed"></li>            

            <a href="help.php" class="bg-dark list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-question fa-fw mr-3"></span>
                    <span class="menu-collapsed">Help</span>
                </div>
            </a>

 
 
        </ul>
    </div> -->