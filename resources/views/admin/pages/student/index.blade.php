@extends('admin.layouts.master')

@section('name','section')


@push('css')
{{-- <link relation="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> --}}

@endpush

@section('content')
<div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-name text-center">Student</h4>
        <input class="form-control" id="myInput" type="text" placeholder="Search Student...">

        <p class="float-right"><a href="#create_student" data-toggle="modal" class="btn btn-primary">Create</a></p>
      {{-- <p class="float-right"><a class="btn btn-primary" href="{{route('section.create')}}">Add new</a></p> --}}
     
        @include('admin.partials.message')
        
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable">
            <thead>
              <tr>
                <th> Sl</th>
                <th>Name</th>
                <th> Roll</th>
                <th>Reg</th>
                <th>Class</th>
                <th>Section</th>
                <th>Result</th>
                <th>GPA</th>
                <th> Action</th>
            
              </tr>
            </thead>
            @foreach ($students as $student)
            <tbody id="myTable">
              <tr class="table-info">
                <td>
                 {{$loop->index+1}}
                </td>

                <td>
                  {{ $student->name }}
                </td>

                <td>
                    {{ $student->roll }}
                </td> 

                <td>
                {{ $student->reg }}
                </td>

                <td>
                  {{ $student->class }}
                </td>
                <td>
                    {{ $student->section }}
                 </td>
                  <td>
                    {{ $student->result }}
                  </td>
                  <td>
                    {{ $student->gpa }}
                  </td>
          

                <td>
                  <a href="#edit_student{{ $student->id }}" data-toggle="modal" class="btn btn-primary">Edit</a>
              
                   <a href="#delete_student{{ $student->id }}" class="btn btn-danger" data-toggle="modal" >Delete</a>
                </td>  
               

                           <!-- ========================delete Modal========================= -->
           
              <div class="modal fade" id="delete_student{{ $student->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
              
                      <form action="{{route('admin.student_delete',$student->id) }}" method="post">
                       
                        {{ csrf_field() }}
                      <button type="submit" class="btn btn-primary">Yes</button>
                      </form>
              
                    </div>
                  </div>
                </div>
              </div>

                           <!-- ========================Update Modal========================= -->
                          
            <!-- ========================Create Modal========================= -->
            <div class="modal fade" id="edit_student{{ $student->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCentername" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-name" id="exampleModalLongname">Edit Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
          
                      <form class="forms-sample" method="POST" action="{{route('admin.student_update',$student->id)}}" enctype="multipart/form-data" >
                          @csrf
                            <div class="form-group">
                              <label for="exampleInputName1">Name</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" value="{{ $student->name }}" name="name">
                            </div>
            
                            <div class="form-group">
                                <label for="exampleInputName1">Roll</label>
                            <input type="number" class="form-control" id="exampleInputName1" placeholder="roll" value="{{$student->roll}}" name="roll">
                            </div>

                            <div class="form-group">
                              <label for="exampleInputName1">Reg</label>
                              <input type="number" class="form-control" id="exampleInputName1" placeholder="reg" value="{{$student->reg}}" name="reg">
                            </div>

                           <div class="form-group">
                            <label for="exampleInputName1">Class</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Class" value="{{$student->class}}" name="class">
                           </div>

                          <div class="form-group">
                            <label for="exampleInputName1">Section</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Section" value="{{$student->section}}" name="section">
                          </div>

                          <div class="form-group">
                            <label for="exampleInputName1">Result</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Result" value="{{$student->result}}" name="result">
                          </div>

                          <div class="form-group">
                            <label for="exampleInputName1">GPA</label>
                            <input type="number" class="form-control" id="exampleInputName1" placeholder="GPA" value="{{$student->gpa}}" name="gpa">
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
          {{ $students->render() }}

            <!-- ========================Create Modal========================= -->
            <div class="modal fade" id="create_student" tabindex="-1" role="dialog" aria-labelledby="exampleModalCentername" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-name" id="exampleModalLongname">Create Student</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
          
                      <form class="forms-sample" method="POST" action="{{route('admin.student_store')}}" enctype="multipart/form-data" >
                          @csrf
                            <div class="form-group">
                              <label for="exampleInputName1">Name</label>
                              <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name">
                            </div>
            
                            <div class="form-group">
                                <label for="exampleInputName1">Roll</label>
                                <input type="number" class="form-control" id="exampleInputName1" placeholder="roll" name="roll">
                            </div>

                            <div class="form-group">
                              <label for="exampleInputName1">Reg</label>
                              <input type="number" class="form-control" id="exampleInputName1" placeholder="reg" name="reg">
                            </div>

                           <div class="form-group">
                            <label for="exampleInputName1">Class</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Class" name="class">
                           </div>

                          <div class="form-group">
                            <label for="exampleInputName1">Section</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Section" name="section">
                          </div>

                          <div class="form-group">
                            <label for="exampleInputName1">Result</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Result" name="result">
                          </div>

                          <div class="form-group">
                            <label for="exampleInputName1">GPA</label>
                            <input type="number" class="form-control" id="exampleInputName1" placeholder="GPA" name="gpa">
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
{{-- <script>
$(document).ready( function () {
    $('#dataTable').DataTable();
} );
</script> --}}
<script>
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  </script>
@endpush