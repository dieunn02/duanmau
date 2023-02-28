function check() {
    console.log("Checking")
    let tenDangNhap = document.querySelector("#ten-dang-nhap")
    let password = document.querySelector("#mat-khau")
    if (tenDangNhap.value.trim() === '') {
        alert('Chưa nhập tên đăng nhập');
        return false;
    }
    if (password.value.trim() === "") {
        alert('Chưa nhập mật khẩu');
        return false;
    }
    return true;
}
