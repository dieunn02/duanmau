<div class="row">
    <div class="row formtitle">
        <h1>THÊM MỚI SẢN PHẨM</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="row mb10"> Mã sản phẩm<br>
                <input type="text" name="maspi" disabled>
            </div>
            <div class="row mb10"> Tên sản phẩm<br>
                <input type="text" name="tensp">
            </div>
            <div class="row mb10">Giá<br>
                <input type="text" name="giasp">
            </div>
            <div class="row mb10">Hình ảnh<br>
                <input type="file" name="hinh">
            </div>
            <div class="row mb10">Mô tả<br>
                <textarea rows="10" cols="30" name="mota"></textarea>
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