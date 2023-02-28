<script src="../../view/js/sanpham.js"></script>
<div class="row">
    <div class="row formtitle">
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data" onsubmit="return check()">
            <div class="row mb10">Danh mục<br>
                <select name="iddm">
                    <?php 
                    foreach ( $listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        echo ' <option value="'.$id.'">'.$name.'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class=" row mb10"> Tên sản phẩm<br>
                <input type="text" name="tensp" id="product-name">
            </div>
            <div class="row mb10">Giá<br>
                <input type="text" name="giasp" id="product-price">
            </div>
            <div class="row mb10">Hình ảnh<br>
                <input type="file" name="hinh" id="product-image">
            </div>
            <div class="row mb10">Mô tả<br>
                <textarea rows="10" cols="30" name="mota" id="product-description"></textarea>
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="Thêm Mới">
                <input type="reset" value="Nhập Lại">
                <a href="index.php?act=listsp">
                    <input type="button" value="Danh Sách">
                </a>
            </div>
            <?php
                 if(isset($thongbao) && ($thongbao!= "" )) 
                  echo $thongbao;       
             ?>
        </form>
    </div>
</div>
</div>