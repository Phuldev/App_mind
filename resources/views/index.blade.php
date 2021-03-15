
@extends('layout.master')
@section('title','home')
@section('content')
<style>
    #more{
        display: none;
        }
    .second-div
    {
        display:flex;
        width: 100%;
    }
    .w-100 {
    width: 150% !important;
    }
    .second-div .card:hover {
    background-color: #0a6721;
    color: #fff;
    box-shadow: 10px 10px 8px rgba(0, 0, 0, 0.3);
    }
    .services-box1:hover .services-icon {
    background-color: #0a6721;
    transition: 0.5s;
    color: #fff;
    box-shadow: 10px 10px 8px rgba(0, 0, 0, 0.3);
    }
    .second-div .services-box1 {
    /* max-width: 28%; */
    padding: 10px;
    margin: 60px;
    text-align: center;
    background-color: rgb(245, 238, 238);
    cursor: pointer;
    border: 3px solid #0a6721;
    }
    .second-div .services-icon {
    display: inline-block;
    width: 70px;
    height: 70px;
    border: 3px solid #0a6721;
    color: #0a6721;
    transform: rotate(45deg);
    margin-top: -40px;
    margin-bottom: 30px;
    transition: 0.3s linear;
    position: relative;
    top: -7px;
    left: 88px;
    text-align: match-parent;
    background-color: #f4f8f7;}
    .button1 {
      border-radius: 4px;
      background-color: #0a6721;
      border: none;
      position: relative;
      left: 450px;
      top:-15px;
      color: #FFFFFF;
      text-align: center;
      font-size: 28px;
      padding:10px;
      width: 200px;
      transition: all 0.5s;
      cursor: pointer;
      margin: 10px;
    }
</style>

{{-- Home page  --}}
<!-- slider_banner  -->
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner">
        <div class="carousel-item active text-capitalize">
            <img class="d-block w-100" src="../image/programer.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="animate__animated animate__slideInLeft  animate__delay-1s animate__repeat-1">Build Stunning</h5>
                <p class="animate__animated animate__zoomInLeft  animate__delay-1s animate__repeat-1">Website & apps.</p>
                <p class="animate__animated animate__zoomIn  animate__delay-2s animate__repeat-1"><a
                        href="#">More Info</a></p>
            </div>
        </div>
        <div class="carousel-item text-capitalize">
            <img class="d-block w-100" src="../image/programer.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="animate__animated animate__slideInRight  animate__delay-1s animate__repeat-1">Rapid Solutions</h5>
                <p class="animate__animated animate__zoomInRight  animate__delay-1s animate__repeat-1">For your business.</p>
                <p class="animate__animated animate__zoomIn  animate__delay-2s animate__repeat-1"><a
                        href="#">More Info</a></p>
            </div>
        </div>
        <div class="carousel-item text-capitalize">
            <img class="d-block w-100" src="../image/programer.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h5 class="animate__animated animate__flipInY  animate__delay-1s animate__repeat-1">Helping</h5>
                <p class="animate__animated animate__flipInX  animate__delay-1s animate__repeat-1">every step of the way.</p>
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
        <div class="our_ser_demo text-uppercase">
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
                            <h5 class="card-title">website development</h5>
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
                            <h5 class="card-title">apps development </h5>
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
                            <h5 class="card-title">software application</h5>
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
                     
                    <span id="dots"></span><span id="more">

                    <!-- card  -->
                        <div class="second-div">
                            <div class="card services-box1 w-100" style="width:100%;">
                                <div class="services-icon">
                                    <i class="fas fa-laptop-code"></i>
                                </div>
                                <div class="services-title">
                                    <h5 class="card-title">Traning</h5>
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
                            <div class="card services-box1 w-100" style="width:100%;">
                                <div class="services-icon">
                                    <i class="fas fa-sliders-h"></i>
                                </div>
                                <div class="services-title">
                                    <h5 class="card-title">HR Placements</h5>
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
                            <div class="card services-box1 w-100" style="width:100%;">
                                <div class="services-icon">
                                    <i class="fas fa-handshake"></i>
                                </div>
                                <div class="services-title">
                                    <h5 class="card-title">digital marketing</h5>
                                </div>
                                <ul class="services-desc">
                                    <li class="list-group-item" data-aos="zoom-in-up" data-aos-duration="1000">Internship
                                        Placement</li>
                                    <li class="list-group-item" data-aos="zoom-in-up" data-aos-duration="1000">Job placement
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </span>
                    <!-- card  -->    
                </div>
                <div>
                    <button class="button1" onclick="myFunction()" id="myBtn1"><span>SEE MORE! </span></button>
                </div>

            </div>
            </div>
        
    </section>
    <!-- our services  -->
    <!-- Idu header  -->
    <section class="services_idu-section py-5" >

        <div class="services_idu text-uppercase" data-aos="fade-in" data-aos-duration="1000">
            <h1 data-aos="zoom-in-up" data-aos-duration="1000">Services &nbsp;<span class="text-uppercase">Industris</span> </h1>
        </div>
    </section>
    <!-- Idu header  -->

    <!-- service idu  -->
    <!-- card  -->
    <div class="container p-5" id="card">
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
    <section class="why-main p-5">
        <section class="services_why-section">

            <div class="services_why" data-aos="fade-in" data-aos-duration="1000">
                <h1 data-aos="zoom-in-up" class="text-uppercase" data-aos-duration="1000">why&nbsp;<span>us ?</span> </h1>
                <div class="  container  p-2">
                    <div class="text">
                        <li><span>web design</span></li>
                        <li><span>web design</span></li>
                        <li><span>web design</span></li>
                    </div>
                    <div class="des text-capitalize text-center text-white">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos eaque a voluptas magni quisquam minima corporis commodi <br> mollitia, corrupti consequatur delectus officiis ipsam?
                    </div>
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
                        
                    }
                    .why-readMore a span
                    { 
                        font-size:40px;
                        color:yellow;
                        
                    }
                </style>
                {{-- style why-readMore  --}}
                <div class="text-center text-uppercase why-readMore">
                    
                        <a href="#">read<span>more</span></a>
                    
                </div>
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
                        <div class="tiTle text-uppercase">
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
                                    class="fab fa-facebook-f"style="color:#3b5998;"></i></a>
                            <a href="https://www.instagram.com/tech.mindrisers/"style="color:#e95950;"><i class="fab fa-instagram">
                                </i></a>
                            <a href="https://www.linkedin.com/company/mindrisers/?viewAsMember=true"><i
                                    class="fab fa-linkedin"style="color:#0e76a8;"></i></a>
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
    {{-- testimonial  --}}
<section class="testimonial">
    <div class="slideshow-container">
        <div class="text-center p-5">
            <h2 class="font-bold text-uppercase">What our partnering company say about us?</h2>
        </div>
        <div class="mySlides">
            <div class="pic">
                <img src="../image/programer.jpg" width="250px" height="250px" alt="">
            </div>
            <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
            <p class="author">- John Keats</p>
        </div>

        <div class="mySlides">
            <div class="pic">
                <img src="../image/dev.jpeg" width="250px" height="250px" alt="">
            </div>
            <q>But man is not made for defeat. A man can be destroyed but not defeated.</q>
            <p class="author">- Ernest Hemingway</p>
        </div>

        <div class="mySlides">
            <div class="pic">
                <img src="../image/dev.jpeg" width="250px" height="250px" alt="">
            </div>
            <q>But man is not made for defeat. A man can be destroyed but not defeated.</q>
            <p class="author">- Phuldev Mandal</p>
        </div>

        <div class="mySlides">
            <div class="pic">
                <img src="../image/dev.jpeg" width="250px" height="250px" alt="">
            </div>
            <q>But man is not made for defeat. A man can be destroyed but not defeated.</q>
            <p class="author">- Ernest Hemingway</p>
        </div>

        <div class="mySlides">
            <div class="pic">
                <img src="../image/dev.jpeg" width="250px" height="250px" alt="">
            </div>
            <q>I have not failed. I've just found 10,000 ways that won't work.</q>
            <p class="author">- Thomas A. Edison</p>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    {{-- <div class="dot-container">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>  --}}

    </div>
</section>
       {{-- testimonial  --}}
    <!-- contact -->
    <section class="contacT" id="contAct">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#19e273" fill-opacity="1"
                d="M0,160L30,149.3C60,139,120,117,180,101.3C240,85,300,75,360,101.3C420,128,480,192,540,186.7C600,181,660,107,720,74.7C780,43,840,53,900,96C960,139,1020,213,1080,250.7C1140,288,1200,288,1260,277.3C1320,267,1380,245,1410,234.7L1440,224L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z">
            </path>
        </svg>
        <div class="contAiner">
            <div class="contactInfo">
                <h1 class="text-center text-uppercase">Contact Us</h1>
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
                        <label for="name">Name</label>
                        <input type="text" name="name" required="required">
                    </div>
                    <div class="inputBOx">
                        <label for="mobile">Mobile Number</label>
                        <input type="phone" name="mobile" required="required" maxlength="10" minlength="10" >

                    </div>
                    <div class="inputBOx">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" required="required">
                        
                    </div>
                    <div class="inputBOx">
                        <label for="message">Type Your Message</label>
                        <textarea name="msg" required="required"></textarea>
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
<script>
    function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn1");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "See More";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "See Less";
    moreText.style.display = "inline";
  }
} 
</script>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>

@endsection