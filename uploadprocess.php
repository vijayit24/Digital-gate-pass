<?php
//echo "Entered Script";
/* PHP: MySQL server has gone away Error came do the following steps
     *  1. go to C:\xampp\mysql\bin open my.cnf (config file)
     *  2. update the following statments value
     *      max_allowed_packet = 500M
     *      innodb_lock_wait_timeout = 600      
     *      wait_timeout = 1600
     *      [mysqldump]
            quick
            max_allowed_packet = 128M
     *  Note : Set Image column type as BLOB for Big Image handling 
     */
if(isset($_POST['submit'])){
  echo "Entered";
$img_id = $_POST["img_id"];

    if(getimagesize($_FILES["image"]["tmp_name"])== FALSE){
        echo "Select an Image";
    }
    else
    {
        $image = addslashes($_FILES['image']['tmp_name']);
        $name = addslashes($_FILES['image']['name']);
        $image = file_get_contents($image);
        $image = base64_encode($image);
        saveImageI($img_id, $name, $image);
        //echo "Existed";
    }
}
else{
    echo "False";
}
 
   function saveImageI($id,$name,$image){
        $conn = mysqli_connect("localhost", "root", "","imagestor");        
        $qry = "insert into images values('$id','$image','$name')";
        $result = mysqli_query($conn,$qry);
        if($result){
            echo "Image Uploaded Successfully";
        }
        else{
            echo "Image Not Updated : ".  mysqli_error($conn);
        }
        mysqli_close($conn);
    }
?>
