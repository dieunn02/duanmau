<?php
function insert_taikhoan($email,$user,$pass){
    $sql="INSERT INTO taikhoan(email,user,pass) values ('$email','$user','$pass')";
    pdo_execute($sql);
}
function checkuser($user , $pass){
    $sql = "SELECT * FROM taikhoan WHERE user='".$user."' AND pass='".$pass."' " ;
    $sp = pdo_query_one($sql);
    return $sp;
}
?>