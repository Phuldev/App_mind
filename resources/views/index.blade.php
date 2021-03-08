@extends('layout.master')
@section('title','home')
@section('content')
{{-- Home page  --}}
<!-- slider_banner  -->
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="../image/programer.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="animate__animated animate__slideInLeft  animate__delay-1s animate__repeat-1">IT
                    Trainings</h5>
                <p class="animate__animated animate__zoomInLeft  animate__delay-1s animate__repeat-1">Lorem
                    ipsum dolor sit amet consectetur adipisicing elit. Qui, eligendi.</p>
                <p class="animate__animated animate__zoomIn  animate__delay-2s animate__repeat-1"><a
                        href="#">More Info</a></p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="../image/programer.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="animate__animated animate__slideInRight  animate__delay-1s animate__repeat-1">Sales
                    and Marketing Training</h5>
                <p class="animate__animated animate__zoomInRight  animate__delay-1s animate__repeat-1">Lorem
                    ipsum dolor sit amet consectetur, adipisicing elit. Beatae, eum!</p>
                <p class="animate__animated animate__zoomIn  animate__delay-2s animate__repeat-1"><a
                        href="#">More Info</a></p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="../image/business.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="animate__animated animate__flipInY  animate__delay-1s animate__repeat-1">Human
                    Resource Placement</h5>
                <p class="animate__animated animate__flipInX  animate__delay-1s animate__repeat-1">Lorem ipsum
                    dolor sit amet consectetur adipisicing elit. Quas, ipsa.</p>
                <p class="animate__animated animate__zoomInUp  animate__delay-2s animate__repeat-1"><a
                        href="#">More Info</a></p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


    <!-- services header  -->
    <div class="demo_our">
        <div class="our_ser_demo">
            <h3 data-aos="zoom-in-up" data-aos-duration="1000">Our <br><span data-aos="zoom-in-up"
                    data-aos-duration="2000">services</span> </h3>
        </div>
    </div>
    </section>
    <!-- services header  -->
    <!-- our services  -->
    <section id="services">
        <div>
            <div class="inner-width">
                <br>
                <div class="services-container">

                    <!-- card  -->
                    <div class="card services-box" style="width:100%;">
                        <div class="services-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <div class="services-title">
                            <h5 class="card-title">IT Trainings</h5>
                        </div>
                        <ul class="services-desc">
                            <li class="list-group-item" data-aos="zoom-in-up" data-aos-duration="1000">Mobile App
                                Development </li>
                            <li class="list-group-item" data-aos="zoom-in-up" data-aos-duration="1000">Web App
                                Development </li>
                            <li class="list-group-item" data-aos="zoom-in-up" data-aos-duration="1000">Desktop Software
                                Development</li>
                            <li class="list-group-item" data-aos="zoom-in-up" data-aos-duration="1000">System / Network
                                Administration</li>
                        </ul>
                    </div>
                    <!-- card  -->
                    <!-- card  -->
                    <div class="card services-box" style="width:100%;">
                        <div class="services-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <div class="services-title">
                            <h5 class="card-title">Civil Engineering Software Training</h5>
                        </div>
                        <ul class="services-desc">
                            <li class="list-group-item" data-aos="zoom-in-up" data-aos-duration="1000">Autodesk
                                AutoCAD,Civil 3D</li>
                            <li class="list-group-item" data-aos="zoom-in-up" data-aos-duration="1000">ASWDTM,ArcGIS
                            </li>
                            <li class="list-group-item" data-aos="zoom-in-up" data-aos-duration="1000">ETABS, SAP, SAFE
                            </li>
                        </ul>
                    </div>
                    <!-- card  -->
                    <!-- card  -->
                    <div class="card services-box" style="width:100%;">
                        <div class="services-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div class="services-title">
                            <h5 class="card-title">Sales and Marketing Training</h5>
                        </div>
                        <ul class="services-desc">
                            <li class="list-group-item" data-aos="zoom-in-up" data-aos-duration="1000">Hoffman Training
                            </li>
                            <li class="list-group-item" data-aos="zoom-in-up" data-aos-duration="1000">Selling With
                                Stories</li>
                            <li class="list-group-item" data-aos="zoom-in-up" data-aos-duration="1000">Driving to Close
                            </li>
                            <li class="list-group-item" data-aos="zoom-in-up" data-aos-duration="1000">Sales
                                Presentation Training</li>
                        </ul>
                    </div>
                    <!-- card  -->
                    <!-- card  -->
                    <div class="card services-box" style="width:100%;">
                        <div class="services-icon">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <div class="services-title">
                            <h5 class="card-title">IT Consulting</h5>
                        </div>
                        <ul class="services-desc">
                            <li class="list-group-item" data-aos="zoom-in-up" data-aos-duration="1000">Mobile
                                Application Development</li>
                            <li class="list-group-item" data-aos="zoom-in-up" data-aos-duration="1000">Website
                                Developemt</li>
                            <li class="list-group-item" data-aos="zoom-in-up" data-aos-duration="1000">Desktop Software
                                Development</li>
                        </ul>
                    </div>
                    <!-- card  -->
                    <!-- card  -->
                    <div class="card services-box" style="width:100%;">
                        <div class="services-icon">
                            <i class="fas fa-sliders-h"></i>
                        </div>
                        <div class="services-title">
                            <h5 class="card-title">Civil Engineering Consulting</h5>
                        </div>
                        <ul class="services-desc">
                            <li class="list-group-item" data-aos="zoom-in-up" data-aos-duration="1000">Engineering
                                Projects</li>
                            <li class="list-group-item" data-aos="zoom-in-up" data-aos-duration="1000">Architectural
                                Projects</li>
                            <li class="list-group-item" data-aos="zoom-in-up" data-aos-duration="1000">Planning and
                                Management</li>
                        </ul>
                    </div>
                    <!-- card  -->
                    <!-- card  -->
                    <div class="card services-box" style="width:100%;">
                        <div class="services-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div class="services-title">
                            <h5 class="card-title">Human Resource Placement</h5>
                        </div>
                        <ul class="services-desc">
                            <li class="list-group-item" data-aos="zoom-in-up" data-aos-duration="1000">Internship
                                Placement</li>
                            <li class="list-group-item" data-aos="zoom-in-up" data-aos-duration="1000">Job placement
                            </li>
                        </ul>
                    </div>
                    <!-- card  -->
                </div>
            </div>
        </div>
    </section>
    <!-- our services  -->
    <!-- Idu header  -->
    <section class="services_idu-section">

        <div class="services_idu" data-aos="fade-in" data-aos-duration="1000">
            <h1 data-aos="zoom-in-up" data-aos-duration="1000">Services&nbsp;<span>Industris</span> </h1>
    </section>
    <!-- Idu header  -->

    <!-- service idu  -->
    <!-- card  -->
    <div class="container" id="card">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width:100%;">
                    <div class="icon_services">
                        <i class="fas fa-dumpster"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Retail & eCommerce</h5>
                        <br>
                        <p class="card-text">We build powerful custom e-commerce development solutions including e-carts
                            & marketplaces,social <span><a href="" style="text-decoration: none;">See more</a></span>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width:100%;">
                    <div class="icon_services">
                        <i class="fas fa-hospital-symbol"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Hospital & Healthcare</h5>
                        <br>
                        <p class="card-text"> We provide complete software solutions to the healthcare industry. Our IT
                            solutions effectively improve internal <span><a href="" style="text-decoration: none;">See
                                    more</a></span></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width:100%;">
                    <div class="icon_services">
                        <i class="fas fa-suitcase-rolling"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Travel & Tourism</h5>
                        <br>

                        <p class="card-text">Our agile Software solutions for the travel industry improve your tour &
                            travel business’ RoI and lessen <span><a href="" style="text-decoration: none;">See
                                    more</a></span></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- card  -->

    <!-- why us  -->
    <section class="why-main">
        <section class="services_why-section">

            <div class="services_why" data-aos="fade-in" data-aos-duration="1000">
                <h1 data-aos="zoom-in-up" data-aos-duration="1000">why&nbsp;<span>us ?</span> </h1>
                <div class="text">
                    <li><span>web design</span></li>
                    <li><span>web design</span></li>
                    <li><span>web design</span></li>
                    
                </div>
                <div class="text-1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio hic nesciunt nemo.</p>
                </div>
                {{-- style why-readMore  --}}
                <style>
                    .why-readMore
                    {
                        font-size:25px;
                    }
                    .why-readMore a
                    { 
                        list-style: none;
                        text-decoration: none;
                        color:#ffffff;
                        border:1px solid #fff;
                    }
                    .why-readMore a span
                    { 
                        font-size:40px;
                        color:yellow;
                        background-color: #0a6721;
                    }
                </style>
                {{-- style why-readMore  --}}
                <div class="text-center text-uppercase why-readMore">
                    
                        <a href="#">read<span>more</span></a>
                    
                </div>
        </section>
    </section>
    <!-- why us  -->
    <!-- about us  -->
    <section id="about">
        <div class="wrapper"  data-aos="zoom-in-up" data-aos-duration="1000">
            <div class="sectioN">
                <div class="left-sectioN">
                    <div class="conTent">
                        <div class="tiTle">
                            <h2 style="color:hsl(135, 2%, 40%);">About Us</h2>
                        </div>
                        <p>Founded in 2019, Mind Risers Consortium Pvt. Ltd is raduates and to be a bridge between the
                            skilled graduates and to the business that seek them. We set out to be a leading company to
                            develop local technical expertise to an internationally accepted level. We work in the
                            principal that community organizations, NGO’s, public sector and private sector enterprises
                            are essential partners in the development process. Our core strategy is to strengthen these
                            enterprises by partnering with them to provide trained manpower. In summary, we help the
                            caterpillars to transform them into butterflies.
                            To sum up, Mind Risers is a fine IT courses as well as gets ready to freshers to adroitly
                            deal with the genuine workplace. We are devoted and submitted towards providing:</p>
                        <div class="button" data-aos="zoom-in-up" data-aos-duration="1500">
                            <a href="#contAct">Read more</a>
                        </div>
                        <div class="sociAl" data-aos="zoom-in-up" data-aos-duration="2000">
                            <a href="https://www.facebook.com/MindRisersConsortium"><i
                                    class="fab fa-facebook-f"></i></a>
                            <!-- <a href="#"><i class="fab fa-twitter"></i></a> -->
                            <a href="https://www.instagram.com/tech.mindrisers/"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.linkedin.com/company/mindrisers/?viewAsMember=true"><i
                                    class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="image-sectioN">
                    <img src="../image/2.jpeg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- about us  -->

    <!-- Testimonial -->
    <section class="our-team container">
        <div class="container headings text-center text-capitalize">

            <h1 class="text-center font-weight-bold" style="color:hsl(135, 2%, 40%);" data-aos="zoom-in-up"
                data-aos-duration="1000">What people say about <br> our Services</h1>
        </div>
        <br>
        <div id="demo" class="carousel slide" data-aos="slide-left" data-aos-duration="1000" data-ride="carousel">

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">

                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="box">
                                <a href="#"><img src="../image/dev.jpeg" class="img-fluid mx-auto d-block"
                                        alt=""></a>
                                <p class="m-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum impedit
                                    laborum fuga?</p>
                                <h1>phuldev mandal</h1>
                                <h2 class="text-white">full stack</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="box">
                                <a href="#"><img src="../image/dev.jpeg" class="img-fluid mx-auto d-block"
                                        alt=""></a>
                                <p class="m-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum impedit
                                    laborum fuga?</p>
                                <h1>Prashanna Chudal</h1>
                                <h2 class="text-white">full stack</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="box">
                                <a href="#"><img src="../image/dev.jpeg" class="img-fluid mx-auto d-block"
                                        alt=""></a>
                                <p class="m-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum impedit
                                    laborum fuga?</p>
                                <h1>sandesh tamang</h1>
                                <h2 class="text-white">full stack</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev text-success" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </section>
   
    <!-- contact -->
    <section class="contacT" id="contAct">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#19e273" fill-opacity="1"
                d="M0,160L30,149.3C60,139,120,117,180,101.3C240,85,300,75,360,101.3C420,128,480,192,540,186.7C600,181,660,107,720,74.7C780,43,840,53,900,96C960,139,1020,213,1080,250.7C1140,288,1200,288,1260,277.3C1320,267,1380,245,1410,234.7L1440,224L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z">
            </path>
        </svg>
        <div class="contEnt">
            <h2>Contact Us</h2>

            <br>
        </div>
        <div class="contAiner">
            <div class="contactInfo">
                <img src="../image/email.png" alt="">
            </div>

            <div class="contactForm" data-aos="zoom-in-up" data-aos-duration="4000">
                {{-- php code  --}}
                @if(Session::has('message_sent'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('message_sent')}}
                </div>
                @endif
                 {{-- php code  --}}
                <form action="{{route('contact.send')}}" method="POST" enctype="multipart/form-data"> {{--php code--}}
                    @csrf
                    <h2>Send Message</h2>

                    <div class="inputBOx">
                        <input type="text" name="name" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBOx">
                        <input type="phone" name="mobile" required="required">
                        <span>Mobile No.</span>
                    </div>
                    <div class="inputBOx">
                        <input type="email" name="email" required="required">
                        <span>E-mail</span>
                    </div>
                    <div class="inputBOx">
                        <textarea name="msg" required="required"></textarea>
                        <span>Type your Message...</span>
                    </div>
                    <div class="inputBOx">
                        <input type="submit" class="form-control" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>

    </section>

    <!-- contact -->

    <!-- footer -->
    <footer>
        <div class="footer" id="footer">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-lg-5 col-xs-12" data-aos="zoom-in-up" data-aos-duration="1000">
                        <h2 class="text-success"> <img src="../image/logo_with_out_name.png" height="75px" witdh="75px"
                                alt=""> MindRiser</h2>
                        <p class="pr-5 text-green-50">Founded in 2019, Mind Risers Consortium Pvt. Ltd is raduates and
                            to be a bridge between the skilled graduates and to the business that seek them.</p>
                        <ul class="soCiaL">
                            <li><a href="https://www.facebook.com/MindRisersConsortium"><i
                                        class="fab fa-facebook text-#1877f2"></i></a></li>
                            <li><a href="https://www.instagram.com/tech.mindrisers/"><i
                                        class="fab fa-instagram text-#da5663"></i></a></li>
                            <!-- <li><a href="#"><i class="fab fa-twitter"></i></a></li> -->
                            <li><a href="https://www.linkedin.com/company/mindrisers/?viewAsMember=true"><i
                                        class="fab fa-linkedin text-info"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-xs-12 links" data-aos="zoom-in-up" data-aos-duration="2000">
                        <h1 class="mt-lg-0 mt-sm-3">Quick links</h1>
                        <ul class="m-0 p-0">
                            <li><a class="" href="#">Home</a></li>
                            <li><a class="" href="#about">About</a></li>
                            <li> <a class="" href="#services">Services</a></li>
                            <li><a class="" href="#contAct">contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-xs-12 location" data-aos="zoom-in-up" data-aos-duration="3000">
                        <h1 class="mt-lg-0 mt-sm-4">Location</h1>
                        <p><i class="text-white fa fa-map-marker">&nbsp;&nbsp;</i><a
                                style="text-decoration: none; color:#000;"
                                href="https://goo.gl/maps/c5DUwXv3fjLFDn6d8">Kumari Galli 2, Kathmandu 44600</a></p>
                        <p><i class="text-white fa fa-phone">&nbsp;&nbsp;</i>+977014224751, +9779823721337</p>
                        <p><i class="text-white fa fa-envelope">&nbsp;&nbsp;</i>tech.mindrisers@gmail.com</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col copyright text-center">
                        <p><small class="text-success-50">
                                All Rights Reserved &copy; MindRisers Team 2021
                            </small></p>
                    </div>
                </div>
            </div>
            {{-- <div class="scrolltop float-right">
                <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
            </div>
        </div> --}}
    </footer>
    </section>
     <a href="" class="back-to-top"><i class="fa fa-arrow-up"></i></a>
    <!-- footer -->

{{-- Home Page  --}}
@endsection