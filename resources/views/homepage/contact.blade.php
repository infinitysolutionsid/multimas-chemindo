@extends('welcome')
@section('titleweb','Contact Us')
@section('activecontact','current')
@section('content')
<div class="section parallax dark bottommargin-lg" style="background-image:
    url('https://www.vtldesign.hu/wp-content/uploads/2014/07/web-development-background.jpg');
    background-size: cover;" data-bottom-top="background-position:0px 0px; margin-top:0px;"
    data-top-bottom="background-position:0px -500px;">
    <div class="container clearfix">
        <div class="row align-content-between">
            <div class="col-lg-12 text-center" data-animate="bounceIn">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row gutter-40 col-mb-80 my-5">
        <!-- Postcontent
						============================================= -->
        <div class="postcontent col-lg-8">
            @if (session('msg'))
            <div class="alert alert-success">
                {{ session('msg') }}
            </div>
            @endif
            <h3>Send us an Email</h3>


            <form class="mb-0" action="/send-message" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-4 form-group">
                        <label>Name <small>*</small></label>
                        <input type="text" name="name" value="" class="sm-form-control required" />
                    </div>

                    <div class="col-md-4 form-group">
                        <label>Email <small>*</small></label>
                        <input type="email" name="email" value="" class="required email sm-form-control" />
                    </div>

                    <div class="col-md-4 form-group">
                        <label>Phone</label>
                        <input type="text" name="phone" value="" class="sm-form-control" />
                    </div>

                    <div class="w-100"></div>

                    <div class="col-md-8 form-group">
                        <label>Subject <small>*</small></label>
                        <input type="text" name="subject" value="" class="required sm-form-control" />
                    </div>

                    <div class="col-md-4 form-group">
                        <label>Services</label>
                        <select name="services" class="sm-form-control custom-select">
                            <option value="">-- Select One --</option>
                            <option value="Fertilizers">Fertilizers</option>
                            <option value="Palm Oil">Palm Oil</option>
                        </select>
                    </div>

                    <div class="w-100"></div>

                    <div class="col-12 form-group">
                        <label>Message <small>*</small></label>
                        <textarea class="required sm-form-control" name="message" rows="6" cols="30"></textarea>
                    </div>
                    <div class="col-12 form-group">
                        {!! NoCaptcha::renderJs() !!}
                        {!! NoCaptcha::display() !!}
                        @error('g-recaptcha-response')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-12 form-group">
                        <button class="button button-3d m-0" type="submit" value="submit">Send Message</button>
                    </div>
                </div>


            </form>

        </div><!-- .postcontent end -->

        <!-- Sidebar
						============================================= -->
        <div class="sidebar col-lg-4">

            <address>
                <strong>Headquarters:</strong><br>
                Jl Imam Bonjol No 40<br>
                Kec. Medan Maimun, Kota Medan,<br>
                Sumatera Utara 20212 <br>
            </address>
            <abbr title="Phone Number"><strong>Phone:</strong></abbr> (061) 455 0039<br>
            <abbr title="Email Address"><strong>Email:</strong></abbr> info@multimaschemindo.com

            <div class="widget border-0 pt-0">

                <a href="#" class="social-icon si-small si-dark si-facebook">
                    <i class="icon-facebook"></i>
                    <i class="icon-facebook"></i>
                </a>

                <a href="#" class="social-icon si-small si-dark si-instagram">
                    <i class="icon-instagram"></i>
                    <i class="icon-instagram"></i>
                </a>
                <a href="#" class="social-icon si-small si-dark si-twitter">
                    <i class="icon-twitter"></i>
                    <i class="icon-twitter"></i>
                </a>

            </div>

        </div><!-- .sidebar end -->
    </div>

</div>
@endsection
