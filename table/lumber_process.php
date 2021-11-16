<?php
session_start();

$invCon = mysqli_connect('localhost','root','', 'inventory') or die(mysqli_error($invCon));

$update = false;
$id = 0;
$laname = '';
$lasize = '';
$lacolor = '';

if(isset($_POST['add'])){
    $laname=$_POST['lname'];
    $lasize=$_POST['lsize'];
    $lacolor=$_POST['lcolor'];

    $insert=("INSERT INTO lumber (lumber_name, lumber_size, lumber_color) VALUES('$laname', '$lasize', '$lacolor')");

    mysqli_query($invCon, $insert) or die(mysqli_error($invCon));

    
    $_SESSION['message'] =  "Record has been added!";
    $_SESSION['msg_type'] =  "success";

    header('Location: ../table/table_lumber.php');
}       

if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $del="DELETE FROM lumber WHERE lumber_id='$id' ";
    mysqli_query($invCon, $del) or die(mysqli_error($invCon));
   

    $_SESSION['message'] =  "Record has been deleted!";
    $_SESSION['msg_type'] =  "danger";

    header('Location: ../table/table_lumber.php');
   
}

if (isset($_GET['edit'])){
    $id = $_GET['edit'];

    $update = true;
    $updateSql ="SELECT * FROM lumber WHERE lumber_id='$id' ";
    $result= mysqli_query($invCon, $updateSql)  or die(mysqli_error($invCon));

    
        $row = mysqli_fetch_assoc($result);
        $laname = $row['lumber_name'];
        $lasize= $row['lumber_size'];
        $lacolor= $row['lumber_color'];
    


}

if (isset($_POST['update'])){
$id = $_POST['id'];
$laname = $_POST['lname'];
$lasize= $_POST['lsize'];
$lacolor= $_POST['lcolor'];

$mysqlUpdate =  "UPDATE lumber SET lumber_name='$laname', lumber_size='$lasize', lumber_color='$lacolor' WHERE lumber_id='$id' ";
            
mysqli_query($invCon, $mysqlUpdate) or die(mysqli_error($invCon));

$_SESSION['message'] =  "Record has been updated!";
$_SESSION['msg_type'] =  "warning";

header('Location: ../table/table_lumber.php');

}

?>
