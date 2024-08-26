@extends('admin.master')
@section('title', __('keywords.edit_service'))


@section('content')
<div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
            <h2 class=" h5 page-title">{{__('keywords.edit_service')}}</h2>
            
              <div class="card shadow">
                    <div class="card-body">
                     <form action="{{route('admin.services.update',['service' => $service])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            @method('PUT')

                        <div class="row">
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                        <label for="simpleinput">{{__('keywords.title')}}</label>
                        <input type="text" id="simpleinput" name="title" class="form-control" placeholder="{{__('keywords.title')}}" value="{{$service->title}}">
                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                        <label for="simpleinput">{{__('keywords.icon')}}</label>
                        <input type="text" id="simpleinput" name="icon" class="form-control" placeholder="{{__('keywords.icon')}}" value="{{$service->icon}}">
                        @error('icon') <span class="text-danger">{{ $message }}</span> @enderror
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group mb-3">
                        <label for="simpleinput">{{__('keywords.description')}}</label>
                        <textarea  id="simpleinput" name="description" class="form-control" placeholder="{{__('keywords.description')}}">{{$service->description}}</textarea>
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                      </div>
                    </div>
                  </div>

                    <button type="submit" class="btn btn-primary">{{__('keywords.update')}}</button>
                    </form>


                      
                
                    </div>
                  </div>
            
            </div> 
          </div> 
        </div> 

@endsection