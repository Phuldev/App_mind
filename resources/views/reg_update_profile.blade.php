@extends('layout.HR')
@section('title', 'reg-update-profile')
@section('content')
<style>
    ::placeholder{
        font-size: 25px;
        letter-spacing: 1;
        text-transform: capitalize;
    }
    form
    {
        border:none;
        border-radius: 15px;
        box-shadow: 10px 10px 8px 10px #888888;
    }
    form input{
        font-size:25px;
        border-radius: 0px 25px 0px 10px;
    }
    form textarea{
        font-size:25px;
        border-radius: 25px 0px 0px 10px;
    }
</style>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<section class="container">
    <div  class="text-center">
        <h1 style="font-size: 60px" class="text-success"> Welcome to Phuldev Mandal</h1>
        <h6 class="text-warning"> Fill up the following form to get ready to Post a job!</h6>
    
    </div>      
    <div class=" w3-row">
        {{-- right side  --}}
        <div class=" w3-col s8 w3- w3-center">
        {{-- form  --}}
        <form action="" class="w3-container w3-card-4 w3-light-grey w3-text-green w3-margin text-capitalize">
            
             
            <div class="w3-row w3-section">
              <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
                <div class="w3-rest">
                  <input class="w3-input w3-border" name="first" type="text" placeholder="contact person">
                </div>
            </div>
            
            <div class="w3-row w3-section">
              <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-address-card"></i></div>
                <div class="w3-rest">
                  <input class="w3-input w3-border" name="last" type="text" placeholder="contact persion designation">
                </div>
            </div>
            
            <div class="w3-row w3-section">
              <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-phone"></i></div>
                <div class="w3-rest">
                  <input class="w3-input w3-border" name="email" type="phone" maxlength="10" placeholder="contact persion mobile">
                </div>
            </div>

            <div class="w3-row w3-section">
                <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope"></i></div>
                  <div class="w3-rest">
                    <input class="w3-input w3-border" name="email" type="email" placeholder="contact persion email">
                  </div>
              </div>
            
            <div class="w3-row w3-section">
              <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-map-marker"></i></div>
                <div class="w3-rest">
                  <input class="w3-input w3-border" name="phone" type="text" placeholder="comapny address">
                </div>
            </div>
            
            <div class="w3-row w3-section">
              <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pen"></i></div>
                <div class="w3-rest">
                  <textarea class="w3-input w3-border" name="message" type="message" placeholder="company descripition"></textarea>
                </div>
            </div>
            
            <a style="text-decoration: none; font-size:25px;" href="#" class="w3-btn w-25 m-5 w3-green text-capitalize ">submit</a>
            
            </form>
        {{-- form  --}}
        </div>

        {{-- left side  --}}
        <div class=" card w3-col s4  w3-center p-2">
            {{-- general info  --}}
            <div class="card">
                <div class="card-header text-capitalize">
                  <i class="fas fa-info-circle text-success">&nbsp;general info</i>
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p>Get started on your online recruitment process by creating your recruiters
                     account with merojob. Please fill the minimum mandatory details in the form to proceed</p>
                  </blockquote>
                </div>
              </div>
              {{-- general info  --}}
              
                {{-- clients relation  --}}
            <div class="card p-2">
                <div class="card-header text-capitalize">
                  <i class="fas fa-hands-helping text-success">&nbsp;Client Relation Executive</i>
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <div class="d-flex">
                        <img src="../image/dev.jpeg" alt="" width="100px" height="100px"> &nbsp; &nbsp; &nbsp;
                        <div class="text-left">
                            <h5>Phuldev Mandal</h5>
                            <a href="#">testlaravel26@gmail.com</a>
                            <p>9817348212</p>
                        </div>
                    </div>
                  </blockquote>
                </div>
              </div>
              {{-- clients relation  --}}

            {{-- Contact mind  --}}
            <div class="card ">
                <div class="card-header text-capitalize">
                  <i class="fas fa-map-marker text-success">&nbsp;Contact mindrisers</i>
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <div class="text-left text-capitalize">
                        <h5>mindrisers consortium pvt. ltd.</h5>
                        <p>Putalisadak,Kathmandu,Nepal <br><span>9817348212</span></p>
                    </div>
                  </blockquote>
                </div>
              </div>
              {{-- Contact mind  --}}



        </div>
        &nbsp; <br>
        
    </div> 
</section>
@endsection