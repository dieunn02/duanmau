let userName = document.getElementsByName('username')[0];
let email = document.getElementsByName('email')[0];
let avatar = document.querySelector('input[type=file]');
let password = document.getElementsByName('password')[0];
let rePassword =
    document.getElementsByName('rePassword')[0];
function checkLogin() {
    if (userName.value.trim() == '') {
        alert('Tên không được để trống');
        return false;
    }
    if (email.value.trim() == '') {
        alert('Email không được để trống');
        return false;
    } else if (
        email.value.trim().indexOf('.') == -1 ||
        email.value.trim().indexOf('@') == -1
    ) {
        alert('Email không đúng định dạng');
        return false;
    }
    if (avatar.value.trim() == '') {
        alert('Avatar không được để trống');
        return false;
    }
    if (password.value.trim() == '') {
        alert('Password không được để trống');
        return false;
    } else if (
        password.value.trim() != rePassword.value.trim()
    ) {
        alert('Nhập lại mật khẩu chưa đúng');
        return false;
    }
    return true;
}
