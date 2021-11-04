<?php 

$loginCon = mysqli_connect('localhost','root','', 'login');

if(isset($_POST['Username'])){
    
    $uname=$_POST['Username'];
    $sql = "SELECT * FROM users WHERE username='".$uname."' limit 1";
    $result=mysqli_query($loginCon,$sql);
    
    if(mysqli_num_rows($result)==1){

        $newPass = $_POST['newPassword'];
        $verifyPass = $_POST['verifyPassword'];

        if($newPass == $verifyPass){

            $sql2 = "UPDATE users SET pass='".$newPass."' WHERE username='".$uname."' ";
            $result=mysqli_query($loginCon,$sql2);
            echo "change query sent | ";
            $newLogin = "SELECT * FROM users WHERE username='".$uname."' AND pass='".$newPass."' limit 1";
            $result2 = mysqli_query($loginCon,$newLogin);
            echo " validation change |";

            if(mysqli_num_rows($result2)==1){
                header('Location: index.php');
                exit();
            }
            else{
                echo " could not verify new password | ";
                exit();
            }

        }

        else{
            echo " passwords do not match |";
            header('Location: forgot.php');
        } 

    }
    
    else{
        echo "| You Have Entered Incorrect Username";
        header('Location: forgot.php');
        exit();
    }       
}
?>