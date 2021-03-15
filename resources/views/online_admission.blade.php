@extends('layout.master')
@section('title', 'online_admission')

@section('content')
{{-- online_admission --}}
    <section class="Online_admission" stle="background-image: url(../image/air.png);background-repeat:no-repeat;background-position: center;">
        <div class="container">
            <div class="online_title" data-aos="fade-up" data-aos-delay="400">online student admission form</div>
            <p style="font-size:20px;text-align:center">Please fill out the form below and get enrolled now!</p>
                            {{-- php code  --}}
                            @if(Session::has('message_sent'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('message_sent')}}
                            </div>
                            @endif
                             {{-- php code  --}}
            <form action="{{route('online.send')}}" method="POST" enctype="multipart/form-data"> {{--php code--}}
                @csrf
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input data-aos="fade-up" data-aos-delay="400" type="text" name="fname" placeholder="Enter Your name" required>
                    </div>
                    <div class="input-box">
                        <span style="font-size: 30px">Upload Imgae</span>
                        <input data-aos="fade-up" data-aos-delay="400" type="file" name="fileToUpload" id="fileToUpload" required>
                    </div>
                    <div class="input-box">
                        <span class="details">E-mail</span>
                        <input data-aos="fade-up" data-aos-delay="400" type="email" name="ad_email" placeholder="Enter Your email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Academic Level</span>
                        <input data-aos="fade-up" data-aos-delay="400" type="text" name="academin" placeholder="Enter Your Academic Qulification " required>
                    </div>
                    <div class="input-box">
                        <span class="details">Mobile Number</span>
                        <input data-aos="fade-up" data-aos-delay="400" type="phone" name="ad_phone" placeholder="Enter Your Mobile" required minlength="10" maxlength="10">
                    </div>
                    <div class="input-box">
                        <span class="details">Address</span>
                        <input data-aos="fade-up" data-aos-delay="400" type="text" name="Address" placeholder="Enter Your Address" required>
                    </div>
                    <div class="input-box" data-aos="fade-up" data-aos-delay="400">
                        <span class="details">Courses</span>
                        {{-- <input type="text" name="courses" placeholder="Enter Your Courses" required> --}}
                        <select name="courses" id="" class="combo-box">
                            <option data-aos="fade-up" data-aos-delay="400" name="courses"> PHP with its desired frameworks </option>
                            <option data-aos="fade-up" data-aos-delay="400" name="courses"> Python with its desired frameworks</option>
                            <option data-aos="fade-up" data-aos-delay="400" name="courses">graphic design </option>
                            <option data-aos="fade-up" data-aos-delay="400" name="courses"> PHP with its desired frameworks </option>
                            <option data-aos="fade-up" data-aos-delay="400" name="courses"> Python with its desired frameworks</option>
                            <option data-aos="fade-up" data-aos-delay="400" name="courses">graphic design </option>
                            <option data-aos="fade-up" data-aos-delay="400" name="courses"> PHP with its desired frameworks </option>
                            <option data-aos="fade-up" data-aos-delay="400" name="courses"> Python with its desired frameworks</option>
                            <option data-aos="fade-up" data-aos-delay="400" name="courses">graphic design </option>
                            {{-- <option name="courses"></option> --}}
                        </select>

                    </div>
                    <div class="input-box">
                        <span class="details">Schedule</span>
                        {{-- <input type="text" name="message" placeholder="Your schedule i.e. Morning/Day/Evening Shift" required> --}}
                        <select name="message" id="" class="combo-box">
                            <option data-aos="fade-up" data-aos-delay="400" name="message"> Morning Shift</option>
                            <option data-aos="fade-up" data-aos-delay="400" name="message"> Day Shift </option>
                            <option data-aos="fade-up" data-aos-delay="400" name="message"> Evening Shift</option>
                        </select>
                    </div>
                </div>
                {{-- <div class="gender-details">
                    <input type="radio" name="gender" id="dot-1">
                    <input type="radio" name="gender" id="dot-2">
                    <input type="radio" name="gender" id="dot-3">
                    <span class="gender-title">Gender</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Male</span>
                        </label>
                        <label for="dot-3">
                            <span class="dot three"></span>
                            <span class="gender">Male</span>
                        </label>
                    </div>
                </div> --}}
                <div class="button">
                    <input type="submit" value="Register">
                </div>
            </form>
        </div>
    </section>
    {{-- online_admission --}}
@endsection
