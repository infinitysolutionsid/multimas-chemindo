@extends('welcome')
@section('titleweb','Our Fertilizers')
@section('activeabout','current')
@section('content')
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <!-- Posts
					============================================= -->
            <div id="posts" class="post-grid row grid-container gutter-30" data-layout="fitRows">
                <div class="entry col-lg-6 col-md-12 col-sm-12 align-content-center">
                    <img src="{!!asset('product/fertilizer/logo_pupuk_daun_sawit.png')!!}" class="img-responsive">
                </div>
                <div class="entry col-lg-12">
                    <h1>Pupuk Tunggal</h1>
                    <hr>
                </div>
                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <a href="{!!('product/fertilizer/pupuk ZA.png')!!}" data-lightbox="image"
                                class="img-responsive"><img src="{!!('product/fertilizer/pupuk ZA.png')!!}" alt=""></a>
                        </div>
                        <div class="entry-title">
                            <h3>PUPUK ZA</h3>
                            <h2>21% N <br> 24% S</h2>
                        </div>
                        <div class="">
                            <p>Pupuk ZA adalah pupuk yang bermanfaat sebagai penambah hara nitrogen dan belarang pada
                                tanaman. Dapat meningkatkan kualitas rasa, warna, dan kadar vitamin pada hasil panen
                                serta melindungi tanaman dari jamur penyakit. </p>
                        </div>
                    </div>
                </div>
                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <a href="{!!('product/fertilizer/pupuk za-kristal.png')!!}" data-lightbox="image"><img
                                    src="{!!('product/fertilizer/pupuk za-kristal.png')!!}" alt=""></a>
                        </div>
                        <div class="entry-title">
                            <h3>PUPUK ZA KRISTAL</h3>
                            <h2>21% N <br>24% S</h2>
                        </div>
                        <div class="">
                            <p>Pupuk ZA adalah pupuk yang bermanfaat sebagai penambah hara nitrogen dan belarang pada
                                tanaman. Dapat meningkatkan kualitas rasa, warna, dan kadar vitamin pada hasil panen.
                                Butiran kasar berbentuk kristal, cocok untuk tanaman seperti bawang merah dan lainnya.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <a href="{!!('product/fertilizer/pupuk RP.png')!!}" data-lightbox="image"><img
                                    src="{!!('product/fertilizer/pupuk RP.png')!!}" alt=""></a>
                        </div>
                        <div class="entry-title">
                            <h3>PUPUK RP</h3>
                            <h2>27% P<sub>2</sub>O<sub>5</sub></h2>
                        </div>
                        <div class="">
                            <p>Pupuk tunggal yang mempunyai manfaat untuk memacu pertumbuhan akar tanaman, khususnya
                                pada tahap awal pertumbuhan dan meningkatkan kualitas akar dan batang tanaman dan
                                mencegah tanaman terhindar dari serangan hama.</p>
                        </div>
                    </div>
                </div>
                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <a href="{!!('product/fertilizer/pupuk TSP.png')!!}" data-lightbox="image"><img
                                    src="{!!('product/fertilizer/pupuk TSP.png')!!}" alt=""></a>
                        </div>
                        <div class="entry-title">
                            <h3>PUPUK TSP</h3>
                            <h2>46% P<sub>2</sub>O<sub>5</sub></h2>
                        </div>
                        <div class="">
                            <p>Pupuk yang dapat membatu batang tanaman supaya lebih kuat agar tidak mudah roboh.
                                Meningkatkan daya tahan tanaman terhadap penyakit dan mempercepat proses pembungaan dan
                                pemasakan biji.</p>
                        </div>
                    </div>
                </div>
                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <a href="{!!('product/fertilizer/pupuk kcl-mop.png')!!}" data-lightbox="image"><img
                                    src="{!!('product/fertilizer/pupuk kcl-mop.png')!!}" alt=""></a>
                        </div>
                        <div class="entry-title">
                            <h3>PUPUK KCL/MOP</h3>
                            <h2>60% K<sub>2</sub>O</h2>
                        </div>
                        <div class="">
                            <p>Pupuk dengan unsur K2O yang bisa diberikan ke semua jenis tanah. Pupuk MOP/KCL juga
                                berfungsi untuk menigkatkan hasil panen, meningkatkan kualitas, dan mencegah
                                kekeringan pada tanaman.</p>
                        </div>
                    </div>
                </div>
                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <a href="{!!('product/fertilizer/pupuk kieserite.png')!!}" data-lightbox="image"><img
                                    src="{!!('product/fertilizer/pupuk kieserite.png')!!}" alt=""></a>
                        </div>
                        <div class="entry-title">
                            <h3>PUPUK KIESERITE</h3>
                            <h2>27% MgO</h2>
                        </div>
                        <div class="">
                            <p>Pupuk yang mampu meminimalisir racun untuk tanaman, meningkatkan kuantitas hasil panen,
                                dan memacu pertumbuhan tanaman di pembibitan awal</p>
                        </div>
                    </div>
                </div>
                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <a href="{!!('product/fertilizer/pupuk d-sp36.png')!!}" data-lightbox="image"><img
                                    src="{!!('product/fertilizer/pupuk d-sp36.png')!!}" alt=""></a>
                        </div>
                        <div class="entry-title">
                            <h3>PUPUK D-SP36</h3>
                            <h2>36% P<sub>2</sub>O<sub>5</sub></h2>
                        </div>
                        <div class="">
                            <p>Pupuk yang bermanfaat untuk memacu pembentukan bunga menjadi buah/biji. Dapat memperbaiki
                                sistem perakaran dan meningkatkan daya tahan tanaman terhadap penyakit </p>
                        </div>
                    </div>
                </div>
                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <a href="{!!('product/fertilizer/pupuk ammonium klorida.png')!!}" data-lightbox="image"><img
                                    src="{!!('product/fertilizer/pupuk ammonium klorida.png')!!}" alt=""></a>
                        </div>
                        <div class="entry-title">
                            <h3>PUPUK AMMONIUM KLORIDA</h3>
                            <h2>26% N</h2>
                        </div>
                        <div class="">
                            <p>Pupuk yang mengandung unsur hara Nitrogen yang dapat membantu tanaman menjadi lebih
                                hijau, mempercepat pertumbuhan tanaman serta mencegah tanaman menjadi kerdil.</p>
                        </div>
                    </div>
                </div>

                <div class="entry col-lg-12">
                    <h1>Pupuk Majemuk</h1>
                    <hr>
                </div>
                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <a href="{!!('product/fertilizer/pupuk amophos.png')!!}" data-lightbox="image"><img
                                    src="{!!('product/fertilizer/pupuk amophos.png')!!}" alt=""></a>
                        </div>
                        <div class="entry-title">
                            <h3>PUPUK AMOPHOS</h3>
                            <h2>16% N <br> 20% P<sub>2</sub>O<sub>5</sub></h2>
                        </div>
                        <div class="">
                            <p>Kandungan dalam pupuk amophos berfungsi untuk memacu hasil panen. Mampu meningkatkan
                                hasil panen agar lebih besar, berat dan manis. Juga mencegah kekeringan, resiko tanaman
                                stress dan mati.</p>
                        </div>
                    </div>
                </div>
                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <a href="{!!('product/fertilizer/pupuk DAP.png')!!}" data-lightbox="image"><img
                                    src="{!!('product/fertilizer/pupuk DAP.png')!!}" alt=""></a>
                        </div>
                        <div class="entry-title">
                            <h3>PUPUK DAP</h3>
                            <h2>18% N <br> 46% P<sub>2</sub>O<sub>5</sub></h2>
                        </div>
                        <div class="">
                            <p>Pupuk yang mudah larut dalam air ini dapat memacu pertumbuhan generatif tanaman dan
                                menambah kadar protein. Pupuk DAP juga cepat diserap tanaman.</p>
                        </div>
                    </div>
                </div>
                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <a href="{!!('product/fertilizer/pupuk KNO3.png')!!}" data-lightbox="image"><img
                                    src="{!!('product/fertilizer/pupuk KNO3.png')!!}" alt=""></a>
                        </div>
                        <div class="entry-title">
                            <h3>PUPUK KNO<sub>3</sub></h3>
                            <h2>13% N <br> 45% K<sub>2</sub>O</h2>
                        </div>
                        <div class="">
                            <p>Pupuk yang dapat meningkatkan kualitas aroma maupun rasa pada hasil panen. Berfungsi juga
                                untuk menjaga tanaman dari penyakit sehingga meningkatkan produksi tanaman</p>
                        </div>
                    </div>
                </div>
                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <a href="{!!('product/fertilizer/pupuk KNO3 merah.png')!!}" data-lightbox="image"><img
                                    src="{!!('product/fertilizer/pupuk KNO3 merah.png')!!}" alt=""></a>
                        </div>
                        <div class="entry-title">
                            <h3>PUPUK KNO<sub>3</sub> MERAH</h3>
                            <h2>15% N <br> 14% K<sub>2</sub>O</h2>
                        </div>
                        <div class="">
                            <p>Pupuk yang dapat menigkatkan kualitas bunga, buah, biji dan umbi. Juga mampumenghindari
                                serangan penyakit dan hama yang menyerang tanaman </p>
                        </div>
                    </div>
                </div>
                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <a href="{!!('product/fertilizer/pupuk MAP.png')!!}" data-lightbox="image"><img
                                    src="{!!('product/fertilizer/pupuk MAP.png')!!}" alt=""></a>
                        </div>
                        <div class="entry-title">
                            <h3>PUPUK MAP</h3>
                            <h2>10% N <br> 50% P<sub>2</sub>O<sub>5</sub></h2>
                        </div>
                        <div class="">
                            <p>Pupuk yang dapat merangsang pertumbuhan akar dan pembungaan serta mencegah bunga dan buah
                                rontok. Sangat mudah larut dalam air.</p>
                        </div>
                    </div>
                </div>
                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <a href="{!!('product/fertilizer/pupuk MKP.png')!!}" data-lightbox="image"><img
                                    src="{!!('product/fertilizer/pupuk MKP.png')!!}" alt=""></a>
                        </div>
                        <div class="entry-title">
                            <h3>PUPUK MKP</h3>
                            <h2>52% P<sub>2</sub>O<sub>5</sub> <br> 34% K<sub>2</sub>O</h2>
                        </div>
                        <div class="">
                            <p>Pupuk MKP bermanfaat untuk memacu produktifitas hasil panen. Serta membantu pembesaran
                                umbi dan mencegah hasil panen rontok</p>
                        </div>
                    </div>
                </div>
                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <a href="{!!('product/fertilizer/pupuk CAN.png')!!}" data-lightbox="image"><img
                                    src="{!!('product/fertilizer/pupuk CAN.png')!!}" alt=""></a>
                        </div>
                        <div class="entry-title">
                            <h3>PUPUK CAN</h3>
                            <h2>27% N <br> 12% CaO</h2>
                        </div>
                        <div class="">
                            <p>Merupakan pupuk yang bermanfaat untuk
                                menyuburkan tanah yang bermasalah dengan
                                keasaman, memperkeras buah dan mencegah buah pecah-pecah serta mencegah infeksi jamur
                                dan
                                penyakit busuk pangkal dan ujung buah</p>
                        </div>
                    </div>
                </div>
                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <a href="{!!('product/fertilizer/npk/pupuk NPK15.png')!!}" data-lightbox="image"><img
                                    src="{!!('product/fertilizer/npk/pupuk NPK15.png')!!}" alt=""></a>
                        </div>
                        <div class="entry-title">
                            <h3>PUPUK NPK 15-15-15</h3>
                            <h2>15% N <br> 15% P<sub>2</sub>O<sub>5</sub> <br> 15% K<sub>2</sub>O</h2>
                        </div>
                        <div class="">
                            <p>Merupakan pupuk yang bermanfaat untuk meningkatkan jumlah tunas baru, membuat warna daun
                                lebih hijau dan merangsang tanaman untuk tumbuh maksimal</p>
                        </div>
                    </div>
                </div>
                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <a href="{!!('product/fertilizer/npk/pupuk npk12-12-17.png')!!}" data-lightbox="image"><img
                                    src="{!!('product/fertilizer/npk/pupuk npk12-12-17.png')!!}" alt=""></a>
                        </div>
                        <div class="entry-title">
                            <h3>PUPUK NPK 12-12-17-2</h3>
                            <h2>12% N <br> 12% P<sub>2</sub>O<sub>5</sub> <br> 12% K<sub>2</sub>O <br> 2%
                                MgO</h2>
                        </div>
                        <div class="">
                            <p>Pupuk yang berfungsi mempercepat pertumbuhaan tanaman, menjadikan tanaman lebih hijau.
                                Berfungsi juga untuk memacu pembungaan, pembentukan dan pemasakan biji/buah.</p>
                        </div>
                    </div>
                </div>
                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <a href="{!!('product/fertilizer/npk/pupuk npk13-6-27.png')!!}" data-lightbox="image"><img
                                    src="{!!('product/fertilizer/npk/pupuk npk13-6-27.png')!!}" alt=""></a>
                        </div>
                        <div class="entry-title">
                            <h3>PUPUK NPK 13-6-27-4+B</h3>
                            <h2>13% N <br> 6% P<sub>2</sub>O<sub>5</sub> <br> 27% K<sub>2</sub>O <br> 4% MgO
                                <br>
                                0,65%
                                B<sub>2</sub>O<sub>3</sub></h2>
                        </div>
                        <div class="">
                            <p>Pupuk yang sesuai untuk meningkatkan kualitas hasil panen pada tanaman buah, dari segi
                                ukuran, rasa dan warna.</p>
                        </div>
                    </div>
                </div>
                <div class="entry col-lg-12">
                    <h1>Pupuk Mikro</h1>
                    <hr>
                </div>
                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <a href="{!!('product/fertilizer/pupuk copper sulphate.png')!!}" data-lightbox="image"><img
                                    src="{!!('product/fertilizer/pupuk copper sulphate.png')!!}" alt=""></a>
                        </div>
                        <div class="entry-title">
                            <h3>PUPUK COPPER SULPHATE</h3>
                            <h2>23% Cu</h2>
                        </div>
                        <div class="">
                            <p>Pupuk ini bermafaat untuk pembentukan klorofil pada tanaman sehingga daun tidak terlihat
                                kekuningan / terbakar. Juga berperan untuk menigkatkan protein dan karbohidrat pada
                                tanaman, </p>
                        </div>
                    </div>
                </div>
                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <a href="{!!('product/fertilizer/pupuk zinc sulphate.png')!!}" data-lightbox="image"><img
                                    src="{!!('product/fertilizer/pupuk zinc sulphate.png')!!}" alt=""></a>
                        </div>
                        <div class="entry-title">
                            <h3>PUPUK ZINC SULPHATE</h3>
                            <h2>20% Zn</h2>
                        </div>
                        <div class="">
                            <p>Pupuk zinc adalah pupuk hara mikro yang bermanfaat untuk menigkatkan toleransi tenaman
                                terhadap hama penyakit. Berfungsi juga untuk memacu perkembangan pertumbuhan tanaman
                                serta mengatasi defisiensi unsur zinc pada tanah gambut (masam)</p>
                        </div>
                    </div>
                </div>
                {{-- <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <a href="{!!('product/fertilizer/npk/pupuk npk13-8-27.png')!!}" data-lightbox="image"><img
                                    src="{!!('product/fertilizer/npk/pupuk npk13-8-27.png')!!}" alt=""></a>
                        </div>
                        <div class="entry-title">
                            <h3>PUPUK ZA</h3>
                            <h2></h2>
                        </div>
                        <div class="">
                            <p>Pupuk ZA adalah </p>
                        </div>
                    </div>
                </div>
                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <a href="{!!('product/fertilizer/npk/pupuk npk12-6-22.png')!!}" data-lightbox="image"><img
                                    src="{!!('product/fertilizer/npk/pupuk npk12-6-22.png')!!}" alt=""></a>
                        </div>
                        <div class="entry-title">
                            <h3>PUPUK ZA</h3>
                            <h2></h2>
                        </div>
                        <div class="">
                            <p>Pupuk ZA adalah </p>
                        </div>
                    </div>
                </div> --}}
            </div><!-- #posts end -->

            <!-- Pagination
					============================================= -->
            {{-- <ul class="pagination mt-5 pagination-circle justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#"><i class="icon-angle-left"></i></a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="icon-angle-right"></i></a></li>
            </ul> --}}

        </div>
    </div>
</section>
@endsection
