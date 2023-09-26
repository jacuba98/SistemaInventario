<!-- Logo -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <span class="app-brand-logo demo">
            <div class="shrink-0 flex items-center">
            <a href="{{ route('dashboard') }}">
                <img src="{{ asset('images/gp-Logo.png') }}" alt="Imagen de ejemplo" width="36" height="36"/>
            </a>
            </div>
        </span>
        <span class="app-brand-text demo menu-text fw-bolder ms-2">Inventario</span>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item" >
        <a href="{{ route('dashboard') }}" class="menu-link" >
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>

      <!-- Inventario -->
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class='menu-icon tf-icons bx bx-file'></i>
          <div data-i18n="Layouts">Inventario</div>
        </a>

        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('inventario.index')}}" class="menu-link">
              <div data-i18n="Without menu">Listado</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('inventario.create') }}" class="menu-link">
              <div data-i18n="Without navbar">Nuevo</div>
            </a>
          </li>
        </ul>
      </li>

      <!-- Historial -->
      <li class="menu-item">
        <a href="{{ route('historial.index') }}" class="menu-link">
            <i class='menu-icon tf-icons bx bx-history' ></i>
          <div data-i18n="Analytics">Historial</div>
        </a>
      </li>

      <!-- Empleados -->
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class='menu-icon tf-icons bx bx-user-pin'></i>
          <div data-i18n="Layouts">Empleados</div>
        </a>

        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('empleados.index') }}" class="menu-link">
              <div data-i18n="Without menu">Listado</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('empleados.create') }}" class="menu-link">
              <div data-i18n="Without navbar">Nuevo</div>
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Administrador</span>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class='menu-icon tf-icons bx bxs-user-circle'></i>
          <div data-i18n="Account Settings">Usuarios</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route('users.index') }}" class="menu-link">
              <div data-i18n="Account">Listado</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route('users.create') }}" class="menu-link">
              <div data-i18n="Notifications">Nuevo</div>
            </a>
          </li>
        </ul>
      </li>

      <!-- Misc -->
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
      <li class="menu-item">
        <a
          href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
          target="_blank"
          class="menu-link"
        >
          <i class="menu-icon tf-icons bx bx-support"></i>
          <div data-i18n="Support">Support</div>
        </a>
      </li>
      <li class="menu-item">
        <a
          href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
          target="_blank"
          class="menu-link"
        >
          <i class="menu-icon tf-icons bx bx-file"></i>
          <div data-i18n="Documentation">Documentation</div>
        </a>
      </li>
    </ul>
</aside>