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
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A ducimus incidunt quia veniam voluptatibus
                blanditiis quos animi repellat? Vitae voluptatibus quos ipsa laborum in quasi similique officia eaque,
                fugiat sapiente.</p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-6">
            <h3>Our Vision</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa repellendus adipisci laborum placeat
                delectus labore cupiditate deserunt minus numquam consequatur esse, hic at earum illo animi eaque et,
                dolorem quo qui eos? Quam rerum possimus maxime veniam aut ratione eveniet aliquid cumque aspernatur
                ipsum libero quaerat, nam. Ad, sunt, error!</p>
        </div>

        <div class="col-lg-6">
            <h3>Our Mission</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa repellendus adipisci laborum placeat
                delectus labore cupiditate deserunt minus numquam consequatur esse, hic at earum illo animi eaque et,
                dolorem quo qui eos? Quam rerum possimus maxime veniam aut ratione eveniet aliquid cumque aspernatur
                ipsum libero quaerat, nam. Ad, sunt, error!</p>
        </div>
    </div>

</div>
@endsection
