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

            <h3>Send us an Email</h3>

            <div class="form-widget">

                <div class="form-result"></div>

                <form class="mb-0" id="template-contactform" name="template-contactform" action="include/form.php"
                    method="post">

                    <div class="form-process">
                        <div class="css3-spinner">
                            <div class="css3-spinner-scaler"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 form-group">
                            <label for="template-contactform-name">Name <small>*</small></label>
                            <input type="text" id="template-contactform-name" name="template-contactform-name" value=""
                                class="sm-form-control required" />
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="template-contactform-email">Email <small>*</small></label>
                            <input type="email" id="template-contactform-email" name="template-contactform-email"
                                value="" class="required email sm-form-control" />
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="template-contactform-phone">Phone</label>
                            <input type="text" id="template-contactform-phone" name="template-contactform-phone"
                                value="" class="sm-form-control" />
                        </div>

                        <div class="w-100"></div>

                        <div class="col-md-8 form-group">
                            <label for="template-contactform-subject">Subject <small>*</small></label>
                            <input type="text" id="template-contactform-subject" name="subject" value=""
                                class="required sm-form-control" />
                        </div>

                        <div class="col-md-4 form-group">
                            <label for="template-contactform-service">Services</label>
                            <select id="template-contactform-service" name="template-contactform-service"
                                class="sm-form-control custom-select">
                                <option value="">-- Select One --</option>
                                <option value="Fertilizers">Fertilizers</option>
                                <option value="Palm Oil">Palm Oil</option>
                            </select>
                        </div>

                        <div class="w-100"></div>

                        <div class="col-12 form-group">
                            <label for="template-contactform-message">Message <small>*</small></label>
                            <textarea class="required sm-form-control" id="template-contactform-message"
                                name="template-contactform-message" rows="6" cols="30"></textarea>
                        </div>

                        <div class="col-12 form-group d-none">
                            <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck"
                                value="" class="sm-form-control" />
                        </div>

                        <div class="col-12 form-group">
                            <button class="button button-3d m-0" type="submit" id="template-contactform-submit"
                                name="template-contactform-submit" value="submit">Send Message</button>
                        </div>
                    </div>

                    <input type="hidden" name="prefix" value="template-contactform-">

                </form>
            </div>

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
