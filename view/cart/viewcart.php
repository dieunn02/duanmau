<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">Giỏ hàng</div>
            <div class="row boxcontent cart">
                <table>
                    <tr>
                        <th>Hình</th>
                        <th>Sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Thao tác</th>
                    </tr>

                    <?php
                    $tong = 0;
                    $i = 0;
                    foreach ($_SESSION['mycart'] as $cart) {
                        $hinh = $img_path . $cart[2];
                        $thanhtien = $cart[3] * $cart[4];
                        $tong = $tong + $thanhtien;
                        $xoasp = '<a href="index.php?act=delcart&idcart=' . $i . '"><input type="button" name="" value="Xóa"></a>';

                        echo '<tr>
                                    <td>1</td>
                                    <td><img src="' . $hinh . '" alt="" height="80px"></td>
                                    <td>' . $cart[1] . '</td>
                                    <td>' . $cart[3] . '</td>
                                    <td>' . $cart[4] . '</td>
                                    <td>' . $thanhtien . '</td>
                                    <td>' . $xoasp . '</td>
                                </tr>';
                        $i += 1;
                    }
                    echo '<tr>
                                <td colspan="4">Tổng đơn hàng</td>
                                <td>' . $tong . '</td>
                                <td></td>
                            </tr>';
                    ?>
                    <!-- <tr>
                        <td>1</td>
                        <td><img src="../images/1.Chanel_Chance_EDP.webp" alt="" height="80px"></td>
                        <td>Nước Hoa Chanel</td>
                        <td>50</td>
                        <td>1</td>
                        <td><input type="button" name="" value="Xóa"></td>
                    </tr> -->
                </table>
            </div>
        </div>
        <div class="row mb bill">
            <input type="submit" value="Đồng ý đặt hàng">
            <a href="index.php?act=delcart">
                <input type="button" value="Xóa giỏ hàng">
            </a>
        </div>
    </div>
    <div class=" boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>
<!-- </div> -->