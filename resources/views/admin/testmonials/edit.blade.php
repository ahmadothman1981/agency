@extends('admin.master')
@section('title', __('keywords.edit_testmonial'))


@section('content')
<div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
            <h2 class=" h5 page-title">{{__('keywords.edit_testmonial')}}</h2>
            
              <div class="card shadow">
                    <div class="card-body">
                     <form action="{{route('admin.testmonials.update',['testmonial' => $testmonial])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            @method('PUT')

                        <div class="row">
                    <div class="col-md-5">
                      <div class="form-group mb-3">
                      <x-form-label title="title"></x-form-label>
                        <input type="text" id="simpleinput" name="name" class="form-control" placeholder="{{__('keywords.name')}}" value="{{$testmonial->name}}">
                        <x-validation-error field="name"></x-validation-error>
                        </div>
                    </div>
                    <div class="col-md-5">
                      <div class="form-group mb-3">
                      <x-form-label title="position"></x-form-label>
                        <input type="text" id="simpleinput" name="position" class="form-control" placeholder="{{__('keywords.position')}}" value="{{$testmonial->position}}">
                        <x-validation-error field="position"></x-validation-error>                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group mb-3">
                        <label for="simpleinput">{{__('keywords.image')}}</label>
                        <input type="file" id="simpleinput" name="image" class="form-control" placeholder="{{__('keywords.image')}}" value="{{$testmonial->image}}">
                          </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group mb-3">
                      <x-form-label title="description"></x-form-label>
                        <textarea  id="simpleinput" name="description" class="form-control" placeholder="{{__('keywords.description')}}">{{$testmonial->description}}</textarea>
                        <x-validation-error field="description"></x-validation-error>
                      </div>
                    </div>
                  </div>

                  <x-submit-button></x-submit-button>
                    </form>


                      
                
                    </div>
                  </div>
            
            </div> 
          </div> 
        </div> 

@endsection