@extends('admin.layouts.master')

@section('name','section')


@push('css')
<link rel="stylesheet" href="{{asset('backend/css/profile/profile.css')}}">


@endpush

@section('content')
<div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="container emp-profile">
          <form method="post">
              <div class="row">
                  <div class="col-md-4">
                      <div class="profile-img">
                        <img class="rounded-circle img-xs" src="{{Auth::user()->avatar}}" height="100px!important">
                          {{-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/> --}}
                          

                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="profile-head">
                                  <h3>
                                     {{auth::user()->name}}
                                  </h3>
                                  <h6>
                                  {{ Auth::user()->profession }}
                                  </h6>
                                
                          <ul class="nav nav-tabs" id="myTab" role="tablist">
                              <li class="nav-item">
                                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                              </li>
 
                          </ul>
                      </div>
                  </div>
                  {{-- <div class="col-md-2">
                      <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                  </div> --}}
              </div>
              <div class="row">
                  <div class="col-md-4">
                      {{-- <div class="profile-work">
                          <p>WORK LINK</p>
                          <a href="">Website Link</a><br/>
                          <a href="">Bootsnipp Profile</a><br/>
                          <a href="">Bootply Profile</a>
                          <p>SKILLS</p>
                          <a href="">Web Designer</a><br/>
                          <a href="">Web Developer</a><br/>
                          <a href="">WordPress</a><br/>
                          <a href="">WooCommerce</a><br/>
               
                      </div> --}}
                  </div>
                  <div class="col-md-8">
                      <div class="tab-content profile-tab" id="myTabContent">
                          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>User Id</label>
                                          </div>
                                          <div class="col-md-6">
                                              @if( Auth::user()->role ==1 )
                                                  <p>Super Admin</p>
                                              @else
                                              <p>Admin</p>
                                              @endif
                                           
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label> Name</label>
                                          </div>
                                          <div class="col-md-6">
                                              <p>  {{Auth::user()->name}}</p>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>Email</label>
                                          </div>
                                          <div class="col-md-6">
                                              <p>{{Auth::user()->email}}</p>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>Phone</label>
                                          </div>
                                          <div class="col-md-6">
                                            <p>{{Auth::user()->phone}}</p>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>Profession</label>
                                          </div>
                                          <div class="col-md-6">
                                            <p>{{Auth::user()->profession}}</p>
                                          </div>
                                      </div>
                          </div>
                          {{-- <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>Experience</label>
                                          </div>
                                          <div class="col-md-6">
                                              <p>Expert</p>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>Hourly Rate</label>
                                          </div>
                                          <div class="col-md-6">
                                              <p>10$/hr</p>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>Total Projects</label>
                                          </div>
                                          <div class="col-md-6">
                                              <p>230</p>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>English Level</label>
                                          </div>
                                          <div class="col-md-6">
                                              <p>Expert</p>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>Availability</label>
                                          </div>
                                          <div class="col-md-6">
                                              <p>6 months</p>
                                          </div>
                                      </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <label>Your Bio</label><br/>
                                      <p>Your detail description</p>
                                  </div>
                              </div>
                          </div> --}}
                      </div>
                  </div>
              </div>
          </form>           
      </div>

      </div>
    </div>
  </div>
@endsection

@push('script')
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


@endpush