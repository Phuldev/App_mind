@extends('layout.master')
@section('title','contact')
@section('content')
{{-- About content  --}}
    <!-- contact -->
    <section class="contacT" id="contAct">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#19e273" fill-opacity="1"
                d="M0,160L30,149.3C60,139,120,117,180,101.3C240,85,300,75,360,101.3C420,128,480,192,540,186.7C600,181,660,107,720,74.7C780,43,840,53,900,96C960,139,1020,213,1080,250.7C1140,288,1200,288,1260,277.3C1320,267,1380,245,1410,234.7L1440,224L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z">
            </path>
        </svg>
        <div class="contEnt p-5">
            

            <br>
        </div>
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
                        <input type="text" name="name" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBOx">
                        <input type="phone" name="mobile" required="required" maxlength="10" minlength="10" >
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
{{-- About content  --}}
@endsection