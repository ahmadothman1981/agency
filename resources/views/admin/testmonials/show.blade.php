@extends('admin.master')
@section('title', __('keywords.testmonial'))


@section('content')
<div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
            <h2 class=" h5 page-title">{{__('keywords.testmonial')}}</h2>
            
              <div class="card shadow">
                    <div class="card-body">                    
                        <div class="row">
                    <div class="col-md-5">
                      <div class="form-group mb-3">
                        <label for="simpleinput">{{__('keywords.name')}}</label>
                        <input disabled type="text" id="simpleinput" name="name" class="form-control" value="{{$testmonial->name}}" placeholder="{{__('keywords.name')}}">
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="form-group mb-3">
                        <label for="simpleinput">{{__('keywords.position')}}</label>
                        <input disabled type="text" id="simpleinput" name="position" class="form-control" value=" {{$testmonial->position}}" placeholder="{{__('keywords.position')}}">                      
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group mb-3">
                        <label for="simpleinput">{{__('keywords.image')}}</label>
                        <img src="{{asset("storage/testmonials/{$testmonial->image}")}}" width="100px" class="img-fluid">
                          </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group mb-3">
                        <label for="simpleinput">{{__('keywords.description')}}</label>
                        <textarea disabled id="simpleinput"  name="description" class="form-control" placeholder="{{__('keywords.description')}}">{{$testmonial->description}}</textarea>
                      </div>
                    </div>
                  </div>                
                      
                
                    </div>
                  </div>
            
            </div> 
          </div> 
        </div> 

@endsection