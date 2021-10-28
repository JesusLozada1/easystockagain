<?php 

$invCon = mysqli_connect('localhost','root','', 'inventory') or die(mysqli_error());

if(isset($_POST['add'])){
    $paname=$_POST['pname'];
    $pabrand=$_POST['pbrand'];
    $pacolor=$_POST['pcolor'];
    
    $insert=("INSERT INTO paint (paint_name, paint_brand, paint_color) VALUES('$paname', '$pabrand', '$pacolor')");

    mysqli_query($invCon, $insert) or die(mysqli_error());
    header('Location: ../table/table.php');

}       

?>
