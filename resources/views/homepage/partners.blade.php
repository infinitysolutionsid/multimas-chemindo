@extends('welcome')
@section('titleweb','Suppliers ')
@section('activesuppliers','current')
@section('content')
<div class="section parallax dark bottommargin-lg" style="background-image:
    url('https://lh3.googleusercontent.com/XpOgKIwa5xclaCZ5bjqIruhKvBUQE_to9uVY9o5A2mRHFw00mvYl287VLCZ4Vus=s2600');
    background-size: cover;" data-bottom-top="background-position:0px 0px; margin-top:0px;"
    data-top-bottom="background-position:0px -500px;">
    <div class="container clearfix">
        <div class="row align-content-between">
            <div class="col-lg-12 text-center" data-animate="bounceIn">
                <h1>Suppliers, Key Partners and Customers</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6 offset-3 text-center">
            <h3>Our Suppliers</h3>
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
                    alt="Key Partners Logo"></a></li>
        <li class="grid-item"><a><img src="{!!asset('homepage/keypartners/keypartner2.jpg')!!}"
                    alt="Key Partners Logo"></a></li>
        <li class="grid-item"><a><img src="{!!asset('homepage/keypartners/keypartner3.jpg')!!}"
                    alt="Key Partners Logo"></a></li>
        <li class="grid-item"><a><img src="{!!asset('homepage/keypartners/keypartner4.jpg')!!}"
                    alt="Key Partners Logo"></a></li>
        <li class="grid-item"><a><img src="{!!asset('homepage/keypartners/keypartner5.jpg')!!}"
                    alt="Key Partners Logo"></a></li>
        <li class="grid-item"><a><img src="{!!asset('homepage/keypartners/keypartner6.jpg')!!}"
                    alt="Key Partners Logo"></a></li>
        <li class="grid-item"><a><img src="{!!asset('homepage/keypartners/keypartner7.jpg')!!}"
                    alt="Key Partners Logo"></a></li>
        <li class="grid-item"><a><img src="{!!asset('homepage/keypartners/keypartner8.jpg')!!}"
                    alt="Key Partners Logo"></a></li>
        <li class="grid-item"><a><img src="{!!asset('homepage/keypartners/keypartner9.jpg')!!}"
                    alt="Key Partners Logo"></a></li>
        <li class="grid-item">
            <a"><img src="{!!asset('homepage/keypartners/keypartner10.jpg')!!}" alt="Key Partners Logo"></a>
        </li>
    </ul>

</div>
@endsection
