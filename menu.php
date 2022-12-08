
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">

        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item nav-category">Admin</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="menu-icon mdi mdi-account-circle-outline"></i>
            <span class="menu-title">Admin Pages</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="show_admin.php"> All Admin </a></li>
              <li class="nav-item"> <a class="nav-link" href="add_admin.php"> Add Admin </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item nav-category">User</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="menu-icon mdi mdi-account-circle-outline"></i>
            <span class="menu-title">User</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="show_user.php"> All User </a></li>
              <li class="nav-item"> <a class="nav-link" href="add_user.php"> Add User </a></li>
            </ul>
          </div>
        </li>

      </ul>
    </nav>