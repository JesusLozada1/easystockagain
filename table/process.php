<?php
session_start();

$invCon = mysqli_connect('localhost','root','', 'inventory') or die(mysqli_error($invCon));

$update = false;
$id = 0;
$paname = '';
$pabrand = '';
$pacolor = '';

if(isset($_POST['add'])){
    $paname=$_POST['pname'];
    $pabrand=$_POST['pbrand'];
    $pacolor=$_POST['pcolor'];

    $insert=("INSERT INTO paint (paint_name, paint_brand, paint_color) VALUES('$paname', '$pabrand', '$pacolor')");

    mysqli_query($invCon, $insert) or die(mysqli_error($invCon));

    
    $_SESSION['message'] =  "Record has been added!";
    $_SESSION['msg_type'] =  "success";

    header('Location: ../table/table.php');
}       

if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $del="DELETE FROM paint WHERE paint_id='$id' ";
    mysqli_query($invCon, $del) or die(mysqli_error($invCon));
   

    $_SESSION['message'] =  "Record has been deleted!";
    $_SESSION['msg_type'] =  "danger";

    header('Location: ../table/table.php');
   
}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];

    $update = true;
    $updateSql ="SELECT * FROM paint WHERE paint_id='$id' ";
    $result= mysqli_query($invCon, $updateSql)  or die(mysqli_error($invCon));

    
        $row = mysqli_fetch_assoc($result);
        $paname = $row['paint_name'];
        $pabrand= $row['paint_brand'];
        $pacolor= $row['paint_color'];
    


}

if (isset($_POST['update'])){
$id = $_POST['id'];
$paname = $_POST['pname'];
$pabrand= $_POST['pbrand'];
$pacolor= $_POST['pcolor'];

$mysqlUpdate = "UPDATE paint SET paint_name='$paname', paint_brand='$pabrand', paint_color='$pacolor' WHERE paint_id='$id' ";

mysqli_query($invCon, $mysqlUpdate) or die(mysqli_error($invCon));

$_SESSION['message'] =  "Record has been updated!";
$_SESSION['msg_type'] =  "warning";

header('Location: ../table/table.php');

}

?>
