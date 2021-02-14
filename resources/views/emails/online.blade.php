<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>online student</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .online_titile
        {
            text-align: center;
            text-transform: capitalize;
            font-size: 20px;
            font-weight: bold;
            color:rgb(46, 238, 46)
        }
    </style>

</head>
<body>
    <section class="container">
        <div class="online_titile">
            <h1>Online Student <span>Admission Form</span></h1>
        </div> 
    <table class="table">
        <thead>
          <tr>
            <th scope="col">S.N.</th>
            <th scope="col">Full Name</th>
            <th scope="col">Image</th>
            <th scope="col">E-mail</th>
            <th scope="col">Education</th>
            <th scope="col">Mobile No.</th>
            <th scope="col">Address</th>
            <th scope="col">Courses</th>
            <th scope="col">Schedule</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>{{$online_ad['fname']}}</td>
            <td>{{$online_ad['fileToUpload']}}</td>
            <td>{{$online_ad['ad_email']}}</td>
            <td>{{$online_ad['academin']}}</td>
            <td>{{$online_ad['ad_phone']}}</td>
            <td>{{$online_ad['Address']}}</td>
            <td>{{$online_ad['courses']}}</td>
            <td>{{$online_ad['message']}}</td>
          </tr>
        </tbody>
      </table>
      <footer>
          <div>
              <h2 class="text-success">Mind Risers Consortium Pvt. Ltd.</h2>
          </div>
      </footer>
    </section>

    {{-- <h1>Online Admission</h1>
    <p>Full Name : {{$online_ad['fname']}}</p>
    <p>Upload Imgae: {{$online_ad['fileToUpload']}}</p>
    <p>E-mail: {{$online_ad['ad_email']}}</p>
    <p>Academic Level : {{$online_ad['academin']}}</p>
    <p>Mobile Number: {{$online_ad['ad_phone']}}</p>
    <p>Full Adresh: {{$online_ad['Address']}}</p>
    <p>Courses: {{$online_ad['courses']}}</p>
    <p>Any message : {{$online_ad['message']}}</p> --}}

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html> 