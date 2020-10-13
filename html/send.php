<?php



if (isset($_POST['sub'])) {

    $con = mysqli_connect('127.0.0.1:8111','root','123456','mysite');


    $res = mysqli_query($con,"INSERT INTO ko(fName,lastName,email,korisnikText)VALUES('".$n=$_POST['fName']."','".$ln=$_POST['lastName']."','".$e=$_POST['email']."','".$kt=$_POST['korisnikText']."')");
if($res){
    echo 'Data inserted';
}else{
    echo 'Insert Data failed';
}


   
}










?>