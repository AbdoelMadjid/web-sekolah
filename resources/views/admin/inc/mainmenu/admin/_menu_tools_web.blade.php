<li class="nav-title">Tools & Website</li>
<li class="{{ Request::is('tools/tools-*') ? 'active open' : '' }}">
    <a href="javascript:void(0);" title="Tools App" data-filter-tags="tools app">
        <i class="fal fa-tools"></i>
        <span class="nav-link-text" data-i18n="nav.tools_app">Tools App</span>
    </a>
    <ul>
        <li class="{{ Request::is('/') ? 'active' : '' }}">
            <a href="/" title="Web Dashboard" data-filter-tags="web dashboard">
                <i class="fal fa-globe"></i>
                <span class="nav-link-text" data-i18n="nav.web_dashboard_web">Dashboard Web</span>
            </a>
        </li>
        <li class="{{ Request::is('tools/tools-profil-aplikasi') ? 'active' : '' }}">
            <a href="/tools/tools-profil-aplikasi" title="Profil Aplikasi" data-filter-tags="tools profil aplikasi">
                <span class="nav-link-text" data-i18n="nav.tools_profil_aplikasi">Profil Aplikasi</span>
            </a>
        </li>
        <li class="{{ Request::is('tools/tools-data*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" title="Data Master" data-filter-tags="tols data master">
                <span class="nav-link-text" data-i18n="nav.tools_data_master">Data Master</span>
            </a>
            <ul>
                <li class="{{ Request::is('tools/tools-data-jabatan') ? 'active' : '' }}">
                    <a href="/tools/tools-data-jabatan" title="Jenis Jabatan"
                        data-filter-tags="data master jenis jabatan">
                        <span class="nav-link-text" data-i18n="nav.data_master_jenis_jabatan">Jenis Jabatan</span>
                    </a>
                </li>
                <li class="{{ Request::is('tools/tools-data-eskul') ? 'active' : '' }}">
                    <a href="/tools/tools-data-eskul" title="Jenis Eskul" data-filter-tags="data master jenis eskul">
                        <span class="nav-link-text" data-i18n="nav.data_master_jenis_eskul">Jenis Eskul</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="{{ Request::is('tools/tools-manajemen-users') ? 'active' : '' }}">
            <a href="/tools/tools-manajemen-users" title="Manajemen Users" data-filter-tags="tools manajemen users">
                <span class="nav-link-text" data-i18n="nav.tools_manajemen_users">Manajemen Users</span>
            </a>
        </li>
        <li class="{{ Request::is('tools/tools-opsi-aplikasi') ? 'active' : '' }}">
            <a href="/tools/tools-opsi-aplikasi" title="Opsi Aplikasi" data-filter-tags="tools opsi aplikasi">
                <span class="nav-link-text" data-i18n="nav.tools_opsi_aplikasi">Opsi Aplikasi</span>
            </a>
        </li>
        <li class="{{ Request::is('tools/tools-ekspor') ? 'active' : '' }}">
            <a href="/tools/tools-ekspor" title="Ekspor" data-filter-tags="tools ekspor">
                <span class="nav-link-text" data-i18n="nav.tools_ekspor">Ekspor</span>
            </a>
        </li>
        <li class="{{ Request::is('tools/tools-impor') ? 'active' : '' }}">
            <a href="/tools/tools-impor" title="Impor" data-filter-tags="tools impor">
                <span class="nav-link-text" data-i18n="nav.tools_impor">Impor</span>
            </a>
        </li>
        <li class="{{ Request::is('tools/tools-statistik-data') ? 'active' : '' }}">
            <a href="/tools/tools-statistik-data" title="Statistik Data" data-filter-tags="tools statistik data">
                <span class="nav-link-text" data-i18n="nav.tools_statistik_data">Statistik Data</span>
            </a>
        </li>

    </ul>
</li>
<li class="{{ Request::is('webapp/web-*') ? 'active open' : '' }}">
    <a href="#" title="Manajemen Website" data-filter-tags="manajemen website">
        <i class="fal fa-globe"></i>
        <span class="nav-link-text" data-i18n="nav.manajemen_website">Manajemen Website</span>
    </a>
    <ul>
        <li class="{{ Request::is('webapp/web-pengumuman') ? 'active' : '' }}">
            <a href="/webapp/web-pengumuman" title="Pengumuman" data-filter-tags="web pengumuman">
                <span class="nav-link-text" data-i18n="nav.web_pengumuman">Pengumuman</span>
            </a>
        </li>
        <li class="{{ Request::is('webapp/web-kepegawaian') ? 'active' : '' }}">
            <a href="/webapp/web-kepegawaian" title="Kepegawaian" data-filter-tags="web kepegawaian">
                <span class="nav-link-text" data-i18n="nav.web_kepegawaian">Kepegawaian</span>
            </a>
        </li>
        <li class="{{ Request::is('webapp/web-kesiswaan') ? 'active' : '' }}">
            <a href="/webapp/web-kesiswaan" title="Kesiswaan" data-filter-tags="web kesiswaan">
                <span class="nav-link-text" data-i18n="nav.web_kesiswaan">Kesiswaan</span>
            </a>
        </li>
        <li class="{{ Request::is('webapp/web-sarana-prasarana') ? 'active' : '' }}">
            <a href="/webapp/web-sarana-prasarana" title="Sarana Prasarana" data-filter-tags="web sarana prasarana">
                <span class="nav-link-text" data-i18n="nav.web_sarana_prasarana">Sarana Prasarana</span>
            </a>
        </li>
        <li class="{{ Request::is('webapp/web-agenda-kegiatan') ? 'active' : '' }}">
            <a href="/webapp/web-agenda-kegiatan" title="Agenda Kegiatan" data-filter-tags="web agenda kegiatan">
                <span class="nav-link-text" data-i18n="nav.web_agenda_kegiatan">Agenda Kegiatan</span>
            </a>
        </li>
        <li class="{{ Request::is('webapp/web-blog') ? 'active' : '' }}">
            <a href="/webapp/web-blog" title="Blog" data-filter-tags="web blog">
                <span class="nav-link-text" data-i18n="nav.web_blog">Blog / Berita</span>
            </a>
        </li>
        <li class="{{ Request::is('webapp/web-galeri') ? 'active' : '' }}">
            <a href="/webapp/web-galeri" title="Galeri" data-filter-tags="web galeri">
                <span class="nav-link-text" data-i18n="nav.web_galeri">Galeri</span>
            </a>
        </li>
    </ul>
</li>
