<!DOCTYPE html>
<html lang="en">
    <style>
        .nav-menu {
    z-index: 12 !important;
    position: absolute;
    top: 5%;
    width: 100%;
    font-size: 400px;
    background: rgba(0, 0, 0, 0.2) !important;
    /* opacity: 0.2; */
    height:10%;
}


/* top-bar css  */

.top-bar span {
    font-size: 15px;
    padding: 1px 5px;
    font-weight: bold;
}

.top-bar span a {
    text-decoration: none;
    color: #ffff!important;
}
    </style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- animate css  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <!-- aos data  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Latest compiled and minified CSS -->
    <!-- fontAwsome  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- fontAwsome  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/text.css">
    <!-- teko fonts  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
</head>

<body>
    <header id="">

        <!-- top nav  -->
        <section class="p-2 bg-success">

            <div class="container">
                <div class="row top-bar">
                    <div class="col text-left">
                        <span class="text-white"><i class="fas fa-phone"></i> &nbsp; +9779823721337</span>
                        <span class="text-white"><a href="https://mail.google.com/mail/u/2/#inbox?compose=new"><i
                                    class="fas fa-envelope"></i>&nbsp;
                                teach.mindrisers@gmail.com</a></span>
                        <span class="text-white"><i class="far fa-clock"></i> &nbsp; sun-fri 9am-5pm</span>
                    </div>

                    <div class="col text-right">
                        <span class="text-white">
                            <a href="https://www.facebook.com/MindRisersConsortium"><i class="fab fa-facebook"></i></a>
                        </span>
                        <span class="text-white">
                            <!-- <a href="#"><i class="fab fa-twitter"></i></a> -->
                        </span>
                        <span class="text-white">
                            <a href="https://www.instagram.com/tech.mindrisers/"><i class="fab fa-instagram"></i></a>
                        </span>
                        <span class="text-white">
                            <a href="https://www.linkedin.com/company/mindrisers/?viewAsMember=true"><i
                                    class="fab fa-linkedin"></i></a>
                        </span>
                        <span class="text-white">|</span>
                        <span class="text-white font-weight-bolder">
                            <a href="/Online Admission"><i class="fas fa-user">&nbsp;</i>Online Admission</a>
                        </span>
                        <span class="text-white font-weight-bolder">
                            <a href="/Human Resource"><i class="">&nbsp;</i>Human Resource </a>
                        </span>
                    </div>
                </div>
            </div>
        </section>
        <!-- top nav  -->

        <!-- nav bar  -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-menu fixed-top">
            <div class="container">
                <a class="navbar-brand text-success" style="font-weight:bold;font-size:25px" href="#"><img
                        src="../image/logo_with_out_name.png" height="50px" witdh="50px" alt="">&nbsp;MindRisers</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/course">Course</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">contact</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <button
                            class="btn btn-success my-2 my-sm-0 animate__animated animate__heartBeat  animate__delay-1s animate__infinite 	infinite"
                            type="submit"><a href="#contAct" style="text-decoration: none;color:#fff;">GET
                                ENROLLED</a></button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- nav bar  -->
        <section class="hr-main text-center">
            <div class="left-side" id="particles-js">
                <div class="text">
                    <p class="text-white text-uppercase">engaged with staffing</p>
                    <h3> <span class="text-white font-weight-bolder">partnering you for your</span>
                    human resource require. </h3>
                    <p >by way of us you can achievebr  <br> what you want.</p>
                </div>
                <a href="../job Provider"><input type="submit" value="Learn More" class="btn btn-danger "> </a>
        
            </div>
            <div class="right-side w-50">
                <img src="../image/workers.png" alt="">
            </div>
        
        </section>



  



    @yield('content')
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
                                        class="fab fa-facebook text-info"></i></a></li>
                            <li><a href="https://www.instagram.com/tech.mindrisers/"><i
                                        class="fab fa-instagram text-danger"></i></a></li>
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


    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- script  -->
    <script src="../js/index.js"></script>


    <script src="../js/particles.js"></script>
    <script src="../js/app.js"></script>
    <!-- Aos data  -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        AOS.init();

    </script>
    <!-- script  -->
    <script>
        // Back to top button
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('.back-to-top').fadeIn('slow');
            } else {
                $('.back-to-top').fadeOut('slow');
            }
        });

        $('.back-to-top').click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 1500, 'easeInOutExpo');
            return false;
        });

    </script>
    <script>
        $('#profile_image_reset_btn').click(function() {
            $('#profile_image').val('');
            $('#profile-image-group').find('.bootstrap-filestyle').find('input').val('');
        });

    </script>
</body>

</html>
