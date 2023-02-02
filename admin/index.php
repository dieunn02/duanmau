<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "header.php";
//controller
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch($act){
        case 'adddm':
            //check click nut add hay khong
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = 'Them Thanh Cong';         
            }
            include "danhmuc/add.php";
            break;
         // 
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/listdm.php";
            break;
        // 
        case 'xoadm':
            if(isset($_GET['id']) && ($_GET['id'] >0 )){
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/listdm.php";
            break;
        // 
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
             $dm =  loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;
         // 
        case 'updatedm':
            if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                $tenloai = $_POST['tenloai'];
                $id = $_POST['id'];
                update_danhmuc($id,$tenloai);
                $thongbao = 'Cập Nhật Thành Công';         
            }
            $listdanhmuc = loadall_danhmuc();
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