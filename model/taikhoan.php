<?php
function insert_taikhoan($email,$user,$pass){
    $sql="insert into taikhoan(email,user,password) values ('$email','$user','$pass')";
    pdo_execute($sql);
}
?>