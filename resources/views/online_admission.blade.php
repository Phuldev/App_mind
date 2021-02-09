@extends('layout.master')
@section('title', 'online_admission')
@section('content')
    {{-- online_admission --}}
    <section class="Online_admission" stle="background-image: url(../image/air.png);background-repeat:no-repeat;background-position: center;">
        <div class="container">
            <div class="online_title">Registration</div>
            <form action="#">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" placeholder="Enter Your name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" placeholder="Enter Your name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" placeholder="Enter Your name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" placeholder="Enter Your name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" placeholder="Enter Your name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" placeholder="Enter Your name" required>
                    </div>
                </div>
                <div class="gender-details">
                    <span class="gender-title">Gender</span>
                    <div class="category">
                        <label for="">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                        <label for="">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                        <label for="">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Register">
                </div>
            </form>
        </div>

    </section>
    {{-- online_admission --}}
@endsection
