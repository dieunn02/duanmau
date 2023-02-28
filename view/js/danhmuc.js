function check() {
    let category = document.querySelector('#ten-loai');
    console.log("Checking ...")
    console.log(category.value)
    if (category.value.trim() === '') {
        alert('Ngốc quá đi');
        return false;
    }
    return true;
}
