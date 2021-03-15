@extends('layout.master')
@section('title','course')
@section('content')
<style>
  .member-info
  {
    text-align: center;
   
  }
  .member-info h4 a
  {
    list-style: none;
    text-decoration: none;
    color:#0a6721;
  }
</style>
<!-- =======IT Team Section ======= -->
<section>
    <div class="container p-5">

      <div class="section-title p-5 text-uppercase">
        <h1 data-aos="fade-up">Courses</h1>
        <p data-aos="fade-up">
            <h2 data-aos="fade-up">IT Courses</h2>
            </p>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-toggle="modal" data-target="#myModal-1">
          <div class="member">
            <div class="member-img">
              <img src="../image/icon/team-1.jpg" class="img-fluid" alt="">
              
            </div>
            <div class="member-info">
              <h4><a href="#faq">Python</a></h4>
             
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100" data-toggle="modal" data-target="#myModal-2">
          <div class="member">
            <div class="member-img">
              <img src="../image/icon/team-2.jpg" class="img-fluid" alt="">
              
            </div>
            <div class="member-info">
              <h4><a href="#faq">Android/ iOS (Cross-platform included)<a></h4>
              
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200" data-toggle="modal" data-target="#myModal-3">
          <div class="member">
            <div class="member-img">
              <img src="../image/icon/team-3.jpg" class="img-fluid" alt="">
              
            </div>
            <div class="member-info">
              <h4><a href="#faq">Java (hibernate/Spring)<a></h4>
              
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300" data-toggle="modal" data-target="#myModal-4">
          <div class="member">
            <div class="member-img">
              <img src="../image/icon/team-4.jpg" class="img-fluid" alt="">
              
            </div>
            <div class="member-info">
              <h4><a href="#faq">PHP with its desired frameworks<a></h4>
              
            </div>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300" data-toggle="modal" data-target="#myModal-5">
          <div class="member">
            <div class="member-img">
              <img src="../image/icon/dotNet.jpg" class="img-fluid" alt="">
              
            </div>
            <div class="member-info">
              <h4><a href="#faq">.net<a></h4>
              
            </div>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300" data-toggle="modal" data-target="#myModal-6">
          <div class="member">
            <div class="member-img">
              <img src="../image/icon/CISCO.jpg" class="img-fluid" alt="">
              
            </div>
            <div class="member-info">
              <h4><a href="#faq">CCNA/CCNP<a></h4>
              
            </div>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300" data-toggle="modal" data-target="#myModal-7">
          <div class="member">
            <div class="member-img">
              <img src="../image/icon/oracle.jpg" class="img-fluid" alt="">
              
            </div>
            <div class="member-info">
              <h4><a href="#faq">Oracle/DBMS<a></h4>
              
            </div>
          </div>
        </div>

      </div>

    </div>
</section>
<!-- End IT Team Section -->


 
  <!-- The Modal python -->
  <div class="modal" id="myModal-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Python Course Syllabus</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
                <h6>
                    -Fundamentals of Python</br>
                    -Object Oriented Programming with Python</br>
                    -Data Structure and Algorithms</br>
                    -Network programming with Python</br>
                    -Database Programming (MySQL)</br>
                    -CGI programming with Python</br>
                    -Numpy</br>
                    -Pandas</br>
                    -GUI programming with Python-TKInter</br>
                    -Introduction to web development</br>
                    -Django Web Framework</br>
                    -Restful Api</br>
                    -DevOps
                    </br>
                    <b>*Note: Comprehensive course details will be available upon request.</b>
                    </br>
                </h6>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer d-flex justify-content-between">
          <button type="button" class="btn btn-success">Downloaad</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
  <!-- The Modal python -->

   <!-- The Modal Android -->
   <div class="modal" id="myModal-2">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Android/ iOS Course Syllabus</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
                <h6>
                                -Introduction to Android/iOS/Flutter</br>
                                -Getting Started with Android/iOS/Flutter</br>
                                -Android/iOS/Flutter System Overview</br>
                                -Android/iOS/Flutter User Interface (UI)</br>
                                -More UI Elements</br>
                                -Media Handling</br>
                                -Data Handling and Content Providers</br>
                                -Services, Broadcast Receivers, and Intent Filters</br>
                                -Google API</br>
                                -Web Services in Android/iOS/Flutter</br>
                                -Wireless and Networking</br>
                                -Telephony, SMS, and VoIP</br>
                                -Sensors</br>
                                -Google Play/app Store</br>
                                -Android Studio/Xcode/vsCode</br>
                                -Material Design</br>
                                -Android/iOS/Flutter Interface Definition Language
                                </br>
                                <b>*Note: Comprehensive course details will be available upon request.</b>
                                </br>
                </h6>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer d-flex justify-content-between">
            <button type="button" class="btn btn-success">Downloaad</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
</div>
  <!-- The Modal Android -->

   <!-- The Modal java -->
   <div class="modal" id="myModal-3">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Java Course Syllabus</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
                <h6>
                    -Fundamentals of Java </br>
                    -OOP in Java </br>
                    -Object Design and Programming </br>
                    -String Object and Regular Expressions </br>
                    -Interfaces in Java </br>
                    -Java Exception on Handling </br>
                    -Java Collection ons API </br>
                    -Java Date and Time API </br>
                    -Design Pattern </br>
                    -Threads in Java </br>
                    </br>
                    <b>
                        Spring Framework
                    </b>
                    </br>
                    -Introduction on to Spring Framework </br>
                    -Advantage of using Spring framework </br>
                    -Dependency Injection </br>
                    -Spring Configurations(XML) </br>
                    -Spring Annotations </br>
                    -Model, View, Controller </br>
                    -RequestParam, RequestMapping </br>
                    -Methods : GET, POST, UPDATE, DELETE </br>
                    </br>
                    <b>
                        Spring REST
                    </b>
                    </br>
                    -Overview </br>
                    -JSON Data Binding </br>
                    -Rest Controller </br>
                    -POJO integration JSON </br>
                    -Spring REST Database Project </br>
                    -Spring AOP</br>
                    -Introduction, Scope </br>
                    -Aspect, Join Point, Pointcut</br>

                    </br>
                    <b>
                        *Course content for Hibernate available on request
                    </b>
                </h6>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer d-flex justify-content-between">
            <button type="button" class="btn btn-success">Downloaad</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
</div>
  <!-- The Modal java -->

     <!-- The Modal php -->
     <div class="modal" id="myModal-4">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Php Course Syllabus</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                    <h6>
                        -The PHP programming language </br>
                        -What is programming? </br>
                        -Variables, Syntax and expressions </br>
                        -Data Structure (Array) </br>
                        -Restful Api</br>
                        -Loop </br>
                        -Functions </br>
                        -Some useful Built-in functions </br>
                        -Object Oriented Concept in PHP </br>
                        -Examples of Popular Framework and how they works </br>
                        -What is API and how to handle it? </br>
                        -Git </br>
                        -GitHub and Git (Differences and Usage) </br>
                        </br>
                        <b>
                            *Course content for framework available on request
                        </b>
                    </h6>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer d-flex justify-content-between">
                <button type="button" class="btn btn-success">Downloaad</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
          </div>
        </div>
    </div>
<!-- The Modal php -->

   <!-- The Modal .net -->
   <div class="modal" id="myModal-5">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">.net Course Syllabus</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
                <h6>
                    <b>
                        Module 1: Object Oriented Programming Concepts
                    </b>
                    <br>
                    -Introduction to Object-Oriented Programming <br>
                    -Object-oriented Design <br>
                    -Classes and Methods <br>
                    -Abstraction and Inheritance <br>
                    -Multiple Inheritance and Interfaces <br>
                    -Polymorphism <br>
                    -Overloading <br>
                    -Overriding <br>
                    -Polymorphic Variable <br>
                    -Generics <br>
                    -Frameworks and Reflection <br>
                    -Patterns <br>
                    <br>
                    <b>
                        Module 2: Application Programming (C#)

                    </b>
                    </br>
                    -Getting Started with C# </br>
                    -Variables and Data Types in C# </br>
                    -Statements and Operators </br>
                    -C# Programming Constructs </br>
                    -Arrays </br>
                    -Classes and Methods </br>
                    -Inheritance and Polymorphism </br>
                    -Abstract Classes and Interfaces </br>
                    -Properties and Indexers </br>
                    -Namespaces </br>
                    -Exception Handling </br>
                    -Events, Delegates, and Collections </br>
                    -Generics and Iterators </br>
                    -Advanced Methods and Types </br>
                    -Advanced Concepts in C# </br>
                    -Encrypting and Decrypting Data </br>
                    </br>
                    <b>
                        Module 3: Web Programming using ASP .NET MVC


                    </b>

                    </br>
                    -Introduction to ASP.NET MVC </br>
                    -Controllers in ASP.NET MVC </br>
                    -Views in ASP.NET MVC </br>
                    -Models in ASP.NET MVC </br>
                    -Data Validation and Annotation </br>
                    -Data Access </br>
                    -Consistent Styles and Layouts </br>
                    -Responsive Pages </br>
                    -State Management and Optimization </br>
                    -Authentication and Authorization </br>
                    -Security </br>
                    -Globalization </br>
                    -Debugging and Monitoring </br>
                    -Advanced Concepts of ASP.NET MVC </br>
                    -Testing and Deploying </br>
                    </br>
                    <b>
                        Module 4: Agile System Development Life Cycle for Software Projects



                    </b>

                    </br>
                    -Software Characteristics </br>
                    -Software Development Life Cycle </br>
                    -Linear Process Models </br>
                    -Iterative Process Models </br>
                    -Specialized Process Models </br>
                    -Agile Software Development - I </br>
                    -Agile Software Development - II </br>
                    -Extreme Programming </br>
                    -Scrum </br>
                    -Agile Process Models - I </br>
                    -Agile Process Models - II </br>
                    -Comparing Agile with Traditional Models </br>
                    -Introduction to DevOps and Configuration Management </br>
                    -Continuous Integration and Delivery in DevOps </br>

                    </br>
                    <b>*Note: Comprehensive course details will be available upon request.</b>
                    </br>
                </h6>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer d-flex justify-content-between">
            <button type="button" class="btn btn-success">Downloaad</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
</div>
  <!-- The Modal .net -->

     <!-- The Modal ccna -->
     <div class="modal" id="myModal-6">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">CCNA/CCNP Course Syllabus</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                    <h6>
                        Network Fundamentals </br>
                        -Introduction to Network Architecture and Protocols </br>
                        -Data Transmission, Transmission Media, and Data Encoding </br>
                        -Datalink Control </br>
                        -Switching </br>
                        -LAN Systems </br>
                        -Bridges </br>
                        -IP </br>
                        -TCP </br>
                        -Traffic Management </br>
                        -LAN SWITCHING TECHNOLOGIES </br>
                        -IP ROUTING TECHNOLOGIES </br>
                        </br>
                        <b>*Note: CCNP course details will be available upon request.</b>
                    </h6>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer d-flex justify-content-between">
                <button type="button" class="btn btn-success">Downloaad</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
          </div>
        </div>
    </div>
<!-- The Modal ccna -->
     <!-- The Modal oracle -->
     <div class="modal" id="myModal-7">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Oracle/DBMS Course Syllabus</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                    <h6>
                        <b>*Note: Oracle/DBMS course details will be available upon request.</b>>
                    </h6>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer d-flex justify-content-between">
                <button type="button" class="btn btn-success">Downloaad</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
          </div>
        </div>
    </div>
<!-- The Modal oracle -->

{{-- IT courses  --}}

<!-- =======Civil Engineering Courses ======= -->
<section>
    <div class="container">

      <div class="section-title">
        <p data-aos="fade-up">
            <h2 data-aos="fade-up">Civil Engineering Courses</h2>
            </p>
      </div>

      <div class="row">

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-toggle="modal" data-target="#myModal-8">
          <div class="member">
            <div class="member-img">
              <img src="../image/icon/autodesk_ACAD.jpg" class="img-fluid" alt="">
              
            </div>
            <div class="member-info">
              <h4><a href="#faq">AutoCAD package (AutoCAD, SWDTM)</a></h4>
             
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100" data-toggle="modal" data-target="#myModal-9">
          <div class="member">
            <div class="member-img">
              <img src="../image/icon/ACAD3D.jpg" class="img-fluid" alt="">
              
            </div>
            <div class="member-info">
              <h4><a href="#faq">Autodesk Civil3D package
                (Civil3D/Land Development, Infraworks)<a></h4>
              
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200" data-toggle="modal" data-target="#myModal-10">
          <div class="member">
            <div class="member-img">
              <img src="../image/icon/ArcGIS.jpg" class="img-fluid" alt="">
              
            </div>
            <div class="member-info">
              <h4><a href="#faq">GIS Training<a></h4>
              
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300" data-toggle="modal" data-target="#myModal-11">
          <div class="member">
            <div class="member-img">
              <img src="../image/icon/ETABS.jpg" class="img-fluid" alt="">
              
            </div>
            <div class="member-info">
              <h4><a href="#faq">Structural Package
                (ETABS, SAP, SAFE)<a></h4>
            </div>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300" data-toggle="modal" data-target="#myModal-12">
          <div class="member">
            <div class="member-img">
              <img src="../image/icon/Project.jpg" class="img-fluid" alt="">
              
            </div>
            <div class="member-info">
              <h4><a href="#faq">MS Project<a></h4>
              
            </div>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300" data-toggle="modal" data-target="#myModal-13">
          <div class="member">
            <div class="member-img">
              <img src="../image/icon/Eng_plan.jpg" class="img-fluid" alt="">
              
            </div>
            <div class="member-info">
              <h4><a href="#faq">Professional Engineering Estimation<a></h4>
              
            </div>
          </div>
        </div>
      </div>

    </div>
</section>

  <!-- The Modal python -->
  <div class="modal" id="myModal-8">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">AutoCAD Course Syllabus</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
                <h6>
                  -Introduction to AutoCAD</br>
                  -Working with drawing and editing commands</br>
                  -Introduction to drawing precision settings</br>
                  -Layers</br>
                  -Advanced Object Types</br>
                  -Measurement</br>
                  -Editing Commands</br>
                  -Working with blocks</br>
                  -Layout and Plotting</br>
                  -Annotating the Drawing</br>
                  -Additional Course - SWDTM</br>
                  </br>
                  <b>*Note: Comprehensive course details will be available upon request.</b>
                  </br>
                </h6>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer d-flex justify-content-between">
          <button type="button" class="btn btn-success">Downloaad</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>
  <!-- The Modal python -->

   <!-- The Modal Android -->
   <div class="modal" id="myModal-9">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Autodesk Civil3D Course Syllabus</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
                <h6>
                  -Getting Started</br>
                  -Working with points</br>
                  -Surfaces</br>
                  -Alignments</br>
                  -Profiles</br>
                  -Assemblies and Subassemblies</br>
                  -Corridors</br>
                  -Sections</br>
                  -Production</br>
                  </br>
                  <b>
                      Additional Advanced Course – I (Optional)
                  </b>
                  </br>
                  -Corridor Section Editor </br>
                  -Intersections</br>
                  -Sub-Assembly Composer</br>
                  </br>
                  <b>
                      Additional Advanced Course – II (Optional)
                  </b>
                  </br>
                  -Infraworks</br>
                  -Finding and Importing Data</br>
                  -Terrain, Ground Imagery and Roads</br>
                  -Water Data and Building Data</br>
                  -3D Models</br>

                  </br>
                  <b>*Note: Comprehensive course details will be available upon request.</b>
                  </br>
                </h6>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer d-flex justify-content-between">
            <button type="button" class="btn btn-success">Downloaad</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
</div>
  <!-- The Modal Android -->

   <!-- The Modal java -->
   <div class="modal" id="myModal-10">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">GIS Course Syllabus</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
                <h6>
                  -Introduction to Arc GIS </br>
                  -Working with ArcMap </br>
                  -Data Processing with Attributes </br>
                  -Data types </br>
                  -Co-ordinate system </br>
                  -Spatial analysis & Geoprocessing </br>
                  -Maps </br>
                  -Remote Sensing </br>

                  </br>
                  <b>*Note: Comprehensive course details will be available upon request.</b>
                  </br>
                </h6>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer d-flex justify-content-between">
            <button type="button" class="btn btn-success">Downloaad</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
</div>
  <!-- The Modal java -->

     <!-- The Modal php -->
     <div class="modal" id="myModal-11">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Structural Course Syllabus</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                    <h6>
                      -Review of IS code , NBC and AISC codes, Software Installation (ETABS /SAFE) </br>
                      -Preliminary Design Calculations </br>
                      -Modelling on ETABS </br>
                      -Post Processing and building checks </br>
                      -Response spectrum Analysis </br>
                      -Design </br>
                      -Detailing </br>
                      -Structure Report </br>
                      -Tall Building Design, Time History and push over analysis (Conceptual) </br>

                      </br>
                      <b>*Note: Comprehensive course details will be available upon request.</b>
                      </br>
                    </h6>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer d-flex justify-content-between">
                <button type="button" class="btn btn-success">Downloaad</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
          </div>
        </div>
    </div>
<!-- The Modal php -->

     <!-- The Modal php -->
     <div class="modal" id="myModal-no id">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">Professional Engineering Estimation Course Syllabus</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <!-- Modal body -->
          <div class="modal-body">
                  <h6>
                    -Review of IS code , NBC and AISC codes, Software Installation (ETABS /SAFE) </br>
                    -Preliminary Design Calculations </br>
                    -Modelling on ETABS </br>
                    -Post Processing and building checks </br>
                    -Response spectrum Analysis </br>
                    -Design </br>
                    -Detailing </br>
                    -Structure Report </br>
                    -Tall Building Design, Time History and push over analysis (Conceptual) </br>

                    </br>
                    <b>*Note: Comprehensive course details will be available upon request.</b>
                    </br>
                  </h6>
          </div>
          <!-- Modal footer -->
          <div class="modal-footer d-flex justify-content-between">
              <button type="button" class="btn btn-success">Downloaad</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
      </div>
  </div>
<!-- The Modal php -->

     <!-- The Modal ccna -->
     <div class="modal" id="myModal-12">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">MS Projec Course Syllabus</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                    <h6>

                      -Getting Started with Microsoft Project <br>
                      -Project Formulation <br>
                      -Project Tasks <br>
                      -Managing tasks<br>
                      -Critical Path <br>
                      -Miscellaneous <br>
                      -Project Resources and Costs <br>
                      -Finalizing a Project Plan <br>
                      -Updating a Project Plan <br>
                      -Monitoring and reporting the project progress <br>
                      -Working with Multiple Projects <br>

                      </br>
                      <b>*Note: Comprehensive course details will be available upon request.</b>
                      </br>
                    </h6>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer d-flex justify-content-between">
                <button type="button" class="btn btn-success">Downloaad</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
          </div>
        </div>
    </div>
<!-- The Modal ccna -->
     <!-- The Modal oracle -->
     <div class="modal" id="myModal-7">
        <div class="modal-dialog">
          <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Oracle/DBMS Course Syllabus</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                    <h6>
                        <b>*Note: Oracle/DBMS course details will be available upon request.</b>>
                    </h6>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer d-flex justify-content-between">
                <button type="button" class="btn btn-success">Downloaad</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
          </div>
        </div>
    </div>
<!-- The Modal oracle -->
<!-- End Civil Engineering Courses -->
@endsection
