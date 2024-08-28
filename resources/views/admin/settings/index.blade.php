@extends('admin.master')
@section('title', __('keywords.edit_settings'))


@section('content')
<div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
            <h2 class=" h5 page-title">{{__('keywords.edit_settings')}}</h2>
            
              <div class="card shadow">
                    <div class="card-body">
                    <x-success-message/>
                     <form action="{{route('admin.settings.update',['setting' => $setting])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            @method('PUT')

                        <div class="row">
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                      <x-form-label title="address"></x-form-label>
                        <input type="text" id="simpleinput" name="address" class="form-control" placeholder="{{__('keywords.address')}}" value="{{$setting->address}}">
                        <x-validation-error field="address"></x-validation-error>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                      <x-form-label title="phone"></x-form-label>
                        <input type="text" id="simpleinput" name="phone" class="form-control" placeholder="{{__('keywords.phone')}}" value="{{$setting->phone}}">
                        <x-validation-error field="phone"></x-validation-error>                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                      <x-form-label title="email"></x-form-label>
                        <input type="email" id="simpleinput" name="email" class="form-control" placeholder="{{__('keywords.email')}}" value="{{$setting->email}}">
                        <x-validation-error field="email"></x-validation-error>                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                      <x-form-label title="facebook"></x-form-label>
                        <input type="url" id="simpleinput" name="facebook" class="form-control" placeholder="{{__('keywords.facebook')}}" value="{{$setting->facebook}}">
                        <x-validation-error field="facebook"></x-validation-error>                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                      <x-form-label title="linkedin"></x-form-label>
                        <input type="url" id="simpleinput" name="linkedin" class="form-control" placeholder="{{__('keywords.linkedin')}}" value="{{$setting->linkedin}}">
                        <x-validation-error field="linkedin"></x-validation-error>                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                      <x-form-label title="instagram"></x-form-label>
                        <input type="url" id="simpleinput" name="instagram" class="form-control" placeholder="{{__('keywords.instagram')}}" value="{{$setting->instagram}}">
                        <x-validation-error field="instagram"></x-validation-error>                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                      <x-form-label title="twitter"></x-form-label>
                        <input type="url" id="simpleinput" name="twitter" class="form-control" placeholder="{{__('keywords.twitter')}}" value="{{$setting->twitter}}">
                        <x-validation-error field="twitter"></x-validation-error>                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                      <x-form-label title="youtube"></x-form-label>
                        <input type="url" id="simpleinput" name="youtube" class="form-control" placeholder="{{__('keywords.youtube')}}" value="{{$setting->youtube}}">
                        <x-validation-error field="youtube"></x-validation-error>                      </div>
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