@extends('layouts.main')
@section('context')

<body class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="wallet">
    <!-- screen loader -->
    <div class="container-fluid h-100 loader-display">
        <div class="row h-100">
            <div class="align-self-center col">
                <div class="logo-loading">
                    <img src="img/ParkFinder_Logo.png" style="border-radius: 10px;" alt="" class="w-100">
                    <h4 class="text-default">ParkFinder</h4>
                    <p class="text-secondary">Mobile app</p>
                    <div class="loader-ellipsis">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- menu main -->
    <div class="main-menu">
        <div class="row mb-4 no-gutters">
            <div class="col-auto"><button class="btn btn-link btn-40 btn-close text-white"><span class="material-icons">chevron_left</span></button></div>
            <div class="col-auto">
                <div class="avatar avatar-40 rounded-circle position-relative">
                    <figure class="background">
                        <img src="img/user1.png" alt="">
                    </figure>
                </div>
            </div>
            <div class="col pl-3 text-left align-self-center">
                <h6 class="mb-1">Errica Johnson</h6>
                <p class="small text-default-secondary">London, UK</p>
            </div>
        </div>
        <div class="menu-container">
            <div class="row mb-4">
                <div class="col">
                    <h4 class="mb-1 font-weight-normal">$ 1548.00</h4>
                    <p class="text-default-secondary">My Balance</p>
                </div>
                <div class="col-auto">
                    <button class="btn btn-default btn-40 rounded-circle" data-toggle="modal" data-target="#addmoney"><i class="material-icons">add</i></button>
                </div>
            </div>

            <ul class="nav nav-pills flex-column ">
                <li class="nav-item">
                    <a class="nav-link active" href="index.html">
                        <div>
                            <span class="material-icons icon">account_balance</span>
                            Home
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="analytics.html">
                        <div>
                            <span class="material-icons icon">insert_chart</span>
                            Analytics
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="refer_friends.html">
                        <div>
                            <span class="material-icons icon">perm_contact_calendar</span>
                            Refer Friends
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gift_cards.html">
                        <div>
                            <span class="material-icons icon">card_giftcard</span>
                            Gift Cards
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="my_orders.html">
                        <div>
                            <span class="material-icons icon">shopping_bag</span>
                            My Orders
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="setting.html">
                        <div>
                            <span class="material-icons icon">settings</span>
                            Settings
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages.html">
                        <div>
                            <span class="material-icons icon">layers</span>
                            Pages
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="controls.html">
                        <div>
                            <span class="material-icons icon">widgets</span>
                            Controls
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
            </ul>
            <div class="text-center">
                <a href="login.html" class="btn btn-outline-danger text-white rounded my-3 mx-auto">Sign out</a>
            </div>
        </div>

    </div>
    <div class="backdrop"></div>


    <!-- Begin page content -->
    <main class="flex-shrink-0 main has-footer">
        <!-- Fixed navbar -->
        <header class="header">
            <div class="row">
                <div class="col-auto px-0">
                    <button class="btn btn-40 btn-link back-btn" type="button">
                        <span class="material-icons">keyboard_arrow_left</span>
                    </button>
                </div>
                <div class="text-left col align-self-center">
                    <a class="navbar-brand" href="#">
                        <h5 class="mb-0">QR-Code</h5>
                    </a>
                </div>
                <div class="ml-auto col-auto pl-0">
                    <a href="/notification" class=" btn btn-40 btn-link" >
                        <span class="material-icons">notifications_none</span>
                        <span class="counter"></span>
                    </a>
                    <a href="/profile" class="avatar avatar-30 shadow-sm rounded-circle ml-2">
                        <figure class="m-0 background">
                            <img src="img/user1.png" alt="">
                        </figure>
                    </a>
                </div>
            </div>
        </header>

        <!-- page content start -->
        <br/><br/><br/>

        <div class="main-container h-50" style="margin-top: -60px;">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 col-md-6 col-lg-4 align-self-center text-center my-3 mx-auto">
                        <div class="icon icon-100 bg-success-light text-success rounded-circle mb-3">
                            <i class="material-icons display-4">check</i>
                        </div>
                        <h2>Congratulation!</h2>
                        <h6 class="text-secondary mb-3">Your place has been reserved successfully!</h6>
                        <p class="text-secondary">Thank you for choosing ParkFinder.</p>
                    </div>
                </div>
            </div>
        </div>
        <br/>
        <div class="main-container h-50">
            <div class="container mt-3 mb-4 text-center">
                <p class="text-default-secondary">Ask to scan this QR-Code<br>to accept money </p>
                <div class="avatar avatar-120 rounded mb-3">
                    <div class="background">
                        <img src="img/QR.png" alt="">
                    </div>
                </div>

                <h2 style="margin-right: 120px;"><img src="img/TechCoins1.png" style="width:25px; float: left; margin-left: 120px; margin-top: 7px;" />
                     60</h2>
                <p class="text-secondary">Total Price</p>
            </div>
        </div>
    </main>
@endsection
