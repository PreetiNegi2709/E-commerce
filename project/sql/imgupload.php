<?php
$con=new mysqli("localhost","root","","project");

if(isset($_POST['upload'])){
    if(isset($_FILES['image'])){
        $id=$_POST['t1'];
        $name=$_POST['t2'];
        $price=$_POST['t3'];
        $detail=$_POST['detail'];
        $image=$_FILES['image']['name'];
        
         $image_tmp=$_FILES['image']['tmp_name'];
     echo "tmp name ".$image_tmp;
        
        $sql="insert into upload_img(id,name,price,detail,image) values('".$id."','".$name."','".$price."','".$detail."','".$image."')";
        $result=$con->query($sql);
        
        if($result==true){
            
            if(move_uploaded_file($image_tmp,"../uploaded_img/".$image)){
            echo("image uploaded succesfully");
            }
        }
    }
}
?>
