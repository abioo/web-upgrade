<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{asset('assets/images/logo.png')}}" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" onclick="openNav()" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link mr-2 active" href="#">
                <img src="{{asset('assets/images/linkedin.png')}}" height="20">
            </a>
            <a class="nav-item nav-link mr-2" href="#">
                <img src="{{asset('assets/images/whatsapp.png')}}" height="20">
            </a>
            <a class="nav-item nav-link mr-2" href="#">
                <img src="{{asset('assets/images/facebook.png')}}" height="20">
            </a>
            <a class="nav-item nav-link mr-2" href="#">
                <img src="{{asset('assets/images/instagram-logo.png')}}" height="20">
            </a>
            <a class="nav-item nav-link mr-2" href="#">
                LOGIN
            </a>
            <a class="nav-item nav-link mr-2" onclick="openNav()" href="#">MENU &#9776;</a>
            </div>
        </div>
    </div>
</nav>
<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <a href="#">Services</a>
        <a href="#">Product</a>
        <a href="#">Blog</a>
        <a href="#">Contact</a>
    </div>
</div>