<?php

$con=mysqli_connect("localhost","root","","hospital");
if(isset($_POST['done'] ))
{
    
    $sid=$_POST['pid'];
    $pname=$_POST['pname'];
    $ppage=$_POST['page'];
    $psex=$_POST['psex'];
    $pproblem=$_POST['pproblem'];
    $pphone=$_POST['pphone'];
    $pdate=date('Y-m-d',strtotime($_POST['pdate']));
    // $pdoc=$_POST['pdoc'];
    $query="update pdata set pname= '{$pname}' , age= '{$ppage}' where id={$sid}";
    
$result=mysqli_query($con,$query);
if($result)
{
    echo "<script>alert('gg')</script>";
    header("Location:plist.php");
}
}





?>