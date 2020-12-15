<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Weedding-Invitation</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="{{asset('css/pogo-slider.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- loader -->
    <div id="preloader">
        <div class="preloader pulse">
            <i class="fa fa-heartbeat" aria-hidden="true"></i>
        </div>
    </div>
    <!-- end loader -->


    <!-- Start header -->
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="images/logo.jpg" alt="image"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd"
                    aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav mx-auto">
                        <li><a class="nav-link active" href="#home">Beranda</a></li>
                        <li><a class="nav-link" href="#about">Tentang Kita</a></li>
                        <li><a class="nav-link" href="#story">Cerita KIta</a></li>
                        <li><a class="nav-link" href="#events">Acara</a></li>
                        <li><a class="nav-link" href="#contact">Daftar Kehadiran</a></li>
                        <li><a class="nav-link" href="#gallery">Galeri</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start About us -->
    <div id="about" class="about-box">
        <div class="about-a1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-box">
                            <h2>Helmi Alfian <span>&</span> Yuyun Novitasari</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="row align-items-center about-main-info">
                            <div class="col-lg-8 col-md-6 col-sm-12">
                                <h2> Tentang <span>Helmi Alfian, S.ST.Pel</span></h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni nihil nam blanditiis
                                    fuga minus veniam soluta vitae nisi eius. Aperiam laboriosam voluptatum iure
                                    blanditiis dolor accusamus porro saepe repellendus neque! </p>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="about-img">
                                    <img class="img-fluid rounded" src="{{asset('uploads/1.jpeg')}}" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center about-main-info">
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="about-img">
                                    <img class="img-fluid rounded" src="{{asset('uploads/2.jpeg')}}" alt="" />
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6 col-sm-12">
                                <h2>Tentang <span>Yuyun Novitasari, S.Pd</span></h2>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae molestias
                                    pariatur ipsa hic suscipit minus. Provident sit corporis debitis tempore
                                    accusantium, veniam alias fugit vitae inventore pariatur, facere odit ullam! </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About us -->

    <!-- Start Story -->
    <div id="story" class="story-box main-timeline-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Cerita Kita</h2>
                    </div>
                </div>
            </div>
            <div class="row timeline-element separline">
                <div class="timeline-date-panel col-xs-12 col-md-6  align-left">
                    <div class="time-line-date-content">
                        <p class="mbr-timeline-date mbr-fonts-style display-font">
                            1 March 2018
                        </p>
                    </div>
                </div>
                <span class="iconBackground"></span>
                <div class="col-xs-12 col-md-6 align-left">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-font">Pertemuan Pertama</h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-7">
                            We met at the wedding of our close friends and immediately found a common language, so a
                            year later our first date happened.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row timeline-element reverse separline">
                <div class="timeline-date-panel col-xs-12 col-md-6  align-left">
                    <div class="time-line-date-content">
                        <p class="mbr-timeline-date mbr-fonts-style display-font">
                            2 April 2018
                        </p>
                    </div>
                </div>
                <span class="iconBackground"></span>
                <div class="col-xs-12 col-md-6 align-right">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-font">Kencan Pertama</h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-7">
                            We met at the wedding of our close friends and immediately found a common language, so a
                            year later our first date happened.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row timeline-element separline">
                <div class="timeline-date-panel col-xs-12 col-md-6  align-left">
                    <div class="time-line-date-content">
                        <p class="mbr-timeline-date mbr-fonts-style display-font">
                            1 May 2020
                        </p>
                    </div>
                </div>
                <span class="iconBackground"></span>
                <div class="col-xs-12 col-md-6 align-left">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-font">Lamaran</h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-7">
                            Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum, suscipit sit amet auctor
                            quis, vehicula ut leo. Maecenas felis nulla, tincidunt ac blandit a, consectetur quis elit.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row timeline-element reverse separline">
                <div class="timeline-date-panel col-xs-12 col-md-6  align-left">
                    <div class="time-line-date-content">
                        <p class="mbr-timeline-date mbr-fonts-style display-font">
                            18 Descember 2020
                        </p>
                    </div>
                </div>
                <span class="iconBackground"></span>
                <div class="col-xs-12 col-md-6 align-right">
                    <div class="timeline-text-content">
                        <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-font">Pernikahan</h4>
                        <p class="mbr-timeline-text mbr-fonts-style display-7">
                            Proin tempus felis quis justo pretium interdum. Praesent sollicitudin lectus eu mattis
                            egestas. Praesent luctus magna at dignissim placerat.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Story -->

    <!-- Start Events -->
    <div id="events" class="events-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Acara</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($event as $item)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="event-inner">
                        <div class="event-img">
                            <img class="img-fluid" src="{{asset($item->image)}}" alt="" />
                        </div>
                        <h2>{{$item->tanggal}}</h2>
                        <h2><br><strong>{{$item->waktu}}</strong></b></h2>
                        <h2><strong>{{$item->nama_acara}}</strong></h2>
                        <p>{{$item->deskripsi}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Events -->
    <!-- Start Contact -->
    <div id="contact" class="contact-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Daftar kehadiran</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="contact-block">
                        <form id="contactForm" class="form-group" method="POST" action="{{route('send.message')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="nama"
                                            placeholder="Masukkan Nama Anda" required data-error="Masukkan Nama Anda">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Masukkan Email Anda" id="email"
                                            class="form-control" name="email" required data-error="Masukkan Email Anda">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Masukkan Alamat Anda" id="email"
                                            class="form-control" name="alamat" required
                                            data-error="Masukkan Alamat Anda">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="number" placeholder="Masukkan Nomer Anda" id="email"
                                            class="form-control" name="no_hp" required data-error="Masukkan No Anda">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select class="custom-select d-block form-control" id="event" required
                                            data-error="Please select an item in the list." name="acara_hadir">
                                            <option disabled selected>Saya akan Menghadiri*</option>
                                            @foreach ($event as $item)
                                            <option value="Semua Acara">Semua Acara</option>
                                            <option value="{{$item->nama_acara}}">{{$item->nama_acara}}</option>
                                            @endforeach
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message"
                                            placeholder="Pesan Anda untuk pengantin" name="pesan" rows="30"
                                            data-error="Pesan Anda untuk pengantin" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
                                        <button class="btn btn-common" id="submit" type="submit">Kirim</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->

    <!-- Start Gallery -->
    <div id="gallery" class="gallery-box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Galeri</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <ul class="popup-gallery clearfix">
                    @foreach ($gallery as $item)
                    <li>
                        <a href="{{asset($item->photo)}}">
                            <img class="img-fluid" src="{{asset($item->photo)}}" alt="single image">
                            <span class="overlay"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!-- End Gallery -->
    <section class="map">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box">
                        <h2>Lokasi</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 my-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31641.46921221277!2d110.95354231720285!3d-7.554944151289999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1919258b0ddd%3A0x1712d2d9bbbf8788!2sKaliboto%2C%20Mojogedang%2C%20Kabupaten%20Karanganyar%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1608044968381!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Footer -->
    <footer class="footer-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="footer-company-name">All Rights Reserved. &copy; 2020 Develop By Muhamad Zainal
                        Arifin</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- ALL JS FILES -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/jquery.pogo-slider.min.js')}}"></script>
    <!-- <script src="js/slider-index.js"></script> -->
    <script src="{{asset('js/smoothscroll.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
</body>

</html>
