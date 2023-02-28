

function check() {
    let productName =
        document.querySelector("#product-name")
    let productPrice =
        document.querySelector("#product-price")
    let productImage = document.querySelector(
        'input[type=file]',
    );
    let productDesc =
        document.querySelector("#product-description")
    console.log(productName)
    if (productName.value.trim() === '') {
        alert('Tên sản phẩm không được để trống');
        return false;
    }
    if (productPrice.value.trim() === '') {
        alert('Giá sản phẩm không được để trống');
        return false;
    } else if (isNaN(productPrice.value.trim())) {
        alert('Giá sản phẩm phải là số');
        return false;
    }
    if (productImage.value.trim() === '') {
        alert('Ảnh sản phẩm không được để trống');
        return false;
    }
    if (productDesc.value.trim() === '') {
        alert('Mô tả sản phẩm không được để trống');
        return false;
    }
    return true;
}

function checkUpdate() {
    let productName =
        document.querySelector("#product-name")
    let productPrice =
        document.querySelector("#product-price")
    let productImage = document.querySelector(
        'input[type=file]',
    );
    let productDesc =
        document.querySelector("#product-description")
    console.log(productName)
    if (productName.value.trim() === '') {
        alert('Tên sản phẩm không được để trống');
        return false;
    }
    if (productPrice.value.trim() === '') {
        alert('Giá sản phẩm không được để trống');
        return false;
    } else if (isNaN(productPrice.value.trim())) {
        alert('Giá sản phẩm phải là số');
        return false;
    }
    if (productDesc.value.trim() === '') {
        alert('Mô tả sản phẩm không được để trống');
        return false;
    }
    return true;
}
