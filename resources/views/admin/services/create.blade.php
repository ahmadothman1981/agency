@extends('admin.master')
@section('title', __('keywords.add_new_service'))


@section('content')
<div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
            <h2 class=" h5 page-title">{{__('keywords.add_new_service')}}</h2>
            
              <div class="card shadow">
                    <div class="card-body">
                     <form action="" method="POST" enctype="multipart/form-data">
                        @csrf


                        <div class="row">
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                        <label for="simpleinput">{{__('keywords.title')}}</label>
                        <input type="text" id="simpleinput" name="title" class="form-control" placeholder="{{__('keywords.title')}}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group mb-3">
                        <label for="simpleinput">{{__('keywords.icon')}}</label>
                        <input type="text" id="simpleinput" name="icon" class="form-control" placeholder="{{__('keywords.icon')}}">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group mb-3">
                        <label for="simpleinput">{{__('keywords.description')}}</label>
                        <textarea  id="simpleinput" name="description" class="form-control" placeholder="{{__('keywords.description')}}"></textarea>
                      </div>
                    </div>
                  </div>

                    <button type="submit" class="btn btn-primary">{{__('keywords.submit')}}</button>
                    </form>


                      
                
                    </div>
                  </div>
            
            </div> 
          </div> 
        </div> 

@endsection