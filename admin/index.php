<?php
include "../model/pdo.php";
include "header.php";
//controller
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch($act){
        case 'adddm':
            //check click nut add hay khong
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $tenloai = $_POST['tenloai'];
                $sql = "INSERT INTO danhmuc(name) VALUES ('$tenloai')";
                pdo_execute($sql);
                $thongbao = 'Them Thanh Cong';         
            }
            include "danhmuc/add.php";
            break;
         // 
        case 'listdm':
            $sql = "SELECT * FROM danhmuc ORDER BY id DESC ";
            $listdanhmuc =  pdo_query($sql);
            include "danhmuc/listdm.php";
            break;
        // 
        case 'xoadm':
            if(isset($_GET['id']) && ($_GET['id'] >0 )){
                $sql = "DELETE FROM danhmuc WHERE id=" . $_GET['id'];
                pdo_execute($sql);
            }
            $sql = "SELECT * FROM danhmuc ORDER BY id DESC";
            $listdanhmuc =  pdo_query($sql);
            include "danhmuc/listdm.php";
            break;
        // 
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sql = "SELECT * FROM danhmuc WHERE id=".$_GET['id'];
                $dm = pdo_query_one($sql);
            }
            include "danhmuc/update.php";
            break;
         // 
        case 'updatedm':
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                $sql = "UPDATE danhmuc SET name='".$tenloai."' WHERE id=".$id;
                pdo_execute($sql);
                $thongbao = 'Cập Nhật Thành Công';         
            }
            $sql = "SELECT * FROM danhmuc ORDER BY id DESC";
            $listdanhmuc =  pdo_query($sql);
            include "danhmuc/listdm.php";
            break;
        // 
        default:
            include "home.php";
            break;
    }
}else{
    include "home.php";
}

include "footer.php";