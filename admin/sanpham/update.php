<?php 
    if(is_array($sanpham)){
    extract($sanpham);
    }
    $hinhpath="../upload/".$img;
                    if(is_file($hinhpath)){
                        $hinh = "<img src=' ".$hinhpath." ' height='80' > " ;
                    }else{
                        $hinh = 'No photo';
                    }
?>
<div class="row">
    <div class="row formtitle">
        <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row formcontent">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
                <select name="iddm">
                    <option value="0" selected>Tất cả</option>
                    <?php 
                    foreach ( $listdanhmuc as $danhmuc) {
                    
                        if($iddm ==$id ) $s="selectecd" ; else $s= "";                         echo ' <option value="'.$id.'" '.$s.'>'.$name.'</option>';                
                    }
                    ?>
                </select>
            </div>
            <div class="row mb10"> Tên sản phẩm<br>
                <input type="text" name="tensp" value="<?= $name ?>">
            </div>
            <div class="row mb10">Giá<br>
                <input type="text" name="giasp" value="<?= $price ?>">
            </div>
            <div class="row mb10">Hình ảnh<br>
                <input type="file" name="hinh">
                <?= $hinh ?>
            </div>
            <div class="row mb10">Mô tả<br>
                <textarea rows="10" cols="30" name="mota"><?= $mota ?></textarea>
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="capnhat" value="Cập Nhật">
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
</div>