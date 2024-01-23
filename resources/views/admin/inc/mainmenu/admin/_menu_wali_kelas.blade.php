{{-- <li class="nav-title">Manajemen Sekolah</li> --}}
<li class="{{ Request::is('walikelas/wk-*') ? 'active open' : '' }}">
    <a href="#" title="Wali Kelas" data-filter-tags="wali kelas">
        <i class="fal fa-address-book"></i>
        <span class="nav-link-text" data-i18n="nav.wali_kelas">Wali Kelas</span>
    </a>
    <ul>
        <li class="{{ Request::is('walikelas/wk-data-kelas') ? 'active' : '' }}">
            <a href="/walikelas/wk-data-kelas" title="Data Kelas" data-filter-tags="wali kelas data kelas">
                <span class="nav-link-text" data-i18n="nav.wali_kelas_data_kelas">Data kelas</span>
            </a>
        </li>
        <li class="{{ Request::is('walikelas/wk-ident-siswa') ? 'active' : '' }}">
            <a href="/walikelas/wk-ident-siswa" title="Identitas Siswa" data-filter-tags="wali kelas identitas siswa">
                <span class="nav-link-text" data-i18n="nav.wali_kelas_identitas_siswa">Identitas Siswa</span>
            </a>
        </li>
        <li class="{{ Request::is('walikelas/wk-absensi-siswa') ? 'active' : '' }}">
            <a href="/walikelas/wk-absensi-siswa" title="Absensi Siswa" data-filter-tags="wali kelas absensi siswa">
                <span class="nav-link-text" data-i18n="nav.wali_kelas_absensi_siswa">Absensi</span>
            </a>
        </li>
        <li class="{{ Request::is('walikelas/wk-eskul-siswa') ? 'active' : '' }}">
            <a href="/walikelas/wk-eskul-siswa" title="Ekstrakurikuler Siswa"
                data-filter-tags="wali kelas ekstrakurikuler siswa">
                <span class="nav-link-text" data-i18n="nav.wali_kelas_ekstrakurikuler_siswa">Ekstrakurikuler</span>
            </a>
        </li>
        <li class="{{ Request::is('walikelas/wk-prestasi-siswa') ? 'active' : '' }}">
            <a href="/walikelas/wk-prestasi-siswa" title="Prestasi Siswa" data-filter-tags="wali kelas prestasi siswa">
                <span class="nav-link-text" data-i18n="nav.wali_kelas_prestasi_siswa">Prestasi</span>
            </a>
        </li>
        <li class="{{ Request::is('walikelas/wk-prakerin-siswa') ? 'active' : '' }}">
            <a href="/walikelas/wk-prakerin-siswa" title="Prakerin Siswa" data-filter-tags="wali kelas prakerin siswa">
                <span class="nav-link-text" data-i18n="nav.wali_kelas_prakerin_siswa">Prakerin</span>
            </a>
        </li>
        <li class="{{ Request::is('walikelas/wk-catatan-siswa') ? 'active' : '' }}">
            <a href="/walikelas/wk-catatan-siswa" title="Catatan Siswa" data-filter-tags="wali kelas catatan">
                <span class="nav-link-text" data-i18n="nav.wali_kelas_catatan">Catatan</span>
            </a>
        </li>
        <li class="{{ Request::is('walikelas/wk-raport-siswa') ? 'active' : '' }}">
            <a href="/walikelas/wk-raport-siswa" title="Raport Siswa" data-filter-tags="wali kelas raport">
                <span class="nav-link-text" data-i18n="nav.wali_kelas_raport">Raport</span>
            </a>
        </li>
    </ul>
</li>
