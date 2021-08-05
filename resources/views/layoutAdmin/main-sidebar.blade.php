<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/admin') }}" class="brand-link">
        <img src="{{ asset('images/travel-mobile-logo-footer.png')}}"  alt="Product Demo" style="opacity .8;width:200px">
        
    </a>


    <!-- Sidebar -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#"class="nav-link">
                <i class="fas fa-user"></i>
              <p>
                Account List
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Admin</p>
                </a>
              </li>
            
            </ul>
          </li>
        </ul>
    </nav>

  <!-- Danh sách hãng xe trong hệ thống-->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item has-treeview">
        <a href="#"class="nav-link">
            <i class="fas fa-car-side"></i>
          <p>
            Brand
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('admin.mfg-index') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Brand List </p>
            </a>
          </li><li class="nav-item">
            <a href="{{ route('admin.mfg-create') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p> Create brand </p>
            </a>
          </li>
        </ul>
      </li>
    </ul>
</nav>
 <!-- Danh sách model xe trong hệ thống-->
 <nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    <li class="nav-item has-treeview">
      <a href="#"class="nav-link">
          <i class="fas fa-car-side"></i>
        <p>
          Model Car
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('admin.model-index') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p> Model Car List </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.model-create') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p> Create Model Car </p>
          </a>
        </li>
      </ul>
    </li>
  </ul>
</nav>

    
     <!-- Danh sách xe trong hệ thống-->
     <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#"class="nav-link">
                <i class="fas fa-car-side"></i>
              <p>
                Car Rental List
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.rental') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Car Rental </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.waiting-rental')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Waiting Approval Car </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.active-rental')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Actived Car </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.deny-rental')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Refused Car </p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
    </nav>


<!-- Danh sách họp đồng-->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#"class="nav-link">
                <i class="fas fa-file-signature"></i>
              <p>
                Rental Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.rentalcontract') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contract List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Driver's license List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/gplx')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Waiting approval driver's license List</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
    </nav>


<!--Doanh thu-->
{{-- 
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#"class="nav-link">
                <i class="fas fa-chart-pie"></i>
              <p>
                Doanh thu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/user')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Quản lý doanh thu</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
    </nav> --}}

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#"class="nav-link">
                <i class="fas fa-newspaper"></i>
              <p>
                Blog
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/blog')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Blog List </p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/blog/createBlog')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Create Blog </p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
    </nav>



    </aside>