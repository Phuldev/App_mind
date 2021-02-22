@extends('layout.HR')
@section('title', 'humanR')
@section('content')
       {{-- secrch box  --}}
       <section class="search-page badge-green bg-transparent">
        <div class="header">
            <form action="">
                <div class="form-box">
                    <input type="text" class="search-field skills" name="search" placeholder="Skills,Keywords...">
                    <input type="text" class="search-field skills" name="location" placeholder="Location...">
                    <button class="search-btn" name="search" type="submit"><i class="fas fa-search"></i>Search</button>
                </div>
            </form>
        </div>
        <div class="text-center text-success m-2" style="font-size: 25px;">
            <a style="text-decoration: none" href="#"class="text-success" >All jobs</a> &nbsp; &nbsp;
            <a style="text-decoration: none" href="#" class="text-success" >by Organisation</a> &nbsp; &nbsp;
            <a style="text-decoration: none" href="#" class="text-success" >by Job Category</a> &nbsp; &nbsp;
            <a style="text-decoration: none" href="#" class="text-success" >by Job Title</a> &nbsp; &nbsp;
        </div>
    </section>
    {{-- search box  --}}
    <section class="bg-#14d25">
        <div class="d-flex">
            <div class="col-sm-6 w-50 ">
                <div class="card">
                    <div class="card-body">
                        <p class="card-text">Refine Your Job Search</p>
                    </div>
                    <div class="card" style="width:100%;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><input type="text" class="form-control"
                                    placeholder="Job Categories"></li>
                            <li class="list-group-item"><input type="text" class="form-control"
                                    placeholder="Industries"></li>
                            <li class="list-group-item"><input type="text" class="form-control" placeholder="Level">
                            </li>
                            <li class="list-group-item"><input type="text" class="form-control"
                                    placeholder="Education"></li>
                            <li class="list-group-item"><input type="text" class="form-control"
                                    placeholder="Employment Type"></li>
                            <li class="list-group-item"><input type="text" class="form-control"
                                    placeholder="Location"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 w-50">
                <div class="card">
                    <div class="card-body d-flex justify-content-between">
                        <p>Showing 1 - 6 job of 442 </p>
                        <p>Posted: All time</p>
                    </div>
                    <div class="card w-99 h-25 m-2">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize">mindrisers consortium Pvt. Ltd</h5>
                            <p class="card-text">postion:-Php with Laravel</p>
                            <p class="card-text">Education:-BE in Computer</p>
                            <p class="card-text">vacancy:2</p>
                            <div class="card-footer d-flex justify-content-between">
                                <p>Apply Before: 1 week from now</p>
                                <p>Views: 667 </p>
                                <p>share</p>
                            </div>
                        </div>
                    </div>
                    <div class="card w-99 h-25 m-2">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize">mindrisers consortium Pvt. Ltd</h5>
                            <p class="card-text">postion:-Php with Laravel</p>
                            <p class="card-text">Education:-BE in Computer</p>
                            <p class="card-text">vacancy:2</p>
                            <div class="card-footer d-flex justify-content-between">
                                <p>Apply Before: 1 week from now</p>
                                <p>Views: 667 </p>
                                <p>share</p>
                            </div>
                        </div>
                    </div>
                    <div class="card w-99 h-25 m-2">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize">mindrisers consortium Pvt. Ltd</h5>
                            <p class="card-text">postion:-Php with Laravel</p>
                            <p class="card-text">Education:-BE in Computer</p>
                            <p class="card-text">vacancy:2</p>
                            <div class="card-footer d-flex justify-content-between">
                                <p>Apply Before: 1 week from now</p>
                                <p>Views: 667 </p>
                                <p>share</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
