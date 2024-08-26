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

                     @if(session()->has('success'))
                      <div class="alert alert-success">{{session('success')}}</div>
                      @endif

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
                                <a href="{{route('admin.services.edit', ['service' => $service])}}" class="btn btn-sm btn-success" ><i class="fe fe-24 fe-edit"></i></a>
                                <a href="{{route('admin.services.show', ['service' => $service])}}" class="btn btn-sm btn-primary" ><i class="fe fe-24 fe-eye"></i></a>
                               <form method="POST" action="{{route('admin.services.destroy', ['service' => $service])}}" class="d-inline" id="deleteForm-{{$service->id}}">
                                @csrf
                                 @method('DELETE')
                                <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete({{$service->id}})"><i class="fe fe-24 fe-trash-2"></i></button>
                                </form> 
                                  
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
    <script>
        function confirmDelete(id) {
          if(confirm("Are you sure you want to delete this record ?")) {
            document.getElementById('deleteForm-'+id).submit();
          }
        }
    </script>
@endsection