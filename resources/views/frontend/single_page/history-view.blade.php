@extends('frontend.layouts.master')
	@section('content')

<div class="row">
				<div class="col-md-10" style="margin: auto;padding: 25px">
					<div class="panel panel-primary" id="result_panel">
					    <div class="panel-heading">
					    	 <h2 style="padding: 5px;font-size: 30px;text-align: center;" class="panel-title"><strong>College History Details</strong></h2>
					    	
					    </div>
					    <div class="card-body" style="height: auto;padding: 40px;background-color:  #e3d7cd ">
					       	<div class="row">
					    		<div class="col-sm-3" >
					    	
					<img src="{{asset('public/upload/historyimage/'.$histories->image)}}" style="border: 1px solid #ddd;padding: 5px;background:  #587c6e ;float: left;margin-right: 5px;width: 180px;height: 180px">
					</div>
					<div class="col-sm-9">
					<p style="text-align: justify;font-size: 17px"><strong style="color: green;font-size: 18px"> </strong> {{$histories->title}}</p>
					</div>
					    </div>
					    </div>
					    </div>
					 </div>
					 </div>

	@endsection