@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="font-size: 25px;background-color:  #103642 ;font-weight: bold;color: white"> <a style="color: red" href="{{route('login')}}"> <i class="fa fa-home"> </i></a> Admission Form
                    <a class="btn btn-warning float-right" href="{{route('login')}}">Login</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" id="myform">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }} <font class="text-danger">*</font></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">Date Of Birth<font class="text-danger">*</font></label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}"placeholder="Enter Date Of Birth">

                                @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">Gender<font class="text-danger">*</font></label>
                            <div class="col-md-6">
                                <select name="gender" id="gender" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" >
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Other">Other</option>
                                </select>

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="edu" class="col-md-4 col-form-label text-md-right">Educational Qualification<font class="text-danger">*</font></label>
                            <div class="col-md-6">
                                <select name="edu" id="edu" class="form-control @error('edu') is-invalid @enderror" name="edu" value="{{ old('edu') }}" >
                                    <option value=""> Select Educational Qualification</option>
                                    <option value="JSC">JSC</option>
                                    <option value="SSC">SSC</option>
                                    <option value="HSC">HSC</option>
                                    <option value="Degree or Honors">Degree or Honors</option>
                                    <option value="Masters">Masters</option>
                                </select>

                                @error('edu')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="course" class="col-md-4 col-form-label text-md-right">Course Name<font class="text-danger">*</font></label>
                            <div class="col-md-6">
                                <select name="course" id="course" class="form-control @error('course') is-invalid @enderror" name="course" value="{{ old('course') }}" >
                                    <option value=""> Select Course Name</option>
                                    <option value="Web Design">Web Design</option>
                                    <option value="Web Design and Development">Web Design and Development</option>
                                    <option value="Graphics Design">Graphics Design</option>
                                    <option value="SEO">SEO</option>
                                    <option value="Digital Marketing">Digital Marketing</option>
                                    <option value="Microsft Office Application">Microsft Office Application</option>
                                </select>

                                @error('course')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Address<font class="text-danger">*</font></label>

                            <div class="col-md-6">
                                <input id="address" name="address" type="text" class="form-control @error('address') is-invalid @enderror" address="address" value="{{ old('address') }}"placeholder="Enter Address" >

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">Mobile<font class="text-danger">*</font></label>

                            <div class="col-md-6">
                                <input id="mobile" name="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" mobile="mobile" value="{{ old('mobile') }}"placeholder="Enter Mobile" >

                                @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address<font class="text-danger">*</font></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password<font class="text-danger">*</font></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password<font class="text-danger">*</font></label>

                            <div class="col-md-6">
                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" placeholder="Enter Confirm Password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

               <div class="card-footer text-muted text-center"style="background-color:  #103642 ;color: white">
    Copyright 2020.&nbsp;&nbsp; All Rights Reserved<br>
 Powered by SSB Freelancer Club
  
  </div>
            </div>
        </div>
    </div>
</div>

<script>
$(function () {
  
  $('#myform').validate({
    rules: {

      dob: {
      required: true,
        
      },
      edu: {
      required: true,
        
      },
      name: {
        required: true,
        
      },
      mobile: {
        required: true,
        
      },
      gender: {
        required: true,
        
      },
       
      address: {
      required: true,
        
      },


      email: {
        required: true,
        email: true
       
      },
      password: {
        required: true, 
        minlength: 6
      },
      password_confirmation: {
      required: true,
      equalTo:'#password'
        
      }
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
        
      },

      name: {
        required: "Please enter Name",
        
      },
      
      password: {
        required: "Please enter password",
        minlength: "Your password must be at least 6 characters long"
      },

      password_confirmation: {
        
        equalTo:"Confirm password Does Not Match",
        }
   
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
@endsection
