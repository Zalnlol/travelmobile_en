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
                Quản lý người dùng
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách người dùng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tạo admin</p>
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
            Dữ liệu về hãng xe
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('admin.mfg-index') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Danh sách hãng xe </p>
            </a>
          </li><li class="nav-item">
            <a href="{{ route('admin.mfg-create') }}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Thêm mới hãng xe </p>
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
          Dữ liệu model xe
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('admin.model-index') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Danh sách model xe </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.model-create') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Thêm mới model xe </p>
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
                Danh sách xe đăng ký
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.rental') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Xe đăng ký </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.waiting-rental')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách xe chờ duyệt</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.active-rental')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách xe đang hoạt động</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.deny-rental')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách xe đã từ chối</p>
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
                Dữ liệu thuê xe
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.rentalcontract') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách hợp đồng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách bằng lái xe</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/gplx')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Danh sách bằng lái xe chưa duyệt</p>
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
                  <p>Doanh sách bài blog </p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/admin/blog/createBlog')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tạo mới blog </p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
    </nav>



    </aside>