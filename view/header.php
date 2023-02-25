<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dự Án Mẫu</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <script
      src="https://kit.fontawesome.com/62fe7548c5.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap");
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      text-decoration: none;
      outline: none;
      border: none;
      text-transform: capitalize;
      transition: all 0.2s linear;
    }

    body {
      font-family: "Nunito", sans-serif;
    }

    html {
      overflow-x: hidden;
      scroll-padding-top: 5.5rem;
      scroll-behavior: smooth;
    }

    a {
      text-decoration: none;
    }

    :root {
      --green: #a8b8e2;
      --black: #552d5e;
      --light-color: #666;
      --box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, 0.1);
      --boder :  1px solid #e7e6e6;
    }

    .boxcenter {
      width: 100%;
      margin: 0 auto;
    }

    .row {
      float: left;
      width: 100%;
    }

    .mb {
      margin-bottom: 20px;
    }

    .mb10 {
      margin-bottom: 10px;
    }

    .mr {
      margin-right: 2%;
    }

    /* header */

    header {
      /* position: fixed; */
      top: 0;
      left: 0;
      right: 0;
      background-color: #fff;
      padding: 1rem 7%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      z-index: 1000;
      box-shadow: var(--box-shadow);
    }

    header .logo img {
      width: 150px;
    }
    header .logo img:hover {
      transform: scale(1.2);
    }
    .banner img {
      height: 500px;
    }
    header .navbar a {
      font-size: 1.7rem;
      border-radius: 0.5rem;
      padding: 0.5rem 1.5rem;
      color: var(--light-color);
    }

    header .navbar a.active,
    header .navbar a:hover {
      color: #fff;
      background-color: var(--green);
    }

    header .icons a,
    header .icons i {
      cursor: pointer;
      margin-left: 0.5rem;
      height: 4.5rem;
      line-height: 4.5rem;
      width: 4.5rem;
      font-size: 1.7rem;
      text-align: center;
      color: var(--black);
      border-radius: 50%;
      background: #eee;
      transition: 1.5s;
    }

    header .icons i:hover,
    header .icons a:hover {
      color: #fff;
      background-color: var(--green);
      transform: rotate(360deg);
    }

    header .icons #menu-bars {
      display: none;
    }
    /* home */
    section {
      padding: 2rem 5rem;
      /* margin-top: 20px; */
    }

    .banner {
      overflow: hidden;
    }
    .banner {
      position: relative;
    }
    .swiper-pagination {
      bottom: 20px !important;
    }
    .btn {
      margin-top: 1rem;
      display: inline-block;
      font-size: 1.7rem;
      background: rgb(34,193,195);
background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(235,130,229,0.9781162464985994) 100%);
      border-radius: 0.5rem;
      cursor: pointer;
      padding: 1rem 3rem;
      color: #fff;
    }
    .btn1 , input[type = "submit"]{
      margin-top: 1rem;
      display: inline-block;
      font-size: 1.2rem;
      background: rgb(238,174,202);
      background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
      background-color: var(--black);
      border-radius: 0.5rem;
      cursor: pointer;
      padding: 1rem 1.5rem;
      color: #fff;
    }
    .btn:hover  , .btn1:hover ,  input[type = "submit"]:hover{
      background: rgb(34,193,195);
      background: linear-gradient(0deg, rgba(34,193,195,1) 0%, rgba(198,229,31,1) 100%);
      letter-spacing: 0.1;
    }
    .home .home-slider .slide {
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      gap: 5rem;
      padding-top: 5rem;
    }
    .home .home-slider .slide .content {
      flex: 1 1 45rem;
    }
    .home .home-slider .slide .image {
      flex: 1 1 45rem;
    }
    .home .home-slider .slide .image img {
      width: 100%;
    }
    .home .home-slider .slide .content span {
      color: var(--green);
      font-size: 1.7rem;
    }
    .home .home-slider .slide .content h3 {
      color: var(--black);
      font-size: 3.5rem;
    }
    .home .home-slider .slide .content p {
      color: var(--light-color);
      font-size: 1.5rem;
      padding: 3rem 0;
      line-height: 1.5;
    }
    .swiper-pagination-bullet-active {
      background: var(--green);
    }
    /* main */
    .boxtrai {
      float: left;
      width: 70%;
      margin-left: 4.6rem;
      margin-right: 2rem;
    }

    .boxphai {
      float: left;
      width: 20%;
    }

    .boxtitle {
      padding: 10px;
      background-color: greenyellow;
      border-top-left-radius: 5px;
      border-top-right-radius: 5px;
      border-left: 1px #ccc solid;
      border-right: 1px #ccc solid;
      border-bottom: 1px #ccc solid;
    }

    .boxcontent {
      border-left: 1px solid gray;
      border-right: 1px solid gray;
      border-bottom: 1px solid gray;
      border-bottom-left-radius: 5px;
      border-bottom-right-radius: 5px;
      min-height: 200px;
      padding: 20px;
    }

    .boxcontent2 {
      border-left: 1px solid gray;
      border-right: 1px solid gray;
      border-bottom: 1px solid gray;
      background-color: #eee;
    }

    .boxfooter {
      padding: 10px;
      background-color: rgb(193, 203, 203);
      border-bottom-left-radius: 5px;
      border-bottom-right-radius: 5px;
      border-left: 1px #ccc solid;
      border-right: 1px #ccc solid;
      border-bottom: 1px #ccc solid;
    }

    .boxsp {
      float: left;
      width: 32%;
      min-height: 300px;
      border: var(--boder);
      border-radius: 3px;
      margin-bottom: 20px;
      flex: 1;
      text-align: center;
      padding: 15px 10px;
      transition: all 1s ease-in-out;
    }
    .boxsp:hover{
      box-shadow: 0 0 0 2px rgb(238,174,202);
      transform: rotate(8deg);
    }
    .boxsp .img {
      min-height: 200px;
      text-align: center;
      flex-shrink: 0;
    }

    .img img {
      height: 200px;
      width: 100%;
    }
    .boxsp p{
      font-size: 18px;
      color: #27ae60;
      margin-top: 10px;
      margin-bottom: 10px;
      font-weight: bold;
    }
    .boxsp a{
      font-size: 20px;
      color: #084e26;
      font-weight: bold;
    }

    /* box taikhoan */
    .formtaikhoan {
      line-height: 150%;
      font-size: 18px;
    }

    .formtaikhoan input[type="text"],
    .formtaikhoan input[type="email"],
    .formtaikhoan input[type="password"],
    .formcontent input[type="text"] {
      width: 100%;
      border: 1px solid #dddbdb;
      padding: 5px 10px;
      border-radius: 5px;
    }

    .formtaikhoan input[type="checkbox"] {
      border-radius: 5px;
    }

    .formtaikhoan input[type="submit"],
    .formcontent input[type="submit"],
    .formcontent input[type="reset"],
    .formtaikhoan input[type="reset"],
    .formcontent input[type="button"] {
      border: 1px solid #ccc;
      background-color: white;
      padding: 5px 10px;
      border-radius: 5px;
    }

    .formtaikhoan input[type="submit"]:hover,
    .formcontent input[type="submit"]:hover,
    .formcontent input[type="reset"]:hover,
    .formcontent input[type="button"]:hover {
      background-color: red;
    }

    .formtaikhoan li a {
      color: aqua;
      text-decoration: none;
    }

    .formtaikhoan li a:hover {
      color: palegoldenrod;
      text-decoration: underline;
    }

    /* menu doc */
    .menudoc ul {
      margin: 0;
      padding: 0;
      list-style: none;
    }

    .menudoc ul li {
      padding: 10px 20px;
      background-color: #fff;
      border-bottom: 1px solid #ccc;
    }

    .menudoc ul li a {
      color: #666;
      text-decoration: none;
    }

    .menudoc ul li:hover {
      background-color: orange;
      text-decoration: underline;
    }

    .searchbox input[type="text"] {
      width: 100%;
      padding: 5px 10px;
      background-color: #fff;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .footer {
      overflow: hidden;
    }

    /* Top10 */
    .top10 img {
      width: 15%;
      height: 40px;
      float: left;
      margin-right: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
      padding: 3px;
    }

    .top10 a {
      color: fuchsia;
      text-decoration: none;
    }

    .top10 a:hover {
      color: rgb(25, 243, 40);
      text-decoration: underline;
    }

    /* Admin */
    .headerAdmin {
      background-color: #eee;
      border: 1px solid #ccc;
      color: #666;
      border-radius: 5px;
      padding: 0 20px;
    }

    .headerAdmin h1 {
      font-size: 2vw;
    }

    .formtitle {
      background-color: #eee;
      border: 1px solid #ccc;
      color: #666;
      border-radius: 5px;
      padding: 0 20px;
    }

    .formcontent {
      padding: 20px 0px;
    }

    /* table */
    .formdsloai table {
      width: 100%;
      border-collapse: collapse;
      /* border: 1px solid #999; */
    }

    .formdsloai table th {
      padding: 20px;
      background-color: rgb(89, 201, 34);
    }

    .formdsloai table td {
      padding: 10px 20px;
      border: 1px solid #ccc;
    }

    .spct {
      text-align: center;
    }

    .spct img {
      width: 50%;
      object-fit: cover;
    }

    .thongbao {
      color: red;
    }
    .sub-heading {
      text-align: center;
      color: var(--green);
      font-size: 1.5rem;
    }
    .heading {
      text-align: center;
      color: var(--black);
      font-size: 2rem;
      padding-top: 1rem;
      padding-bottom: 1.5rem;
      text-transform: uppercase;
      font-weight: bolder;
    }
    
/* about */
.about .row{
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
    align-items: center;
}
.about .row {
   display: grid;
   grid-template-columns: repeat(2,1fr);

}
.about .row .image img{
    width:75%;
    border-radius: 10%;
    object-fit: cover;
    box-shadow: 0 0 0 2px #eea2a7;
}

.about .row .image img:hover{
        animation: zoom-in-zoom-out 3s ease-in-out infinite;
     }
      
      @keyframes zoom-in-zoom-out {
        0% {
          transform: scale(0.5, 0.5);
        }
        50% {
          transform: scale(1, 1);
        }
        100% {
          transform: scale(0.5, 0.5);
        }
      }
.about .row .content h3{
    color: var(--black);
    font-size: 3rem;
    padding: 1.5rem 0;
}
.about .row .content p{
    color: var(--light-color);
    font-size: 1.2rem;
    padding: 0.5rem 0;
    line-height: 2;
}
.about .row .content .icons-container{
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    padding: 1rem 0;
    margin-top: 0.5rem;
}
.about .row .content .icons-container .icons{
    background: #eee;
    border-radius: 0.5rem;
    border: 0.1rem solid rgba(0, 0, 0, 0.2);
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    padding: 1rem 0;
    flex: 1 1 17rem;
}
.about .row .content .icons-container .icons i{
    font-size: 2rem;
    color: var(--green);
}
.about .row .content .icons-container .icons span{
    font-size: 1.2rem;
    color: var(--light-color);
}
    /* review */
    .review .slide {
      padding: 2rem;
      box-shadow: var(--box-shadow);
      border: 0.1rem solid rgba(0, 0, 0, 0.2);
      border-radius: 0.5rem;
      position: relative;
    }
    .review .slide .fa-quote-right {
      position: absolute;
      top: 2rem;
      right: 2rem;
      font-size: 6rem;
      color: #ccc;
    }
    .review .slide .user {
      display: flex;
      gap: 1.5rem;
      align-items: center;
      padding-bottom: 1.5rem;
    }
    .review .slide .user img {
      height: 7rem;
      width: 7rem;
      border-radius: 50%;
      object-fit: cover;
    }
    .review .slide .user h3 {
      color: var(--black);
      font-size: 2rem;
      padding-bottom: 0.5rem;
    }
    .review .slide .user i {
      font-size: 1.3rem;
      color: var(--green);
    }
    .review .slide p {
      font-size: 1.5rem;
      line-height: 1.8;
      color: var(--light-color);
    }
    /* order  */
    .order form {
      max-width: 90rem;
      border-radius: 0.5rem;
      box-shadow: var(--box-shadow);
      border: 0.1rem solid rgba(0, 0, 0, 0.2);
      background-color: #fff;
      padding: 1.5rem;
      margin: 0 auto;
    }
    .order form .inputBox {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }
    .order form .inputBox .input {
      width: 49%;
    }
    .order form .inputBox .input span {
      display: block;
      padding: 0.5rem 0;
      font-size: 1.5rem;
      color: var(--light-color);
    }
    .order form .inputBox .input input,
    .order form .inputBox .input textarea {
      background: #eee;
      border-radius: 0.5rem;
      padding: 1rem;
      font-size: 1.6rem;
      color: var(--black);
      text-transform: none;
      margin-bottom: 1rem;
      width: 100%;
    }
    .order form .inputBox .input textarea {
      height: 20rem;
      resize: none;
    }
    .order form .btn {
      margin-top: 0;
    }
    /* footer */
    .footer .box-container {
      padding: 1rem;
      background-color: rgba(210, 208, 208, 0.1);
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 1.5rem;
      justify-content: center;
      align-items: center;
    }
    .footer .box-container .box h3 {
      padding: 0.5rem 0;
      font-size: 2.2rem;
      color: var(--black);
    }
    .footer .box-container .box a {
      display: block;
      padding: 0.5rem 0;
      font-size: 1.3rem;
      color: var(--light-color);
    }
    .footer .box-container a:hover {
      color: var(--green);
      text-decoration: underline;
    }
    .footer .credit {
      text-align: center;
      border-top: 0.1rem solid rgba(0, 0, 0, 0.1);
      color: var(--black);
      padding: 0.5rem;
      margin: 1.5rem;
      font-size: 2rem;
      font-weight: bold;
    }
  </style>
  <body>
    <div class="boxcenter">
      <header>
        <a href="#" class="logo">
          <img
            src="https://i.pinimg.com/564x/fb/d1/39/fbd1391e26cb4a22b54e88d508a0ba75.jpg"
            alt=""
          />
        </a>
        <nav class="navbar">
          <!-- <a class="active" href="#home">home</a> -->
          <a href="index.php" class="active">Trang Chủ</a>
          <a href="#home">Giới Thiệu</a>
          <a href="#about">Nguồn gốc</a>
          <a href="#review">Góp Ý</a>
          <a href="#order">Hỏi Đáp</a>
          <a href="#footer">Liên Hệ</a>
          
        </nav>
        <div class="icons">
          <i class="fa-solid fa-bars" id="menu-bars"></i>
          <i class="fa-solid fa-magnifying-glass" id="search-icon"></i>
          <a href="#" class="fa-solid fa-heart"></a>
          <a href="#" class="fas fa-shopping-cart"></a>
          <a href="#" class="fa-solid fa-user"></a>
        </div>
      </header>
      <section class="home" id="home">
        <div class="banner">
          <div class="swiper-container home-slider">
            <div class="swiper-wrapper wrapper">
              <div class="slideshow"></div>
              <div class="swiper-slide slide">
                <div class="content">
                  <span>CHANEL PARFUMEUR .</span>
                  <h3>Coco Mademoiseliie Chanel Paris</h3>
                  <p>
                    Nước hoa Chanel Coco Mademoiselle L'eau Privee là mùi hương đươc thương hiệu Chanel ra mắt năm 2020. Đây là phiên bản nước hoa dành riêng cho ban đêm đặc biệt dành cho phái đẹp. Coco Mademoiselle L'eau Privee giữ vững nét nữ tính thanh lịch nhưng táo bạo, quyến rũ quý phái và kiêu sa.
                  </p>
                  <a href="#" class="btn">Order now</a>
                </div>
                <div class="image">
                  <img
                    src="https://i.pinimg.com/564x/39/50/88/395088d1c3c5344c3733f8b1e8dd6627.jpg"
                    alt=""
                  />
                </div>
              </div>
              <!-- slide2 -->
              <div class="swiper-slide slide">
                <div class="content">
                  <span>CHANEL PARFUMEUR .</span>
                  <h3>Chanel Eau Tendre</h3>
                  <p>
                    Chanel Chance Eau Tendre EDP được ra mắt năm 2019. Tiếp nối chai nước hoa gây bão của Chanel là Chanel Chance 2005. Nhưng với một thiết kế và tông mùi tươi trẻ hơn, bắt kịp thời đại hơn. Chanel Chance hồng edp phải nói là được rất rất nhiều cô nàng ưa chuộng. Vì mùi hương đơn giản, thanh tao, dễ thương. Và đặc biệt là dùng lúc nào cũng được. Gần như chỉ cần là con gái thì không thể nào không thích được.
                  </p>
                  <a href="#" class="btn">Order now</a>
                </div>
                <div class="image">
                  <img
                    src="https://i.pinimg.com/564x/a4/aa/0b/a4aa0b1520cf3eb8430e11d3d529a863.jpg"
                    alt=""
                  />
                </div>
              </div>
              <!-- slide3 -->
              <div class="swiper-slide slide">
                <div class="content">
                  <span>CHANEL PARFUMEUR .</span>
                  <h3>Chanel Coco Noir EDP</h3>
                  <p>
                    Chanel Coco Noir EDP được thừa hưởng cả 2 nét đẹp rạng rỡ và nồng ấm từ Coco Mademoiselle và Coco eau de parfum, đem đến cho bạn một sự trải nghiệm đầy thú vị, sự tận hưởng lấy bối cảnh từ đêm đen huyền bí so với dòng nước hoa Coco EDP trước (1984).
                  </p>
                  <a href="#" class="btn">Order now</a>
                </div>
                <div class="image">
                  <img
                    src="https://xachtaynhat.net/wp-content/uploads/2015/11/CHANEL-Coco-Noir.jpg"
                    alt=""
                  />
                </div>
              </div>
              <!-- slide4 -->
              <div class="swiper-slide slide">
                <div class="content">
                  <span>CHANEL PARFUMEUR .</span>
                  <h3>Nước Hoa Nữ Chanel N°5 EDP</h3>
                  <p>
                    Nốt hương chủ đạo của chai nước hoa số 5 này là hoa hồng và hoa nhài. Cả hai được lấy trực tiếp từ Province – một trong những vùng trồng hoa lớn nhất nước Pháp. Thêm sự tươi mát từ cam Bergamot và tinh dầu hoa cam được kết hợp tinh tế. Hương thơm dịu nhẹ cùng chút nồng nàn từ vanilla. Đậm đà và mãnh liệt hơn ở tầng hương cuối. Khi có sự xuất hiện của gỗ đàn hương và hoắc hương, len lỏi chút dư vị ấm áp và lưu luyến.
                  </p>
                  <a href="#" class="btn">Order now</a>
                </div>
                <div class="image">
                  <img
                    src="https://i.pinimg.com/564x/4b/7f/9b/4b7f9b4ad8b0b3508f66bba0ebbab930.jpg"
                    alt=""
                  />
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
      </section>
    </div>
  </body>
</html>
