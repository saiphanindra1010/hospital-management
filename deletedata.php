<?php
$con=mysqli_connect("localhost","root","","hospital");
if(isset($_POST['del'] ))
{
    $did=$_POST['delid'];
    $query="delete from pdata where id={$did}";
$result=mysqli_query($con,$query);
if($result)
{
    header("Location:plist.php");
}
}

if(isset($_POST['plistb'] ))
{

    header("Location:plist.php");
}


?>



