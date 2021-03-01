@extends('layout.HR')
@section('title', 'update-profile')
@section('content')
    <style>
        .nav-pills .nav-link {
            border-radius: none;
        }

        a {
            color: rgb(10, 103, 33);
            text-decoration: none;

        }

        #v-pills-tab {
            /* text-align: center; */
            color: seashell;
            font-size: 25px;
            text-transform: capitalize;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {

            background: seagreen;
            /* opacity: 0.8; */
            color: #fff;
            /* border-radius:50px; */
        }

        .nav-link {
            padding: 1rem 1rem;

        }

    </style>

    <section class="">
        <div class="d-flex">
            <div class="dev d-flex container-lg">
                <div class="nav flex-column w-25 nav-pills" id="v-pills-tab" role="tablist" aria-orientation="coloum">
                    <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
                        aria-controls="v-pills-home" aria-selected="true"><i class="fas fa-briefcase"></i>&nbsp;job preference</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
                        aria-controls="v-pills-profile" aria-selected="false"><i class="fas fa-info-circle"></i>&nbsp;basic information</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
                        aria-controls="v-pills-messages" aria-selected="false"><i class="fas fa-graduation-cap"></i>&nbsp;Education</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
                        aria-controls="v-pills-settings" aria-selected="false"><i class="fas fa-check-square"></i>&nbsp;Training</a>
                    <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-work" role="tab" aria-controls="v-pills-work" aria-selected="true"><i class="fas fa-clipboard"></i>&nbsp;Work Experience</a>
                    {{-- <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"></a> --}}
                    {{-- <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">language</a> --}}
                    {{-- <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">social account</a> --}}
                    {{-- <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">referance</a> --}}
                    {{-- <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">other information</a> --}}
                </div>
                &nbsp;
                {{-- jpt --}}
                <div class="tab-content w-75" id="v-pills-tabContent">
                    {{-- job --}}
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">
                        <div class="card container">
                            <div style="font-size: 25px" class="card-header text-capitalize d-flex justify-content-between">
                                <div>
                                    <p>job</p>
                                </div>
                                <div>
                                    <p> <a href="#">Edit</a></p>
                                </div>
                            </div>
                            <input class="form-control form-control-lg" type="text" placeholder="Job categories"> <br>
                            <input class="form-control form-control-lg" type="text" placeholder="Looking for"><br>
                            <input class="form-control form-control-lg" type="text" placeholder="Available for"><br>
                            <input class="form-control form-control-lg" type="text" placeholder="Specializations ">
                            <p>Course of study or core competencies i.e. Accounts, Computing, Branding etc.</p>
                            <input class="form-control form-control-lg" type="text" placeholder="Skills">
                            <div class="form-group d-flex container">
                                <label for="exampleFormControlSelect1" style="font-size:25px;">Expected Salary</label>
                                &nbsp;
                                <select class="form-control form-control-lg w-25 text-capitalize"
                                    id="exampleFormControlSelect1">
                                    <option>above</option>
                                    <option>below</option>
                                    <option>above</option>
                                </select>

                                <select class="form-control form-control-lg w-25" id="exampleFormControlSelect1">
                                    <option>Rs.13,000/-</option>
                                    <option>Rs.15,000/-</option>
                                    <option>Rs.18,000/-</option>
                                    <option>Rs.25,000/-</option>
                                    <option>Rs.30,000/- </option>
                                    <option>Rs.50,000/-</option>
                                </select>
                            </div>

                            <div class="form-group d-flex container">
                                <label for="exampleFormControlSelect1" style="font-size:25px;">Current Salary &nbsp;
                                </label> &nbsp;
                                <select class="form-control form-control-lg w-25 text-capitalize"
                                    id="exampleFormControlSelect1">
                                    <option>above</option>
                                    <option>below</option>
                                    <option>above</option>
                                </select>

                                <select class="form-control form-control-lg w-25" id="exampleFormControlSelect1">
                                    <option>Rs.13,000/-</option>
                                    <option>Rs.15,000/-</option>
                                    <option>Rs.18,000/-</option>
                                    <option>Rs.25,000/-</option>
                                    <option>Rs.30,000/- </option>
                                    <option>Rs.50,000/-</option>
                                </select>
                            </div>

                            <div class="form-group container">
                                <label for="exampleFormControlTextarea1">Career Objective Summary</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                            <div class="text-center p-2">
                                <button class="btn btn-success w-25" type="submit">Save</button>
                                <button class="btn btn-warning w-25" type="submit">cancle</button>
                            </div>

                        </div>
                    </div>
                    {{-- job --}}

                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        {{-- basic info --}}
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <div class="card container">
                                <div style="font-size: 25px" class="card-header text-capitalize d-flex justify-content-between">
                                    <div>
                                        <p>basi info</p>
                                    </div>
                                    <div>
                                        <p> <a href="#"><i class="far fa-edit"></i>&nbsp;Edit</a></p>
                                    </div>
                                </div>
                                <label for="text"><span>Name</span>
                                    <input class="form-control form-control-md" type="text"
                                        placeholder="Job categories"></label>
                                <label for="radio">gander</label>
                                <select class="form-control form-control-md  text-capitalize"
                                    id="exampleFormControlSelect1">
                                    <option>Male</option>
                                    <option>fmale</option>
                                    <option>other</option>
                                </select>

                                <label for="text"><span>Date of Birth</span>
                                    <input class="form-control form-control-md" type="date"
                                        placeholder="Job categories"></label>
                                <label for="text">Marital status</label>
                                <select class="form-control form-control-md  text-capitalize"
                                    id="exampleFormControlSelect1">
                                    <option>......</option>
                                    <option>married</option>
                                    <option>unmarried</option>
                                </select>
                                <label for="text">Religion </label>
                                <select class="form-control form-control-md  text-capitalize"
                                    id="exampleFormControlSelect1">
                                    <option>.......</option>
                                    <option>hinduism</option>
                                    <option>sikhism</option>
                                    <option>bahal</option>
                                    <option>christianity</option>
                                    <option>islam</option>
                                    <option>jainism</option>
                                    <option>buddhism</option>

                                </select>
                                <label for="text">Nationality</label>
                                <select class="form-control form-control-md  text-capitalize"
                                    id="exampleFormControlSelect1">
                                    <option>......</option>
                                    <option>Nepali</option>
                                    <option>pakistani</option>
                                    <option>indian</option>
                                    <option>chinese</option>
                                </select> <br>
                                <label for="text"><span>Current Address</span>
                                    <input class="form-control form-control-md" type="text"
                                        placeholder="Current Address"></label>
                                <br>
                                <label for="text"><span>Permanent Address</span>
                                    <input class="form-control form-control-md" type="text"
                                        placeholder="Current Address"></label>
                                <br>
                                <label for=""><span>Contact number</span>
                                    <input class="form-control form-control-md" type="tel" placeholder="+977"></label>


                                <div class="text-center p-2">
                                    <button class="btn btn-success w-25" type="submit">Save</button>
                                    <button class="btn btn-warning w-25" type="submit">cancle</button>
                                </div>

                            </div>
                        </div>
                        {{-- base info --}}
                    </div>

                    {{-- education --}}
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        {{-- education --}}
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <div class="card container">
                                <div style="font-size: 25px" class="card-header text-capitalize d-flex justify-content-between">
                                    <div>
                                        <p>education</p>
                                    </div>
                                    <div>
                                        <p> <a href="#"><i class="far fa-edit"></i>&nbsp;Edit</a></p>
                                    </div>
                                </div>
                                <label for="radio">Degree</label>
                                <select class="form-control form-control-md  text-capitalize"
                                    id="exampleFormControlSelect1">
                                    <option>......</option>
                                    <option>ph.d</option>
                                    <option>master</option>
                                    <option>bachelor</option>
                                    <option>diploma</option>
                                    <option>intermetide</option>
                                    <option>+2</option>
                                    <option>slc(10th)</option>
                                    <option>other</option>
                                </select>

                                <label for="text">Education Program</label>
                                <select class="form-control form-control-md  text-capitalize"
                                    id="exampleFormControlSelect1">
                                    <option>......</option>
                                    <option>Electronics</option>
                                    <option>Civil</option>
                                    <option>Electronics</option>
                                    <option>Computer</option>

                                </select>
                                <label for="text">Education Board </label>
                                <select class="form-control form-control-md  text-capitalize"
                                    id="exampleFormControlSelect1">
                                    <option>.......</option>
                                    <option>Ctevt</option>
                                    <option>t.u university</option>
                                    <option>p.u university</option>
                                    <option>k.u university</option>

                                </select>
                                <label for="text">Name of Institute</label>
                                <select class="form-control form-control-md  text-capitalize"
                                    id="exampleFormControlSelect1">
                                    <option>......</option>
                                    <option>kathmandu university</option>
                                    <option></option>
                                    <option></option>
                                    <option></option>
                                </select> <br>
                                <div class="form-group container">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            Currently studing here?
                                        </label>
                                    </div>
                                </div>
                                <label for="text"><span>Started Year</span>
                                    <input class="form-control form-control-md" type="date"
                                        placeholder="Current Address"></label>
                                <br>

                                <div class="text-center p-2">
                                    <button class="btn btn-success w-25" type="submit">Save</button>
                                    <button class="btn btn-warning w-25" type="submit">cancle</button>
                                </div>

                            </div>
                        </div>
                        {{-- education --}}
                    </div>
                    {{-- education --}}

                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

                        {{-- traning --}}
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <div class="card container">
                                <div style="font-size: 25px" class="card-header text-capitalize d-flex justify-content-between">
                                    <div>
                                        <p>traning</p>
                                    </div>
                                    <div>
                                        <p> <a href="#"><i class="far fa-edit"></i>&nbsp;Edit</a></p>
                                    </div>
                                </div>
                                <label for="radio">Name of the Training</label>
                                <select class="form-control form-control-md  text-capitalize"
                                    id="exampleFormControlSelect1">
                                    <option>......</option>
                                    <option>web desing </option>

                                </select>

                                <label for="text">Institution Name</label>
                                <select class="form-control form-control-md  text-capitalize"
                                    id="exampleFormControlSelect1">
                                    <option>......</option>
                                    <option>MindRisers</option>

                                </select>
                                <label for="text">Duration</label>
                                <option class=" d-flex  text-capitalize" id="exampleFormControlSelect1">
                                    <input type="number">
                                    <select class="form-control form-control-md  text-capitalize"
                                        id="exampleFormControlSelect1">
                                        <option>......</option>
                                        <option>days</option>
                                        <option>week</option>
                                        <option>month</option>
                                        <option>year</option>
                                    </select>
                                </option>
                                <br>
                            </div>
                            <label for="text"><span>Completion Year</span>
                                <input class="form-control form-control-md" type="date"
                                    placeholder="Current Address"></label>
                            <br>

                            <div class="text-center p-2">
                                <button class="btn btn-success w-25" type="submit">Save</button>
                                <button class="btn btn-warning w-25" type="submit">cancle</button>
                            </div>
                        </div>
                    </div>
                    {{-- traning --}}

                    {{-- work --}}
                    <div class="tab-pane fade" id="v-pills-work" role="tabpanel" aria-labelledby="v-pills-work-tab">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <div class="card container">
                                <div style="font-size: 25px" class="card-header text-capitalize d-flex justify-content-between">
                                    <div>
                                        <p>work experience</p>
                                    </div>
                                    <div>
                                        <p> <a href="#"><i class="far fa-edit"></i>&nbsp;Edit</a></p>
                                    </div>
                                </div>
                                <label for="radio">Organization name</label>
                                <select class="form-control form-control-md  text-capitalize"
                                    id="exampleFormControlSelect1">
                                    <option>software company</option>
                                    <option>mindrisers company</option>
                                    <option>IT company</option>

                                </select>

                                <label for="text">nature of Organization</label>
                                <select class="form-control form-control-md  text-capitalize"
                                    id="exampleFormControlSelect1">
                                    <option>......</option>
                                    <option>data entry</option>
                                    <option>software company</option>
                                    <option>IT company</option>
                                </select>

                                <label for="text">Job location</label>
                                <select class="form-control form-control-md  text-capitalize"
                                    id="exampleFormControlSelect1">
                                    <option>......</option>
                                    <option>kathmandu</option>
                                    <option>Biratnagar</option>
                                    <option>jhapa</option>
                                    <option>thikathali</option>
                                    <option>jadibutti</option>
                                </select>

                                <label for="text">Job Title</label>
                                <select class="form-control form-control-md  text-capitalize"
                                    id="exampleFormControlSelect1">
                                    <option>......</option>
                                    <option>MindRisers</option>
                                </select>

                                <label for="text">Job category</label>
                                <select class="form-control form-control-md  text-capitalize"
                                    id="exampleFormControlSelect1">
                                    <option>......</option>
                                    <option>banking/insurance/finnancial services</option>
                                    <option>secretarial/front-office/data entry</option>
                                    <option>IT & telecommunication</option>
                                </select>

                                <label for="text">Job level</label>
                                <select class="form-control form-control-md  text-capitalize"
                                    id="exampleFormControlSelect1">
                                    <option>......</option>
                                    <option>Enter</option>
                                    <option>enter</option>
                                    <option>enter</option>
                                </select>
                                </div class="container">
                                <label for="text"><span>Start Date</span>
                                <input class="form-control form-control-md" type="date"
                                    placeholder="Current Address"></label>
                             <br>
                             <div class="text-center p-2">
                                <button class="btn btn-success w-25" type="submit">Save</button>
                                <button class="btn btn-warning w-25" type="submit">cancle</button>
                            </div>
                        </div>
                    </div>
                    
                    {{-- work  --}}
                    

                </div>
            </div>
        {{-- jpt --}}
        </div>
        </div>
    </section>
@endsection
