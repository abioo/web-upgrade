@extends('layout.main')
@section('home')
    active
@endsection
@section('body')
<section class="hero">
    <div class="container">
        <div class="row align-items-center" style="height:100vh;">
            <div class="col-sm-12 col-md-6 text-center">
                <img src="{{asset('assets/images/logo.png')}}">
            </div>
            <div class="col-sm-12 col-md-6">
                <h1>Using Creative and Technology to Transform and Leverage  Your Brand</h1>
                <button class="btn btn-warning text-white mt-3 mb-3">UPGRADE WITH US</button>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="foot-header text-center">
                <p class="mb-0">SCROLL TO SEE FEATURED WORKS</p>
                <p class="garis"> | </p>
            </div>
        </div>
    </div>
</section>
<section class="framework" style="background:#dceaec;">
    <div class="container">
        <div class="row align-items-center justify-content-center" style="height:100vh;">
            <div class="col-md-12">
                <div class="title-framework">
                    <h3 class="m-0">We COMBINE TWO IMPORTANT STAKEHOLDER AND 
                    CREATE NEW STANDARD IN MARKETING WORLD.</h3>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 p-0" style="">
                <div class="card rounded-0" style="background:#ed36a7;">
                    <div class="card-body">
                        <img src="{{asset('assets/images/creative1.png')}}" height="200" style="position:absolute; right:0; top:0;">
                        <div class="content-text" style="padding:10px; position: absolute; bottom: 10px;">
                            <h1>CREATIVE</h1>
                            <p>WHAT THECHNOLOGY REALLY MEANS. WE WILL PUT THE EXPLANATION LATER. THIS IS JUST AN EXAMPLE OF TEXT. JUST IGNORE WHAT WE SAID IN THIS SECTION BECAUSE WE DO NOT KNOW WHAT EXACTLY WE SAID ABOUT.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 p-0" style="">
                <div class="card rounded-0" style="background:#00b7df;">
                    <div class="card-body">
                        <div class="content-text">
                            <h1>TECHNOLOGY</h1>
                            <p>WHAT THECHNOLOGY REALLY MEANS. WE WILL PUT THE EXPLANATION LATER. THIS IS JUST AN EXAMPLE OF TEXT. JUST IGNORE WHAT WE SAID IN THIS SECTION BECAUSE WE DO NOT KNOW WHAT EXACTLY WE SAID ABOUT.  </p>
                        </div>
                        <img src="{{asset('assets/images/tech1.png')}}" height="200" style="position:absolute; bottom:0; right:0;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="service">
    <div class="">
        <div class="row m-0" style="height:100vh">
            <div class="col-sm1-2 col-md-4 p-0">
                <div class="card rounded-0" style="background:#163345; height:100%;">
                    <div class="card-body text-white">
                        <div class="service-text mt-5">
                            <h1>Trade <br>Marketing</h1>
                            <p>Give the best actions to increase the activity 
                            of your best partner.</p>
                        </div>
                        <button class="btn btn-dark">-></button>
                        <img src="{{asset('assets/images/trade-marketing.png')}}" height="180">
                    </div>
                </div>
            </div>
            <div class="col-sm1-2 col-md-4 p-0">
                <div class="card rounded-0" style="background:#d82e97; height:100%;">
                    <div class="card-body text-white">
                        <div class="service-text mt-5">
                            <h1>Consumer <br>marketing</h1>
                            <p>Let your customer get the best experience 
                            when they meet your products</p>
                        </div>
                        <button class="btn btn-dark">-></button>
                        <img src="{{asset('assets/images/consumer-marketing.png')}}" height="180">
                    </div>
                </div>
            </div>
            <div class="col-sm1-2 col-md-4 p-0">
                <div class="card rounded-0" style="background:#f5a500; height:100%;">
                    <div class="card-body text-white">
                        <div class="service-text mt-5">
                            <h1>DIGITAL <br>MARKETING</h1>
                            <p>Give the best deliverebles to speak to your 
                            end user through digital approach</p>
                        </div>
                        <button class="btn btn-dark"> -> </button>
                        <img src="{{asset('assets/images/digital.png')}}" height="180">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="stories" style="background:#dceaec;">
    <div class="container">
        <div class="row align-items-center justify-content-center" style="height:100vh;">
            <div class="col-sm-12 col-md-12 p-0" >
                <div class="card rounded-0 bg-stories-1">
                    <div class="card-body">
                        <div class="stories-text">
                            <h1>ENHANCE CUTOMER 
                            DRIVING EXPERIENCE</h1>
                            <button class="btn btn-warning text-white">READ THIS STORIES </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 p-0">
                <div class="card rounded-0 bg-stories-2">
                    <div class="card-body">
                        <div class="stories-text">
                            <h1>ENGANGE RETAIL PARTNER 
                            TO INVOLVED IN NEW 
                            PRODUCT</h1>
                            <button class="btn btn-warning text-white">READ THIS STORIES </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 p-0">
                <div class="card rounded-0 bg-stories-3">
                    <div class="card-body">
                        <div class="stories-text">
                            <h1>MADE THE FIRST 
                            SOCIOPRENEUR FESTIVAL 
                            IN INDONESIA</h1>
                            <button class="btn btn-warning text-white">READ THIS STORIES </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="drop-problem">
    <div class="container">
        <div class="row align-items-center justify-content-center" style="height:100vh;">
            <div class="col-sm-12 col-md-6">
                <h1>CONNECT WITH US</h1>
                <p>Are in desperate needs to upgrade? 
                Drop your files down here</p>
            </div>
            <div class="col-sm-12 col-md-6">
                
            </div>
        </div>
    </div>
</section>
<footer class="first-foot" style="background-color:#163345;">
    <div class="container">
        <div class="row">
            <div class="first-foot-content" style="display:contents; color:#fff;">
                <div class="col-md-3" style="margin:auto;">
                    <img src="{{asset('assets/images/logo.png')}}" height="40">
                </div>
                <div class="col-md-5 mt-5">
                    <ul class="p-0">
                        <li><a href="">ARTICLES</a></li>
                        <li><a href="">PRODUCT & SERVICE</a></li>
                        <li><a href="">STORIES</a></li>
                        <li><a href="">CONNECT</a></li>
                        <li><a href="">CAREER</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mt-5 mb-5">
                    <p><i class="fa fa-map-marker mr-3"></i>Jl.R.C.Veteran (Route 66) No.13 
                    Carburator SpringsTanah Kusir - Bintaro 
                    Jakarta Selatan 12330</p>
                    <p><i class="fa fa-phone mr-3"></i> +6221-227-04589</p>
                    <p><i class="fa fa-inbox mr-3"></i> connect@upgrade.com</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<footer class="second-foot" style="background-color:#f5a500">
        <div class="container">
            <div class="row justify-content-center" style="padding:10px;">
                <div class="second-foot-content " style="color:#fff; display:contents;">
                    <a href="">UPGRADE WOW 2018</a> 
                    <p>|</p>
                    <a href="">PRIVACY POLICY</a>
                    <p>|</p>
                    <a href="">TERMS & CONDITION</a>
                </div>
            </div>
        </div>
</footer>
@endsection
@section('foot')

@endsection