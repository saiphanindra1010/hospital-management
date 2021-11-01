<?php
$con=mysqli_connect("localhost","root","","hospital");

// error_reporting(0);

if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
$query="select * from loginpg where username='$username' AND password ='$password'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
header("Location:main.php");
}
else{
    header("Location:login.php");
}
}
if(isset($_POST['submit']))
{
    $pname=$_POST['pname'];
    $ppage=$_POST['page'];
    $psex=$_POST['psex'];
    $pproblem=$_POST['pproblem'];
    $pphone=$_POST['pphone'];
    $pdate=date('Y-m-d',strtotime($_POST['pdate']));
    $pdoc=$_POST['pdoc'];
$query="insert into pdata(pname,age,sex,problem,phonenumber,dateOfReg,doctorassigned)values('$pname',$ppage,'$psex','$pproblem','$pphone','$pdate','$pdoc')";
$result=mysqli_query($con,$query);
if($result)
{
    echo "<script>alert('gg')</script>";
    header("Location:main.php");
}
}

function pgetData()
{
global $con;
$query="select * from pdata";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
     $pid=$row['id'];
    $pname=$row['pname'];
    $ppage=$row['age'];
    $psex=$row['sex'];
    $pproblem=$row['problem'];
    $pphone=$row['phonenumber'];
    $pdate=date('Y-m-d',strtotime($row['dateOfReg']));
    $pay=$row['payment'];
    $pdoc=$row['doctorassigned'];
    echo"    <tr>
    <td>$pid</td>
    <td>$pname</td>
    <td>$ppage</td>
    <td>  $psex </td>
     <td>$pproblem</td>
     <td>+91 $pphone</td>
     <td>$pdate</td>
     <td>$pay</td>
     <td>$pdoc</td>
    <td>
 <a class=\"btn btn-default btn-outline-dark\"  name=\"update\"  href='update.php?id=$pid'>update</a><td>
 <a class=\"btn btn-default btn-outline-dark\"  name=\"del\"     href='delete.php?id=$pid'>Delete</a><td>
  </tr> ";
}}
//
// if(isset($_GET['update'] ) )
// {
// $id=$_GET['update'];
// $query="select * from pdata where id=$id";
// $result=mysqli_query($con,$query);
// while($row=mysqli_fetch_array($result))
// {

// $pid=$row['id'];
// $pname=$row['pname'];
// $ppage=$row['age'];
// $psex=$row['sex'];
// $pproblem=$row['problem'];
// $pphone=$row['phonenumber'];
// $pdate=date('Y-m-d',strtotime($row['dateOfReg']));
// $pdoc=$row['doctorassigned'];
// }
// }

if(isset($_POST['pupdate']))
{

    $ppid=$_POST['paymentid'];
    $payment=$_POST['payment'];
    $query="update pdata set payment='{$payment}' where id={$ppid}";
$result=mysqli_query($con,$query);
if($result)
{
    header("Location:plist.php");
}
}
function doctors_select()
{
    global $con;
    $query="select * from ddata";
    $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result))
    {
        $name=$row['name'];
        $dept=$row['dept'];
        echo ' <option value="'.$name.'">'.$name.'('.$dept.')  </option>' ;    
}

}
function dgetData()
{
global $con;
$query="select * from ddata";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
     $pid=$row['doc_id'];
    $pname=$row['name'];
    $dept=$row['dept'];
    echo"    <tr>
    <td>$pid</td>
    <td>$pname</td>
    <td>$dept</td>

  </tr> ";
}}
?>