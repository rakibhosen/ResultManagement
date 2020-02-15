@extends('admin.layouts.master')

@section('title','marks')


@push('css')


@endpush

@section('content')

<div class="row">
    <div class="col-md-10 offset-md-1">
        <div class="card">
            <div class="card-body">
              <h4 class="card-title">Upload Marks</h4>
              @include('admin.partials.message')

              <form action="{{ route('marks.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import User Data</button>
                <a class="btn btn-warning" href="{{ route('marks.export') }}">Export User Data</a>
            </form>
            </div>
      
        </div>
    </div>
  </div>
    
@endsection

@push('script')


@endpush