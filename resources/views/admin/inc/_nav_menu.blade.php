<ul id="js-nav-menu" class="nav-menu">
    <li class="{{ Request::is('dashboard-admin') ? 'active' : '' }}">
        <a href="/dashboard-admin" title="Dashboard" data-filter-tags="application dashboard">
            <i class="fal fa-home"></i>
            <span class="nav-link-text" data-i18n="nav.application_dashboard">Dashboard</span>
        </a>
    </li>
    <li class="{{ Request::is('/') ? 'active' : '' }}">
        <a href="/" title="Web Dashboard" data-filter-tags="web dashboard">
            <i class="fal fa-globe"></i>
            <span class="nav-link-text" data-i18n="nav.web_dashboard_web">Dashboard Web</span>
        </a>
    </li>
    <li class="{{ Request::is('about') ? 'active' : '' }}">
        <a href="/about" title="About" data-filter-tags="application about">
            <i class="fal fa-info-circle"></i>
            <span class="nav-link-text" data-i18n="nav.application_about">About</span>
        </a>
    </li>
    <li class="{{ Request::is('landing_page') ? 'active' : '' }}">
        <a href="/landingpage" title="Landing Page" data-filter-tags="application landing page">
            <i class="fal fa-info-circle"></i>
            <span class="nav-link-text" data-i18n="nav.application_landing_page">Landing Page</span>
        </a>
    </li>

    @include('admin.inc.mainmenu.admin._menu_admin')
    @include('admin.inc.mainmenu.admin._menu_akademik')
    @include('admin.inc.mainmenu.admin._menu_kegiatan_kbm')
    @include('admin.inc.mainmenu.admin._menu_guru')
    @include('admin.inc.mainmenu.admin._menu_wali_kelas')
    @include('admin.inc.mainmenu.admin._menu_bpbk')
    @include('admin.inc.mainmenu.admin._menu_tools_web')

    @include('admin.inc.mainmenu.temp._menu_intel_app')
    @include('admin.inc.mainmenu.temp._menu_tools_component_app')
    @include('admin.inc.mainmenu.temp._menu_plugin_addon_app')
    @include('admin.inc.mainmenu.temp._menu_layouts_app')

</ul>
