@extends('welcome')
@section('titleweb','Suppliers ')
@section('activesuppliers','current')
@section('content')
<div class="section parallax dark bottommargin-lg" style="background-image:
    url('https://res.cloudinary.com/https-www-infinitysolutions-co-id/image/upload/c_scale,w_1920/v1639388484/customer/multimaschemindo/lainlain/header-key-partners.jpg');
    background-size: cover; margin-top: 0px !important;"
    data-bottom-top="background-position:0px 0px; margin-top:0px;">
    <div class="container clearfix">
        <div class="row align-content-between">
            <div class="col-lg-12 text-center" data-animate="bounceIn">
                <h1>Suppliers, Key Partners and Customers</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-12 col-sm-12 text-center">
            <div class="heading-block center">
                <h4>Our Suppliers</h4>
            </div>
            <p>Our suppliers range from China to Chile, shipping you the best quality fertilizer from the best key
                players for each kind. The relationship we have with our suppliers are dynamically built on trust,
                professionalism and strong cooperation. </p>
        </div>
    </div>
</div>
<div class="container clearfix">


    <div class="heading-block center">
        <h4>Our Key Partners</h4>
    </div>

    <ul class="clients-grid grid-2 grid-sm-3 grid-md-6 mb-0">
        <li class="grid-item"><a><img src="{!!asset('homepage/keypartners/keypartner1.jpg')!!}"
                    alt="Multi Mas Chemindo Partner Logo"></a></li>
        <li class="grid-item"><a><img src="{!!asset('homepage/keypartners/keypartner2.jpg')!!}"
                    alt="Multi Mas Chemindo Partner Logo"></a></li>
        <li class="grid-item"><a><img src="{!!asset('homepage/keypartners/keypartner3.jpg')!!}"
                    alt="Multi Mas Chemindo Partner Logo"></a></li>
        <li class="grid-item"><a><img src="{!!asset('homepage/keypartners/keypartner4.jpg')!!}"
                    alt="Multi Mas Chemindo Partner Logo"></a></li>
        <li class="grid-item"><a><img src="{!!asset('homepage/keypartners/keypartner5.jpg')!!}"
                    alt="Multi Mas Chemindo Partner Logo"></a></li>
        <li class="grid-item"><a><img src="{!!asset('homepage/keypartners/keypartner6.jpg')!!}"
                    alt="Multi Mas Chemindo Partner Logo"></a></li>
        <li class="grid-item"><a><img src="{!!asset('homepage/keypartners/keypartner7.jpg')!!}"
                    alt="Multi Mas Chemindo Partner Logo"></a></li>
        <li class="grid-item"><a><img src="{!!asset('homepage/keypartners/keypartner8.jpg')!!}"
                    alt="Multi Mas Chemindo Partner Logo"></a></li>
        <li class="grid-item"><a><img src="{!!asset('homepage/keypartners/keypartner9.jpg')!!}"
                    alt="Multi Mas Chemindo Partner Logo"></a></li>
        <li class="grid-item">
            <a"><img src="{!!asset('homepage/keypartners/keypartner10.jpg')!!}" alt="Multi Mas Chemindo Partner Logo"></a>
        </li>
    </ul>

</div>
@endsection
