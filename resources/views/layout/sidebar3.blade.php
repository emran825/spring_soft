<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
      Noble<span>UI</span>
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <!-- Admin Dashboard -->
 
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/student') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>
       <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('student/course-routine') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Course Routine</span>
        </a>
      </li>
        <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('student/complete-course') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Completed course</span>
        </a>
      </li>
        <!-- <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/student') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li> -->
     <!--  <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/category') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Add Category</span>
        </a>
      </li> -->
     <!--  <li class="nav-item nav-category">web apps</li>
      <li class="nav-item {{ active_class(['email/*']) }}">
        <a class="nav-link" data-toggle="collapse" href="#email" role="button" aria-expanded="{{ is_active_route(['email/*']) }}" aria-controls="email">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Question</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['email/*']) }}" id="email">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{url('addquestion')}}" class="nav-link {{ active_class(['email/inbox']) }}">Add Question</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('view_answer') }}" class="nav-link {{ active_class(['email/read']) }}">View Answer</a>
            </li>
          </ul>
        </div>
      </li> -->
   <!--    <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/users') }}" class="nav-link">
          <i class="link-icon" data-feather="users"></i>
          <span class="link-title">Users</span>
        </a>
      </li> -->
     <!--  <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/appinfo') }}" class="nav-link">
          <i class="link-icon" data-feather="users"></i>
          <span class="link-title">App Info</span>
        </a>
      </li> -->
     <!--  <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/forms/basic-elements') }}" class="nav-link">
          <i class="link-icon" data-feather="users"></i>
          <span class="link-title">Make Page Dynamic</span>
        </a>
      </li> -->
     <!--  <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/tables/basic-tables') }}" class="nav-link">
          <i class="link-icon" data-feather="users"></i>
          <span class="link-title">Basic Tables</span>
        </a>
      </li> -->
     <!--  <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/forms/header') }}" class="nav-link">
        <i class="link-icon fas fa-heading"></i>
          <span class="link-title">Header Update</span>
        </a>
      </li> -->
      
</nav>
