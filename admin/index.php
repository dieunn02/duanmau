<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";

include "header.php";
//controller
if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch($act){
        // DANH MỤC
        case 'adddm':
            //check click nut add hay khong
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = 'Thêm thành công';         
            }
            include "danhmuc/add.php";
            break;
         // 
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        // 
        case 'xoadm':
            if(isset($_GET['id']) && ($_GET['id'] >0 )){
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
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
            include "danhmuc/list.php";
            break;
        // SẢN PHẨM
        // addsp
        case 'addsp':
            //check click nut add hay khong
            if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                insert_sanpham($tensp,$giasp,$hinh,$mota,$iddm);
                $thongbao = 'Thêm thành công';         
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/add.php";
            break;
         // listsp
        case 'listsp':
            if(isset($_POST['listok']) && ($_POST['listok'])){
                $kyw=$_POST['kyw'];
                $iddm = $_POST['iddm'];
            }else{
                $kyw='';
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham( $kyw,$iddm);
            include "sanpham/list.php";
            break;
        // xoasp
        case 'xoasp':
            if(isset($_GET['id'])&& ($_GET['id'] > 0)){
                // var_dump($_GET['id']);
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham();
            include "sanpham/list.php";
            break;
        // suasp
        case 'suasp':
            if (isset($_GET['id'])&& ($_GET['id'] > 0))  {
             $sanpham =  loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            include "sanpham/update.php";
            break;
         // updatedm
        case 'updatesp':
            if(isset($_POST['capnhat']) ){
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $mota = $_POST['mota'];
                $hinh = $_FILES['hinh']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {

                } else {

                }
                update_sanpham($id,$iddm,$tensp,$giasp,$mota,$hinh);
                $thongbao = 'Thêm thành công';   
            }
            $listdanhmuc = loadall_danhmuc();
            $listsanpham = loadall_sanpham("",0);
            include "sanpham/list.php";
            break;
           
          //tài khoản
          case 'dskh':
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        
        // default
        default:
            include "home.php";
            break;
    }
}else{
    include "home.php";
}

include "footer.php";