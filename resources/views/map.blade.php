@extends('layouts.main')

@section('context')

<body class="body-scroll d-flex flex-column h-100 menu-overlay" data-page="homepage">
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
                <h6 class="mb-1">BENBACHIR HASSANI Fatima Zahra</h6>
                <p class="small text-default-secondary">Casablanca, MAR</p>
            </div>
        </div>
        <div class="menu-container">
            <div class="row mb-4">
                <div class="col">
                    <h4 class="mb-1 font-weight-normal">ParkFinder</h4>
                </div>
            </div>

            <ul class="nav nav-pills flex-column ">
                <li class="nav-item">
                    <a class="nav-link active" href="/">
                        <div>
                            <span class="material-icons icon">account_balance</span>
                            Home
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">
                        <div>
                            <span class="material-icons icon">info</span>
                            About Us
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/map">
                        <div>
                            <i class="material-icons icon">map</i>
                            MAP
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/balance">
                        <div>
                            <i class="material-icons icon">account_balance_wallet</i>
                            Balance
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profile">
                        <div>
                            <i class="material-icons icon">account_circle</i>
                            Profile
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pages">
                        <div>
                            <span class="material-icons icon">layers</span>
                            Pages
                        </div>
                        <span class="arrow material-icons">chevron_right</span>
                    </a>
                </li>
            </ul>
            <div class="text-center">
                <a href="/login" class="btn btn-outline-danger text-white rounded my-3 mx-auto">Sign out</a>
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
                    <button class="menu-btn btn btn-40 btn-link" type="button">
                        <span class="material-icons">menu</span>
                    </button>
                </div>
                <div class="text-left col align-self-center">
                    <a class="navbar-brand" href="#">
                        <h5 class="mb-0">Map</h5>
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


        <div class="main-container">
            <div class="container mb-4">
                <div class="card">
                    <!-- <div class="row my-3 justify-content-center">
                        <button onclick="getLocation()">Current position</button>
                    </div> -->
                    <div class="row my-3 justify-content-center">
                        <div class="mapouter">
                            <div id="map"></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0">Choose a parking</h6>
                    </div>
                    <div class="card-body px-0 pt-0">
                        <div class="list-group list-group-flush border-top border-color">
                            <a href="/neveda_datail" class="list-group-item list-group-item-action border-color">Parking Nevada</a>
                            <a href="/mohamedV" class="list-group-item list-group-item-action border-color">Parking Avenue Mohammed V</a>
                            <a href="/george" class="list-group-item list-group-item-action border-color">Parking George sand maarif</a>
                            <a href="/el_behira" class="list-group-item list-group-item-action border-color">Parking EL Behira</a>
                            <a href="/twin" class="list-group-item list-group-item-action border-color">Twin centre parking</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- footer-->
    <div class="footer">
        <div class="row no-gutters justify-content-center">
            <div class="col-auto">
                <a href="/" class="">
                    <i class="material-icons">home</i>
                    <p>Home</p>
                </a>
            </div>
            <div class="col-auto">
                <a href="/about" class="">
                    <i class="material-icons">info</i>
                    <p>About Us</p>
                </a>
            </div>
            <div class="col-auto">
                <a href="/map" class="active">
                    <i class="material-icons">map</i>
                    <p>Map</p>
                </a>
            </div>
            <div class="col-auto">
                <a href="/balance" class="">
                    <i class="material-icons">account_balance_wallet</i>
                    <p>Balance</p>
                </a>
            </div>
            <div class="col-auto">
                <a href="/profile" class="">
                    <i class="material-icons">account_circle</i>
                    <p>Profile</p>
                </a>
            </div>
        </div>
    </div>
    <style>
        #map {  width: 100%; height:200px;}
    </style>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiYWJkb21pc2JhaDEwIiwiYSI6ImNrcGI4ZmJnODEwNDAyeW9naW90ZGw2NXUifQ.OjDdCAqfusdzvPpMJ1dHeg';
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/abdomisbah10/ckpqyfx9r2eke18ps1ax7l3ty',
center: [-79.4512, 43.6568],
zoom: 13
});



map.addControl(
new mapboxgl.GeolocateControl({
positionOptions: {
enableHighAccuracy: true
},
trackUserLocation: true
})
);
</script>
@endsection
