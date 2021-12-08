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
                <h1>Our Suppliers</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6 offset-3 text-center">
            <h3>Our Suppliers</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A ducimus incidunt quia veniam voluptatibus
                blanditiis quos animi repellat? Vitae voluptatibus quos ipsa laborum in quasi similique officia eaque,
                fugiat sapiente.</p>
        </div>
    </div>
    <hr>
    <div class="row align-items-md-center">
        <div class="col-md-4 col-sm-6 mb-3 text-center">
            <div class="flip-card top-to-bottom">
                <div class="flip-card-front dark" data-height-xl="200"
                    style="background-image:
                    url('https://www.xyzanews.com/wp-content/uploads/2017/11/the-great-wall-2190047_1920-e1590704165934.jpg');">
                    <div class="flip-card-inner">
                        <div class="card bg-transparent border-0">
                            <div class="card-body">
                                <h1 class="card-title mb-0">China</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back" data-height-xl="200"
                    style="background-image:
                                        url('https://st2.depositphotos.com/4451541/7452/v/950/depositphotos_74528677-stock-illustration-watercolor-bamboo-branches-isolated-on.jpg');">
                    <div class="flip-card-inner">
                        <p class="mb-2 text-white">Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Alias cum repellat velit.</p>
                        <button type="button" class="btn btn-outline-light mt-2">View
                            Details</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-3 text-center">
            <div class="flip-card top-to-bottom">
                <div class="flip-card-front dark" data-height-xl="200"
                    style="background-image:
                    url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxW9wjNQCy2WBj7xSWpXIOo5och2g-C-tQNg&usqp=CAU');">
                    <div class="flip-card-inner">
                        <div class="card bg-transparent border-0">
                            <div class="card-body">
                                <h1 class="card-title mb-0">Egypt</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back" data-height-xl="200"
                    style="background-image:
                                        url('https://nitrocdn.com/AfoZeCLhBrVAIMdqdGEbGrQJJOrjKBeE/assets/static/optimized/rev-a634bbe/wp-content/uploads/2020/08/The-Great-Pyramid-of-Giza-1024x768.png');">
                    <div class="flip-card-inner">
                        <p class="mb-2 text-white">Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Alias cum repellat velit.</p>
                        <button type="button" class="btn btn-outline-light mt-2">View
                            Details</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-3 text-center">
            <div class="flip-card top-to-bottom">
                <div class="flip-card-front dark" data-height-xl="200"
                    style="background-image:
                    url('https://expatriant.com/wp-content/uploads/2020/04/alexander-smagin-MEWRrCmEiGc-unsplash.jpg');">
                    <div class="flip-card-inner">
                        <div class="card bg-transparent border-0">
                            <div class="card-body">
                                <h1 class="card-title mb-0">Russia</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flip-card-back" data-height-xl="200" style="background-image:
                                        url('https://static.themoscowtimes.com/image/1360/9e/krasnodar-russia.jpg');">
                    <div class="flip-card-inner">
                        <p class="mb-2 text-white">Lorem ipsum, dolor sit amet consectetur
                            adipisicing elit. Alias cum repellat velit.</p>
                        <button type="button" class="btn btn-outline-light mt-2">View
                            Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
