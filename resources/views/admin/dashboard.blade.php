@extends('admin.layouts.master')

@section('title','Dashboard')


@push('css')
<link relation="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

@endpush

@section('content')

    <div class="content-wrapper">

  <div class="row">

    {{-- all student --}}
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <h4><a href="{{ route('admin.student_show') }}"> All Student</a></h4>
          @php
          $All_student = \DB::table('students')->count();
         @endphp
         <p class="text-center"> @php echo $All_student @endphp </p>
        </div>
    </div>
  </div>

      {{-- all Section --}}
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
          <div class="card-body">
          <h4><a href="{{route('section.index')}}">All Section</a></h4>
            @php
            $All_section = \DB::table('sections')->count();
           @endphp
           <p class="text-center"> @php echo $All_section @endphp </p>
          </div>
      </div>
    </div>

    {{-- all class --}}
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <h4><a href="{{route('class.index')}}">All Class</a></h4>
          @php
          $All_class = \DB::table('classes')->count();
          @endphp
          <p class="text-center"> @php echo $All_class @endphp </p>
        </div>
    </div>
  </div>

      {{-- all subjects --}}
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
        <div class="card card-statistics">
          <div class="card-body">
            <h4><a href="{{route('admin.marks_show')}}">All Subject</a></h4>
            @php
            $All_subject = \DB::table('subjects')->count();
            @endphp
            <p class="text-center"> @php echo $All_subject @endphp </p>
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