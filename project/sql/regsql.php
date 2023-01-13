<?php
$con=new mysqli("localhost","root","","project");
$msg="";
if(isset($_POST['submit'])){
    
//   if(isset($_FILES['p'])){
       
    $fname=$_POST['t1'];
    $lname=$_POST['t2'];
    $uid=$_POST['t3'];
    $eml=$_POST['t4'];
    $pass=$_POST['t5'];
//    $pic=$_FILES['p']['userid'];
//    
//     $pic_tmp=$_FILES['p']['tmp_userid'];
//     echo "tmp userid ".$pic_tmp;
    
    $sql="insert into user_info(first_name,last_name,userid,email,password) values('".$fname."','".$lname."','".$uid."','".$eml."','".$pass."')";
   $result=$con->query($sql);   
   if($result==true){
//               if(move_uploaded_file($image_tmp,"../uploaded_profile_pic_folder/".$image)){
        $msg="successful";  
               }
   }
//}}

?>
  
        
