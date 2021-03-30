<!DOCTYPE html> 
<html>
<head>
    <title>Admission Panel</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href=" https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body> 
        
<div class="container">
  <div class="row justyfy-content-center mt-4">
    <div class="col-md-10 m-auto">
     <div class="card text-center">
  <div class="card-header" style="background-color: #3a364f;color: white">
    <h1>SSB Freelancer Club</h1>
    <h4>Addmission Section</h4>
  </div>
 
</div>
    </div>

    <!--- Nav bar Start-->

    <div class="col-md-10 m-auto">
    <nav class="navbar navbar-expand-lg" style="background-color:    #f9e79f   ">
  <a class="navbar-brand" href="{{url('./')}}"><i class="fa fa-home"></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"style="background-color: black;color: white" >
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a style="font-size: 20px;color: blue;font-weight: bold;" class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li  class="nav-item">
        <a style="font-size: 20px;color: blue;;font-weight: bold" class="nav-link" href="{{route('students.add')}}">Apply Admission</a>
      </li>

      <li  class="nav-item">
        <a style="font-size: 20px;color: blue;;font-weight: bold" class="nav-link" href="{{route('posts.alladmissionpostview')}}">Admission Notice</a>
      </li>
      <li  class="nav-item">
        <a style="font-size: 20px;color: blue;;font-weight: bold" class="nav-link" href="{{route('posts.eventallview')}}">All Course</a>
      </li>

      <li class="nav-item dropdown">
      <a style="font-size: 20px;color: blue;;font-weight: bold" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Payment Option
      </a>
      <div class="dropdown-menu">
        <a  class="dropdown-item" href="{{route('posts.paymentmethod')}}">Payment Method</a>
        <a class="dropdown-item" href="{{route('paymentss.checkview')}}">Payment Check</a>
        
      </div>
    </li>

      

 <!--     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
     
    </ul>
  </div>
</nav>
    </div>
<!--- Nav bar end-->
    <!--- Main Body-->
    <div class="col-sm-10 m-auto">
<!--- Login Panel--> 
  
            <div class="card-body" style="background-color:   #b4c0c4 ">
                     @if(Session::get('success'))
                        <div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  
  <strong>{{session::get('success')}}</strong> 
  
</div> 
@endif
                <br> <br>
                <form action="{{route('login')}}" method="POST">
                    @csrf
              <div class="row justify-content-center">
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                    
                    <div class="col-sm-3">
                    
                    </div>

                    <div class="col-sm-6"> 
                   <div class="col-sm-10" style="margin-left: 30px">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                       <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"autofocus placeholder="Enter Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                    </div>
                    </div>
                    <div class="col-sm-10"style="margin-left: 30px"> 
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Enter Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    </div>
                    <div class="col-sm-10"style="margin-left: 30px">
                    <div class="form-group">
                        <input type="submit" value="Sign In" class="btn btn-primary  float-right">
                    </div>
                    </div>
                    </div>
                    <div class="col-sm-3">
                     
                
                </div>
            </div>
                </form>
                <br>
                
                <div class="d-flex justify-content-center links">
                   <p style="color: red;font-size: 18px;font-weight: bold;"> Don't have an account?&nbsp;&nbsp;&nbsp;&nbsp;</p> <a style="color: green;font-size: 18px;font-weight: bold;"  href="{{route('students.add')}}">Apply Admission</a>
                </div>
                <div class="d-flex justify-content-center">
                     @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}"><strong style="color: blue;font-size: 18px;font-weight: bold;">
                                        {{ __('Forgot Your Password?') }}</strong>
                                    </a>
                                @endif
                </div>
            </div>


            
               
           
        



   <!--- Login Panel End-->
  

  <!--- Content Footer-->
  <div class="card-footer text-muted text-center"style="background-color: #3a364f;color: white">
    Copyright 2020.&nbsp;&nbsp; All Rights Reserved<br>
 Powered by SSB Freelancer Club
  
  </div>
</div>
    </div>
  </div>
</div>





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://apis.google.com/js/platform.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>

  
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>

  
 <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0" nonce="jrPyqTl9"></script>
  </script>


</body>
</html>