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
        <a href="{{ route('Customer.Dashboard',['id'=> Session::get('customer_id')]) }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>
    
       {{-- new li start --}}
       <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ route('update.profile',['id'=> Session::get('customer_id')]) }}" class="nav-link">
        <i class="link-icon fas fa-question-circle"></i>
          <span class="link-title">Update Profile</span>
        </a>
      </li>
      
       <li class="nav-item {{ active_class(['/']) }}">
        <a href="{{ route('order.show',['id'=> Session::get('customer_id')]) }}" class="nav-link">
          <i class="link-icon" data-feather="users"></i>
          <span class="link-title">History</span>
        </a>
      </li>


      



      
      {{-- new li end --}}
     
     
      
     
   
     
     
      
    
      
        
      
     
     
      

    </ul>
  </div>
  

</nav>
