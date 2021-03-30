  <!-- Header section--> 

  <style>
      
    @media only screen and (max-width: 768px) {
  /* For mobile phones: */
  .header-to {
    font-size: 12px;
  }
}
  </style>

<div class="container-fluied" style="margin-left: 15px;margin-right: 15px" >
  <section class="header">
        <div class="header-top">
      <div class="row" style="margin-left: 15px">
       
          <div class="col-sm-3" style="padding-top: 15px;padding-bottom: 15px">
          <img src="{{asset('public/upload/logoimage/'.$logo->image)}}" style="width: 250px;height: 150px"> 
            </div>
          <div class="col-sm-6" style="padding-top: 15px">
           <p style="font-size: 50px;text-align: center;font-family: Comic Sans MS"><strong > Wel Come To <br> SSB Freelancer Club</strong></p>
                   </div>
                
               
            <div class="col-sm-3" style="margin-left: 0">
         <strong> <p style="font-size: 15px;margin-top: 25px;margin-bottom: 0">Address : {{$contact->address}}</p> <br>
        <p style="font-size: 15px;margin-top: 0;margin-bottom: 0">Mobile : {{$contact->mobile}}</p> <br>
         <p style="font-size: 15px;margin-top: 0;margin-bottom: 0px">Email : {{$contact->email}}</p> <br></strong>
         
        </div>
       
      </div>
    </div>
  </section>
  <!-- hedader Section End  --->
  <sectioon class="nav-bar"  style="margin-bottom: 0px">
     <nav class="navbar navbar-expand-md navbar-dark" style="background-color:#f1c40f
   ;">
  <!-- Brand -->
  <a style="color: black" class="navbar-brand" href="{{url('./')}}"><i class="fa fa-home"></i></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" style="background-color: black"  data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul style="font-size: 20px" class="navbar-nav">
      <li class="nav-item">
        <a style="color: black" class="nav-link" href="{{url('./')}}">Home</a>
      </li>
      <li class="nav-item">
        <a style="color: black" class="nav-link" href="{{route('about.us')}}">About Us</a>
      </li>
      <li class="nav-item">
        <a style="color: black" class="nav-link" href="{{route('contact.us')}}">Contac Us</a>
      </li>
      <li class="nav-item dropdown">
      <a style="color: black" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Notice
      </a>
      <div class="dropdown-menu">
         <a class="dropdown-item" href="{{route('posts.allpostview')}}">All Notice</a>
        <a class="dropdown-item" href="{{route('posts.allpostview')}}">Recent Notice</a>
        <a class="dropdown-item" href="{{route('posts.eventallview')}}">Course Notice</a>
        <a class="dropdown-item" href="{{route('posts.alladmissionpostview')}}">Admission Notice</a>
        <a class="dropdown-item" href="{{route('posts.allexampostview')}}">Exam Notice</a>
        <a class="dropdown-item" href="{{route('posts.allresultpostview')}}">Result </a>
      </div>
    </li>
      <li class="nav-item dropdown">
      <a style="color: black" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Course
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{route('posts.eventallview')}}">Web Design</a>
        <a class="dropdown-item" href="{{route('posts.eventallview')}}">Web Design & Development</a>
        <a class="dropdown-item" href="{{route('posts.eventallview')}}">Graphics Design</a>
        <a class="dropdown-item" href="{{route('posts.eventallview')}}">SEO</a>
        <a class="dropdown-item" href="{{route('posts.eventallview')}}">Office Application</a>
        <a class="dropdown-item" href="{{route('posts.eventallview')}}">Digital Marketing</a>
      </div>
    </li>
      <li class="nav-item dropdown">
      <a style="color: black" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Exam
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{route('posts.allexampostview')}}">Web Design</a>
        <a class="dropdown-item" href="{{route('posts.allexampostview')}}">Web Design & Development</a>
        <a class="dropdown-item" href="{{route('posts.allexampostview')}}">Graphics Design</a>
        <a class="dropdown-item" href="{{route('posts.allexampostview')}}">SEO</a>
        <a class="dropdown-item" href="{{route('posts.allexampostview')}}">Office Application</a>
        <a class="dropdown-item" href="{{route('posts.allexampostview')}}">Digital Marketing</a>
      </div>
    </li>
      <li class="nav-item dropdown">
      <a style="color: black" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Result
      </a>
      <div class="dropdown-menu">
      <a class="dropdown-item" href="{{route('posts.allresultpostview')}}">Web Design</a>
        <a class="dropdown-item" href="{{route('posts.allresultpostview')}}">Web Design & Development</a>
        <a class="dropdown-item" href="{{route('posts.allresultpostview')}}">Graphics Design</a>
        <a class="dropdown-item" href="{{route('posts.allresultpostview')}}">SEO</a>
        <a class="dropdown-item" href="{{route('posts.allresultpostview')}}">Office Application</a>
        <a class="dropdown-item" href="{{route('posts.allresultpostview')}}">Digital Marketing</a>
      </div>
    </li>
       <li class="nav-item dropdown">
      <a style="color: black" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Routine
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Web Design</a>
        <a class="dropdown-item" href="#">Web Design & Development</a>
        <a class="dropdown-item" href="#">Graphics Design</a>
        <a class="dropdown-item" href="#">SEO</a>
        <a class="dropdown-item" href="#">Office Application</a>
        <a class="dropdown-item" href="#">Digital Marketing</a>
      </div>
    </li>
       <li class="nav-item dropdown">
      <a style="color: black" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Information
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Administation</a>
        <a class="dropdown-item" href="#">Trainer</a>
        <a class="dropdown-item" href="{{route('stuffs.stuffallview')}}">Stuff</a>
        <a class="dropdown-item" href="#">Compute</a>
      </div>
    </li>
     <li class="nav-item dropdown"  >
      <a style="color: black" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Admission
      </a>
      <div class="dropdown-menu">
        <a  class="dropdown-item" href="{{route('posts.alladmissionpostview')}}">All Admission Notice</a>
        <a class="dropdown-item" href="{{route('students.add')}}">Apply Admission</a>
        <a class="dropdown-item" href="{{route('posts.admissionside')}}">Admission Link</a>
        <a class="dropdown-item" href="{{route('login')}}">Admin Login</a>
        <a class="dropdown-item" href="{{route('login')}}">Student Login</a>
        
      </div>
    </li>

     <li class="nav-item dropdown">
      <a style="color: black" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Gallery
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{route('posts.photogalary')}}">Photo Gallery</a>
        <a class="dropdown-item" href="{{route('posts.videogalary')}}">Video Gallery</a>
        
        
      </div>
    </li>
    </ul>
  </div>
  
</nav> 
  </sectioon>
   <!-- Navbar links ends -->
     
