let category = document.querySelector('.categoryName');

function check() {
    if (category.value.trim() == '') {
        alert('Xin hãy nhập đủ thông tin');
        return false;
    }
    return true;
}
