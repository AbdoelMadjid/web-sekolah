{{-- <li class="nav-title">Manajemen Sekolah</li> --}}
<li class="{{ Request::is('wk-*') ? 'active open' : '' }}">
    <a href="#" title="Wali Kelas" data-filter-tags="wali kelas">
        <i class="fal fa-address-book"></i>
        <span class="nav-link-text" data-i18n="nav.wali_kelas">Wali Kelas</span>
    </a>
    <ul>
        <li class="{{ Request::is('wk-data-kelas') ? 'active' : '' }}">
            <a href="/wk-data-kelas" title="Data Kelas" data-filter-tags="wali kelas data kelas">
                <span class="nav-link-text" data-i18n="nav.wali_kelas_data_kelas">Data kelas</span>
            </a>
        </li>
        <li class="{{ Request::is('wk-ident-siswa') ? 'active' : '' }}">
            <a href="/wk-ident-siswa" title="Identitas Siswa" data-filter-tags="wali kelas identitas siswa">
                <span class="nav-link-text" data-i18n="nav.wali_kelas_identitas_siswa">Identitas Siswa</span>
            </a>
        </li>
        <li class="{{ Request::is('wk-absensi-siswa') ? 'active' : '' }}">
            <a href="/wk-absensi-siswa" title="Absensi Siswa" data-filter-tags="wali kelas absensi siswa">
                <span class="nav-link-text" data-i18n="nav.wali_kelas_absensi_siswa">Absensi</span>
            </a>
        </li>
        <li class="{{ Request::is('wk-eskul-siswa') ? 'active' : '' }}">
            <a href="/wk-eskul-siswa" title="Ekstrakurikuler Siswa" data-filter-tags="wali kelas ekstrakurikuler siswa">
                <span class="nav-link-text" data-i18n="nav.wali_kelas_ekstrakurikuler_siswa">Ekstrakurikuler</span>
            </a>
        </li>
        <li class="{{ Request::is('wk-prestasi-siswa') ? 'active' : '' }}">
            <a href="/wk-prestasi-siswa" title="Prestasi Siswa" data-filter-tags="wali kelas prestasi siswa">
                <span class="nav-link-text" data-i18n="nav.wali_kelas_prestasi_siswa">Prestasi</span>
            </a>
        </li>
        <li class="{{ Request::is('wk-prakerin-siswa') ? 'active' : '' }}">
            <a href="/wk-prakerin-siswa" title="Prakerin Siswa" data-filter-tags="wali kelas prakerin siswa">
                <span class="nav-link-text" data-i18n="nav.wali_kelas_prakerin_siswa">Prakerin</span>
            </a>
        </li>
        <li class="{{ Request::is('wk-catatan-siswa') ? 'active' : '' }}">
            <a href="/wk-catatan-siswa" title="Catatan Siswa" data-filter-tags="wali kelas catatan">
                <span class="nav-link-text" data-i18n="nav.wali_kelas_catatan">Catatan</span>
            </a>
        </li>
        <li class="{{ Request::is('wk-raport-siswa') ? 'active' : '' }}">
            <a href="/wk-raport-siswa" title="Raport Siswa" data-filter-tags="wali kelas raport">
                <span class="nav-link-text" data-i18n="nav.wali_kelas_raport">Raport</span>
            </a>
        </li>
    </ul>
</li>
