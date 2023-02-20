<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự Án Mẫu</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap");

* {
    box-sizing: border-box;
    font-family: Nunito;
}

a {
    text-decoration: none;
}



/*  Slideshow*/
.slideshow-container {
    max-width: 1240px;
    position: relative;
    margin: auto;
}

.mySlides {
    display: none;
}

.numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
}

.dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
}

.active,
.dot:hover {
    background-color: #717171;
}

.fade {
    animation-name: fade;
    animation-duration: 1.5s;
}

@keyframes fade {
    from {
        opacity: .4
    }

    to {
        opacity: 1
    }
}

/* het slideshow */
.boxcenter {
    width: 80%;
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

.demo {
    background: whitesmoke;
    min-height: 100px;
}

.header {
    background: greenyellow;
    border-radius: 5px;
    border: 1px solid grey;
    color: white;
    font-size: 1vw;
}

.header h1 {
    margin: 10px 20px;
}

.menu {
    background: rgb(199, 203, 191);
    border-radius: 5px;
    border: 1px solid rgb(202, 138, 49);
    color: white;
    font-size: 1vw;
}

.footer {
    background: rgb(28, 40, 11);
    border-radius: 5px;
    border: 1px solid rgb(14, 232, 145);
    color: white;
    font-size: 0.8vw;
    padding: 20px;
}

.boxtrai {
    float: left;
    width: 74%;
}

.boxphai {
    float: left;
    width: 24%;
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

.banner {
    min-height: 300px;
    width: 100%;
    text-align: center;
}

.banner img {
    height: 300px;
}

.boxsp {
    float: left;
    width: 32%;
    min-height: 300px;
    border: 1px solid #ccc;
    border-radius: 3px;
    margin-bottom: 20px;
    flex: 1;
    text-align: center;
    padding: 15px 10px;
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

.img img:hover {
    transform: rotate(10deg);
    overflow: hidden;
}

/* menu */
.menu ul {
    padding: 0 15px;
}

.menu ul li {
    list-style: none;
    display: inline;
    padding: 0 15px;
}

.menu ul li a {
    color: green;
    text-decoration: none;
    font-size: 20px;
    transition: 0.5s;
}

.menu ul li a:hover {
    color: orange;
    text-decoration: none;
    font-size: 22px;
}

/* box taikhoan */
.formtaikhoan {
    line-height: 150%;
}

.formtaikhoan input[type="text"],
.formtaikhoan input[type="email"],
.formtaikhoan input[type="password"],
.formcontent input[type="text"] {
    width: 100%;
    border: 1px solid #ccc;
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
</style>

<body>
    <div class="boxcenter">
        <div class="row mb header">
            <h1>ChanhDay</h1>
        </div>
        <div class="row mb menu">
            <ul>
                <li><a href="index.php">Trang Chu</a></li>
                <li><a href="index.php?act=gioithieu">Gioi Thieu</a></li>
                <li><a href="index.php?act=lienhe">Lien He</a></li>
                <li><a href="index.php?act=gopy">Gop Y</a></li>
                <li><a href="index.php?act=hoidap">Hoi Dap</a></li>
            </ul>
        </div>