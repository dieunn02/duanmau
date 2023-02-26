let productName =
    document.getElementsByName('productName')[0];
let productPrice =
    document.getElementsByName('productPrice')[0];
let productImage = document.querySelector(
    'input[type=file]',
);
let productDesc =
    document.getElementsByName('productDesc')[0];
let categoryId =
    document.getElementsByName('categoryId')[0];
function check() {
    if (productName.value.trim() == '') {
        alert('Tên sản phẩm không được để trống');
        return false;
    }
    if (productPrice.value.trim() == '') {
        alert('Giá sản phẩm không được để trống');
        return false;
    } else if (isNaN(productPrice.value.trim())) {
        alert('Giá sản phẩm phải là số');
        return false;
    }
    if (productImage.value.trim() == '') {
        alert('Ảnh sản phẩm không được để trống');
        return false;
    }
    if (productDesc.value.trim() == '') {
        alert('Mô tả sản phẩm không được để trống');
        return false;
    }
    if (categoryId.value.trim() == '') {
        alert('Danh mục sản phẩm không được để trống');
        return false;
    }
    return true;
}
function checkUpdate() {
    if (productName.value.trim() == '') {
        alert('Tên sản phẩm không được để trống');
        return false;
    }
    if (productPrice.value.trim() == '') {
        alert('Giá sản phẩm không được để trống');
        return false;
    } else if (isNaN(productPrice.value.trim())) {
        alert('Giá sản phẩm phải là số');
        return false;
    }
    if (productDesc.value.trim() == '') {
        alert('Mô tả sản phẩm không được để trống');
        return false;
    }
    if (categoryId.value.trim() == '') {
        alert('Danh mục sản phẩm không được để trống');
        return false;
    }
    return true;
}
