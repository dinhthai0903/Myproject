// public/js/add-to-cart.js
document.addEventListener('DOMContentLoaded', function() {
    const addToCartButton = document.getElementById('addToCartButton');

    addToCartButton.addEventListener('click', function() {
        const isConfirmed = confirm('Bạn có muốn thêm sản phẩm này vào giỏ hàng không?');

        if (isConfirmed) {
            alert('Sản phẩm đã được thêm vào giỏ hàng thành công!');
        } else {
            alert('Bạn đã hủy thêm sản phẩm vào giỏ hàng.');
        }
    });
});