@extends('frontend.layouts.master')
  @section('content')
 <section> <img src="{{asset('public/frontend/')}}/image/breadcrumb.jpg">
        <div class="container" style="position: relative;padding-right: 10px">
            <div class="row" style="position: absolute;margin-top: -125px;margin-left: 400px;">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2 style="color: white">Details Information</h2>
                        <div class="breadcrumb__option">
                            <a style="font-size: 18px;color: white" href="{{url('./')}}">Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <div class="row">
        <div class="col-md-10" style="margin: auto;padding: 15px">
          <div class="panel panel-primary" id="result_panel">
              <div class="panel-heading" style="text-align: right">
                 <h2 style="padding: 0;font-size: 30px;text-align: center;" class="panel-title"><strong>Details Information</strong></h2>
                <span style="text-align: right;font-size: 16px" class="glyphicon glyphicon-time">  Notice Date</span> {{date('d-M-Y',strtotime($post->post_date))}} 
              </div>
              <div class="card-body" style="height: auto;padding: 40px">
                  <div class="row">

            <div class="col-sm-4" > 
          <img src="{{asset('public/upload/postimage/'.$post->image)}}" style="border: 1px solid #ddd;padding: 5px;background:  #587c6e ;float: left;margin-right: 5px;width: 180px;height: 180px">
          <a class="btn btn-primary" href="{{asset('public/upload/postfile/'.$post->post_file)}}" target="_blank">Notice Download</a>
          </div>
          <div class="col-sm-8">
          <p style="text-align: justify;"><strong style="color: green;font-size: 22px">Title : {{$post->post_title}} <br></strong> </p> <hr> <p style="font-size: 18px">{{$post->post_details}}</p>
          </div>
              </div>
              </div>
              </div>
           </div>
           </div>
      

  @endsection