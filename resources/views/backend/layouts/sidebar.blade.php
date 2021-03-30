 @php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
 @endphp


 <!-- Sidebar Menu -->
      <nav style="" class="mt-2">
        <ul style="" class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
      
       @if(Auth::user()->role_id=='1')
          <li class="nav-item has-treeview {{($prefix=='/users')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('users.view')}}" class="nav-link {{($route=='users.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View User</p> 
                </a>
              </li>
            </ul>
          </li> 
          @endif
       
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
           @if(Auth::user()->role_id=='2')
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
                <a href="{{route('posts.paymentmethod')}}" target="_blank" class="nav-link {{($route=='posts.paymentmethod')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payment Method</p> 
                </a>
              </li>
            </ul>
          </li>
          @endif
           @if(Auth::user()->role_id=='1')

           <li class="nav-item has-treeview {{($prefix=='/paymentss')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Payment
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('paymentss.adminview')}}" class="nav-link {{($route=='paymentss.adminview')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Payment</p> 
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{($prefix=='/images')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
               Image
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('images.logos.view')}}" class="nav-link {{($route=='images.logos.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Logo</p> 
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('banners.view')}}" class="nav-link {{($route=='banners.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Banner</p> 
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('sliders.view')}}" class="nav-link {{($route=='sliders.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Slider</p> 
                </a>
              </li> 
            </ul>
          </li> 
          <li class="nav-item has-treeview {{($prefix=='/pages')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                All Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('histories.view')}}" class="nav-link {{($route=='histories.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View College History</p> 
                </a>
              </li>
            </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('chiarmans.view')}}" class="nav-link {{($route=='chiarmans.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Chiarman</p> 
                </a>
              </li>
            </ul>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('principals.view')}}" class="nav-link {{($route=='principals.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Principal</p> 
                </a>
              </li>
            </ul>
          </li> 

          <li class="nav-item has-treeview {{($prefix=='/posts')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Posts
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('catagory.view')}}" class="nav-link {{($route=='catagory.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Category</p> 
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('posts.view')}}" class="nav-link {{($route=='posts.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Post</p> 
                </a>
              </li>
            </ul>
          </li> 

          <li class="nav-item has-treeview {{($prefix=='/stuffs')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Stuffs
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('stuffs.view')}}" class="nav-link {{($route=='stuffs.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View All Stuff</p> 
                </a>
              </li>
            </ul>
          </li> 

           <li class="nav-item has-treeview {{($prefix=='/missions')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Admission Rule
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('missions.view')}}" class="nav-link {{($route=='missions.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Admission Rule</p> 
                </a>
              </li>
            </ul>
          </li> 

          <li class="nav-item has-treeview {{($prefix=='/vissions')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Payment Method
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('vissions.view')}}" class="nav-link {{($route=='vissions.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Payment Method</p> 
                </a>
              </li>
            </ul>
          </li> 
       
          <li class="nav-item has-treeview {{($prefix=='/news_events')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                News & Events 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('news_events.view')}}" class="nav-link {{($route=='news_events.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View News & Events</p> 
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{($prefix=='/services')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Services
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('services.view')}}" class="nav-link {{($route=='services.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Services</p> 
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{($prefix=='/contacts')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Contact
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('contacts.view')}}" class="nav-link {{($route=='contacts.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Contact</p> 
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('contacts.communicate')}}" class="nav-link {{($route=='contacts.communicate')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Communicate</p> 
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview {{($prefix=='/abouts')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                About
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('abouts.view')}}" class="nav-link {{($route=='abouts.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View About</p> 
                </a>
              </li>
            </ul>
          </li>
            <li class="nav-item has-treeview {{($prefix=='/photos')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Photo Gallery
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('photos.view')}}" class="nav-link {{($route=='photos.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Photo Gallery</p> 
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{($prefix=='/videos')?'menu-open':''}}">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Video Gallery
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('videos.view')}}" class="nav-link {{($route=='videos.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Video Gallery</p> 
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
       @endif