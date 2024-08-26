@extends('admin.master')
@section('title', __('keywords.services'))


@section('content')
<div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-3">
                <h2 class=" h5 page-title">{{__('keywords.services')}}</h2>

                <div class="page-title-right">
                <a href="{{route('admin.services.create')}}" class="btn btn-sm btn-primary" > {{__('keywords.Add New')}}</i></a>
                </div>
                </div>
              
              
              <div class="card shadow">
                    <div class="card-body">
                     
                      
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th width="5%">#</th>
                            <th >{{__('keywords.title')}}</th>
                            <th width="10%">{{__('keywords.icon')}}</th>
                            <th width="15%">{{__('keywords.action')}}</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                          
                        @if(count($services) > 0 )
                            @foreach($services as $key => $service)
                            <tr>
                            <td>{{$services->firstItem() + $loop->index}}</td>
                            <td>{{$service->title}}</td>
                            <td>
                            <i class="{{$service->icon}} fa-2x"></i></td>
                            <td>
                                <a href="" class="btn btn-sm btn-success" ><i class="fe fe-24 fe-edit"></i></a>
                                <a href="" class="btn btn-sm btn-primary" ><i class="fe fe-24 fe-eye"></i></a>
                                <a href="" class="btn btn-sm btn-danger" ><i class="fe fe-24 fe-trash-2"></i></a>
                            </td>
                            
                          </tr>
                          @endforeach
                         @else
                            <tr>
                            <td colspan="6" class="text-center"><div class="alert alert-danger">{{__('keywords.no_data_found')}}</td>
                          </tr>
                         
                          @endif
                         
                        </tbody>
                      </table>
                      {{$services->render('pagination::bootstrap-4')}}
                    </div>
                  </div>
            
            </div> 
          </div> 
        </div> 

@endsection