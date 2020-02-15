      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
         
                <div class="text-wrapper">
                  <p class="profile-name"></p>
                  <div>
                   
                  <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
       
            </div>
          </li>
          <li class="nav-item {{Request::is('admin') ? 'active': ''}}">
          <a class="nav-link" href="{{route('admin.dashboard')}}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

        <li class="nav-item {{Request::is('*') ? 'active': ''}}">
        <a class="nav-link" href="{{route('admin.createStudent')}}">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Upload Student</span>
            </a>
          </li>

          <li class="nav-item {{Request::is('*') ? 'active': ''}}">
            <a class="nav-link" href="{{route('admin.createSubject')}}">
                  <i class="menu-icon mdi mdi-television"></i>
                  <span class="menu-title">Upload Marks</span>
                </a>
              </li>
    

          <li class="nav-item {{Request::is('*') ? 'active': ''}}">
            <a class="nav-link" href="{{route('admin.student_show')}}">
                  <i class="menu-icon mdi mdi-television"></i>
                  <span class="menu-title">All Student</span>
                </a>
              </li>

              <li class="nav-item {{Request::is('*') ? 'active': ''}}">
                <a class="nav-link" href="{{route('admin.marks_show')}}">
                      <i class="menu-icon mdi mdi-television"></i>
                      <span class="menu-title">All marks</span>
                    </a>
                  </li>

              <li class="nav-item">
                <a class="nav-link" href="{{route('section.index')}}">
                  <i class="menu-icon mdi mdi-television"></i>
                  <span class="menu-title">Section</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{route('class.index')}}">
                  <i class="menu-icon mdi mdi-television"></i>
                  <span class="menu-title">Class</span>
                </a>
              </li>



        </ul>
      </nav>