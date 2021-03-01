@extends('layout.HR')
@section('title','Login')
@section('content')


<style>
.form-hr{
    display: flex;
}
.form-hr .form-hr-rs
{
    /* border:1px solid red; */
    width: 50%;
    background-color:rgb(10,103, 33);
    z-index:1; 
}
.form-hr .form-hr-rs img
{
  opacity: 0.5;
  width: 100%;
  height:50vh;
}
.form-hr .form-hr-ls
{
    /* border:1px solid blue; */
    width:50%;
}
.form-hr .form-hr-rs form input
{
  font-size: 20px;
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
  top:-10rem;
  left:5%;
  color:#fff;
}
</style>

<section class="form-hr container">
    <div class="form-hr-ls">
        <div class="container">
            <div class="hr-form-header text-center">
                <h1 class="text-success text-bold text-capitalize">
                  Welcome back to MindRisers!</h1>
                <p style="font-size:25px">Login with your registered Email & Password</p>
            </div>
            <form >    
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
                <input type="password" class="form-control" id="inlineFormInputGroupUsername2" re placeholder="Password">
              </div>

              <input type="submit" class="btn btn-success btn-lg btn-block" name="" value="Login"> <br>

              <p class="text-with-login">Don't have an account?
                <span><a href="/register-want">Register Now</a></span>
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
    <div class="form-hr-rs">
        <div><img src="../image/logo.png" alt="">
            <div class="hr-contents">
              <div><h1>Mark yourself as
                Actively Seeking Job</h1></div>
              <div><h3>Boost your visibility to over 32,000 employers <br> We have enabled this feature  <br> targeting superheros
                who lost their jobs during this crisis.</h3>
              </div>
            </div>
          </div> 
  </div>  
</section>
@endsection


