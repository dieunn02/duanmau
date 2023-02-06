<div class="row mb">
    <div class="boxtitle">TAi KHOAN</div>
    <div class="boxcontent formtaikhoan">
        <form action="#" method="post">
            <div class="row mb">
                Ten dang nhap : <br>
                <input type="text" name="user" id="">
            </div>
            <div class="row mb">
                Mat khau : <br>
                <input type="password" name="pass" id="">
            </div>
            <div class="row mb">
                <input type="checkbox" name="" id="">Ghi nho tai khoan ?
            </div>
            <div class="row mb">
                <input type="submit" value="Dang Nhap">
            </div>
        </form>
        <li><a href="#">Quen Mat Khau</a></li>
        <li><a href="#">Dang Ki thanh vien</a></li>
    </div>
</div>
<div class="row mb">
    <div class="boxtitle">DANH MUC</div>
    <div class="boxcontent2 menudoc">
        <ul>
            <?php 
                    foreach ($dsdm as $dm) { 
                        extract($dm);
                        $linkdm = "index.php?act=sanpham&iddm=".$id;
                        echo '<li><a href=" '.$linkdm.' ">'.$name.'</a></li>';
                    }
                    ?>
        </ul>
    </div>
    <div class="boxfooter searchbox">
        <form action="#" method="post">
            <input type="text">
        </form>
    </div>
</div>
<div class="row">
    <div class="boxtitle">TOP 10 YEU THICH</div>
    <div class="row boxcontent">
        <?php
                foreach ($dstop10 as $sp) {
                    extract($sp);
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    $img = $img_path.$img;
                    echo '<div class="row mb10 top10">
                    <a href=" '.$linksp.' "><img src=" '.$img.' " alt=""></a>        
                    <a href=" '.$linksp.' ">'.$name.'</a>
                </div>';
                }
                ?>
    </div>
</div>