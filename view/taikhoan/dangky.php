<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">Đăng ký thành viên</div>
            <div class="row boxcontent formtaikhoan ">
                <form action="index.php?act=dangky" method="post">
                    <div class="row mb10">
                        Email
                        <input type="email" name="email" value="">
                    </div>
                    <div class="row mb10">
                        Tên đăng nhập
                        <input type="text" name="user" value="">
                    </div>
                    <div class="row mb10">
                        Mật khẩu
                        <input type="password" name="pass" value="">
                    </div>
                    <div class="row mb10">
                        <input type="submit" value="Đăng ký" name="dangky">
                        <input type="reset" name="" value="Nhập lại">
                    </div>
                </form>
                <h2 class="thongbao">
                    <?php 
                if(isset($thongbao) && ($thongbao != "") ){
                    echo $thongbao;
                }
                ?>
                </h2>
            </div>
        </div>
    </div>
    <div class=" boxphai">
        <?php  include "view/boxright.php" ; ?>
    </div>
</div>
</div>