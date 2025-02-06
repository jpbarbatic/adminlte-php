<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
<!--begin::Sidebar Brand-->
<div class="sidebar-brand">
  <!--begin::Brand Link-->
  <a href="." class="brand-link">
    <!--begin::Brand Image-->
    <img
      src="favicon-32x32.png"
      alt="AdminLTE Logo"
      class="brand-image opacity-75 shadow"
    />
    <!--end::Brand Image-->
    <!--begin::Brand Text-->
    <span class="brand-text fw-light"><?php echo APP_NAME ?></span>
    <!--end::Brand Text-->
  </a>
  <!--end::Brand Link-->
</div>
<!--end::Sidebar Brand-->
<!--begin::Sidebar Wrapper-->
<div class="sidebar-wrapper">
  <nav class="mt-2">
    <!--begin::Sidebar Menu-->
    <ul
      class="nav sidebar-menu flex-column"
      data-lte-toggle="treeview"
      role="menu"
      data-accordion="false"
    >
      <li class="nav-item">
        <a href="dashboard.php" class="nav-link active">
          <i class="nav-icon bi bi-speedometer"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="nav-icon bi bi-gear"></i>
          <p>
            Configuración
          </p>
        </a>
      </li>
      <li class="nav-header">Sesión</li>
      <li class="nav-item">
        <a href="logout.php" class="nav-link">
          <i class="nav-icon bi  bi-box-arrow-left"></i>
          <p>
            Cerrar
          </p>
        </a>
      </li>
    </ul>
    <!--end::Sidebar Menu-->
  </nav>
</div>
<!--end::Sidebar Wrapper-->
</aside>
