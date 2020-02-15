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
                <th width="30%">Roll</th>
                <th width="20%"> Subject Name</th>
                <th width="30%">Sub Code</th>
                <th width="20%"> Marks</th
                <th width="30%"> Action</th>
            
              </tr>
            </thead>
            @foreach ($marks as $mark)
            <tbody>
              <tr class="table-info">
                <td>
                 {{$loop->index+1}}
                </td>

                <td>
                  {{ $mark->roll }}
                </td>

                <td>
                    {{ $mark->subject_name }}
                </td> 

                <td>
                {{ $mark->subject_code }}
                </td>

                <td>
                  {{ $mark->marks }}
                </td>
          

                <td>
                  <a href="#edit_mark{{ $mark->id }}" data-toggle="modal" class="btn btn-primary">Edit</a>
              
                   <a href="#delete_mark{{ $mark->id }}" class="btn btn-danger" data-toggle="modal" >Delete</a>
                </td>  
               
              </tr>
              
            </tbody>
            @endforeach
          </table>


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
@endpush