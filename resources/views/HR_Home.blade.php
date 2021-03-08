@extends('layout.HR')
@section('title','HR-Home')
@section('content')

        <style>
            .right-s {
                width: 70%;
                float: left;
                background-color: rgba(10, 207, 60, 0.774);

            }

            .left-s {
                width: 28%;
                float: right;
                /* border: 1px solid rgb(51, 226, 28); */
            }
            .left-s .card-body
            {
                font-size:20px;
                text-align: center;
            }
            .left-s .card-body a
            {text-decoration: none;
            /* color:seashell; */
            }
            .right-s .card-body
            {
                font-size:20px;
                text-align: center;
            }
            .right-s .card-body a
            {text-decoration: none;
            /* color:seashell; */
            }
            .right-s .card-body img
            {

                /* box-shadow: 5px 5px 5px 5px rgba(0, 0, 0, 0.3); */
                border:none;
                border-radius: 15%;
            }
            .right-s .card-body:hover
            {
                background-color:rgba(234, 240, 236, 0.534);
                color:rgb(8, 8, 8);
                box-shadow: 5px 5px 5px 5px rgba(0, 0, 0, 0.3);
                border:none;
                border-radius: 5%;
            }
            #search input[type=text] {
                width: 130px;
                -webkit-transition: width 0.4s ease-in-out;
                transition: width 0.4s ease-in-out;
                font-size: 20px;
                height: 20px;
            }
            /* When the input field gets focus, change its width to 100% */
            #search input[type=text]:focus
            {
             width: 100%;
             height:20px;
            }
            ::placeholder
            {
                font-size: 25px;
                text-transform: capitalize;
            }


        </style>
        {{-- secrch box --}}
        <section class="container"id="search">
            <input type="text" name="search"  placeholder=" job title, job category,company"> 
        </section> 
        {{-- search box --}}

        {{-- top job --}}
        <section class="container">
            <div class="right-s">
                <div class="card">
                    <div class="card-header text-capitalize" style="font-size: 25px;">top Job</div>
                    <div class="d-flex">
                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">
                        <!-- Button trigger modal -->
                        <a  class="text-success" data-toggle="modal" data-target="#exampleModalCenter">
                            Go somewhere</a>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                         <div class="modal-content">
                     <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLongTitle">Company Name</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                    </div>
                 <div class="modal-body text-capitalize">comeing soon!</div>
                <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Cancle</button>
                <button type="button" class="btn btn-success">Apply</button>
                    </div>
                </div>
                </div>
            </div></a>
                    {{-- rough  --}}
                        </div>
                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#"> <!-- Button trigger modal -->
                                <a  class="text-success" data-toggle="modal" data-target="#exampleModalCenter">
                                    Go somewhere</a>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                 <div class="modal-content">
                             <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLongTitle">Company Name</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                            </div>
                         <div class="modal-body text-capitalize">comeing soon!</div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancle</button>
                        <button type="button" class="btn btn-success">Apply</button>
                            </div>
                        </div>
                        </div>
                    </div></a>
                        </div>

                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div>
                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div> 
                    </div>
                    <div class="d-flex">
                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div>
                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div>

                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div>
                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div> 
                    </div>
                    <div class="d-flex">
                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div>
                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div>

                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div>
                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div> 
                    </div>
                    <div class="d-flex">
                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div>
                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div>

                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div>
                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div> 
                    </div>
                    <div class="d-flex">
                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div>
                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div>

                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div>
                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div> 
                    </div>
                    <div class="d-flex">
                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div>
                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div>

                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div>
                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div> 
                    </div>
                    <div class="d-flex">
                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div>
                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div>

                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div>
                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div> 
                    </div>
                    <div class="d-flex">
                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div>
                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div>

                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div>
                        <div class="card-body" data-aos="fade-up">
                            <img src="../image/workers.png" height="80px" width="80px" alt="">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                            <a href="#">Go somewhere</a>
                        </div> 
                    </div>
                    
                </div>
            </div>
            <div class="left-s">
                {{-- Top Employers --}}
                <div>
                    <div class="top-box">
                        <div class="card w-100%">
                            <div class="card-header text-capitalize" style="font-size: 25px;">Top Employers</div>
                            <div class="card-body">
                                <div class="d-flex justify-content-sm-between"data-aos="zoom-in">
                                    <img src="../image/workers.png" height="50px" width="50px" alt="1st-pic"> &nbsp;
                                    <img src="../image/workers.png" height="50px" width="50px" alt="2nd-pic">&nbsp;
                                    <img src="../image/workers.png" height="50px" width="50px" alt="3th-pic">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Recent Tenders --}}
                <br>
                <div>
                    <div class="top-box">
                        <div class="card w-100%">
                            <div class="card-header text-capitalize" style="font-size: 25px;">Recent Tenders</div>
                            <div class="card-body">
                                <div class="d-flex" data-aos="fade-up" data-aos-delay="400">
                                    <a href="#"><img src="../image/logo.png" height="50px" width="50px" alt="1st-pic">
                                        &nbsp;</a><br>
                                    <h6>Mind Risers Consortium Pvt. Ltd.</h6>
                                </div>
                                <hr>
                                <div class="d-flex" data-aos="fade-up" data-aos-delay="400">
                                    <a href="#"><img src="../image/logo.png" height="50px" width="50px" alt="1st-pic">
                                        &nbsp;</a><br>
                                    <h6>Mind Risers Consortium Pvt. Ltd.</h6>
                                </div>
                                <hr>
                                <div class="d-flex" data-aos="fade-up" data-aos-delay="400">
                                    <a href="#"><img src="../image/logo.png" height="50px" width="50px" alt="1st-pic">
                                        &nbsp;</a><br>
                                    <h6>Mind Risers Consortium Pvt. Ltd.</h6>
                                </div>
                                <hr>
                                <div class="d-flex" data-aos="fade-up" data-aos-delay="400">
                                    <a href="#"><img src="../image/logo.png" height="50px" width="50px" alt="1st-pic">
                                        &nbsp;</a><br>
                                    <h6>Mind Risers Consortium Pvt. Ltd.</h6>
                                </div>
                                <hr>
                                <div class="d-flex" data-aos="fade-up" data-aos-delay="400">
                                    <a href="#"><img src="../image/logo.png" height="50px" width="50px" alt="1st-pic">
                                        &nbsp;</a><br>
                                    <h6>Mind Risers Consortium Pvt. Ltd.</h6>
                                </div>
                                <hr>
                                <div class="card-footer text-right"><i class="far fa-eye"></i>&nbsp; &nbsp;View All
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Career Services --}}
                <br>
                <div>
                    <div class="top-box">
                        <div class="card w-100%">
                            <div class="card-header text-capitalize" style="font-size: 25px;">Career Services</div>
                            <div class="card-body">
                                <div class="d-flex justify-content-sm-between">
                                    <a data-aos="zoom-in" href="#"><img src="../image/workers.png" height="50px" width="50px"
                                            alt="1st-pic"> &nbsp;</a>
                                    <a data-aos="zoom-in" href="#"><img src="../image/workers.png" height="50px" width="50px"
                                            alt="1st-pic"> &nbsp;</a>
                                    <a data-aos="zoom-in" href="#"><img src="../image/dev.jpeg" height="50px" width="50px"
                                            alt="1st-pic"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Jobs By Industry --}}
                <br>
                <div>
                    <div class="top-box">
                        <div class="card w-100%">
                            <div class="card-header text-capitalize" style="font-size: 25px;">Jobs By Industry</div>
                            <div class="card-body">
                                <div style="text-decoration: none;">
                                    <a href="#">Government Organization <span>(40014)</span> </a> <br>
                                    <a href="#">BPO / Call Center / ITES<span> (149) </span> </a> <br>
                                    <a href="#">Education - School & Colleges<span> (145)</span> </a> <br>
                                    <a href="#">Trading - Export / Import / M…<span>(856)</span> </a>
                                    <a href="#">Banks<span>(501)</span> </a> <br>
                                    <hr>
                                    <a href="#" style="">more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Jobs By Employment Type --}}
                <br>
                <div>
                    <div class="top-box">
                        <div class="card w-100%">
                            <div class="card-header text-capitalize" style="font-size: 25px;">Jobs By Employment Type </div>
                            <div class="card-body">
                                <div style="text-decoration: none;">
                                    <a href="#">Full-Time <span>(40014)</span> </a> <br>
                                    <a href="#">Part-Time<span> (149) </span> </a> <br>
                                    <a href="#">Contract <span> (145)</span> </a> <br>
                                    <a href="#">Temporary<span>(856)</span> </a> <br>
                                    <a href="#">Freelance<span>(501)</span> </a> <br>
                                    <a href="#">Internship<span>(501)</span> </a> <br>
                                    <a href="#">Traineeship<span>(501)</span> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Recent Job Kurakani --}}
                <br>
                <div>
                    <div class="top-box">
                        <div class="card w-100%">
                            <div class="card-header text-capitalize" style="font-size: 25px;">Recent Job Kurakani</div>
                            <div class="card-body">
                                <div class="d-flex" data-aos="fade-up" data-aos-delay="400">
                                    <a href="#"><img src="../image/index.jpeg" height="50px" width="50px"
                                            alt="1st-pic"></a> &nbsp;<br>
                                    <h6>acem signs MoU with merojob </h6>
                                </div>
                                <hr>
                                <div class="d-flex" data-aos="fade-up" data-aos-delay="400">
                                    <a href="#"><img src="../image/index.jpeg" height="50px" width="50px"
                                            alt="1st-pic"></a> &nbsp;<br>
                                    <h6>फर्निचर तथा फिक्चर्सहरू खरिद </h6>
                                </div>
                                <hr>
                                <div class="d-flex" data-aos="fade-up" data-aos-delay="400">
                                    <a href="#"><img src="../image/index.jpeg" height="50px" width="50px"
                                            alt="1st-pic"></a> &nbsp;<br>
                                    <h6>Construction of Addition of Floor of Adminis… </h6>
                                </div>
                                <hr>
                                <div class="d-flex" data-aos="fade-up" data-aos-delay="400">
                                    <a href="#"><img src="../image/index.jpeg" height="50px" width="50px"
                                            alt="1st-pic"></a> &nbsp;<br>
                                    <h6>Mind Risers Consortium Pvt. Ltd.</h6>
                                </div>
                                <hr>
                                <div class="d-flex" data-aos="fade-up" data-aos-delay="400">
                                    <a href="#"><img src="../image/index.jpeg" height="50px" width="50px"
                                            alt="1st-pic"></a> &nbsp;<br>
                                    <h6>Mind Risers Consortium Pvt. Ltd.</h6>
                                </div>
                                <hr>
                                <div class="card-footer text-right"><i class="far fa-eye"></i>&nbsp;&nbsp;View All</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </section>
        {{-- top job --}}

@endsection