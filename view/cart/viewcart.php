<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">Giỏ hàng</div>
            <div class="row boxcontent cart">
                <table>
                    <?php
                    viewcart(1);
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
            <a href="index.php?act=bill"><input type="button" value="Tiếp tục đặt hàng"></a>
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