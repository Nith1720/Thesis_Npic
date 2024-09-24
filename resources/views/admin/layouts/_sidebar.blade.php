  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) == 'dashboard') @else collapsed @endif " href="{{ url('admin/dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) == 'student') @else collapsed @endif" href="{{ url('admin/student/list') }}">
          <i class="bi bi-person"></i>
          <span>Student</span>
        </a>
      </li><!-- End Profile Page Nav -->


      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) == 'teacher') @else collapsed @endif" href="{{ url('admin/teacher/list') }}">
          <i class="bi bi-person"></i>
          <span>Teacher</span>
        </a>
      </li><!-- End Profile Page Nav -->
      
      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) == 'department') @else collapsed @endif" href="{{ url('admin/department/list') }}">
          <i class="bi bi-front"></i>
          <span>Department</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) == 'generation') @else collapsed @endif" href="{{ url('admin/generation/list') }}">
          <i class="bi bi-slack"></i>
          <span>Generation</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) == 'score') @else collapsed @endif" href="{{ url('admin/score/list') }}">
          <i class="bi bi-book"></i>
          <span>Score</span>
        </a>
      </li><!-- End Contact Page Nav -->


      <li class="nav-item">
        <a class="nav-link @if(Request::segment(2) == 'thesis') @else collapsed @endif" href="{{ url('admin/thesis/list') }}">
          <i class="bi bi-book"></i>
          <span>Thesis</span>
        </a>
      </li><!-- End Contact Page Nav -->
      

    

    </ul>

  </aside><!-- End Sidebar-->