 @php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
 @endphp


 <!-- Sidebar Menu -->
      <nav class="mt-2" >
        <ul style="" class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
      
      
       
          <!-- Roles -->
          <!-- Profile -->
          <li class="nav-item has-treeview {{($prefix=='/profiles')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('profiles.view')}}" class="nav-link {{($route=='profiles.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Profile</p> 
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('profiles.password.view')}}" class="nav-link {{($route=='profiles.password.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p> 
                </a>
              </li>
            </ul>
          </li> 
          <li class="nav-item has-treeview {{($prefix=='/payments')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Payment
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('payments.add')}}" class="nav-link {{($route=='payments.add')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Payment</p> 
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('payments.view')}}" class="nav-link {{($route=='payments.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Payment</p> 
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('posts.paymentmethod')}}"target="_blank" class="nav-link {{($route=='posts.paymentmethod')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payment Method</p> 
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
      