<?php
    include "src/caculate.php";
    if(isset($_POST['btn-submit'])){
    $username= $_POST['username'];
    $gender= $_POST['gender'];
    $province= $_POST['province'];
    $email= $_POST['email'];

    $student= new caculate($username,$gender,$province,$email);
    $stuName=$student->getUsername();
    $stuGender=$student->getGender();
    $stuProvince=$student->getProvince();
    $stuEmail=$student->getEmail();
}
?>
    <h3><?php echo "Name: ".$stuName ?></h3><br>
    <h3><?php echo "Gender: ".$stuGender ?></h3><br>
    <h3><?php echo "Province: ".$stuProvince ?></h3><br>
    <h3><?php echo "Eamil: ".$stuEmail ?></h3>
