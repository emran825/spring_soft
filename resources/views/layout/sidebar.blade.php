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
  @if(Auth::user()->role == 1)
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">Main</li>
      <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/home') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>
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
     
       <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/forms/navitem') }}" class="nav-link">
        <i class="link-icon fas fa-directions"></i>
          <span class="link-title">Nav Update</span>
        </a>
      </li>
         <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/tables/banner_table') }}" class="nav-link">
        <i class="link-icon fas fa-flag"></i>
          <span class="link-title">Banner</span>
        </a>
      </li>
       <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/forms/about') }}" class="nav-link">
        <i class="link-icon far fa-address-card"></i>
          <span class="link-title">About</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/tables/team') }}" class="nav-link">
        <i class="link-icon fas fa-users"></i>
          <span class="link-title">Team</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/forms/teamdetails') }}" class="nav-link">
        <i class="link-icon fas fa-users-cog"></i>
          <span class="link-title">Team Details</span>
        </a>
      </li>
       <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/tables/gallery') }}" class="nav-link">
        <i class="link-icon fas fa-images"></i>
          <span class="link-title">Gallery</span>
        </a>
      </li>

        <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/forms/cta') }}" class="nav-link">
        <i class="link-icon fas fa-bookmark"></i>
          <span class="link-title">Cta Section</span>
        </a>
      </li>
        <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/forms/video') }}" class="nav-link">
        <i class="link-icon fab fa-youtube"></i>
          <span class="link-title">Video</span>
        </a>
      </li>
       <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/tables/service') }}" class="nav-link">
        <i class="link-icon fas fa-tasks"></i>
          <span class="link-title">Service Update</span>
        </a>
      </li>
       <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/tables/project') }}" class="nav-link">
        <i class="link-icon fas fa-project-diagram"></i>
          <span class="link-title">Project</span>
        </a>
      </li>
       <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/tables/career') }}" class="nav-link">
        <i class="link-icon fas fa-briefcase"></i>
          <span class="link-title">Career</span>
        </a>
      </li>
        <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/tables/applylist') }}" class="nav-link">
        <i class="link-icon fas fa-briefcase"></i>
          <span class="link-title">ApplyList</span>
        </a>
      </li>
       <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/tables/student') }}" class="nav-link">
       <i class="link-icon fas fa-user-graduate"></i>
          <span class="link-title">Student</span>
        </a>
      </li>
        <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/tables/testimonial') }}" class="nav-link">
        <i class="link-icon fas fa-file-alt"></i>
          <span class="link-title">Testimonial</span>
        </a>
      </li>
       <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/tables/sponsor') }}" class="nav-link">
        <i class="link-icon fas fa-receipt"></i>
          <span class="link-title">Sponsor</span>
        </a>
      </li>
       <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/forms/choose') }}" class="nav-link">
        <i class="link-icon fas fa-question-circle"></i>
          <span class="link-title">Why Choose</span>
        </a>
      </li>
       <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/tables/blog') }}" class="nav-link">
        <i class="link-icon fab fa-blogger-b"></i>
          <span class="link-title">blog</span>
        </a>
      </li>
     
      <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/tables/blog_comments') }}" class="nav-link">
        <i class="link-icon fas fa-comments"></i>
          <span class="link-title">Blog Comments</span>
        </a>
      </li>
        <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/forms/contact') }}" class="nav-link">
        <i class="link-icon fas fa-address-card"></i>
          <span class="link-title">Contact</span>
        </a>
      </li>
        <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/tables/course') }}" class="nav-link">
        <i class="link-icon fas fa-graduation-cap"></i>
          <span class="link-title">Course</span>
        </a>
      </li>
       <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/forms/map') }}" class="nav-link">
        <i class="link-icon fas fa-map-marked-alt"></i>
          <span class="link-title">Map</span>
        </a>
      </li>
     
      <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/tables/consulation-table') }}" class="nav-link">
        <i class="link-icon fas fa-reply-all"></i>
          <span class="link-title">Consulation Request</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/tables/contact-table') }}" class="nav-link">
        <i class="link-icon fas fa-file-signature"></i>
          <span class="link-title">Contact Request</span>
        </a>
      </li>
       {{-- new li start --}}
      
      
       <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/tables/Admin/Customer-Order') }}" class="nav-link">
          <i class="link-icon" data-feather="users"></i>
          <span class="link-title">Customer Order</span>
        </a>
      </li>


      
       <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/tables/Admin/Category-View') }}" class="nav-link">
         <i class="link-icon fab fa-product-hunt"></i></i>
          <span class="link-title">Product Category List</span>
        </a>
      </li>



       <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/tables/Admin/Product-View') }}" class="nav-link">
          <i class="link-icon fab fa-product-hunt"></i></i>
          <span class="link-title">Product List</span>
        </a>
      </li>
      {{-- Product Feature Start--}}

 <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/tables/product-feature-table') }}" class="nav-link">
        <i class="link-icon fas fa-question-circle"></i>
          <span class="link-title">Product Feature</span>
        </a>
      </li>

      <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/tables/product-key-feature-table') }}" class="nav-link">
        <i class="link-icon fas fa-question-circle"></i>
          <span class="link-title">Key Feature</span>
        </a>
      </li>

      <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/tables/product-preview-view') }}" class="nav-link">
        <i class="link-icon fas fa-question-circle"></i>
          <span class="link-title">Product Preview</span>
        </a>
      </li>
        {{-- Product Feature End --}}

       <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/tables/customer-table') }}" class="nav-link">
       <i class="link-icon fas fa-user-alt"></i>
          <span class="link-title">Customer</span>
        </a>
      </li>
      
      {{-- new li end --}}
     
      <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/tables/enroll') }}" class="nav-link">
        <i class="link-icon fas fa-clipboard-list"></i>
          <span class="link-title">EnrollList</span>
        </a>
      </li>
      
       <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/tables/subscribe') }}" class="nav-link">
        <i class="link-icon fas fa-list"></i>
          <span class="link-title">Subscribe List</span>
        </a>
      </li>
      
      
     
   
     
     
      
    
      
        
      
       <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/tables/footer') }}" class="nav-link">
        <i class="link-icon far fa-hand-point-down"></i>
          <span class="link-title">Footer</span>
        </a>
      </li>
        <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/forms/header') }}" class="nav-link">
        <i class="link-icon fas fa-cogs"></i>
          <span class="link-title">Setting</span>
        </a>
      </li>
     
     
     
      

    </ul>
  </div>
  @else
  <!-- User Dashboard -->
  <div class="sidebar-body">
    <ul class="nav">
      <!-- <li class="nav-item nav-category">Main</li> -->
      <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ url('/home') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Home</span>
        </a>
      </li>
      

    </ul>
  </div>
  @endif
</nav>
