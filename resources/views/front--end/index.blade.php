@extends('frontend.layouts.app')

@section('content')


<section>

    <div class="homefirst-wp">
        <div class="container">
            <div class="homefirst-sec">
                <h3>MIDDLE EAST FIRST PEER TO PEER FASHION SHARING COMMUNITY</h3>
            </div>
        </div>
    </div>

</section>

<section>

    <div class="homebanner-wp">
        <div class="container">
            <div class="homebanner-sec" style="background-image: url('{{ asset('frontend/images/bannerhm.png') }}');">
                <div class="row">
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6">
                        <div class="homebanner-rightcon">
                            <h1>JOIN THE BIGGEST FASHION
                                SHARING COMMUNITY IN
                                THE MIDDLE EAST</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bannerlinks">
                <div class="row">
                    <div class="col-md-4 bannerlinks-active">
                        <a href="#">
                            LIST AN ITEM
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            RENT
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="#">
                            RESALE
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section>

    <div class="category-wphm">
        <div class="container">
            <div class="category-sec">
                <div class="row mb-5">
                    <div class="col-md-6">
                        <h3>Categories</h3>
                    </div>
                    <div class="col-md-6 category-sechmright">
                        <a href="#">
                            View All
                        </a>
                    </div>
                </div>
                <div class="categoryhomr-slider">
                    <div class="owl-carousel category-carousel">
                        <div class="item">
                            <img src="{{ asset('frontend/images/all-category.png') }}" alt="">
                            <p>All</p>
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/images/category-9.png') }}" alt="">
                            <p>T-Shirts</p>
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/images/category-8.png') }}" alt="">
                            <p>Jeans</p>
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/images/category-2.png') }}" alt="">
                            <p>Shorts</p>
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/images/category-3.png') }}" alt="">
                            <p>Jackets</p>
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/images/category-4.png') }}" alt="">
                            <p>Dresses</p>
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/images/category-5.png') }}" alt="">
                            <p>Modest</p>
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/images/category-6.png') }}" alt="">
                            <p>Skirts</p>
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/images/category-7.png') }}" alt="">
                            <p>Tops</p>
                        </div>
                    </div>                     
                </div>
            </div>
        </div>
    </div>

</section>

<section>

    <div class="homebutton-wp">
        <div class="container">
            <div class="homebutton-sec">
                <div class="row">
                    <div class="col-md-6">
                        <div class="homebutton-left">
                            <a href="#">
                                HOW IT WORKS
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="homebutton-right">
                            <a href="#">
                                COMMUNITY
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section>

    <div class="occasions-wp">
        <div class="container">
            <div class="occasions-sec">
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="occasions-secleft">
                            <h3>Occasions</h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="occasions-secright">
                            <a href="#">
                                View All
                            </a>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel occasions-carousel">
                    <div class="item">
                        <div class="hovercart-bg">
                            <img src="{{ asset('frontend/images/hovercartbgimg.png') }}" alt="Avatar" class="image" style="width:100%">
                            <div class="middle">
                            </div>
                        </div>
                        <span>
                            PARTY WEAR
                        </span>
                    </div>
                    <div class="item">
                        <div class="hovercart-bg">
                            <img src="{{ asset('frontend/images/hovercartbgimg.png') }}" alt="Avatar" class="image" style="width:100%">
                            <div class="middle">
                            </div>
                        </div>
                        <span>
                            EVENING WEAR
                        </span>
                    </div>
                    <div class="item">
                        <div class="hovercart-bg">
                            <img src="{{ asset('frontend/images/hovercartbgimg.png') }}" alt="Avatar" class="image" style="width:100%">
                            <div class="middle">
                            </div>
                        </div>
                        <span>
                            BUSINESS
                        </span>
                    </div>
                    <div class="item">
                        <div class="hovercart-bg">
                            <img src="{{ asset('frontend/images/hovercartbgimg.png') }}" alt="Avatar" class="image" style="width:100%">
                            <div class="middle">
                            </div>
                        </div>
                        <span>
                            BIRTHDAY
                        </span>
                    </div>
                    <div class="item">
                        <div class="hovercart-bg">
                            <img src="{{ asset('frontend/images/hovercartbgimg.png') }}" alt="Avatar" class="image" style="width:100%">
                            <div class="middle">
                            </div>
                        </div>
                        <span>
                            BIRTHDAY
                        </span>
                    </div>
                    <div class="item">
                        <div class="hovercart-bg">
                            <img src="{{ asset('frontend/images/hovercartbgimg.png') }}" alt="Avatar" class="image" style="width:100%">
                            <div class="middle">
                            </div>
                        </div>
                        <span>
                            BIRTHDAY
                        </span>
                    </div>
                    <div class="item">
                        <div class="hovercart-bg">
                            <img src="{{ asset('frontend/images/hovercartbgimg.png') }}" alt="Avatar" class="image" style="width:100%">
                            <div class="middle">
                            </div>
                        </div>
                        <span>
                            BIRTHDAY
                        </span>
                    </div>
                    <div class="item">
                        <div class="hovercart-bg">
                            <img src="{{ asset('frontend/images/hovercartbgimg.png') }}" alt="Avatar" class="image" style="width:100%">
                            <div class="middle">
                            </div>
                        </div>
                        <span>
                            BIRTHDAY
                        </span>
                    </div>
                    <div class="item">
                        <div class="hovercart-bg">
                            <img src="{{ asset('frontend/images/hovercartbgimg.png') }}" alt="Avatar" class="image" style="width:100%">
                            <div class="middle">
                            </div>
                        </div>                        
                        <span>
                            BIRTHDAY
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section>

    <div class="landed-wp">
        <div class="container">
            <div class="landed-sec">
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="landedsec-left">
                            <h3>Just Landed</h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="landedsec-right">
                            <a href="#">
                                View All
                            </a>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel landed-carousel">
                    <div class="item">
                        <div class="landed-cart">
                            <img src="{{ asset('frontend/images/landed-img1.png') }}" alt="">
                            <div class="wishlist-icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                            <div class="landed-hidecon">
                                <ul>
                                    <li>
                                        <a href="#" class="hidebtn-one">
                                            RENT NOW
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="hidebtn-two">
                                            BUY NOW
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="landed-bottomprice">
                            <p>Buttons tweed blazer</p>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                            </ul>
                            <p>AED 250</p>
                            <a href="#">
                                Dresses
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="landed-cart">
                            <img src="{{ asset('frontend/images/landed-img2.png') }}" alt="">
                            <div class="wishlist-icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                            <div class="landed-hidecon">
                                <ul>
                                    <li>
                                        <a href="#" class="hidebtn-one">
                                            RENT NOW
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="hidebtn-two">
                                            BUY NOW
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="landed-bottomprice">
                            <p>Buttons tweed blazer</p>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                            </ul>
                            <p>AED 250</p>
                            <a href="#">
                                Dresses
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="landed-cart">
                            <img src="{{ asset('frontend/images/landed-img1.png') }}" alt="">
                            <div class="wishlist-icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                            <div class="landed-hidecon">
                                <ul>
                                    <li>
                                        <a href="#" class="hidebtn-one">
                                            RENT NOW
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="hidebtn-two">
                                            BUY NOW
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="landed-bottomprice">
                            <p>Buttons tweed blazer</p>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                            </ul>
                            <p>AED 250</p>
                            <a href="#">
                                Dresses
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="landed-cart">
                            <img src="{{ asset('frontend/images/landed-img3.png') }}" alt="">
                            <div class="wishlist-icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                            <div class="landed-hidecon">
                                <ul>
                                    <li>
                                        <a href="#" class="hidebtn-one">
                                            RENT NOW
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="hidebtn-two">
                                            BUY NOW
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="landed-bottomprice">
                            <p>Buttons tweed blazer</p>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                            </ul>
                            <p>AED 250</p>
                            <a href="#">
                                Dresses
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section>

    <div class="howhm-listwp">
        <div class="container">
            <div class="howhm-listsec">
                <div class="top-brandssecleft">
                    <h3>HOW TO LIST</h3>
                    <img src="{{ asset('frontend/images/brands-line.png') }}" alt="">
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="row cmnlisthm-bg">
                            <div class="col-md-3">
                                <img src="{{ asset('frontend/images/listicon-1.svg') }}" alt="">
                            </div>
                            <div class="col-md-9">
                                <strong>Click or Import Images of the product from Cloud or your device.</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row cmnlisthm-bg">
                            <div class="col-md-3">
                                <img src="{{ asset('frontend/images/listicon-2.svg') }}" alt="">
                            </div>
                            <div class="col-md-9">
                                <strong>Enter the Pricing, description and details about the product.</strong>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row cmnlisthm-bg">
                            <div class="col-md-3">
                                <img src="{{ asset('frontend/images/listicon-3.svg') }}" alt="">
                            </div>
                            <div class="col-md-9">
                                <strong>Upload the listed products with details .</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section>

    <div class="landed-wp resale-wp">
        <div class="container">
            <div class="landed-sec">
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="landedsec-left">
                            <h3>RESALE</h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="landedsec-right">
                            <a href="#">
                                View All
                            </a>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel landed-carousel">
                    <div class="item">
                        <div class="landed-cart">
                            <img src="{{ asset('frontend/images/landed-img1.png') }}" alt="">
                            <div class="wishlist-icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                            <div class="landed-hidecon">
                                <ul>
                                    {{-- <li>
                                        <a href="#" class="hidebtn-one">
                                            RENT NOW
                                        </a>
                                    </li> --}}
                                    <li>
                                        <a href="#" class="hidebtn-two">
                                            BUY NOW
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="landed-bottomprice">
                            <p>Buttons tweed blazer</p>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                            </ul>
                            <p>AED 250</p>
                            <a href="#">
                                Dresses
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="landed-cart">
                            <img src="{{ asset('frontend/images/landed-img2.png') }}" alt="">
                            <div class="wishlist-icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                            <div class="landed-hidecon">
                                <ul>
                                    {{-- <li>
                                        <a href="#" class="hidebtn-one">
                                            RENT NOW
                                        </a>
                                    </li> --}}
                                    <li>
                                        <a href="#" class="hidebtn-two">
                                            BUY NOW
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="landed-bottomprice">
                            <p>Buttons tweed blazer</p>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                            </ul>
                            <p>AED 250</p>
                            <a href="#">
                                Dresses
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="landed-cart">
                            <img src="{{ asset('frontend/images/landed-img1.png') }}" alt="">
                            <div class="wishlist-icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                            <div class="landed-hidecon">
                                <ul>
                                    {{-- <li>
                                        <a href="#" class="hidebtn-one">
                                            RENT NOW
                                        </a>
                                    </li> --}}
                                    <li>
                                        <a href="#" class="hidebtn-two">
                                            BUY NOW
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="landed-bottomprice">
                            <p>Buttons tweed blazer</p>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                            </ul>
                            <p>AED 250</p>
                            <a href="#">
                                Dresses
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="landed-cart">
                            <img src="{{ asset('frontend/images/landed-img3.png') }}" alt="">
                            <div class="wishlist-icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                            <div class="landed-hidecon">
                                <ul>
                                    {{-- <li>
                                        <a href="#" class="hidebtn-one">
                                            RENT NOW
                                        </a>
                                    </li> --}}
                                    <li>
                                        <a href="#" class="hidebtn-two">
                                            BUY NOW
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="landed-bottomprice">
                            <p>Buttons tweed blazer</p>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                            </ul>
                            <p>AED 250</p>
                            <a href="#">
                                Dresses
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section>

    <div class="landed-wp">
        <div class="container">
            <div class="landed-sec">
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="landedsec-left">
                            <h3>EDITORS PICK</h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="landedsec-right">
                            <a href="#">
                                View All
                            </a>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel landed-carousel">
                    <div class="item">
                        <div class="landed-cart">
                            <img src="{{ asset('frontend/images/landed-img1.png') }}" alt="">
                            <div class="wishlist-icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                            <div class="landed-hidecon">
                                <ul>
                                    <li>
                                        <a href="#" class="hidebtn-one">
                                            RENT NOW
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="hidebtn-two">
                                            BUY NOW
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="landed-bottomprice">
                            <p>Buttons tweed blazer</p>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                            </ul>
                            <p>AED 250</p>
                            <a href="#">
                                Dresses
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="landed-cart">
                            <img src="{{ asset('frontend/images/landed-img2.png') }}" alt="">
                            <div class="wishlist-icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                            <div class="landed-hidecon">
                                <ul>
                                    <li>
                                        <a href="#" class="hidebtn-one">
                                            RENT NOW
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="hidebtn-two">
                                            BUY NOW
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="landed-bottomprice">
                            <p>Buttons tweed blazer</p>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                            </ul>
                            <p>AED 250</p>
                            <a href="#">
                                Dresses
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="landed-cart">
                            <img src="{{ asset('frontend/images/landed-img1.png') }}" alt="">
                            <div class="wishlist-icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                            <div class="landed-hidecon">
                                <ul>
                                    <li>
                                        <a href="#" class="hidebtn-one">
                                            RENT NOW
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="hidebtn-two">
                                            BUY NOW
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="landed-bottomprice">
                            <p>Buttons tweed blazer</p>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                            </ul>
                            <p>AED 250</p>
                            <a href="#">
                                Dresses
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="landed-cart">
                            <img src="{{ asset('frontend/images/landed-img3.png') }}" alt="">
                            <div class="wishlist-icon">
                                <i class="fa-regular fa-heart"></i>
                            </div>
                            <div class="landed-hidecon">
                                <ul>
                                    <li>
                                        <a href="#" class="hidebtn-one">
                                            RENT NOW
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="hidebtn-two">
                                            BUY NOW
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="landed-bottomprice">
                            <p>Buttons tweed blazer</p>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa-solid fa-star"></i>
                                </li>
                            </ul>
                            <p>AED 250</p>
                            <a href="#">
                                Dresses
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section>

    <div class="top-brandswp">
        <div class="container">
            <div class="top-brandssec">
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="top-brandssecleft">
                            <h3>TOP BRANDS</h3>
                            <img src="{{ asset('frontend/images/brands-line.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="top-brandssecright">
                            <a href="#">
                                View All
                            </a>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel brandssec-carousel">
                    <div class="item">
                        <div class="brandssec-cmnbox">
                            <img src="{{ asset('frontend/images/brands-slide1.png') }}" alt="">
                            <p>BALENCIAGA</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="brandssec-cmnbox">
                            <img src="{{ asset('frontend/images/brands-slide2.png') }}" alt="">
                            <p>PRADA</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="brandssec-cmnbox">
                            <img src="{{ asset('frontend/images/brands-slide3.png') }}" alt="">
                            <p>GUCCI</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="brandssec-cmnbox">
                            <img src="{{ asset('frontend/images/brands-slide4.png') }}" alt="">
                            <p>LOUIS VUITTON</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section>

    <div class="homeadd-wp">
        <div class="container">
            <div class="homeadd-sec">
                <div class="row">
                    <div class="col-md-7">
                        <h3>Give 50 Get 50</h3>
                        <p>Introduce a friend to LXRY Shared and you both will get AED 50 credit.</p>
                    </div>
                    <div class="col-md-5">
                        <a href="#">
                            REFER NOW
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section>

    <div class="getthe-lookwp">
        <div class="container">
            <div class="getthe-looksec">
                <div class="getthe-looksechead">
                    <h3>GET THE LOOK</h3>
                    <img src="{{ asset('frontend/images/brands-line.png') }}" alt="">
                    <p>#sharingiscaring #LXRYshared</p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="getthelook-box">
                            <img src="{{ asset('frontend/images/lookimg.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="getthelook-box">
                            <img src="{{ asset('frontend/images/lookimg.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="getthelook-box">
                            <img src="{{ asset('frontend/images/lookimg.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="getthelook-box">
                            <img src="{{ asset('frontend/images/lookimg.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="getthelook-box">
                            <img src="{{ asset('frontend/images/lookimg.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="getthelook-box">
                            <img src="{{ asset('frontend/images/lookimg.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section>

    <div class="banneradd-hmwp">
        <div class="container">
            <div class="banneradd-hmsec">
                <div class="row">
                    <div class="col-md-7">
                        <img src="{{ asset('frontend/images/banneradd-img.png') }}" alt="">
                    </div>
                    <div class="col-md-5">
                        <div class="banneradd-right">
                            <h3>LXRY Shared Gives Back</h3>
                            <p>Our community gives back! This information will be provided to you later. The current artwork is not suitable, please update this picture to be more relatable to Sharing is Caring, lets discuss this.</p>
                            <a href="#">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="borderadd">
                    <img src="{{ asset('frontend/images/addborder.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>

</section>




{{--  --}}

<script>
    $(document).ready(function(){
    $(".category-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3000, // 3 seconds
        autoplayHoverPause: true, // Pauses on mouse hover
        responsive: {
        0: {
            items: 3
        },
        600: {
            items: 6
        },
        1000: {
            items: 9
        }
        }
    });
    });
</script>

{{--  --}}

<script>
    $(document).ready(function(){
    $(".occasions-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3000, // 3 seconds
        autoplayHoverPause: true, // Pauses on mouse hover
        responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 4
        }
        }
    });
    });
</script>

{{--  --}}

<script>
    $(document).ready(function(){
    $(".landed-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3000, // 3 seconds
        autoplayHoverPause: true, // Pauses on mouse hover
        responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 4
        }
        }
    });
    });
</script>

{{--  --}}

<script>
    $(document).ready(function(){
    $(".brandssec-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 3000, // 3 seconds
        autoplayHoverPause: true, // Pauses on mouse hover
        responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 4
        }
        }
    });
    });
</script>


@endsection