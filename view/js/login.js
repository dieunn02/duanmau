let email = document.getElementsByName('email')[0];
let password = document.getElementsByName('password')[0];

function check() {
    if (email.value.trim() == '') {
        alert('Chưa nhập tên đăng nhập');
        return false;
    } else if (
        email.value.trim().indexOf('.') == -1 ||
        email.value.trim().indexOf('@') == -1
    ) {
        alert('Email không đúng định dạng');
        return false;
    }
    if (password.value.trim() == '') {
        alert('Chưa nhập mật khẩu');
        return false;
    }
    return true;
}
