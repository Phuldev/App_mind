@extends('layout.HR')
@section('title','Register')
@section('content')
<style>
.form-hr{
    display: flex;
}
.form-hr .form-hr-ls
{
    /* border:1px solid red; */
    width: 50%;
    background-color:rgb(10,103, 33);
    z-index:1; 
}
.form-hr .form-hr-ls img
{
  opacity: 0.5;
  width: 100%;
  height:100vh;
}
.form-hr .form-hr-rs
{
    /* border:1px solid blue; */
    width:50%;
}
.form-hr .form-hr-rs form input
{
  font-size: 20px;
  margin:15px;
}
.form-hr .form-hr-rs form input-group-text i
{
  font-size:20px;
  /* color:rgb(103, 255, 3); */
}
.hr-social 
{
    font-size:25px;  
}
.hr-social .facebook a
{
     line-style:none; 
     text-decoration: none;
     color:#3b5998;
}
.hr-social .google a
{
     line-style:none; 
     text-decoration: none;
     color:#Ea4335;
}
.text-with-login
{
  text-align: center;
  font-size:20px;
}
.text-with-login span a
{
  text-decoration: none;
}
.hr-contents{
  position: relative;
  top:-35rem;
  left:5%;
  color:#fff;
}
</style>

<section class="form-hr container">
    <div class="form-hr-ls">
        <div><img src="../image/logo.png" alt="">
          <div class="hr-contents">
            <div><h1>Register for a better opportunity! </h1></div>
            <div><h3><i class="far fa-check-circle"></i>&nbsp; &nbsp;&nbsp; &nbsp;#1 Job Site of Nepal</h3>
            <p>Alexa Ranking, Google Analytics, Social Medias, Jobseeker and Employer have always put us on top!</p></div>
          </div>
        </div>
    </div>
    <div class="form-hr-rs">
        <div class="container">
            <div class="hr-form-header text-center">
                <h1 class="text-success text-bold text-capitalize">Create your free Jobseeker Account</h1>
                <p style="font-size: 20px">Register with basic information, Complete your profile and start applying for the job for free! </p>
            </div>
            <form>
                <div class="input-group mb-2 mr-sm-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class="fas fa-user text-success"></i></div>
                  </div>
                  <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                </div>
    
                <div class="form-group">
                    <select class="form-control" style="font-size: 20px" id="exampleFormControlSelect1">
                    <option> Data Entry Operator/ Validation Operator </option>
                      <option>Graphic Designer </option>
                      <option> Technical Support Trainee </option>
                      <option>ales and Marketing Intern </option>
                      <option> Engineer (Electrical or Electronics and Communication) </option>
                      <option>Engineer </option>
                    </select>
                  </div>
                  
              <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-phone text-success"></i></div>
                </div>
                <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Enter your Mobile Number">
              </div>
    
              <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-envelope text-success"></i></div>
                </div>
                <input type="email" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Enter Your E-mail">
              </div>
    
              <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-lock text-success"></i></div>
                </div>
                <input type="password" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Password">
              </div>
    
              <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fas fa-lock text-success"></i></div>
                </div>
                <input type="password" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Password">
              </div>
              <input type="submit" class="btn btn-success btn-lg btn-block" name="" value="Register">

              <p class="text-with-login">Already have jobseeker account?
                <span><a href="/login">log in</a></span>
              </p>
              <hr>
              <h2 class="text-center text-uppercase text-success text-bold">or</h2>

              <div class="d-flex justify-content-around hr-social">
                  <div class="facebook">
                      <a href="https://www.facebook.com/" class="">
                        <i class="fab fa-facebook"></i>&nbsp;Login with facebook</a>
                  </div>
                  <div class="google">
                      <a href="https://www.google.com/" class="">
                      <i class="fab fa-google"></i>&nbsp;Login with Google</a></div>
              </div>

            </form>
        </div>
  </div>  
</section>
@endsection


