@extends('layouts.promote')
@section('search.target',route('promote.detail'))
@section('content')

<section class="text-gray-600 body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
        <div class="lg:w-4/5 mx-auto flex flex-wrap">
            <img id="productImage" alt="ecommerce"
                class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="">
            <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                <h2 id="productCategory" class="text-sm title-font text-gray-500 tracking-widest"></h2>
                <h1 id="productName" class="text-gray-900 text-3xl title-font font-medium mb-1"></h1>
                <p id="productDescription" class="leading-relaxed"></p>
                <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5"></div>
                <div class="flex">
                    <span id="productPrice" class="title-font font-medium text-2xl text-gray-900"></span>
                    <button id="orderButton"
                        class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">เพิ่มลงตะกร้า</button>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function updateCartItemCount() {
        let cart = JSON.parse(localStorage.getItem("cart")) || [];
        let cartItemCount = cart.length;
        document.getElementById("cartItemCount").textContent = cartItemCount;
    }

    document.addEventListener("DOMContentLoaded", function () {
        const productDetails = JSON.parse(localStorage.getItem("selectedProduct"));

        if (productDetails) {
            document.getElementById("productImage").src = productDetails.image;
            document.getElementById("productCategory").textContent = productDetails.category;
            document.getElementById("productName").textContent = productDetails.name;
            document.getElementById("productDescription").textContent = productDetails.description;
            document.getElementById("productPrice").textContent = productDetails.price;
        }

        updateCartItemCount();

        document.getElementById("orderButton").addEventListener("click", function () {
            let cart = JSON.parse(localStorage.getItem("cart")) || [];
            cart.push(productDetails);
            localStorage.setItem("cart", JSON.stringify(cart));
            alert("เพิ่มสินค้าในตะกร้าแล้ว!");
            updateCartItemCount();
        });
    });
</script>


@endsection
