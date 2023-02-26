<div class="row mb ">
    <div class="boxtrai mr">
        <!-- <form action="" method="post"> -->
        <div class="row mb">
            <div class="boxtitle">Thông tin đặt hàng</div>
            <div class="row boxcontent billcomfirm">
                <table>
                    <?php
                        if (isset($_SESSION['user'])) {
                            $name = $_SESSION['user']['user'];
                            $address = $_SESSION['user']['address'];
                            $email = $_SESSION['user']['email'];
                            $tel = $_SESSION['user']['tel'];
                        } else {
                            $name = "";
                            $address = "";
                            $email = "";
                            $tel = "";
                        }
                        ?>
                    <tr>
                        <td>Người đặt hàng</td>
                        <td><input type="text" name="name" value="<?= $name ?>"></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><input type="text" name="address" value="<?= $address ?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" value="<?= $email ?>"></td>
                    </tr>
                    <tr>
                        <td>Numbers</td>
                        <td><input type="text" name="tel" value="<?= $tel ?>"></td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- Phương thức thanh toán -->
        <div class="row mb">
            <div class="boxtitle">
                <h4>Phương thức thanh toán</h4>
            </div>
            <div class="row boxcontent">
                <table>
                    <tr>
                        <td><input type="radio" value="pttt" checked>Trả tiền khi nhận hàng</td>
                        <td><input type="radio" value="pttt">Chuyển khoản ngân hàng</td>
                        <td><input type="radio" value="pttt">Thanh toán online</td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- giỏ hàng -->
        <div class="row mb">
            <div class="boxtitle">Thông tin giỏ hàng</div>
            <div class="row boxcontent cart">
                <table>
                    <?php
                        viewcart(0);
                        ?>
                </table>
            </div>
        </div>

        <div class="row mb bill">
            <a href="index.php?act=billcomfirm"><input type="submit" value="Đồng ý đặt hàng" name="dongydathang"></a>
        </div>
        <!-- </form> -->
    </div>
    <div class=" boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>