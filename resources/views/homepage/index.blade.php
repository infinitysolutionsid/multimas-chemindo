@extends('welcome')
@section('titleweb','Homepage')
@section('menu','transparent-header')
@section('activemenu','current')
@section('content')
<!-- Slider
		============================================= -->
<section id="slider" class="slider-element min-vh-60 min-vh-md-100 dark include-header include-topbar">
    <div class="slider-inner">

        <div class="fslider h-100 position-absolute" data-speed="3000" data-pause="7500" data-animation="fade"
            data-arrows="false" data-pagi="false" style="background-color: #333;">
            <div class="flexslider">
                <div class="slider-wrap">
                    <div class="slide" style="background: url('{!!asset('homepage/temp/images/hero.jpg')!!}') center
                                        center; background-size: cover;">
                    </div>
                </div>
            </div>
        </div>

        <div class="vertical-middle">
            <div class="container text-center">
                <div class="emphasis-title m-0">
                    <h1><img src="{!!asset('homepage/temp/images/logo-home.png')!!}"
                            alt="multi mas chemindo asset image" class="img-fluid">
                    </h1>
                    <span class="font-weight-bold text-uppercase title">
                        PT MULTI MAS CHEMINDO</span>
                </div>
            </div>
        </div>

        <div class="video-wrap">
            <div class="video-overlay real-estate-video-overlay"></div>
        </div>

    </div>
</section><!-- #slider end -->
<section id="content">
    <div class="content-wrap pt-3 pb-0" style="padding-bottom: 0px !important;">
        <div class="section mt-0 pt-0" style="margin-bottom: 0;">
            <div class="container clearfix">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="heading-block my-4 border-bottom-0">
                            <div class="before-heading">Know more about us</div>
                            <h2 class="nott font-weight-semibold">Our Main Section</h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-md-center">
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="flip-card top-to-bottom">
                            <div class="flip-card-front dark" data-height-xl="200"
                                style="background-image: url('https://www.borga.com/wp-content/uploads/2015/12/borga_steel_buildings_ins-warehouse_slide3.jpg');">
                                <div class="flip-card-inner">
                                    <div class="card bg-transparent border-0">
                                        <div class="card-body">
                                            <h3 class="card-title mb-0">Warehouse</h3>
                                            <span class="font-italic">Our Warehouse</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flip-card-back" data-height-xl="200"
                                style="background-image:
                                        url('https://afplus.com/wp-content/uploads/2019/04/warehouse-distribution.jpg');">
                                <div class="flip-card-inner">
                                    <p class="mb-2 text-white">Our warehouses are strategically placed in the industrial
                                        area of Sumatra, Java and Kalimantan.</p>
                                    <a href="/warehouse" type="button" class="btn btn-outline-light mt-2">View
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="flip-card top-to-bottom">
                            <div class="flip-card-front dark" data-height-xl="200"
                                style="background-image:
                                        url('https://asset.kompas.com/crops/R1YU_dY44GBlUsptbbqUMzzqjvQ=/0x0:810x540/750x500/data/photo/2020/03/24/5e798a3614d29.jpg');">
                                <div class="flip-card-inner">
                                    <div class="card bg-transparent border-0">
                                        <div class="card-body">
                                            <h3 class="card-title mb-0">Our Suppliers</h3>
                                            <span class="font-italic">Our Suppliers</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flip-card-back" data-height-xl="200" style="background-image:
                                        url('https://img.idxchannel.com/media/1000/images/idx/2020/03/24/mll.jpg');">
                                <div class="flip-card-inner">
                                    <p class="mb-2 text-white">Our suppliers vary from China to Egypt, ensuring the
                                        availability of our products in checked.</p>
                                    <a href="/partners" class="btn btn-outline-light mt-2">View
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-3">
                        <div class="flip-card top-to-bottom">
                            <div class="flip-card-front dark" data-height-xl="200" style="background-image:
                                        url('https://agroflowsystem.com/wp-content/uploads/2019/08/post_7.jpg');">
                                <div class="flip-card-inner">
                                    <div class="card bg-transparent border-0">
                                        <div class="card-body">
                                            <h3 class="card-title mb-0">Fertilizers</h3>
                                            <span class="font-italic">Our Fertilizers</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flip-card-back" data-height-xl="200" style="background-image:
                                        url('https://benefert.com/wp-content/uploads/2020/04/benefert-solid.jpg');">
                                <div class="flip-card-inner">
                                    <p class="mb-2 text-white">Our wide range of fertilizers enable our customers to
                                        find the best suitable products for their needs.</p>
                                    <a href="/fertilizers" class="btn btn-outline-light mt-2">View
                                        Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section mt-0 pt-0" style="margin-bottom: 0;">
            <div class="container clearfix">
                <div class="row align-items-md-center mb-5">
                    <div class="col-md-12 pr-5">
                        <div class="heading-block mb-4 border-bottom-0">
                            <div class="before-heading">Know More</div>
                            <h2 class="nott font-weight-semibold">Trade Together, Build Together.</h2>
                        </div>
                        <div class="row">
                            <div class="col-4 col-sm-4 mb-4">
                                <div class="counter color font-weight-semibold"><span data-from="1" data-to="5"
                                        data-refresh-interval="2" data-speed="600"></span>+</div>
                                <h5 class="mt-0 font-weight-medium">Warehoue</h5>
                            </div>

                            {{-- <div class="col-3 col-sm-3 mb-4">
                                <div class="counter color font-weight-semibold"><span data-from="1" data-to="3"
                                        data-refresh-interval="11" data-speed="900"></span>+</div>
                                <h5 class="mt-0 font-weight-medium">Branch Office</h5>
                            </div> --}}

                            <div class="col-4 col-sm-4 mb-4">
                                <div class="counter color font-weight-semibold"><span data-from="1" data-to="30"
                                        data-refresh-interval="3" data-speed="1000"></span>+
                                </div>
                                <h5 class="mt-0 font-weight-medium">Imported Fertilizers</h5>
                            </div>

                            <div class="col-4 col-sm-4 mb-4">
                                <div class="counter color font-weight-semibold"><span data-from="1" data-to="30"
                                        data-refresh-interval="100" data-speed="1500"></span>+
                                </div>
                                <h5 class="mt-0 font-weight-medium">Partners</h5>
                            </div>
                        </div>
                        <p class="text-muted">Our goal is to be the no.1 reliable fertilizers distributor and producer.
                            We attempt to rapidly grow our business by always improving our business operation,
                            customers and products range in order to serve more business partners in the future.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section mb-0 pb-0 bg-theme-light clearfix" style="margin-top: 0;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="ml-5">
                        <div class="before-heading">Don't Hesitate to Reach out to Us</div>
                        <h2 class="nott font-weight-semibold display-4">Want to Talk?</h2>
                        <h4 class="font-weight-light mb-4">Call us at <a href="tel:62614550039">+(62) 61 455 0039</a>
                        </h4>
                        <a href="mailto:info@multimaschemindo.com"
                            class="button button-rounded button-xlarge m-0 nott font-weight-semibold ls0 px-5">Email
                            Us</a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-12">
                    <img src="{!!asset('homepage/contact.png')!!}" alt="Logo Multi Mas Chemindo" class="img-responsive">
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
