
@extends('frontend.layouts.master')
	@section('content')

	
	
	<!-- About us Section -->
	<div class="row" style="padding-top: -20px">
				<div class="col-md-12" style="margin: auto;padding-top: 0">
					
					   <div class="card">

    <img src="{{asset('public/frontend/')}}/image/breadcrumb.jpg" style="width: auto;height: 100px">
      
             <div class="container" style="position: relative;padding-right: 10px">
            <div class="row" style="position: absolute;margin-top: -100px;margin-left: 450px;">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                         <h2 style="color: white">About Us</h2>
                        <div class="breadcrumb__option">
                            <a style="font-size: 18px;color: white" href="{{url('./')}}">Home</a>

                        </div>
                    </div>
                </div>
            </div>
        
        </div>
   
			         
					    <div class="card-body" style="height: auto;padding: 40px">
					 <p style="font-size: 18px">{{$about->details}}</p>

					    </div>
					    </div>
					    </div>
					 </div>
					 
			

	@endsection