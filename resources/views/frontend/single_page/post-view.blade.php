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
                        <h2 style="color: white">বিস্তারিত তথ্য</h2>
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
          <img src="{{asset('public/upload/postimage/'.$post->image)}}" style="border: 1px solid #ddd;padding: 5px;background:  #587c6e ;float: left;margin-right: 5px;width: 180px;height: 180px">
          <a class="btn btn-warning" href="{{asset('public/upload/postfile/'.$post->post_file)}}" target="_blank">Notice Download</a>
          </div>
          <div class="col-sm-8">
          <p style="text-align: justify;"><strong style="color: green;font-size: 22px">Title : {{$post->post_title}}  <br></strong> </p> 
          <span style="text-align: right;font-size: 16px;" class="glyphicon glyphicon-time">  Notice Date</span>&nbsp;&nbsp; {{date('d-M-Y',strtotime($post->post_date))}} 
          <hr> <p style="font-size: 18px">{!! $post->post_details !!}</p> 
          </div>
              </div>
              </div>
              </div>
           </div>
           </div>
      
      <!-- Button trigger modal -->

 <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>


  @endsection