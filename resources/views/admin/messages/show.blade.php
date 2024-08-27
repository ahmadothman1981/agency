@extends('admin.master')
@section('title', __('keywords.show_message'))


@section('content')
<div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
            <h2 class=" h5 page-title">{{__('keywords.show_message')}}</h2>
            
              <div class="card shadow">
                    <div class="card-body">                    
                        <div class="row">
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                        <label for="simpleinput">{{__('keywords.name')}}</label>
                        <input disabled type="text" id="simpleinput" name="name" class="form-control" value="{{$message->name}}" placeholder="{{__('keywords.name')}}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                        <label for="simpleinput">{{__('keywords.email')}}</label>
                        <input disabled type="email" id="simpleinput" name="email" class="form-control" value="{{$message->email}}" placeholder="{{__('keywords.email')}}">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group mb-3">
                        <label for="simpleinput">{{__('keywords.subject')}}</label>
                        <input disabled type="text" id="simpleinput" name="subject" class="form-control" value="{{$message->subject}}" placeholder="{{__('keywords.subject')}}">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group mb-3">
                        <label for="simpleinput">{{__('keywords.message')}}</label>
                        <textarea disabled id="simpleinput"  name="message" class="form-control" placeholder="{{__('keywords.message')}}">{{$message->message}}</textarea>
                      </div>
                    </div>
                  </div>                
                      
                
                    </div>
                  </div>
            
            </div> 
          </div> 
        </div> 

@endsection