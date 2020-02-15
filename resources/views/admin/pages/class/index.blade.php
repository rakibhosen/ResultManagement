@extends('admin.layouts.master')

@class('name','class')


@push('css')
<link relation="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

@endpush

@section('content')
<div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-name text-center">Class</h4>
        <p class="float-right">   <a href="#create_class" data-toggle="modal" class="btn btn-primary">Create</a></p>
      {{-- <p class="float-right"><a class="btn btn-primary" href="{{route('class.create')}}">Add new</a></p> --}}
        <p class="card-description">
        </p>
        @include('admin.partials.message')
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable">
            <thead>
              <tr>
                <th>
                  Sl No:
                </th>
                <th>
                 Class Name
                </th>
                <th>
                  Class Priority
                 </th>
            
           
                <th>
                  Action
                </th>
            
              </tr>
            </thead>
            @foreach ($classes as $class)
            <tbody>
              <tr class="table-info">
                <td>
                 {{$loop->index+1}}
                </td>
                <td>
                  {{ $class->name }}
                </td>
                <td>
                  {{ $class->priority }}
                </td>
  
          

          
                <td>
                  <a href="#edit_class{{ $class->id }}" data-toggle="modal" class="btn btn-primary">Edit</a>
              
                   <a href="#delete_class{{ $class->id }}" class="btn btn-danger" data-toggle="modal" >Delete</a>
                    </td>
              
              <!-- delete Modal............ -->
              <div class="modal fade" id="delete_class{{ $class->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-name" id="exampleModalLabel "style="color:#0000;">Modal name</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                     <h5>Are you sure ?</h5>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              
                      <form action="{{route('class.destroy',$class->id) }}" method="post">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                      <button type="submit" class="btn btn-primary">Yes</button>
                      </form>
              
                    </div>
                  </div>
                </div>
              </div>

              <!-- edit modal ......................-->
                          
              
              <!-- Modal -->
              <div class="modal fade" id="edit_class{{ $class->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCentername" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-name" id="exampleModalLongname">Update class</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
            
                     <form action="{{ route('class.update',$class->id) }}" method="post" enctype="multipart/form-data" >
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                          <div class="form-group">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" value="{{$class->name}}">
                          </div>

                          <div class="form-group">
                              <label for="exampleInputName1">Priority</label>
                              <input type="number" class="form-control" id="exampleInputName1" placeholder="Name" name="priority" value="{{$class->priority}}">
                          </div>
    
                          <button type="submit" class="btn btn-success mr-2">Submit</button>
                          
                      </form>

                    </div>
                
                  </div>
                </div>
              </div>


             
              </tr>
              
            </tbody>
            @endforeach
          </table>

                                      <!-- create modal ......................-->
                          
              
              <!-- Modal -->
              <div class="modal fade" id="create_class" tabindex="-1" role="dialog" aria-labelledby="exampleModalCentername" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-name" id="exampleModalLongname">Update class</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
            
                        <form class="forms-sample" method="POST" action="{{route('class.store')}}" enctype="multipart/form-data" >
                            @csrf
                              <div class="form-group">
                                <label for="exampleInputName1">Name</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name">
                              </div>
              
                              <div class="form-group">
                                  <label for="exampleInputName1">Priority</label>
                                  <input type="number" class="form-control" id="exampleInputName1" placeholder="Priority" name="priority">
                                </div>
              
                              <button type="submit" class="btn btn-success mr-2">Submit</button>
                              
                            </form>

                    </div>
                
                  </div>
                </div>
              </div>

        </div>
      </div>
    </div>
  </div>
@endsection

@push('script')
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('#dataTable').DataTable();
} );
</script>