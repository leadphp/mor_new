<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ URL::asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Mortgage Calculator</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ update_admin_image() }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{ url('admin/dashboard') }}" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <!--************************************************
           |
           | Google Language Translation
           |
           ************************************************-->

          <li class="nav-item has-treeview">
              <p>
                <div id="google_translate_element"></div>
              </p>
          </li> 
          

          <!--************************************************
           |
           | Users
           |
           ************************************************-->

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Users
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/users/index') }}"><i class="fa fa-circle-o"></i>
                  <p>All Users</p>
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/users/create') }}"><i class="fa fa-circle-o"></i>
                  <p>Add User</p>
                </a>
              </li>
            </ul>
          </li> 

          <!--************************************************
           |
           | CMS Pages
           |
           ************************************************-->

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-file-text"></i>
              <p>
                Page
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/pages') }}"><i class="fa fa-circle-o"></i>
                  <p>All Pages</p>
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/pages/add') }}"><i class="fa fa-circle-o"></i>
                  <p>Add Page</p>
                </a>
              </li>
            </ul>
          </li> 

          <!--************************************************
           |
           | Services 
           |
           ************************************************-->

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-bars"></i>
              <p>
                Services
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/services') }}"><i class="fa fa-circle-o"></i>
                  <p>All Services</p>
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/services/add') }}"><i class="fa fa-circle-o"></i>
                  <p>Add Service</p>
                </a>
              </li>
            </ul>
          </li>

          <!--************************************************
           |
           | Features 
           |
           ************************************************-->

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-mars"></i>
              <p>
                Features
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/features') }}"><i class="fa fa-circle-o"></i>
                  <p>All Features</p>
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/features/add') }}"><i class="fa fa-circle-o"></i>
                  <p>Add Feature</p>
                </a>
              </li>
            </ul>
          </li>

          <!--************************************************
           |
           | Testimonials 
           |
           ************************************************-->

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-comments"></i>
              <p>
                Testimonials
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/testimonials') }}"><i class="fa fa-circle-o"></i>
                  <p>All Testimonials</p>
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/testimonials/add') }}"><i class="fa fa-circle-o"></i>
                  <p>Add Testimonial</p>
                </a>
              </li>
            </ul>
          </li>

          <!--************************************************
           |
           | Home Page - Questions & Answers 
           |
           ************************************************-->

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-venus-double"></i>
              <p>
                Questions
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/homequestions') }}"><i class="fa fa-circle-o"></i>
                  <p>All Questions & Answers</p>
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/homequestions/add') }}"><i class="fa fa-circle-o"></i>
                  <p>Add Question & Answer</p>
                </a>
              </li>
            </ul>
          </li>

          <!--************************************************
           |
           | Questions 
           |
           ************************************************-->

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-question-circle"></i>
              <p>
                16 Questions
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/questions/index') }}"><i class="fa fa-circle-o"></i>
                  <p>All Questions</p>
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/questions/create') }}"><i class="fa fa-circle-o"></i>
                  <p>Add Question</p>
                </a>
              </li>
            </ul>
          </li>

          <!--************************************************
           |
           | Organzation Logos 
           |
           ************************************************-->

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-superpowers"></i>
              <p>
                Organization Logo
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/logos') }}"><i class="fa fa-circle-o"></i>
                  <p>All Logos</p>
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/logos/add') }}"><i class="fa fa-circle-o"></i>
                  <p>Add Logo</p>
                </a>
              </li>
            </ul>
          </li>

          <!--************************************************
           |
           | Content Management 
           |
           ************************************************-->

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-cog"></i>
              <p>
                Content Settings
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/sites/add') }}"><i class="fa fa-circle-o"></i>
                  <p>Website Content</p>
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/commons/add') }}"><i class="fa fa-circle-o"></i>
                  <p>Home Page</p>
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/exreports/edit/1') }}"><i class="fa fa-circle-o"></i>
                  <p>Example Report</p>
                </a>
              </li>
            </ul>
          </li>

          <!--************************************************
           |
           | Metatags 
           |
           ************************************************-->

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-tags"></i>
              <p>
                Metatags
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/metatags/index') }}"><i class="fa fa-circle-o"></i>
                  <p>All Metatags</p>
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/metatags/create') }}"><i class="fa fa-circle-o"></i>
                  <p>Add Metatag</p>
                </a>
              </li>
            </ul>
          </li>

           <!--************************************************
           |
           | Coupons 
           |
           ************************************************-->

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-window-restore"></i>
              <p>
                Coupons
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/coupons/index') }}"><i class="fa fa-circle-o"></i>
                  <p>All Coupons</p>
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/coupons/create') }}"><i class="fa fa-circle-o"></i>
                  <p>Add Coupon</p>
                </a>
              </li>
            </ul>
          </li>

          <!--************************************************
           |
           | Setting
           |
           ************************************************-->

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-cogs"></i>
              <p>
                Settings
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/users/edit/11') }}"><i class="fa fa-paint-brush"></i>
                  <p>Edit admin profile</p>
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/adminimgs') }}"><i class="fa fa-image"></i>
                  <p>Profile Picture</p>
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin/change_password') }}"><i class="fa fa-key"></i>
                  <p>Change Password</p>
                </a>
              </li>
            </ul>
          </li> 


          <!--************************************************
           |
           | Logout
           |
           ************************************************-->
           
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
              <i class="nav-icon fa fa-power-off"></i> 
              <p class="text">Log Out</p>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

