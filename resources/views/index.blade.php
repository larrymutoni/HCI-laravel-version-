@extends('layouts.app')

@section('content')
    <!-- Services-->
<section class="page-section" id="services">
    <div class="container px-4 px-lg-5">
        <h2 class="text-center mt-0">At Your Service</h2>
        <hr class="divider" />
        <div class="row gx-4 gx-lg-5">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">

                    <img src="{{ URL('images/registrationicon.png') }}" width="70" height="70">
                    <br>
                    <a class="btn btn-primary btn-xl" href="{{ URL('registration') }}">e-Registration</a>
                    <p class="text-muted mb-0"><br>e-Amendment<br>e-Cancellation  <br>e-Dormance</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">

                    <img src="{{ URL('images/fileicon.png') }}" width="70" height="70">
                    <br>
                    <a class="btn btn-primary btn-xl" href="#about">File Returns</a>
                    <p class="text-muted mb-0"><br>e-Return <br>Consult e-Returns</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">

                    <img src="{{ URL('images/profileicon.png') }}" width="70" height="70">
                    <br>
                    <a class="btn btn-primary btn-xl" href="#about">View Profile</a>
                    <p class="text-muted mb-0"><br>Change Password <br>View Profile <br>My Ledger</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">

                    <img src="{{ URL('images/paymenticon.png') }}" width="70" height="70">
                    <br>
                    <a class="btn btn-primary btn-xl" href="#about">Make Payment</a>
                    <p class="text-muted mb-0"><br>Payment Registration <br>Consult Payment</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- tutorials-->
<div id="tutorials">
    <center><h2 class="text-black mt-0">Watch Tutorials Here!</h2></center>
    <hr class="divider divider-black" />
    <div class="container-fluid p-0">
        <div class="row g-0">

            <div class="col-lg-4 col-sm-6">
                <div class="tutorials-box-caption p-3">

                    <iframe width="420" height="250" src="https://www.youtube.com/embed/WXat8TbnZeY?autoplay=1&mute=1">
                    </iframe>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6">

                <div class="tutorials-box-caption p-3">

                    <iframe width="420" height="250" src="https://www.youtube.com/embed/x8SSQy_mAfg?autoplay=1&mute=1">
                    </iframe>
                </div>

            </div>
            <div class="col-lg-4 col-sm-6">

                <div class="tutorials-box-caption p-3">

                    <iframe width="420" height="250" src="https://www.youtube.com/embed/92oriMaaf6I?autoplay=1&mute=1">
                    </iframe>

                </div>

            </div>
            <div class="col-lg-4 col-sm-6">

                <div class="tutorials-box-caption p-3">

                    <iframe width="420" height="250" src="https://www.youtube.com/embed/4M5eXLO8gPs?autoplay=1&mute=1">
                    </iframe>

                </div>

            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="tutorials-box-caption p-3">

                    <iframe width="420" height="250" src="https://www.youtube.com/embed/kAcIZjqGRQA?autoplay=1&mute=1">
                    </iframe>


                </div>

            </div>
            <div class="col-lg-4 col-sm-6">

                <div class="tutorials-box-caption p-3">

                    <iframe width="420" height="250" src="https://www.youtube.com/embed/i6BaEEfHr2E?autoplay=1&mute=1">
                    </iframe>


                </div>

            </div>
        </div>
    </div>
</div>

<!-- About-->
<section class="page-section " id="about">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-danger mt-0">VISION</h2>
                <h4 class="text-black mt-0">A Countrywide Trusted Revenue Agency Facilitating Tax and Customs Compliance</h4>
                <hr class="divider divider-light" />
                <h2 class="text-danger mt-0">MISSION</h2>
                <h4 class="text-black mt-0">To enhance mobilisation of government revenue and to facilitate growth in economic 
                    activities and trade by ensuring compliance with tax and customs laws</h4>
                <hr class="divider divider-light" />
                <h2 class="text-danger mt-0">VALUES</h2>
                <h4 class="text-black mt-0">Trustworthy, Ethical, Competent, Helpful,Simple</h4>
                <hr class="divider divider-light" />
            </div>
        </div>
    </div>
</section>
@endsection