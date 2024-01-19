{{-- <li class="nav-title">Manajemen Sekolah</li> --}}
<li class="{{ Request::is('bp-bk*') ? 'active' : '' }}">
    <a href="bp-bk" title="Bimbingan Karir" data-filter-tags="bimbingan karir">
        <i class="fal fa-user-md"></i>
        <span class="nav-link-text" data-i18n="nav.bimbingan_karir">Bimbingan Karir</span>
    </a>
</li>
