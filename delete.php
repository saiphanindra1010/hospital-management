<!DOCTYPE html>
<html lang="en">

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
$did=$_GET['id'];
$query="select * from pdata where id={$did}";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_array($result))
    {
?>
    <div class="container mt-5">
        <div class="card">
            
            <h5 class="card-header text-center">Are you sure to delete patient information</h5> 
            <div class="card-body">
                <form role="form" data-toggle="validator" action="deletedata.php" method="post">
                <div class="form-group">

                <div class="form-group">
                            <label>id</label>
                            <input type="text" class="form-control" name="delid" value="<?php echo $row['id']; ?>" disable placeholder="">
                            
                        <div class="form-group">
                            <label>Name :<?php echo $row['pname']; ?></label>   
                        </div>
                    <div class="form-group">
                        <label>age :<?php echo $row['age']; ?></label>
                    </div>
                    <div class="form-group">
                        <label>sex :<?php echo $row['sex']; ?></label>
                    </div>
                    <div class="form-group">
                        <label>problem :<?php echo $row['problem']; ?></label>
                    </div>
                    <div class="form-group">
                        <label>phone number :<?php echo $row['phonenumber']; ?></label>
                    </div>
                    <div class="form-group">
                        <label>Date of Appoinment : <?php echo $row['dateOfReg']; ?></label>
                    </div>
                    <div class="form-group col-sm-5 col-xs-8">
                        <button type="submit" name="del" class="btn btn-danger btn-block">yes</button>
  
                        <button type="submit"  name="plistb" class="btn btn-success btn-block">no</button>

                    </div>

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