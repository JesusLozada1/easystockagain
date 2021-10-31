<?php 

$loginCon = mysqli_connect('localhost','root','', 'login');

if(isset($_POST['Username'])){
    
    $uname=$_POST['Username'];
    $pass=$_POST['Password'];
    
    $sql="SELECT * FROM users WHERE username='".$uname."'AND pass='".$pass."' limit 1";
    
    $result=mysqli_query($loginCon,$sql);
    
    if(mysqli_num_rows($result)==1){
        header('Location: ../pages/homepage.php');
        echo "You Have Successfully Logged in";
        exit();
    }
    else{
        header('Location: index.php');
    }
        
}
?>