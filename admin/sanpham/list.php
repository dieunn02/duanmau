<div class="row">
    <div class="row formtitle">
        <h1>Quản lý hàng hóa</h1>
    </div>
    <div class="row formcontent">
        <div class="row mb10 formdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>Mã sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình</th>
                    <th>Giá</th>
                    <th>Lượt xem</th>
                    <th></th>
                </tr>
                <?php 
                    foreach ($listsanpham as $sanpham){
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id=" . $id;
                    $xoasp = "index.php?act=xoasp&id=" . $id;
                    echo '<tr>
                        <td><input type="checkbox"></td>
                        <td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$img.'</td>
                        <td>'.$price.'</td>
                        <td>'.$luotxem.'</td>
                        <td>
                            <a href="'.$suadm.'"><input type="button" value="Sửa"></a>    
                            <a href="'.$xoadm.'"><input type="button" value="Xóa"></a>  
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
        </form>
    </div>
</div>
</div>
</div>