@extends('layouts.app')
@section('content')
<!-- Start Cart Shit Area -->
<div class="modal fade cart-shit" id="exampleModal-cart" tabindex="-1" aria-hidden="true">
    <div class="cart-shit-wrap">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close-btn" data-bs-dismiss="modal">
                        <i class="ri-close-fill"></i>
                    </button>
                </div>

                <div class="modal-body">
                    <ul class="cart-list">
                        <li>
                            <img src="assets/images/products/product-1.jpg" alt="Image">
                            <a href="#">
                                DFMALB 20V Max XX Oscillating Multi Tool Variable Speed Tool
                            </a>
                            <span>$125.00</span>
                            <i class="ri-close-fill"></i>
                        </li>

                        <li>
                            <img src="assets/images/products/product-2.jpg" alt="Image">
                            <a href="#">
                                Power Tools Set Chinese Manufacturer Production 50V Lithu Battery
                            </a>
                            <span>$125.00</span>
                            <i class="ri-close-fill"></i>
                        </li>

                        <li>
                            <img src="assets/images/products/product-3.jpg" alt="Image">
                            <a href="#">
                                Electrical Magnetic Impact Power Hammer Drills Machine
                            </a>
                            <span>$125.00</span>
                            <i class="ri-close-fill"></i>
                        </li>

                        <li>
                            <img src="assets/images/products/product-4.jpg" alt="Image">
                            <a href="#">
                                Professional Cordless Drill Power Tools Set Competitive Price
                            </a>
                            <span>$125.00</span>
                            <i class="ri-close-fill"></i>
                        </li>
                    </ul>

                    <ul class="payable">
                        <li>
                            Payable total
                        </li>
                        <li class="total">
                            <span>$564.00</span>
                        </li>
                    </ul>

                    <ul class="cart-check-btn">
                        <li>
                            <a href="#" class="default-btn">
                                View Cart
                            </a>
                        </li>
                        <li class="checkout">
                            <a href="#" class="default-btn">
                                Checkout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Cart Shit Area -->

<!-- Start Hero Slider Area -->
<section class="hero-slider-area hero-slider-area-style-two">
    <div class="hero-slider-two owl-carousel owl-theme">
        <div class="slider-item bg-4">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="hero-slider-content">
                            <h1>Lorem ipsum dolor sit amet, consectetur</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>

                            <div class="hero-slider-btn">
                                <a href="#" class="default-btn">
                                    <i class="ri-shopping-cart-line"></i>
                                    Commander
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item bg-5">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="hero-slider-content">
                            <h1>Lorem ipsum dolor sit amet, consectetur</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>

                            <div class="banner-btn">
                                <a href="#" class="default-btn">
                                    <i class="ri-shopping-cart-line"></i>
                                    Commander
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item bg-6">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="hero-slider-content">
                            <h1>Lorem ipsum dolor sit amet, consectetur</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur</p>

                            <div class="banner-btn">
                                <a href="#" class="default-btn">
                                    <i class="ri-shopping-cart-line"></i>
                                    Commander
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Slider Area -->

<!-- Start Popular Categories Area -->
<section class="popular-categories-area pt-54 pb-30">
    <div class="container">
        <div class="section-title">
            <h2>Les Niveaux </h2>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6">
                <div class="single-categories">
                    <a href="#">
                        <img src="assets/images/products/product-25.png" alt="Image">
                    </a>

                    <h3>
                        <a href="#">
                            Power Tools
                        </a>
                    </h3>
                    <span>15 Products</span>

                    <a href="product-details" class="read-more">
                        Shop Now
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="single-categories bg-eff5ff">
                    <a href="#">
                        <img src="assets/images/products/product-26.png" alt="Image">
                    </a>

                    <h3>
                        <a href="#">
                            Machine Tools
                        </a>
                    </h3>
                    <span>05 Products</span>

                    <a href="product-details" class="read-more">
                        Shop Now
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="single-categories bg-ebf1f5">
                    <a href="#">
                        <img src="assets/images/products/product-27.png" alt="Image">
                    </a>

                    <h3>
                        <a href="#">
                            Hand Tools
                        </a>
                    </h3>
                    <span>18 Products</span>

                    <a href="product-details" class="read-more">
                        Shop Now
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="single-categories bg-ebf9ea">
                    <a href="#">
                        <img src="assets/images/products/product-28.png" alt="Image">
                    </a>

                    <h3>
                        <a href="#">
                            Cordless Tools
                        </a>
                    </h3>
                    <span>19 Products</span>

                    <a href="product-details" class="read-more">
                        Shop Now
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="single-categories bg-fff8e5">
                    <a href="#">
                        <img src="assets/images/products/product-29.png" alt="Image">
                    </a>

                    <h3>
                        <a href="#">
                            Welding & Soldering
                        </a>
                    </h3>
                    <span>04 Products</span>

                    <a href="product-details" class="read-more">
                        Shop Now
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="single-categories bg-f3f1ff">
                    <a href="#">
                        <img src="assets/images/products/product-30.png" alt="Image">
                    </a>

                    <h3>
                        <a href="#">
                            Socket Wrenches
                        </a>
                    </h3>
                    <span>12 Products</span>

                    <a href="product-details" class="read-more">
                        Shop Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Popular Categories Area -->

<!-- Start Featured Products Area -->
<section class="featured-products-area pb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="featured-product-img bg-2">
                    <div class="featured-product-content">
                        <span class="best">Best Deals</span>
                        <h3>Premium Tools Sets</h3>
                        <span class="offer">Up to 30% off</span>
                        <a href="#">
                            Shop Now
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="section-title">
                    <h2>Articles Populaires</h2>
                </div>

                <div class="featured-product-wrap">
                    <div class="featured-product-slider owl-carousel owl-theme">
                        <div class="single-products">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/images/products/product-6.jpg" alt="Image">
                                </a>

                                <span class="hot">Hot</span>
                            </div>

                            <div class="product-content">
                                <a href="#" class="title">
                                    Cordless Drill Professional Combo Drill And Screwdriver
                                </a>

                                <ul class="products-rating">
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <a href="#">
                                            (03 Review)
                                        </a>
                                    </li>
                                </ul>

                                <ul class="products-price">
                                    <li>
                                        $119.00
                                        <del>$219.00</del>
                                    </li>
                                    <li>
                                        <span>In Stock</span>
                                    </li>
                                </ul>

                                <ul class="products-cart-wish-view">
                                    <li>
                                        <a href="#" class="default-btn">
                                            <i class="ri-shopping-cart-line"></i>
                                            Add To Cart
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="wish-btn">
                                            <i class="ri-heart-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="single-products">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/images/products/product-7.jpg" alt="Image">
                                </a>

                                <span class="hot new">New</span>
                            </div>

                            <div class="product-content">
                                <a href="#" class="title">
                                    Professional Cordless Drill Power Tools Competitive
                                </a>

                                <ul class="products-rating">
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <a href="#">
                                            (03 Review)
                                        </a>
                                    </li>
                                </ul>

                                <ul class="products-price">
                                    <li>
                                        $130.00
                                        <del>$250.00</del>
                                    </li>
                                    <li>
                                        <span>In Stock</span>
                                    </li>
                                </ul>

                                <ul class="products-cart-wish-view">
                                    <li>
                                        <a href="#" class="default-btn">
                                            <i class="ri-shopping-cart-line"></i>
                                            Add To Cart
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="wish-btn">
                                            <i class="ri-heart-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="single-products">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/images/products/product-8.jpg" alt="Image">
                                </a>

                                <span class="hot">Hot</span>
                            </div>

                            <div class="product-content">
                                <a href="#" class="title">
                                    DFMALB 20V Max XX Oscillating Multi Tool Variable Speed Tool
                                </a>

                                <ul class="products-rating">
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <a href="#">
                                            (03 Review)
                                        </a>
                                    </li>
                                </ul>

                                <ul class="products-price">
                                    <li>
                                        $150.00
                                        <del>$200.00</del>
                                    </li>
                                    <li>
                                        <span>In Stock</span>
                                    </li>
                                </ul>

                                <ul class="products-cart-wish-view">
                                    <li>
                                        <a href="#" class="default-btn">
                                            <i class="ri-shopping-cart-line"></i>
                                            Add To Cart
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="wish-btn">
                                            <i class="ri-heart-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="single-products">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/images/products/product-9.jpg" alt="Image">
                                </a>

                                <span class="hot new">New</span>
                            </div>

                            <div class="product-content">
                                <a href="#" class="title">
                                    Power Tools Set Chinese Manufacturer Production 50V
                                </a>

                                <ul class="products-rating">
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <a href="#">
                                            (03 Review)
                                        </a>
                                    </li>
                                </ul>

                                <ul class="products-price">
                                    <li>
                                        $111.00
                                        <del>$222.00</del>
                                    </li>
                                    <li>
                                        <span>In Stock</span>
                                    </li>
                                </ul>

                                <ul class="products-cart-wish-view">
                                    <li>
                                        <a href="#" class="default-btn">
                                            <i class="ri-shopping-cart-line"></i>
                                            Add To Cart
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="wish-btn">
                                            <i class="ri-heart-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Featured Products Area -->

<!-- Start Best sellers Area -->
<section class="best-seller-area pb-30">
    <div class="container">
        <div class="section-title">
            <h2>Meilleurs Ventes</h2>
        </div>

        <div class="best-product-slider owl-carousel owl-theme">
            <div class="single-products">
                <div class="product-img">
                    <a href="#">
                        <img src="assets/images/products/product-1.jpg" alt="Image">
                    </a>

                    <span class="hot new">-30%</span>
                </div>

                <div class="product-content">
                    <a href="#" class="title">
                        Cordless Drill Professional Combo Drill And Screwdriver
                    </a>

                    <ul class="products-rating">
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <a href="#">
                                (03 Review)
                            </a>
                        </li>
                    </ul>

                    <ul class="products-price">
                        <li>
                            $119.00
                            <del>$219.00</del>
                        </li>
                        <li>
                            <span>In Stock</span>
                        </li>
                    </ul>

                    <ul class="products-cart-wish-view">
                        <li>
                            <a href="#" class="default-btn">
                                <i class="ri-shopping-cart-line"></i>
                                Add To Cart
                            </a>
                        </li>
                        <li>
                            <a href="#" class="wish-btn">
                                <i class="ri-heart-line"></i>
                            </a>
                        </li>
                        <li>
                            <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="ri-eye-line"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="single-products">
                <div class="product-img">
                    <a href="#">
                        <img src="assets/images/products/product-2.jpg" alt="Image">
                    </a>

                    <span class="hot new">-20%</span>
                </div>

                <div class="product-content">
                    <a href="#" class="title">
                        Professional Cordless Drill Power Tools Set Competitive Price
                    </a>

                    <ul class="products-rating">
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <a href="#">
                                (03 Review)
                            </a>
                        </li>
                    </ul>

                    <ul class="products-price">
                        <li>
                            $130.00
                            <del>$250.00</del>
                        </li>
                        <li>
                            <span>In Stock</span>
                        </li>
                    </ul>

                    <ul class="products-cart-wish-view">
                        <li>
                            <a href="#" class="default-btn">
                                <i class="ri-shopping-cart-line"></i>
                                Add To Cart
                            </a>
                        </li>
                        <li>
                            <a href="#" class="wish-btn">
                                <i class="ri-heart-line"></i>
                            </a>
                        </li>
                        <li>
                            <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="ri-eye-line"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="single-products">
                <div class="product-img">
                    <a href="#">
                        <img src="assets/images/products/product-3.jpg" alt="Image">
                    </a>

                    <span class="hot new">-30%</span>
                </div>

                <div class="product-content">
                    <a href="#" class="title">
                        DFMALB 20V Max XX Oscillating Multi Tool Variable Speed Tool
                    </a>

                    <ul class="products-rating">
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <a href="#">
                                (03 Review)
                            </a>
                        </li>
                    </ul>

                    <ul class="products-price">
                        <li>
                            $150.00
                            <del>$200.00</del>
                        </li>
                        <li>
                            <span>In Stock</span>
                        </li>
                    </ul>

                    <ul class="products-cart-wish-view">
                        <li>
                            <a href="#" class="default-btn">
                                <i class="ri-shopping-cart-line"></i>
                                Add To Cart
                            </a>
                        </li>
                        <li>
                            <a href="#" class="wish-btn">
                                <i class="ri-heart-line"></i>
                            </a>
                        </li>
                        <li>
                            <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="ri-eye-line"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="single-products">
                <div class="product-img">
                    <a href="#">
                        <img src="assets/images/products/product-4.jpg" alt="Image">
                    </a>

                    <span class="hot new">-10%</span>
                </div>

                <div class="product-content">
                    <a href="#" class="title">
                        Power Tools Set Chinese Manufacturer Production 50V
                    </a>

                    <ul class="products-rating">
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <a href="#">
                                (03 Review)
                            </a>
                        </li>
                    </ul>

                    <ul class="products-price">
                        <li>
                            $111.00
                            <del>$222.00</del>
                        </li>
                        <li>
                            <span>In Stock</span>
                        </li>
                    </ul>

                    <ul class="products-cart-wish-view">
                        <li>
                            <a href="#" class="default-btn">
                                <i class="ri-shopping-cart-line"></i>
                                Add To Cart
                            </a>
                        </li>
                        <li>
                            <a href="#" class="wish-btn">
                                <i class="ri-heart-line"></i>
                            </a>
                        </li>
                        <li>
                            <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="ri-eye-line"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="single-products">
                <div class="product-img">
                    <a href="#">
                        <img src="assets/images/products/product-5.jpg" alt="Image">
                    </a>

                    <span class="hot">Hot</span>
                </div>

                <div class="product-content">
                    <a href="#" class="title">
                        Professional Cordless Drill Power Tools Set Competitive Price
                    </a>

                    <ul class="products-rating">
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <i class="ri-star-fill"></i>
                        </li>
                        <li>
                            <a href="#">
                                (03 Review)
                            </a>
                        </li>
                    </ul>

                    <ul class="products-price">
                        <li>
                            $222.00
                            <del>$250.00</del>
                        </li>
                        <li>
                            <span>In Stock</span>
                        </li>
                    </ul>

                    <ul class="products-cart-wish-view">
                        <li>
                            <a href="#" class="default-btn">
                                <i class="ri-shopping-cart-line"></i>
                                Add To Cart
                            </a>
                        </li>
                        <li>
                            <a href="#" class="wish-btn">
                                <i class="ri-heart-line"></i>
                            </a>
                        </li>
                        <li>
                            <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="ri-eye-line"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Best sellers Area -->

<!-- Start Sale Offer Area -->
<section class="sale-offer-area">
    <div class="container">
        <div class="sale-offer-bg bg-2">
            <h5>Sale offer - <span>30% off</span></h5>
            <h3>All types of premium quality tools</h3>
            <a href="#" class="default-btn">
                <i class="ri-shopping-cart-line"></i>
                Shop Now
            </a>
        </div>
    </div>
</section>
<!-- End Sale Offer Area -->

<!-- Start Flash Deals Area -->
<section class="flash-deals-area ptb-54">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="section-title p-0">
                    <h2>Commentaire client</h2>
                </div>

                <div class="customer-slider owl-carousel owl-theme">
                    <div class="single-customer">
                        <div class="avatar">
                            <img src="assets/images/customer/customer-1.png" class="customer" alt="Image">
                            <img src="assets/images/customer/quote.png" class="quote" alt="Image">

                            <div class="avatar-name">
                                <h3>Georgia Cargill</h3>
                                <span>Finance Officer</span>
                            </div>
                        </div>

                        <p>"Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Lorem ipsum dolor sit amet, consectetur elit. Donec sollicitudin molestie eget malesuada accumsan sit amet, consectetur."</p>
                    </div>

                    <div class="single-customer">
                        <div class="avatar">
                            <img src="assets/images/customer/customer-2.png" class="customer" alt="Image">
                            <img src="assets/images/customer/quote.png" class="quote" alt="Image">

                            <div class="avatar-name">
                                <h3>Alex Dew</h3>
                                <span>Finance Marketer</span>
                            </div>
                        </div>

                        <p>"Vivamus suscipit tortor eget felis porttitor volutpat. Nulla porttitor accumsan tincidunt. Lorem ipsum dolor sit amet, consectetur elit. Donec sollicitudin molestie eget malesuada accumsan sit amet, consectetur."</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-9">
                <div class="section-title">
                    <h2>Ventes flash</h2>
                </div>

                <div class="flash-deals-wrap need-border">
                    <div class="flash-deals-slider owl-carousel owl-theme">
                        <div class="single-products deals-products">
                            <div class="row align-items-center">
                                <div class="col-xl-6">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-11.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Hand Tools Rubber Handle Adjustable Spanner
                                        </a>

                                        <span class="in-stock">In Stock</span>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (05 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $60.00
                                                <del>$99.00</del>
                                            </li>
                                        </ul>

                                        <div id="timer">
                                            <div id="days"></div>
                                            <div id="hours"></div>
                                            <div id="minutes"></div>
                                            <div id="seconds"></div>
                                        </div>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-products deals-products">
                            <div class="row align-items-center">
                                <div class="col-xl-6">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-10.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="product-content">
                                        <a href="#" class="title">
                                            High Quality Carbon Steel Multifunctional Hammer
                                        </a>

                                        <span class="in-stock">In Stock</span>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $29.00
                                                <del>$50.00</del>
                                            </li>
                                        </ul>

                                        <div id="timers">
                                            <div id="days-p"></div>
                                            <div id="hours-p"></div>
                                            <div id="minutes-p"></div>
                                            <div id="seconds-p"></div>
                                        </div>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-products deals-products">
                            <div class="row align-items-center">
                                <div class="col-xl-6">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-10.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="product-content">
                                        <a href="#" class="title">
                                            High Quality Carbon Steel Multifunctional Hammer
                                        </a>

                                        <span class="in-stock">In Stock</span>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $29.00
                                                <del>$50.00</del>
                                            </li>
                                        </ul>

                                        <div id="timerss">
                                            <div id="days-pp"></div>
                                            <div id="hours-pp"></div>
                                            <div id="minutes-pp"></div>
                                            <div id="seconds-pp"></div>
                                        </div>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Flash Deals Area -->

<!-- Start New Arrivals Area -->
<section class="new-arrivals-area pb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="section-title">
                    <h2>Tendances</h2>
                </div>

                <ul class="trending-product-list">
                    <li class="single-list">
                        <img src="assets/images/products/product-12.jpg" alt="Image">

                        <div class="product-content">
                            <a href="#" class="title">
                                Good Quality Electric Cordless Drill
                            </a>

                            <ul class="products-price">
                                <li>
                                    $29.00
                                    <del>$50.00</del>
                                </li>
                            </ul>

                            <ul class="products-rating">
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="single-list">
                        <img src="assets/images/products/product-13.jpg" alt="Image">

                        <div class="product-content">
                            <a href="#" class="title">
                                High Quality Industrial Wood Planer
                            </a>

                            <ul class="products-price">
                                <li>
                                    $19.00
                                    <del>$30.00</del>
                                </li>
                            </ul>

                            <ul class="products-rating">
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="single-list">
                        <img src="assets/images/products/product-14.jpg" alt="Image">

                        <div class="product-content">
                            <a href="#" class="title">
                                Professional Straight Cutting Scissor
                            </a>

                            <ul class="products-price">
                                <li>
                                    $29.00
                                    <del>$50.00</del>
                                </li>
                            </ul>

                            <ul class="products-rating">
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="single-list">
                        <img src="assets/images/products/product-15.jpg" alt="Image">

                        <div class="product-content">
                            <a href="#" class="title">
                                90 Degree Angle Square Combination Handle
                            </a>

                            <ul class="products-price">
                                <li>
                                    $10.00
                                    <del>$15.00</del>
                                </li>
                            </ul>

                            <ul class="products-rating">
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="single-list">
                        <img src="assets/images/products/product-16.jpg" alt="Image">

                        <div class="product-content">
                            <a href="#" class="title">
                                High Quality Steel Clamp Tool
                            </a>

                            <ul class="products-price">
                                <li>
                                    $15.00
                                    <del>$20.00</del>
                                </li>
                            </ul>

                            <ul class="products-rating">
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-9">
                <div class="section-title">
                    <h2>Nouveautés</h2>

                    <a href="#" class="read-more">
                        Voir tout
                    </a>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-sm-6">
                        <div class="single-products new-arrivals">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/images/products/product-17.jpg" alt="Image">
                                </a>

                                <span class="hot new">New</span>
                            </div>

                            <div class="product-content">
                                <a href="#" class="title">
                                    Electrical Magnetic Impact Power Hammer Drills
                                </a>

                                <ul class="products-rating">
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <a href="#">
                                            (10 Review)
                                        </a>
                                    </li>
                                </ul>

                                <ul class="products-price">
                                    <li>
                                        $170.00
                                        <del>$220.00</del>
                                    </li>
                                </ul>

                                <ul class="products-cart-wish-view">
                                    <li>
                                        <a href="#" class="default-btn">
                                            <i class="ri-shopping-cart-line"></i>
                                            Add To Cart
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="wish-btn">
                                            <i class="ri-heart-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6">
                        <div class="single-products new-arrivals">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/images/products/product-18.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="product-content">
                                <a href="#" class="title">
                                    High Quality Electric Hand Planer, 4-3/8-Inch
                                </a>

                                <ul class="products-rating">
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <a href="#">
                                            (05 Review)
                                        </a>
                                    </li>
                                </ul>

                                <ul class="products-price">
                                    <li>
                                        $69.00
                                        <del>$90.00</del>
                                    </li>
                                    <li>
                                        <span>In Stock</span>
                                    </li>
                                </ul>

                                <ul class="products-cart-wish-view">
                                    <li>
                                        <a href="#" class="default-btn">
                                            <i class="ri-shopping-cart-line"></i>
                                            Add To Cart
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="wish-btn">
                                            <i class="ri-heart-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6">
                        <div class="single-products new-arrivals">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/images/products/product-19.jpg" alt="Image">
                                </a>

                                <span class="hot new">New</span>
                            </div>

                            <div class="product-content">
                                <a href="#" class="title">
                                    White Whale Vacuum Cleaner High Quality
                                </a>

                                <ul class="products-rating">
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <a href="#">
                                            (10 Review)
                                        </a>
                                    </li>
                                </ul>

                                <ul class="products-price">
                                    <li>
                                        $129.00
                                        <del>$150.00</del>
                                    </li>
                                </ul>

                                <ul class="products-cart-wish-view">
                                    <li>
                                        <a href="#" class="default-btn">
                                            <i class="ri-shopping-cart-line"></i>
                                            Add To Cart
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="wish-btn">
                                            <i class="ri-heart-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6">
                        <div class="single-products new-arrivals">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/images/products/product-20.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="product-content">
                                <a href="#" class="title">
                                    High Quality Carbon Steel Mini Drilling Machines
                                </a>

                                <ul class="products-rating">
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <a href="#">
                                            (11 Review)
                                        </a>
                                    </li>
                                </ul>

                                <ul class="products-price">
                                    <li>
                                        $99.00
                                        <del>$150.00</del>
                                    </li>
                                    <li>
                                        <span>In Stock</span>
                                    </li>
                                </ul>

                                <ul class="products-cart-wish-view">
                                    <li>
                                        <a href="#" class="default-btn">
                                            <i class="ri-shopping-cart-line"></i>
                                            Add To Cart
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="wish-btn">
                                            <i class="ri-heart-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6">
                        <div class="single-products new-arrivals">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/images/products/product-21.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="product-content">
                                <a href="#" class="title">
                                    Power Hammer Drills 200V Machine Screwdriver
                                </a>

                                <ul class="products-rating">
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <a href="#">
                                            (05 Review)
                                        </a>
                                    </li>
                                </ul>

                                <ul class="products-price">
                                    <li>
                                        $159.00
                                        <del>$200.00</del>
                                    </li>
                                    <li>
                                        <span>In Stock</span>
                                    </li>
                                </ul>

                                <ul class="products-cart-wish-view">
                                    <li>
                                        <a href="#" class="default-btn">
                                            <i class="ri-shopping-cart-line"></i>
                                            Add To Cart
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="wish-btn">
                                            <i class="ri-heart-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6">
                        <div class="single-products new-arrivals">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/images/products/product-22.jpg" alt="Image">
                                </a>

                                <span class="hot new">New</span>
                            </div>

                            <div class="product-content">
                                <a href="#" class="title">
                                    Multi-function Screw Driver Set For Home Use
                                </a>

                                <ul class="products-rating">
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <a href="#">
                                            (07 Review)
                                        </a>
                                    </li>
                                </ul>

                                <ul class="products-price">
                                    <li>
                                        $29.00
                                        <del>$50.00</del>
                                    </li>
                                </ul>

                                <ul class="products-cart-wish-view">
                                    <li>
                                        <a href="#" class="default-btn">
                                            <i class="ri-shopping-cart-line"></i>
                                            Add To Cart
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="wish-btn">
                                            <i class="ri-heart-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6">
                        <div class="single-products new-arrivals">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/images/products/product-23.jpg" alt="Image">
                                </a>
                            </div>

                            <div class="product-content">
                                <a href="#" class="title">
                                    Wall Polishing Square Sander Electric Machine
                                </a>

                                <ul class="products-rating">
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <a href="#">
                                            (10 Review)
                                        </a>
                                    </li>
                                </ul>

                                <ul class="products-price">
                                    <li>
                                        $89.00
                                        <del>$120.00</del>
                                    </li>
                                </ul>

                                <ul class="products-cart-wish-view">
                                    <li>
                                        <a href="#" class="default-btn">
                                            <i class="ri-shopping-cart-line"></i>
                                            Add To Cart
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="wish-btn">
                                            <i class="ri-heart-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-sm-6">
                        <div class="single-products new-arrivals">
                            <div class="product-img">
                                <a href="#">
                                    <img src="assets/images/products/product-24.jpg" alt="Image">
                                </a>

                                <span class="hot new">New</span>
                            </div>

                            <div class="product-content">
                                <a href="#" class="title">
                                    High Quality Carbon Steel Professional Power Tools
                                </a>

                                <ul class="products-rating">
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <i class="ri-star-fill"></i>
                                    </li>
                                    <li>
                                        <a href="#">
                                            (10 Review)
                                        </a>
                                    </li>
                                </ul>

                                <ul class="products-price">
                                    <li>
                                        $99.00
                                        <del>$130.00</del>
                                    </li>
                                    <li>
                                        <span>In Stock</span>
                                    </li>
                                </ul>

                                <ul class="products-cart-wish-view">
                                    <li>
                                        <a href="#" class="default-btn">
                                            <i class="ri-shopping-cart-line"></i>
                                            Add To Cart
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="wish-btn">
                                            <i class="ri-heart-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                            <i class="ri-eye-line"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End New Arrivals Area -->

<!-- Start Sale Discount Area -->
<section class="sale-discount-area pb-54">
    <div class="container">
        <div class="sale-discount-bg">
            <div class="discount-content">
                <h5>Get Discount 30% Off</h5>
                <h3>New Lower Prices On Hundreds Premium Quality Tools</h3>
            </div>
        </div>
    </div>
</section>
<!-- End Sale Discount Area -->

<!-- Start Categories Area -->
<section class="categories-area pb-54">
    <div class="container">
        <div class="categories-wrap tab products-details-tab">
            <div class="row">
                <div class="col-lg-3">
                    <div class="section-title">
                        <h2>Categories</h2>
                    </div>

                    <ul class="tabs">
                        <li>
                            Power Tools
                        </li>

                        <li>
                            Hand Tools
                        </li>

                        <li>
                            Cordless Tools
                        </li>

                        <li>
                            Welding & Soldering
                        </li>

                        <li>
                            Gardening Tools
                        </li>

                        <li>
                            Safety Tools
                        </li>

                        <li>
                            Site Lighting Tools
                        </li>

                        <li>
                            Tools Accessories
                        </li>
                    </ul>
                </div>

                <div class="col-lg-9">
                    <div class="tab_content">
                        <div class="tabs_item">
                            <div class="categories-slider owl-carousel owl-theme">
                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-17.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Electrical Magnetic Impact Power Hammer Drills
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $170.00
                                                <del>$220.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-18.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            High Quality Electric Hand Planer, 4-3/8-Inch
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (05 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $69.00
                                                <del>$90.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-19.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            White Whale Vacuum Cleaner High Quality
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $129.00
                                                <del>$150.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-20.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            High Quality Carbon Steel Mini Drilling Machines
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (11 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $99.00
                                                <del>$150.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-21.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Power Hammer Drills 200V Machine Screwdriver
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (05 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $159.00
                                                <del>$200.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-22.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Multi-function Screw Driver Set For Home Use
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (07 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $29.00
                                                <del>$50.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-23.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Wall Polishing Square Sander Electric Machine
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $89.00
                                                <del>$120.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-24.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            High Quality Carbon Steel Professional Power Tools
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $99.00
                                                <del>$130.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tabs_item">
                            <div class="categories-slider owl-carousel owl-theme">
                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-17.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Electrical Magnetic Impact Power Hammer Drills
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $170.00
                                                <del>$220.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-18.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            High Quality Electric Hand Planer, 4-3/8-Inch
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (05 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $69.00
                                                <del>$90.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-19.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            White Whale Vacuum Cleaner High Quality
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $129.00
                                                <del>$150.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-20.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            High Quality Carbon Steel Mini Drilling Machines
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (11 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $99.00
                                                <del>$150.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-21.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Power Hammer Drills 200V Machine Screwdriver
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (05 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $159.00
                                                <del>$200.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-22.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Multi-function Screw Driver Set For Home Use
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (07 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $29.00
                                                <del>$50.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-23.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Wall Polishing Square Sander Electric Machine
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $89.00
                                                <del>$120.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-24.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            High Quality Carbon Steel Professional Power Tools
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $99.00
                                                <del>$130.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tabs_item">
                            <div class="categories-slider owl-carousel owl-theme">
                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-17.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Electrical Magnetic Impact Power Hammer Drills
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $170.00
                                                <del>$220.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-18.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            High Quality Electric Hand Planer, 4-3/8-Inch
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (05 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $69.00
                                                <del>$90.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-19.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            White Whale Vacuum Cleaner High Quality
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $129.00
                                                <del>$150.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-20.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            High Quality Carbon Steel Mini Drilling Machines
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (11 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $99.00
                                                <del>$150.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-21.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Power Hammer Drills 200V Machine Screwdriver
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (05 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $159.00
                                                <del>$200.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-22.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Multi-function Screw Driver Set For Home Use
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (07 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $29.00
                                                <del>$50.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-23.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Wall Polishing Square Sander Electric Machine
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $89.00
                                                <del>$120.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-24.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            High Quality Carbon Steel Professional Power Tools
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $99.00
                                                <del>$130.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tabs_item">
                            <div class="categories-slider owl-carousel owl-theme">
                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-17.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Electrical Magnetic Impact Power Hammer Drills
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $170.00
                                                <del>$220.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-18.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            High Quality Electric Hand Planer, 4-3/8-Inch
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (05 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $69.00
                                                <del>$90.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-19.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            White Whale Vacuum Cleaner High Quality
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $129.00
                                                <del>$150.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-20.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            High Quality Carbon Steel Mini Drilling Machines
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (11 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $99.00
                                                <del>$150.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-21.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Power Hammer Drills 200V Machine Screwdriver
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (05 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $159.00
                                                <del>$200.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-22.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Multi-function Screw Driver Set For Home Use
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (07 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $29.00
                                                <del>$50.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-23.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Wall Polishing Square Sander Electric Machine
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $89.00
                                                <del>$120.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-24.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            High Quality Carbon Steel Professional Power Tools
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $99.00
                                                <del>$130.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tabs_item">
                            <div class="categories-slider owl-carousel owl-theme">
                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-17.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Electrical Magnetic Impact Power Hammer Drills
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $170.00
                                                <del>$220.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-18.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            High Quality Electric Hand Planer, 4-3/8-Inch
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (05 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $69.00
                                                <del>$90.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-19.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            White Whale Vacuum Cleaner High Quality
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $129.00
                                                <del>$150.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-20.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            High Quality Carbon Steel Mini Drilling Machines
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (11 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $99.00
                                                <del>$150.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-21.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Power Hammer Drills 200V Machine Screwdriver
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (05 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $159.00
                                                <del>$200.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-22.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Multi-function Screw Driver Set For Home Use
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (07 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $29.00
                                                <del>$50.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-23.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Wall Polishing Square Sander Electric Machine
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $89.00
                                                <del>$120.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-24.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            High Quality Carbon Steel Professional Power Tools
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $99.00
                                                <del>$130.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tabs_item">
                            <div class="categories-slider owl-carousel owl-theme">
                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-17.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Electrical Magnetic Impact Power Hammer Drills
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $170.00
                                                <del>$220.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-18.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            High Quality Electric Hand Planer, 4-3/8-Inch
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (05 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $69.00
                                                <del>$90.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-19.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            White Whale Vacuum Cleaner High Quality
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $129.00
                                                <del>$150.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-20.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            High Quality Carbon Steel Mini Drilling Machines
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (11 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $99.00
                                                <del>$150.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-21.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Power Hammer Drills 200V Machine Screwdriver
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (05 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $159.00
                                                <del>$200.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-22.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Multi-function Screw Driver Set For Home Use
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (07 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $29.00
                                                <del>$50.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-23.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Wall Polishing Square Sander Electric Machine
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $89.00
                                                <del>$120.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-24.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            High Quality Carbon Steel Professional Power Tools
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $99.00
                                                <del>$130.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tabs_item">
                            <div class="categories-slider owl-carousel owl-theme">
                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-17.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Electrical Magnetic Impact Power Hammer Drills
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $170.00
                                                <del>$220.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-18.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            High Quality Electric Hand Planer, 4-3/8-Inch
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (05 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $69.00
                                                <del>$90.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-19.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            White Whale Vacuum Cleaner High Quality
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $129.00
                                                <del>$150.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-20.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            High Quality Carbon Steel Mini Drilling Machines
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (11 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $99.00
                                                <del>$150.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-21.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Power Hammer Drills 200V Machine Screwdriver
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (05 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $159.00
                                                <del>$200.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-22.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Multi-function Screw Driver Set For Home Use
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (07 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $29.00
                                                <del>$50.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-23.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Wall Polishing Square Sander Electric Machine
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $89.00
                                                <del>$120.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-24.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            High Quality Carbon Steel Professional Power Tools
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $99.00
                                                <del>$130.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tabs_item">
                            <div class="categories-slider owl-carousel owl-theme">
                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-17.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Electrical Magnetic Impact Power Hammer Drills
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $170.00
                                                <del>$220.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-18.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            High Quality Electric Hand Planer, 4-3/8-Inch
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (05 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $69.00
                                                <del>$90.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-19.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            White Whale Vacuum Cleaner High Quality
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $129.00
                                                <del>$150.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-20.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            High Quality Carbon Steel Mini Drilling Machines
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (11 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $99.00
                                                <del>$150.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-21.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Power Hammer Drills 200V Machine Screwdriver
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (05 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $159.00
                                                <del>$200.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-22.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Multi-function Screw Driver Set For Home Use
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (07 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $29.00
                                                <del>$50.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-23.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Wall Polishing Square Sander Electric Machine
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $89.00
                                                <del>$120.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-24.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            High Quality Carbon Steel Professional Power Tools
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $99.00
                                                <del>$130.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabs_item">
                            <div class="categories-slider owl-carousel owl-theme">
                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-17.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Electrical Magnetic Impact Power Hammer Drills
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $170.00
                                                <del>$220.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-18.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            High Quality Electric Hand Planer, 4-3/8-Inch
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (05 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $69.00
                                                <del>$90.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-19.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            White Whale Vacuum Cleaner High Quality
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $129.00
                                                <del>$150.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-20.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            High Quality Carbon Steel Mini Drilling Machines
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (11 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $99.00
                                                <del>$150.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-21.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Power Hammer Drills 200V Machine Screwdriver
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (05 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $159.00
                                                <del>$200.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-22.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Multi-function Screw Driver Set For Home Use
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (07 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $29.00
                                                <del>$50.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-23.jpg" alt="Image">
                                        </a>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            Wall Polishing Square Sander Electric Machine
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $89.00
                                                <del>$120.00</del>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="single-products new-arrivals">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="assets/images/products/product-24.jpg" alt="Image">
                                        </a>

                                        <span class="hot new">New</span>
                                    </div>

                                    <div class="product-content">
                                        <a href="#" class="title">
                                            High Quality Carbon Steel Professional Power Tools
                                        </a>

                                        <ul class="products-rating">
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <i class="ri-star-fill"></i>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    (10 Review)
                                                </a>
                                            </li>
                                        </ul>

                                        <ul class="products-price">
                                            <li>
                                                $99.00
                                                <del>$130.00</del>
                                            </li>
                                            <li>
                                                <span>In Stock</span>
                                            </li>
                                        </ul>

                                        <ul class="products-cart-wish-view">
                                            <li>
                                                <a href="#" class="default-btn">
                                                    <i class="ri-shopping-cart-line"></i>
                                                    Add To Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="wish-btn">
                                                    <i class="ri-heart-line"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <button class="eye-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="ri-eye-line"></i>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Categories Area -->

<!-- Start Our Blog Area -->
<!-- <section class="our-blog-area pb-30">
    <div class="container">
        <div class="section-title">
            <h2>Our Blog Posts</h2>
            <a href="blog.html" class="read-more">
                View All
            </a>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <a href="blog-details.html">
                        <img src="assets/images/blog/blog-1.jpg" alt="Image">
                    </a>

                    <div class="blog-content">
                        <ul>
                            <li>
                                <a href="author.html">
                                    Admin
                                </a>
                            </li>
                            <li>
                                July 30, 2024
                            </li>
                            <li>
                                <a href="blog-details.html">
                                    (03) Comments
                                </a>
                            </li>
                        </ul>

                        <h3>
                            <a href="blog-details.html">
                                Powerful Motor For The Best Performance In Compound Miter Saw
                            </a>
                        </h3>

                        <a href="blog-details.html" class="default-btn">
                            Read More
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <a href="blog-details.html">
                        <img src="assets/images/blog/blog-2.jpg" alt="Image">
                    </a>

                    <div class="blog-content">
                        <ul>
                            <li>
                                <a href="author.html">
                                    Admin
                                </a>
                            </li>
                            <li>
                                July 05, 2024
                            </li>
                            <li>
                                <a href="blog-details.html">
                                    (03) Comments
                                </a>
                            </li>
                        </ul>

                        <h3>
                            <a href="blog-details.html">
                                Why We Used One Of The Best Corded Drill Power Tools
                            </a>
                        </h3>

                        <a href="blog-details.html" class="default-btn">
                            Read More
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="single-blog">
                    <a href="blog-details.html">
                        <img src="assets/images/blog/blog-3.jpg" alt="Image">
                    </a>

                    <div class="blog-content">
                        <ul>
                            <li>
                                <a href="author.html">
                                    Admin
                                </a>
                            </li>
                            <li>
                                July 15, 2024
                            </li>
                            <li>
                                <a href="blog-details.html">
                                    (03) Comments
                                </a>
                            </li>
                        </ul>

                        <h3>
                            <a href="blog-details.html">
                                The Most Advanced Quality Tools For Welding Work
                            </a>
                        </h3>

                        <a href="blog-details.html" class="default-btn">
                            Read More
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- End Our Blog Area -->

<!-- Start Partner Area -->
<div class="partner-area pb-54">
    <div class="container">
        <div class="partner-wrap">
            <div class="partner-slider owl-carousel owl-theme">
                <div class="partner-item">
                    <img src="assets/images/partners/partner-1.png" alt="Image">
                </div>
                <div class="partner-item">
                    <img src="assets/images/partners/partner-2.png" alt="Image">
                </div>
                <div class="partner-item">
                    <img src="assets/images/partners/partner-3.png" alt="Image">
                </div>
                <div class="partner-item">
                    <img src="assets/images/partners/partner-4.png" alt="Image">
                </div>
                <div class="partner-item">
                    <img src="assets/images/partners/partner-5.png" alt="Image">
                </div>
                <div class="partner-item">
                    <img src="assets/images/partners/partner-6.png" alt="Image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Partner Area -->

<!-- Start Special Area -->
<section class="special-area pb-30">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="section-title">
                    <h2>Special Offers</h2>
                </div>

                <ul class="trending-product-list special-product-list">
                    <li class="single-list">
                        <img src="assets/images/products/product-31.jpg" alt="Image">

                        <div class="product-content">
                            <a href="#" class="title">
                                White Whale Vacuum Cleaner High Quality Product
                            </a>

                            <ul class="products-price">
                                <li>
                                    $129.00
                                    <del>$150.00</del>
                                </li>
                            </ul>

                            <ul class="products-rating">
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="single-list">
                        <img src="assets/images/products/product-32.jpg" alt="Image">

                        <div class="product-content">
                            <a href="#" class="title">
                                Professional Cordless Drill Power Tools Set Competitive Price
                            </a>

                            <ul class="products-price">
                                <li>
                                    $90.00
                                    <del>$150.00</del>
                                </li>
                            </ul>

                            <ul class="products-rating">
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="single-list">
                        <img src="assets/images/products/product-33.jpg" alt="Image">

                        <div class="product-content">
                            <a href="#" class="title">
                                Power Tools Set Chinese Manufacturer Production 50V Lithu Battery
                            </a>

                            <ul class="products-price">
                                <li>
                                    $29.00
                                    <del>$50.00</del>
                                </li>
                            </ul>

                            <ul class="products-rating">
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="section-title">
                    <h2>Popular Products</h2>
                </div>

                <ul class="trending-product-list special-product-list">
                    <li class="single-list">
                        <img src="assets/images/products/product-34.jpg" alt="Image">

                        <div class="product-content">
                            <a href="#" class="title">
                                Grinding Machine Polisher Household 5 Inch Mini Portable Power Tools
                            </a>

                            <ul class="products-price">
                                <li>
                                    $119.00
                                    <del>$150.00</del>
                                </li>
                            </ul>

                            <ul class="products-rating">
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="single-list">
                        <img src="assets/images/products/product-35.jpg" alt="Image">

                        <div class="product-content">
                            <a href="#" class="title">
                                Professional 2000W 25mm Electric Jack Hammer Drill
                            </a>

                            <ul class="products-price">
                                <li>
                                    $200.00
                                    <del>$250.00</del>
                                </li>
                            </ul>

                            <ul class="products-rating">
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="single-list">
                        <img src="assets/images/products/product-36.jpg" alt="Image">

                        <div class="product-content">
                            <a href="#" class="title">
                                Electrical Magnetic Impact Power Hammer Drills Machine
                            </a>

                            <ul class="products-price">
                                <li>
                                    $170.00
                                    <del>$220.00</del>
                                </li>
                            </ul>

                            <ul class="products-rating">
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="section-title">
                    <h2>Top Rated Products</h2>
                </div>

                <ul class="trending-product-list special-product-list">
                    <li class="single-list">
                        <img src="assets/images/products/product-37.jpg" alt="Image">

                        <div class="product-content">
                            <a href="#" class="title">
                                High Quality Industrial Stapler Powerful Heavy Duty Metal
                            </a>

                            <ul class="products-price">
                                <li>
                                    $59.00
                                    <del>$120.00</del>
                                </li>
                            </ul>

                            <ul class="products-rating">
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="single-list">
                        <img src="assets/images/products/product-38.jpg" alt="Image">

                        <div class="product-content">
                            <a href="#" class="title">
                                High Quality Carbon Steel Professional Power Tools
                            </a>

                            <ul class="products-price">
                                <li>
                                    $99.00
                                    <del>$130.00</del>
                                </li>
                            </ul>

                            <ul class="products-rating">
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="single-list">
                        <img src="assets/images/products/product-39.jpg" alt="Image">

                        <div class="product-content">
                            <a href="#" class="title">
                                DFMALB 20V Max XX Oscillating Multi Variable Speed Tool
                            </a>

                            <ul class="products-price">
                                <li>
                                    $125.00
                                    <del>$200.00</del>
                                </li>
                            </ul>

                            <ul class="products-rating">
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                                <li>
                                    <i class="ri-star-fill"></i>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End Special Area -->

<!-- Start Services Area -->
<section class="services-area pt-0 pb-30">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6">
                <div class="single-services">
                    <div class="icon">
                        <img src="assets/images/icon/support.png" alt="Image">
                    </div>
                    <h3>Customer Support</h3>
                    <p>24/7 We are customer care best support</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="single-services">
                    <div class="icon">
                        <img src="assets/images/icon/payment.png" alt="Image">
                    </div>
                    <h3>Secure Payments</h3>
                    <p>Pay with the world's top payment methods</p>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="single-services">
                    <div class="icon">
                        <img src="assets/images/icon/network.png" alt="Image">
                    </div>
                    <h3>Worldwide Delivery</h3>
                    <p>What you want, delivered to where you want</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Area -->

		@include('layouts.footer_importer_image')

@endsection
