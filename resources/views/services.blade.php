@extends('layout.master')
@section('title','services')
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
    .button {
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
{{-- servives content  --}}
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
                            <h5 class="card-title">Website development</h5>
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
                                    <h5 class="card-title">traning</h5>
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
                    <button class="button" onclick="myFunction()" id="myBtn1"><span>SEE MORE! </span></button>
                </div>

            </div>
            </div>
        
    </section>
    <!-- our services  -->
    <!-- Idu header  -->
    <section class="services_idu-section">

        <div class="services_idu text-uppercase" data-aos="fade-in" data-aos-duration="1000">
            <h1 data-aos="zoom-in-up" data-aos-duration="1000">Services&nbsp;<span class="text-uppercase">Industris</span> </h1>
    </section>
    <!-- Idu header  -->

    <!-- service idu  -->
    <!-- card  -->
    <div class="container"  id="card">
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
{{-- About content  --}}
{{-- js code for services  --}}
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
@endsection