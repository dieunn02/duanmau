<?php
ob_start();
session_start();
include 'model/pdo.php';
include 'model/sanpham.php';
include 'model/danhmuc.php';
include 'view/header.php';
include 'global.php';
include 'model/taikhoan.php';

$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();
if((isset($_GET['act'])) && ($_GET['act']!= "")){
    $act = $_GET['act'];
    switch ($act) {
        case 'sanpham':
            if(isset($_POST['kyw']) && ($_POST['kyw'] != "" )){
                $kyw = $_POST['kyw'];
            }else{
                $kyw = "";
            }
            if(isset($_GET['iddm']) && ($_GET['iddm'] >0 )){
                $iddm = $_GET['iddm'];           
            }else{
                $iddm =0;
            }
            $dssp = loadall_sanpham($kyw,$iddm);
            $tendm = load_ten_dm($iddm);
            include 'view/sanpham.php';
            break;
        case 'sanphamct':
            if(isset($_GET['idsp']) && ($_GET['idsp'] >0 )){
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                 extract($onesp);
                $sp_cung_loai = load_sanpham_cungloai($id,$iddm); 
                include 'view/sanphamct.php';
            }else{
                include 'view/home.php';
            }
            break;
        // dangky  
        case 'dangky':
            if(isset($_POST['dangky']) && ($_POST['dangky'] >0 )){
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_taikhoan($email,$user,$pass);
                $thongbao = "Đã insert thành công ! Vui lòng đăng nhập để thực hiện chức năng bình luận hoặc đặt hàng .";
            }
            include 'view/taikhoan/dangky.php';
            break;
        // dangnhap
        case 'dangnhap':
            if (isset($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    // $thongbao = "Đăng nhập thành công !";
                    header('Location: index.php');
                } else {
                    $thongbao = "tài khoản không tồn tại! vui lòng kiểm tra lại !";
                }
            }
            include "view/taikhoan/dangky.php";
            break;
            
        // edit_taikhoan
        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])){
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];
                update_taikhoan($id, $user, $pass, $email, $address, $tel);
                $_SESSION['user'] = checkuser($user, $pass);
                 header('location: index.php?act=edit_taikhoan');
                
            }
            include "view/taikhoan/edit_taikhoan.php";
            break;
        // quenmk
        case 'quenmk':
            if (isset($_POST['guiemail'])) {
                $email = $_POST['email'];
                $checkemail = checkemail($email);
                if (is_array($checkemail)) {
                    $thongbao = "mật khẩu của bạn là :" . $checkemail['pass'];
                } else {
                    $thongbao = "Email không tồn tại !";
                }
            }
            include "view/taikhoan/quenmk.php";
            break;
        // 
        case 'gioithieu':
              include 'view/gioithieu.php';
              break;
        case 'lienhe':
            include 'view/lienhe.php';
            break;
        default:
            include 'view/home.php';
            break;
    }
}else{
include 'view/home.php';
}
include 'view/footer.php';
?>