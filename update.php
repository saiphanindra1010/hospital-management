
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
<html class="no-js" lang="en">
<head>
    <title> update</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"></link>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>

    <style>
        body {
            background: #232323;
        }
        .list-unstyled li {
            font-size: 13px;
            padding: 4px 0 0;
            color: rgb(62, 62, 62);
        }
    </style>
</head>

<body>
<?php
$con=mysqli_connect("localhost","root","","hospital");
$sid=$_GET['id'];
$query="select * from pdata where id={$sid}";
$result=mysqli_query($con,$query);

if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_array($result))
    {

?>
    <div class="container mt-5">
        <div class="card">
            
            <h5 class="card-header text-center">update patient</h5>
            <div class="card-body">
                <form role="form" data-toggle="validator" action="updatedata.php" method="post">
                <div class="form-group">
                            <label>id</label>
                            <input type="text" class="form-control" name="pid" value="<?php echo $row['id']; ?>" placeholder="">
                            
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="pname" value="<?php echo $row['pname']; ?>" placeholder="">
                            
                        </div>
                    <div class="form-group">
                        <label>age</label>
                        <input type="number" name="page" class="form-control" 
                        value="<?php echo $row['age']; ?>" placeholder="" >

                    </div>
                    <div class="form-group">
                        <label>sex</label>
                        <input type="text" name="psex" class="form-control" 
                        value="<?php echo $row['sex']; ?>" placeholder="" >
                    
                    </div>
                    <div class="form-group">
                        <label>problem</label>
                        <input type="text" name=" pproblem" class="form-control" 
                        value="<?php echo $row['problem']; ?>" placeholder="" >
                    
                    </div>
                    <div class="form-group">
                        <label>phone number</label>
                        <input type="text" name=" pphone" class="form-control" 
                        value="<?php echo $row['phonenumber']; ?>"   placeholder="" >
                    
                    </div>
                    <div class="form-group">
                        <label>Date of Appoinment</label>
                        <input type="date" name="pdate" class="form-control" 
                        value="<?php echo $row['dateOfReg']; ?>"  placeholder="" >
                    
                    </div>
                    <div class="form-group">
                        <label>Doctor consulted</label>
  
                            <select class="form-group"   >
                            <option name="pdoc" value="" selected  hidden><?php echo $row['doctorassigned']; ?></option>
                           <option value="suresh">DR Suresh</option>
                           <option value="ramesh">DR Ramesh</option>
                       </select>
                    
                    </div>
                    <div class="form-group">
                        <button type="submit" name="done" class="btn btn-dark btn-block">Done</button>
                    </div>


                </form>
                <?php
}}
                ?>

            </div>
        </div>
    </div>
</body>
</html>
