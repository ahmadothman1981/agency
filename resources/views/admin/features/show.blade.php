@extends('admin.master')
@section('title', __('keywords.show_feature'))


@section('content')
<div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
            <h2 class=" h5 page-title">{{__('keywords.show_feature')}}</h2>
            
              <div class="card shadow">
                    <div class="card-body">                    
                        <div class="row">
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                        <label for="simpleinput">{{__('keywords.title')}}</label>
                        <input disabled type="text" id="simpleinput" name="title" class="form-control" value="{{$feature->title}}" placeholder="{{__('keywords.title')}}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                        <label for="simpleinput">{{__('keywords.icon')}}</label>
                        <div ><i class=" {{$feature->icon}}"></i></div>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group mb-3">
                        <label for="simpleinput">{{__('keywords.description')}}</label>
                        <textarea disabled id="simpleinput"  name="description" class="form-control" placeholder="{{__('keywords.description')}}">{{$feature->description}}</textarea>
                      </div>
                    </div>
                  </div>                
                      
                
                    </div>
                  </div>
            
            </div> 
          </div> 
        </div> 

@endsection