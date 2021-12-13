@extends('welcome')
@section('titleweb','Warehouse')
@section('activeabout','current')
@section('content')
<div class="container-fluid">
    <div class="row align-items-center">
        <div class="col-lg-6 offset-3 text-center mt-5">
            <div class="heading-block center">
                <h4>Our Warehouse</h4>
            </div>
            <p>Our warehouses are the homes for our fertilizers before being distributed to our merchants. All of our
                warehouses are managed by the best leaders in the field, resulting in an organized and well-maintained
                space with an efficient work process despite a big employee number.
                <br><br>
                The warehouse team always gives their best performance in order to achieve a smooth and highly
                productive storing in and shipping out process.
                <br><br>
                Currently, our warehouses are spread in <b>Belawan</b>, <b>Dumai</b>, <b>Perawang</b>, <b>Palembang</b>,
                <b>Panjang</b>,
                <b>Gresik</b> and
                <b>Pontianak</b> for a closer shipment distance.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <img src="{!!asset('homepage/warehouse.gif')!!}" alt="Multimaschemindo warehouse">
            {{-- <div id="google-map4" style="height: 250px; margin-bottom: 20px;" class="gmap" data-latitude="-25.274399"
                data-longitude="133.775131" data-zoom="3"
                data-markers='[{latitude:-37.813629, longitude:144.963058,html: "Melbourne, Australia"},{latitude:-33.868820, longitude:151.209290,html: "Sydney, Australia"}]'
                data-icon='{image: "one-page/images/icons/map-icon-red.png",iconsize: [32, 32],iconanchor: [14,44]}'> --}}
        </div>

    </div>
</div>
</div>
@endsection
