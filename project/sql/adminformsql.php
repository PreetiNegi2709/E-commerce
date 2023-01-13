<?php
$msg="";
if(isset($_POST['b'])){
    $uid=$_POST['user'];
    $pas=$_POST['pass'];
    
    if($uid=="admin" && $pas=="123")
            {
          header("location:../homepage.php");
        
      $_SESSION['user']="$uid";
//      above is the key
            }
    else{
        $msg="invalid userid or password";
    }

    
    }
?>

