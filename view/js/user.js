

function editUserCheck() {
    let username = document.querySelector("#username");
    let password = document.querySelector("#password");
    let email = document.querySelector("#email");
    let address = document.querySelector("#address");
    let phoneNumber = document.querySelector("#phone-number");

    if (username.value.trim() === '') {
        alert('Tên không được để trống');
        return false;
    }
    if (email.value.trim() === '') {
        alert('Email không được để trống');
        return false;
    } else if (
        email.value.trim().indexOf('.') === -1 ||
        email.value.trim().indexOf('@') === -1
    ) {
        alert('Email không đúng định dạng');
        return false;
    }
    if (password.value.trim() === '') {
        alert('Password không được để trống');
        return false;
    }

    if (address.value.trim() === '') {
        alert('Địa chỉ không được để trống');
        return false;
    }

    if (phoneNumber.value.trim() === '') {
        alert('SDT không được để trống');
        return false;
    }
    return true;
}
