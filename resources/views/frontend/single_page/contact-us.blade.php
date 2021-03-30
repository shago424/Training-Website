@extends('frontend.layouts.master')
  @section('content')
  <div class="row" style="padding-top: -20px">
        <div class="col-md-12" style="margin: auto;padding-top: 0">
          
             <div class="card">

    <img src="{{asset('public/frontend/')}}/image/breadcrumb.jpg" style="width: auto;height: 100px">
      
             <div class="container" style="position: relative;padding-right: 10px">
            <div class="row" style="position: absolute;margin-top: -100px;margin-left: 450px;">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2 style="color: white">Contact Us</h2>
                        <div class="breadcrumb__option">
                            <a style="font-size: 18px;color: white" href="{{url('./')}}">Home</a>

                        </div>
                    </div>
                </div>
            </div>
        
        </div>
              
              <div class="card-body" style="height: auto;padding: 40px">
    <section class="about_us">
    <div class="container">
      <div class="row">
        <div class="col-md-7" style="padding-left: 2px">
          <h3 style="padding-top: 15px;padding-bottom: 5px;border-bottom: 1px solid black;width: 39%;">Send us a Message</h3>
           @if(Session::get('success'))
                        <div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  
  <strong>{{session::get('success')}}</strong> 
  
</div> 
@endif
          <form method="POST" action="{{route('contact.store')}}" id="myform">
            @csrf
            <div class="form-row" style="background: #ddd;">
              <div class="form-group col-md-6">
                <label for="name">Name <span style="color: red;font-weight: bold;">*</span></label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Write Your Name" required>
              </div>
              <div class="form-group col-md-6">
                <label for="email">Email <span style="color: red;font-weight: bold;">*</span></label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Write Your Email"required>
              </div>
              <div class="form-group col-md-6">
                <label for="mobile_no">Mobile No <span style="color: red;font-weight: bold;">*</span></label>
                <input type="text" name="mobile_no" id="mobile_no" class="form-control" placeholder="Write Your Mobile No"required>
              </div>
              <div class="form-group col-md-6">
                <label for="address">Address <span style="color: red;font-weight: bold;">*</span></label>
                <input type="text" name="address" id="address" class="form-control" placeholder="Write Your Address"required>
              </div>
              <div class="form-group col-md-12">
                <label for="message">Message <span style="color: red;font-weight: bold;">*</span></label>
                <textarea name="msg" class="form-control" id="msg" placeholder="Write Your Message" rows="5"required></textarea>
              </div>
              <div class="form-group col-md-6">
                <button type="submit" class="btn btn-primary">Send Message</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-5">
          <h3 style="padding-top: 15px;padding-bottom: 5px;border-bottom: 1px solid black;width: 49%;">Office Location</h3>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.5983460988937!2d90.42140761445673!3d23.79731309290065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7ba919c9e8f%3A0x74c8c1dc2d04bd18!2sNatun%20Bazar%20Foot%20Over%20Bridge%2C%20Dhaka%201212!5e0!3m2!1sen!2sbd!4v1575619103631!5m2!1sen!2sbd" width="100%" height="410" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
      </div>
    </div>
  </section>

  <script>
$(function () {
  
  $('#myform').validate({
    rules: {

      
      name: {
        required: true,
        
      },
      mobile_no: {
        required: true,
        
      },
      msg: {
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
      cpassword: {
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

      cpassword: {
        
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

  
              </div>
              </div>
           </div>
           </div>
      

  @endsection