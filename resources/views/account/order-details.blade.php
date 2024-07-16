@extends('layouts.app')
@section('content')

<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <ul>
                <li>
                    <a href="/">
                        Accueil 
                    </a>
                </li>

                <li class="active">Mes Commandes</li>
            </ul>
        </div>
    </div>
</div>


<section class="dashboard-area ptb-54">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <ul class="dashboard-navigation">
                    <li>
                        <h3>Navigation</h3>
                    </li>
                    <li>
                        <a href="dashboard.html">Dashboard</a>
                    </li>
                    <li>
                        <a href="edit-profile.html">Edit Profile</a>
                    </li>
                    <li>
                        <a href="edit-address.html">Edit Address</a>
                    </li>
                    <li>
                        <a href="order-history.html">Order History</a>
                    </li>
                    <li>
                        <a href="order-details.html" class="active">Order Details</a>
                    </li>
                    <li>
                        <a href="address.html">Address</a>
                    </li>
                    <li>
                        <a href="password.html">Password</a>
                    </li>
                    <li>
                        <a href="my-account.html">Log Out</a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <h3 class="order-details-title">Order Details</h3>
                        <div class="order-details-area">
                            <div class="cart-totals">
                                <h3>Order number: #001</h3>
                                <p>Order created at: 01 August, 2021</p>
                                <a href="order-history.html" class="default-btn">
                                    Back History
                                </a>
                                <ul>
                                    <li>Subtotal <span>$240.00</span></li>
                                    <li>Shipping <span>$240.00</span></li>
                                    <li>Coupon <span>$00.00</span></li>
                                    <li>Total <span>$240.00</span></li>
                                    <li><b>Total</b> <span><b>$240.00</b></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-6">
                        <div class="address-details-area">
                            <div class="cart-totals">
                                <h3>Billing address</h3>
                                <ul>
                                    <li class="p-0">
                                        Doreen McCool
                                    </li>
                                    <li>
                                        <span>Address:</span>
                                        2491 Reel Avenue Albuquer que, MN 2543
                                    </li>
                                    <li>
                                        <span>Phone:</span>
                                        <a href="tel:+1-(514)-321-4566">+1 (514) 321-4566</a>
                                    </li>
                                    <li>
                                        <span>Email:</span>
                                        <a href="mailto:ehay@example.com">ehay@example.com</a>
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
@endsection()