@extends('layout.master')
@section('title', 'online_admission')
@section('content')
    {{-- online_admission --}}
    <section style="background-color:#19e273;">
        <div class="container">
        <div class="online_title text-center">
            <h2>Online Student<span>&nbsp; Admission Form</span></h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem sed sapiente expedita.</p>
        </div>
        <div class="page-wrapper">
            <form method="POST" action="" accept-charset="UTF-8" id="" class="base-form form-vertical form-liner"
                enctype="multipart/form-data">
                <input name="" type="hidden" value="">
                <div class="" style="display:none;">
                    <input name="" type="text" value="" id="" />
                    <input name="" type="text" value="" />
                </div>
                <div class='row'>
                    <div class='col-sm-6'>
                        <div class="form-group">
                            <label class="control-label"> Full Name <span class="required">*</span></label>
                            <input class="form-control online" required=""
                                onkeyup="if (!window.__cfRLUnblockHandlers) return false; resetError($(this))"
                                title="Your full name is required." name="full_name" type="text"
                                data-cf-modified-571e1a693962bed716156702-="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" id="profile-image-group">
                            <label class="control-label" style="font-size: 14px;">Profile Photo
                            </label>
                            <input type="file" name="profile_image" id="profile_image" class="online"
                                data-buttonname="btn-primary"
                                onchange="if (!window.__cfRLUnblockHandlers) >return false; encodeImgtoBase64(this)"
                                data-cf-modified-571e1a693962bed716156702-="">
                            <a href="javascript:void(0);" id="profile_image_reset_btn" style="float:right;">
                                <input type="hidden" name="image_base64" id="convertImg" value="">
                                <i class="fa fa-refresh" aria-hidden="true"></i> Reset File</a> jpg,png files only. Max:
                            25MB
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-sm-6'>
                        <div class="form-group">
                            <label class="control-label"> Email <span class="required">*</span></label>
                            <input class="form-control online" required name="email" type="email" \>
                        </div>
                    </div>
                    <div class='col-sm-6'>
                        <div class="form-group">
                            <label class="control-label"> Address<span class="required">*</span> </label>
                            <input class="form-control online"
                                onkeyup="if (!window.__cfRLUnblockHandlers) return false; resetError($(this))"
                                title="Address is required." required name="address" type="text"
                                data-cf-modified-571e1a693962bed716156702-="">
                        </div>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-sm-6'>
                        <div class="form-group">
                            <label class="control-label"> Mobile <span class="required">*</span> </label>
                            <input class="form-control online"
                                onkeyup="if (!window.__cfRLUnblockHandlers) return false; resetError($(this))"
                                title="Mobile no. is required." required name="mobile" type="text"
                                data-cf-modified-571e1a693962bed716156702-="">
                        </div>
                    </div>
                    <div class='col-sm-6'>
                        <div class="form-group">
                            <label class="control-label"> Academic Level<span class="required">*</span></label>
                            <div class="select-drop">
                                <select class="form-control academic_levelNum online" title="Academic is required."
                                    onkeyup="if (!window.__cfRLUnblockHandlers) return false; resetError($(this))"
                                    id="academic_level" required name="academic_level"
                                    data-cf-modified-571e1a693962bed716156702-="">
                                    <option value="" selected="selected">Select level</option>
                                    <option value="ten">SEE/SLC</option>
                                    <option value="plus_2">+2</option>
                                    <option value="diploma">Diploma</option>
                                    <option value="bachelors">Bachelors</option>
                                    <option value="masters">Masters</option>
                                    <option value="phd">Phd</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class='col-sm-6'>
                        <div class="form-group">
                            <label class="control-label"> Select Course <span class="required">*</span></label>
                            <div class="select-drop">
                                <select class="online">
                                    <option value="python">Python With Django Frame Work</option>
                                    <option value="php">PHP With Lavavel & CI Frame Work</option>
                                    <option value="digital_marketing">Digital Marketing</option>
                                    <option value="flutter">Flutter</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Send" id="sumit" class="btn btn-success">
            </form>
            </div>
    </section>
    {{-- online_admission --}}
@endsection
