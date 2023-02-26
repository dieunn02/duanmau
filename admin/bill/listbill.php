<div class="row">
    <div class="row formtitle">
        <h1>Quản lý đơn hàng</h1>
    </div>
    <div class="row formcontent">
        <div class="row mb10 formdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>Mã đơn hàng</th>
                    <th>Khách hàng</th>
                    <th>Số lượng hàng</th>
                    <th>Giá trị đơn hàng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Thao tác</th>
                </tr>
                <?php
                foreach ($listbill as $bill){
                    extract($bill);
                    $kh = $bill["bill_name"] .'
                    <br> '. $bill["bill_email"] .'
                    <br> '. $bill["bill_address"] .'
                    <br> '. $bill["bill_tel"] ;
                    $ttdh= get_ttdh($bill["bill_status"]);
                    $countsp = loadall_cart_count($bill["id"]);
                    echo '<tr>
                        <td><input type="checkbox"></td>
                        <td> DAM ' . $bill['id'] . '</td>
                        <td>  ' . $kh . '</td>
                        <td><strong>  ' . $bill["total"]. '</strong></td>
                        <td>' . $ttdh . '</td>
                        <td>' . $bill["ngaydathang"]. '</td>
                        <td>
                            <a href=""><input type="button" value="Sửa"></a>    
                            <a href=""><input type="button" value="Xóa"></a>  
                        </td>
                    </tr>';
                }
                ?>
            </table>
        </div>
        <div class="row mb10">
            <input type="button" value="Chọn tất cả">
            <input type="button" value="Bỏ chọn tất cả">
            <input type=" button" value="Xóa các mục đã chọn">
            <a href="index.php?act=addsp">
                <input type="button" value="Nhập thêm">
            </a>
        </div>
    </div>
</div>