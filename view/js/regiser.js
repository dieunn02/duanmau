function checkLogin() {
    let userName = document.querySelector("#username");
    let email = document.querySelector("#email")
    let password = document.querySelector("#password")
    const emailPattern = /\S+@\S+\.\S+/;
    console.log(password.value)

    if (userName.value.trim() === '') {
        alert('Tên không được để trống');
        return false;
    }
    if (email.value.trim() === '') {
        alert('Email không được để trống');
        return false;
    }
    if (!email.value.toString().match(emailPattern)) {
        alert('Email không đúng định dạng');
        return false;
    }
    console.log(password.value.length)
    // console.log(password.value.matches(""))
    if (password.value === "") {
        alert('Password không được để trống');
        return false;
    }
    return true;
}
