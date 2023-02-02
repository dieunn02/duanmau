<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row">
            <div class="banner">
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="view/images/banner01.jpg" style="width:100%">
                        <div class="text">Caption Text</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="view/images/banner02.jpg" style="width:100%">
                        <div class="text">Caption Two</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="view/images/banner03.jpg" style="width:100%">
                        <div class="text">Caption Three</div>
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $i=0;
            foreach ($spnew as $sp) {
                extract($sp);
                if(($i=2) || ($i=5) || ($i=8)){
                    $mr = "";
                }else {
                    $mr = "mr";
                }
                $hinh=$img_path.$img;
                echo '<div class="boxsp '.$mr.' ">
                <div class="img">
                    <img src="" alt="'.$hinh.'">
                </div>
                <p>'.$price.'</p>
                <a href="#">'.$name.'</a>
            </div>';
            $i+=1;
            }
             ?>
            <!-- <div class="boxsp mr">
                <div class="img">
                    <img src="https://i.pinimg.com/236x/01/f9/07/01f907c0bd8294b5e04f4068bd7f18f5.jpg" alt="">
                </div>
                <p>$30</p>
                <a href="#">Chanh</a>
            </div>
            <div class="boxsp mr">
                <div class="img">
                    <img src="https://i.pinimg.com/236x/01/f9/07/01f907c0bd8294b5e04f4068bd7f18f5.jpg" alt="">
                </div>
                <p>$30</p>
                <a href="#">Chanh</a>
            </div>
            <div class="boxsp ">
                <div class="img">
                    <img src="https://i.pinimg.com/236x/01/f9/07/01f907c0bd8294b5e04f4068bd7f18f5.jpg" alt="">
                </div>
                <p>$30</p>
                <a href="#">Chanh</a>
            </div>
            <div class="boxsp mr">
                <div class="img">
                    <img src="https://i.pinimg.com/236x/01/f9/07/01f907c0bd8294b5e04f4068bd7f18f5.jpg" alt="">
                </div>
                <p>$30</p>
                <a href="#">Chanh</a>
            </div>
            <div class="boxsp mr">
                <div class="img">
                    <img src="https://i.pinimg.com/236x/01/f9/07/01f907c0bd8294b5e04f4068bd7f18f5.jpg" alt="">
                </div>
                <p>$30</p>
                <a href="#">Chanh</a>
            </div>
            <div class="boxsp ">
                <div class="img">
                    <img src="https://i.pinimg.com/236x/01/f9/07/01f907c0bd8294b5e04f4068bd7f18f5.jpg" alt="">
                </div>
                <p>$30</p>
                <a href="#">Chanh</a>
            </div>
            <div class="boxsp mr">
                <div class="img"><img src="https://i.pinimg.com/236x/01/f9/07/01f907c0bd8294b5e04f4068bd7f18f5.jpg"
                        alt=""></div>
                <p>$30</p>
                <a href="#">Chanh</a>
            </div>
            <div class="boxsp mr">
                <div class="img"><img src="https://i.pinimg.com/236x/01/f9/07/01f907c0bd8294b5e04f4068bd7f18f5.jpg"
                        alt=""></div>
                <p>$30</p>
                <a href="#">Chanh</a>
            </div>
            <div class="boxsp ">
            <div class="img"> <img src="https://i.pinimg.com/236x/01/f9/07/01f907c0bd8294b5e04f4068bd7f18f5.jpg" alt="">
            </div>
            <p>$30</p>
            <a href="#">Chanh</a>
        </div> -->
        </div>
    </div>
    <div class="boxphai">
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
                    <li><a href="#">Dong Ho</a></li>
                    <li><a href="#">Dong Ho</a></li>
                    <li><a href="#">Dong Ho</a></li>
                    <li><a href="#">Dong Ho</a></li>
                    <li><a href="#">Dong Ho</a></li>
                    <li><a href="#">Dong Ho</a></li>
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
                <div class="row mb10 top10">
                    <img src="https://i.pinimg.com/564x/8a/b1/4f/8ab14fbf4197a43543fa6604e11186db.jpg" alt="">
                    <a href="#">Dua Hau</a>
                </div>
                <div class="row mb10 top10">
                    <img src="https://i.pinimg.com/564x/8a/b1/4f/8ab14fbf4197a43543fa6604e11186db.jpg" alt="">
                    <a href="#">Ca Rot</a>
                </div>
                <div class="row mb10 top10">
                    <img src="https://i.pinimg.com/564x/8a/b1/4f/8ab14fbf4197a43543fa6604e11186db.jpg" alt="">
                    <a href="#">Su hao</a>
                </div>
                <div class="row mb10 top10">
                    <img src="https://i.pinimg.com/564x/8a/b1/4f/8ab14fbf4197a43543fa6604e11186db.jpg" alt="">
                    <a href="#">Xoai</a>
                </div>
                <div class="row mb10 top10">
                    <img src="https://i.pinimg.com/564x/8a/b1/4f/8ab14fbf4197a43543fa6604e11186db.jpg" alt="">
                    <a href="#">Chuoi</a>
                </div>
                <div class="row mb10 top10">
                    <img src="https://i.pinimg.com/564x/8a/b1/4f/8ab14fbf4197a43543fa6604e11186db.jpg" alt="">
                    <a href="#">Mang cut</a>
                </div>
                <div class="row mb10 top10">
                    <img src="https://i.pinimg.com/564x/8a/b1/4f/8ab14fbf4197a43543fa6604e11186db.jpg" alt="">
                    <a href="#">Dua Hau</a>
                </div>
                <div class="row mb10 top10">
                    <img src="https://i.pinimg.com/564x/8a/b1/4f/8ab14fbf4197a43543fa6604e11186db.jpg" alt="">
                    <a href="#">Dua Hau</a>
                </div>
                <div class="row mb10 top10">
                    <img src="https://i.pinimg.com/564x/8a/b1/4f/8ab14fbf4197a43543fa6604e11186db.jpg" alt="">
                    <a href="#">Dua Hau</a>
                </div>
                <div class="row mb10 top10">
                    <img src="https://i.pinimg.com/564x/8a/b1/4f/8ab14fbf4197a43543fa6604e11186db.jpg" alt="">
                    <a href="#">Dua Hau</a>
                </div>
                <div class="row mb10 top10">
                    <img src="https://i.pinimg.com/564x/8a/b1/4f/8ab14fbf4197a43543fa6604e11186db.jpg" alt="">
                    <a href="#">Dua Hau</a>
                </div>
            </div>
        </div>
    </div>
</div>