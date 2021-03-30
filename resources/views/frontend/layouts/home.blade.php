@extends('frontend.layouts.master')
	@section('content')
@include('frontend.layouts.slider') 



	<section>
  <div style="margin-right: 12px;margin-left: 15px;margin-top: 5px" class="argentnotice">
  <div class="row" style="height: 15x" >
    
    <div style="background-color: green;color: white;font-size: 22" class="col-sm-3" >
        <h5 style="font-size: 20px"><strong> Argent Notice</strong></h5>

      </div>
      <div style="background-color:  #c7e897  ;color: blue;padding-top: 7px" class="col-sm-9">

                 @foreach($argents as $argent) 
        <marquee direction = "left" scrollamount="6px" onmouseover="this.stop()" onmouseout="this.start()">       
                        <i class="fa fa-stop-circle"></i> <a style="color: red" href="{{route('posts.page',$argent->id)}}"><strong style="font-size: 16px"> {{$argent->post_title}}</strong></a>
                         @endforeach
                        </marquee>

      </div>
    </div>
    </div>  
</section>

	<section class="mission" style="background-color:  #ba6050  ;margin-top: 10px">
			<div class="row" style="height: auto;padding-left: 15px;padding-right: 15px">
				@foreach($missions as $mission)
		<div class="col-md-4" style="margin-top: 10px;">
			
					<div class="card" style="margin-bottom: 10px">
  <div class="card-body" style="height: 275px">
    <h5 class="card-title"><h5 style="padding-top: 15px;padding-bottom: 5px;border-bottom: 1px solid #000000;font-size: 26px "><strong>{{$mission->post_title}}</strong></h5></h5>
    <img src="{{asset('public/upload/postimage/'.$mission->image)}}" style="float: left;margin-right: 10px;width: 160px;height: 130px">
					<p style="text-align: left;font-size: 16px">{{$mission->short_title}} ---- <a class="btn btn-danger float-right" href="{{route('posts.page',$mission->id)}}" role="button">বিস্তারিত</a></p>
    
				  </div> 
				</div>	
				
			</div>


@endforeach	
		</div>
	</section>

		
		<!-- side bar and content -->
		<section class="content-sidebar" style="margin-top: 10px"> 
		<div class="sidebar" style="padding-top: 10px">
			<div class="row" style="padding-left: 15px;padding-right: 15px">
			<div class="col-sm-9"> 
			<div class="row">
				@foreach($vissions as $vission )
				<!-- First Section End-->
				<div class="col-sm-6" >
					<div class="jumbotron" style="margin-bottom: : 3px">
					<h5 style="padding-top: 5px;padding-bottom: 5px;border-bottom: 1px solid #000000;font-size: 26px "><strong>{{$vission->post_title}}</strong></h5>
				<br>
					<img src="{{asset('public/upload/postimage/'.$vission->image)}}" style="float: left;margin-right: 10px;width: 150px;height: 150px">
					<p style="text-align: justify;font-size: 18px">{{$vission->short_title}}----
						  <a class="btn btn-primary float-right" href="{{route('posts.page',$vission->id)}}" role="button">বিস্তারিত</a>
					</div>
				</div>
				@endforeach
				

				<!-- Second Section End-->

					<div class="col-sm-6" style="margin-top: 5px;margin-bottom: 10px">
					<div class="jumbotron" style="margin: 0">
						 
				
					<h5 style="padding-top: 5px;padding-bottom: 5px;border-bottom: 1px solid #000000;font-size: 26px "><strong>ভর্তি সেকশন</strong></h5>
				<br> 
					<ul style="font-size: 18px">
					    <li style="color: green;font-weight: bold"> <a style="color: red;font-weight: bold" href="{{route('posts.alladmissionpostview')}}">ভর্তি বিজ্ঞপ্তি সংক্রান্ত নোটিশ</a></li>
					     <li style="color: green;font-weight: bold"> <a style="color: red;font-weight: bold" href="{{route('posts.eventallview')}}">ভর্তির কোর্স সংক্রান্ত নোটিশ</a></li>
					    <li style="color: green;font-weight: bold"> <a style="color: red;font-weight: bold" href="{{route('posts.admissionrule')}}">ভর্তির আবেদনের নিয়সাবলী</a></li>
					   
					    <li style="color: green;font-weight: bold"> <a style="color: red;font-weight: bold" href="{{route('stuffs.stuffallview')}}">ট্রেইনারদের তথ্য</a></li>
					    

  					</ul>

					</div>
				</div>

				<div class="col-sm-6"style="margin-top: 5px">
					<div class="jumbotron" style="margin: 0">
						 <h5 style="padding-top: 0;padding-bottom: 5px;border-bottom: 1px solid #000000;font-size: 26px "><strong>ইউজার সেকশন</strong></h5>
				<br>
				
					<ul style="font-size: 18px">
					    <li style="color: blue;font-weight: bold"> <a style="color: green;font-weight: bold" href="{{route('login')}}">ইউজার লগইন </a></li>
					    <li style="color: blue;font-weight: bold"> <a style="color: green;font-weight: bold" href="">পেমেন্ট চেক</a></li>
					    <li style="color: blue;font-weight: bold"> <a style="color: green;font-weight: bold" href="{{route('posts.paymentmethod')}}">মেমেন্ট মেথড</a></li>
					    <li style="color: blue;font-weight: bold"> <a style="color: green;font-weight: bold" href="{{route('posts.admissionside')}}">ভর্তির আবেদনের লিংক</a></li>

  					</ul> 
					</div>
				</div>


					</div>	

				</div>

<!-- Third Section End-->

			<div  class="col-sm-3">
				<section style="margin: 0" >
	<div style="background-color: #7b1430;margin-bottom: 0;margin-top: 0px"><h5><strong style="color: white;font-size: 20px">আমাদের কোর্স সমূহ <a style="padding:4px" class="btn btn-success float-right" href="{{route('posts.eventallview')}}"><strong>সকল কোর্স</strong></a></strong>


	</h5>

	</div>
		 <div class="list-group" style="padding-top: 0;font-size: 18px">
		 	@foreach($events as $event)
			  <a style="padding: 7px;color: green;font-weight: bold" href="{{route('posts.page',$event->id)}}" class="list-group-item list-group-item-action">{{$event->post_title}}</a>
			  @endforeach
			</div> 
			</section>
			
			<section>
			<div style="background-color:  #f1c40f ;margin-bottom: 0"><h5><strong style="color: black;font-size: 20px">চলতি কোর্স সমূহ</strong></h5></div>
			
			</strong> <div class="list-group" style="font-size: 18px">
			  @foreach($currents as $current)
			  <a style="padding: 7px;color: red;font-weight: bold" href="{{route('posts.page',$current->id)}}" class="list-group-item list-group-item-action">{{$current->post_title}}</a>
			  @endforeach
			</div> 
			</section>

			<section style="margin-top: 7px">
				<div style="background-color:   #ba4a00
 ;margin-top: 0"><h5><strong style="color: white;font-size: 20px">পরবর্তী কোর্স সমূহ</strong></h5></div>
				
				</strong> <div class="list-group" style="font-size: 18px">
			  @foreach($nexts as $next)
			  <a style="padding: 7px;color: blue;font-weight: bold" href="{{route('posts.page',$next->id)}}" class="list-group-item list-group-item-action">{{$next->post_title}}</a>
			  @endforeach
				</div> 
				</section>

				<section>
				<div class="card">
						  <div class="card-header" style="background-color: #f1c40f;padding-top: 0;padding: 6px">
						   <strong style="font-size: 20px"> লেটেস্ট নোটিশ</strong>
						   <a class="btn btn-primary float-right" href=""><strong>সকল নোটিশ</strong></a>
						  </div>
						  <div class="card-body" style="height: 225px;margin-bottom: 0">
						    <div class="notice_box">
					<marquee direction = "up" scrollamount="3px" onmouseover="this.stop()" onmouseout="this.start()">
						<ul>
								@foreach($recents as $recent)				
                                <li><a href="{{route('posts.page',$recent->id)}}">{{$recent->post_title}}</a></li>
                                @endforeach
                            </ul>
					</marquee>
                </div>
						  </div>
						</div>
				  
				</div> 
				</section>
				</div>
			</div>
		</div>
</section>

<!-- Other Section-->

<div class="pro" style="height: auto;background-color: #f1c40f;font-size: 22px;color: black;margin-top: 20px;margin-left: 15px;margin-right: 15px" >
	<p class="text-center" style="font-size: 35px" ><strong>আমাদের কোর্সের  প্রজেক্ট  সমূহ </strong></p>
</div>

<section class="project" style="margin-left: 15px;margin-right: 15px">
<div class="row" style="background-color:#FE2E2E;margin-left: 0;margin-right: 0;">
	@foreach($projects as $project)
	<div class="col-sm-4" style="padding-top: 10px;padding-bottom: 10px">
		<div class="card" style="width: 100%;">
			 <img src="{{asset('public/upload/postimage/'.$project->image)}}" class="card-img-top" alt="logo-4" style="height: 150px">
			<div class="card-body" style="height: 250px">
				 <h5 class="card-title" style="font-size: 22px;color: blue"><strong><u>{{$project->post_title}} </strong></u></h5>
    <p class="card-text">{{$project->short_title}}---- </p>
    <a href="{{route('posts.page',$project->id)}}" class="btn btn-success"><strong>See The Details</strong></a>
			</div>
		</div>
	</div>
	@endforeach
</div>
</section>

<!-- Website Development End-->

<div class="pro" style="height: auto;background-color: #2ECCFA;font-size: 22px;color: black;margin-top: 20px;margin-left: 15px;margin-right: 15px" >
	<p class="text-center" style="font-size: 35px" ><strong>আমাদের কোর্সের ওয়েব এবং মোবাইল এ্যাপলিকেশন প্রজেক্ট  সমূহ </strong></p>
</div>

<section class="project" style="margin-left: 15px;margin-right: 15px">
<div class="row" style="background-color: #ab9c29 ;margin-left: 0;margin-right: 0;">
	@foreach($applications as $application)
	<div class="col-sm-4" style="padding-top: 10px;padding-bottom: 10px">
		<div class="card" style="width: 100%;">
			 <img src="{{asset('public/upload/postimage/'.$application->image)}}" class="card-img-top" alt="logo-4" style="height: 150px">
			<div class="card-body" style="height: 250px">
				 <h5 class="card-title" style="font-size: 22px;color: blue"><strong><u>{{$application->post_title}} </strong></u></h5>
    <p class="card-text">{{$application->short_title}} </p>
    <a href="{{route('posts.page',$application->id)}}" class="btn btn-success"><strong>See The Details</strong></a>
			</div>
		</div>
	</div>
	@endforeach
</div>
</section>

		
	
	</div>
</div>
	
@endsection
	