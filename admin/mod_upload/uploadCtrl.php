<?php 
if(isset($_POST['btnupload'])){
    $file=$_FILES['urlfile'];
    var_dump($file);
    $target_dir = "../../asset/img/"; 
    echo $file['name'];
    $target_file=$target_dir.$file['name'];
    echo $target_file."<br/>";
    move_uploaded_file($file['tmp_name'], $target_file);
}
?>