@extends('admin.layouts.master')

@section('name','section')


@push('css')
<link relation="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

@endpush

@section('content')
<div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-name text-center">Section</h4>
        <p class="float-right"><a href="#create_section" data-toggle="modal" class="btn btn-primary">Create</a></p>
      {{-- <p class="float-right"><a class="btn btn-primary" href="{{route('section.create')}}">Add new</a></p> --}}
     
        @include('admin.partials.message')
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable">
            <thead>
              <tr>
                <th width="20%"> Sl No:</th>
                <th width="30%">Name</th>
                <th width="20%"> Priority</th>
                <th width="30%"> Action</th>
            
              </tr>
            </thead>
            @foreach ($sections as $section)
            <tbody>
              <tr class="table-info">
                <td>
                 {{$loop->index+1}}
                </td>
                <td>
                  {{ $section->name }}
                </td>
                <td>
                  {{ $section->priority }}
                </td>
          

                <td>
                  <a href="#edit_section{{ $section->id }}" data-toggle="modal" class="btn btn-primary">Edit</a>
              
                   <a href="#delete_section{{ $section->id }}" class="btn btn-danger" data-toggle="modal" >Delete</a>
                </td>
              
           <!-- ========================delete Modal========================= -->
           
              <div class="modal fade" id="delete_section{{ $section->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
              
                      <form action="{{route('section.destroy',$section->id) }}" method="post">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                      <button type="submit" class="btn btn-primary">Yes</button>
                      </form>
              
                    </div>
                  </div>
                </div>
              </div>

          
                          

             <!-- ========================Update Modal========================= -->
                          
             <div class="modal fade" id="edit_section{{ $section->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCentername" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-name" id="exampleModalLongname">Update section</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
          
                   <form action="{{ route('section.update',$section->id) }}" method="post" enctype="multipart/form-data" >
                      {{ method_field('PUT') }}
                      {{ csrf_field() }}
                        <div class="form-group">
                          <label for="exampleInputName1">Name</label>
                          <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" value="{{$section->name}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputName1">Priority</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="priority" value="{{$section->priority}}">
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

  <!-- ========================Create Modal========================= -->
              <div class="modal fade" id="create_section" tabindex="-1" role="dialog" aria-labelledby="exampleModalCentername" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-name" id="exampleModalLongname">Create section</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
            
                        <form class="forms-sample" method="POST" action="{{route('section.store')}}" enctype="multipart/form-data" >
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
