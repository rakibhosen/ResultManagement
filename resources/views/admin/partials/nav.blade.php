

        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <h4 class="pt-4 text-white">Admin</h4>
      
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">

        <ul class="navbar-nav navbar-nav-right">

           {{-- <li class="nav-item">
            <a class="nav-link" href="{{route('logout')}}" ">
              <i class="fa fa-sign-out"></i>
              <span class="menu-title">Logout</span>
            </a>
  
          </li> --}}
        
     




           <li class="nav-item">
           <a class="nav-link" href="{{ route('admin.dashboard') }}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Admin  </span>
              <img class="img-xs rounded-circle" src="{{Auth::user()->avatar}}">
              {{-- <img class="img-xs rounded-circle" src="{{asset('backend/images/faces/pic-1.png')}}" alt="Profile image"> --}}
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
  
   
              <a class="dropdown-item" href="{{ route('admin.profile') }}">
               Profile
             </a>
     
              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
              
              <i class="fa fa-log-out"></i>
              Log out 
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            </li>
             
        
            </div>
          </li>



        </ul>
       </div>
    </nav>