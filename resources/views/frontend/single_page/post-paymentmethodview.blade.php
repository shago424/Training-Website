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
                        <h2 style="color: white">পেমেন্ট পদ্ধতি</h2>
                        <div class="breadcrumb__option">
                            <a style="font-size: 18px;color: white" href="{{url('./')}}">Home</a>

                        </div>
                    </div>
                </div>
            </div>
        
        </div>
					    
					    <div class="card-body" style="height: auto;padding: 40px">
					       	<div class="row">

					  <div class="col-sm-4" > 
					<img src="{{asset('public/upload/postimage/'.$viss->image)}}" style="border: 1px solid #ddd;padding: 5px;background:  #587c6e ;float: left;margin-right: 5px;width: 180px;height: 180px">
					<a class="btn btn-danger" href="{{asset('public/upload/postfile/'.$viss->post_file)}}" target="_blank">ডাউনলোড</a>
					</div>
					<div class="col-sm-8">
					<p style="text-align: justify;"><strong style="color: green;font-size: 22px">Title :পেমেন্ট পদ্ধতি <br></strong> </p> <hr> <p style="font-size: 18px">{!! $viss->title !!}</p>
					</div>
					    </div>
					    </div>
					    </div>
					 </div>
					 </div>
			

	@endsection