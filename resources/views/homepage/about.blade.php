@extends('welcome')
@section('titleweb','About Us')
@section('activeabout','current')
@section('content')
<div class="section parallax dark bottommargin-lg" style="background-image:
    url('https://visme.co/blog/wp-content/uploads/2017/07/50-Beautiful-and-Minimalist-Presentation-Backgrounds-01.jpg');
    background-size: cover;" data-bottom-top="background-position:0px 0px; margin-top:0px;"
    data-top-bottom="background-position:0px -500px;">
    <div class="container clearfix">
        <div class="row align-content-between">
            <div class="col-lg-12 text-center" data-animate="bounceIn">
                <h1>About our company</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6 offset-3 text-center">
            <h3>Our history</h3>
            <p><b>PT. Multi Mas Chemindo</b> is established in the year of 1996 in Medan. The initial company activity
                is
                distributing various fertilizers to crude palm plantation in North Sumatra, Riau, and other area within
                Indonesia. As the years go, <b>PT. Multi Mas Chemindo</b> has grown tremendously to become one of the
                reliable
                fertilizers importer company to supply throughout plantations in all over Indonesia.</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-6">
            <h3>Our Vision</h3>
            <p>To be the most reliable fertilizer distributor Nationwide and globally.</p>
        </div>

        <div class="col-lg-6">
            <h3>Our Mission</h3>
            <p>To give our customers satisfactory price, quality and product availability,
                as well as keeping our commitment in business.
            </p>
        </div>
    </div>

</div>
@endsection
