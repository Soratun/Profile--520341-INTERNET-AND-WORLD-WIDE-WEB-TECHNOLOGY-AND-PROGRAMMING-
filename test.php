<?php
    include('conn.php');
$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$major = $_REQUEST['major'];
$gpa = $_REQUEST['qpa'];
$sql = "INSERT INTO `student`(`id`, `name`, `msjor`, `gpa`) VALUES ($id,'.$name.','.$major.',$gpa)";

$result = mysqli_query($conn, $sql);

if($result){
    echo "Adding is successfully";
}else{
    echo "Error adding";
}
?>