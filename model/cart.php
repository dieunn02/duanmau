<?php
function viewcart($del)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    if($del==1){
        $xoasp_th='<th>Thao tác</th>';
        $xoasp_td2 = '<td></td>';
    }else{
        $xoasp_th='';
        $xoasp_td2='';
    }
     echo '
            <tr>
                <th>Hình</th>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                '. $xoasp_th.' 
            </tr>';
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $thanhtien = $cart[3] * $cart[4];
        $tong = $tong + $thanhtien;
        if($del==1){
            $xoasp_td='<td><a href="index.php?act=delcart&idcart='.$i.'"> <input type="button" value="xóa"></a></td>';
        }else{
            $xoasp_td='';
        }
        echo
            '
           <tr>
                    <td>1</td>
                    <td><img src="' . $hinh . '" alt="" height="80px"></td>
                    <td>' . $cart[1] . '</td>
                    <td>' . $cart[3] . '</td>
                    <td>' . $cart[4] . '</td>
                    <td>' . $thanhtien . '</td>
                    '. $xoasp_td.' 
            </tr>';
        $i += 1;
    }
    echo '<tr>
                <td colspan="4">Tổng đơn hàng</td>
                <td>' . $tong . '</td>
                 '.$xoasp_td2.'
            </tr>';
}
function bill_chi_tiet($listbill)
{
    global $img_path;
    $tong = 0;
    $i = 0;
     echo '
            <tr>
                <th>Hình</th>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>';
    foreach ($listbill as $cart) {
        $hinh = $img_path . $cart['img'];
        $tong =  $cart['thanhtien'];
        echo
            '
           <tr>
                    <td>1</td>
                    <td><img src="' . $hinh . '" alt="" height="80px"></td>
                    <td>' . $cart['name'] . '</td>
                    <td>' . $cart['price'] . '</td>
                    <td>' . $cart['soluong'] . '</td>
                    <td>' . $cart['thanhtien'] . '</td>
            </tr>';
        $i += 1;
    }
    echo '<tr>
                <td colspan="4">Tổng đơn hàng</td>
                <td>' . $tong . '</td>
            </tr>';
}
function tongdonhang()
{
    $tong = 0;
    foreach ($_SESSION['mycart'] as $cart) {
        $thanhtien = $cart[3] * $cart[4];
        $tong += $thanhtien;
    }
    return $tong;
}
function insert_bill($name,$email,$address,$pttt,$tel,$ngaydathang,$tongdonhang){
    $sql = "INSERT INTO sanpham(bill_name,bill_email,bill_address,bill_tel,bill_ngaydathang,bill_pttt,total) VALUES ('$name','$email','$address','$pttt','$tel','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($iduser,$idpro,$img,$name,$price,$soluong,$thanhtien,$idbill){
    $sql = "INSERT INTO sanpham(iduser,idpro,img,name,price,soluong,thanhtien,idbill) VALUES ('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}
function loadone_bill($id){
    $sql = "SELECT * FROM bill WHERE id=".$id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadone_cart($idbill){
    $sql = "SELECT * FROM cart WHERE idbill=".$idbill;
    $bill = pdo_query_one($sql);
    return $bill;
}