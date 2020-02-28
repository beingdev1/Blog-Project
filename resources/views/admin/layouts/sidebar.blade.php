<div id="wrapper">

        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.home') }}">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Home</span>
            </a>
          </li>
         
          <li class="nav-item">
              <a class="nav-link" href="{{ route('post.index') }}">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Posts</span></a>
            </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('tag.index') }}">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Tag</span></a>
          </li>

          <li class="nav-item">
                <a class="nav-link" href="{{ route('category.index') }}">
                  <i class="fas fa-fw fa-chart-area"></i>
                  <span>Category</span></a>
              </li>
          <li class="nav-item">
            <a class="nav-link" href="tables.html">
              <i class="fas fa-fw fa-table"></i>
              <span>Contact</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ route('user.index') }}">
              <i class="fas fa-fw fa-table"></i>
              <span>Users</span></a>
          </li>
        </ul>
    