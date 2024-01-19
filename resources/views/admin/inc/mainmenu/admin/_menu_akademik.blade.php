{{-- <li class="nav-title">Manajemen Sekolah</li> --}}
<li class="{{ Request::is('ak*') ? 'active open' : '' }}">
    <a href="#" title="Akademik" data-filter-tags="akademik">
        <i class="fal fa-graduation-cap"></i>
        <span class="nav-link-text" data-i18n="nav.akademik">Akademik</span>
    </a>
    <ul>
        <li class="{{ Request::is('ak-tahunajar') ? 'active' : '' }}">
            <a href="/ak-tahunajar" title="Tahun Ajaran" data-filter-tags="akademik tahun ajaran dan semester">
                <span class="nav-link-text" data-i18n="nav.akademik_tahun_ajaran_dan_semester">Tahun Ajaran</span>
            </a>
        </li>
        <li class="{{ Request::is('ak-profil-sekolah') ? 'active' : '' }}">
            <a href="/ak-profil-sekolah" title="Profil Sekolah" data-filter-tags="akaedmik profil sekolah">
                <span class="nav-link-text" data-i18n="nav.akademik_profil_sekolah">Profil Sekolah</span>
            </a>
        </li>
        <li class="{{ Request::is('ak-program-keahlian') ? 'active' : '' }}">
            <a href="/ak-program-keahlian" title="Program Keahlian" data-filter-tags="akademik program keahlian">
                <span class="nav-link-text" data-i18n="nav.akademik_program_keahlian">Program Keahlian</span>
            </a>
        </li>
        <li class="{{ Request::is('ak-guru-tata-usaha') ? 'active' : '' }}">
            <a href="/ak-guru-tata-usaha" title="Guru dan Tata Usaha" data-filter-tags="akademik guru dan tata usaha">
                <span class="nav-link-text" data-i18n="nav.akademik_guru_dan_tata_usaha">Guru & TU</span>
                <span class="dl-ref bg-primary-500 hidden-nav-function-minify hidden-nav-function-top">news</span>
            </a>
        </li>
        <li class="{{ Request::is('ak-kepala-sekolah') ? 'active' : '' }}">
            <a href="/ak-kepala-sekolah" title="Kepala Sekolah" data-filter-tags="akademik kepala sekolah">
                <span class="nav-link-text" data-i18n="nav.akademik_kepala_sekolah">Kepala Sekolah</span>
            </a>
        </li>
        <li class="{{ Request::is('ak-wakasek') ? 'active' : '' }}">
            <a href="/ak-wakasek" title="Wakil Kepala Sekolah" data-filter-tags="akademik wakil kepala sekolah">
                <span class="nav-link-text" data-i18n="nav.akademik_wakil_kepala_sekolah">Wakil Kepala Sekolah</span>
            </a>
        </li>
        <li class="{{ Request::is('ak-kaprodi') ? 'active' : '' }}">
            <a href="/ak-kaprodi" title="Ketua Program Studi" data-filter-tags="akademik ketua program studi">
                <span class="nav-link-text" data-i18n="nav.akademik_ketua_program_studi">Ketua Program Studi</span>
            </a>
        </li>
        <li class="{{ Request::is('ak-jabatan-lain') ? 'active' : '' }}">
            <a href="/ak-jabatan-lain" title="Jabatan Lain" data-filter-tags="akademik jabatan lainnya">
                <span class="nav-link-text" data-i18n="nav.akademik_jabatan_lainnya">Jabatan Lain</span>
            </a>
        </li>
        <li class="{{ Request::is('ak-kelas') ? 'active' : '' }}">
            <a href="/ak-kelas" title="Kelas" data-filter-tags="akademik kelas">
                <span class="nav-link-text" data-i18n="nav.akademik_kelas">Kelas</span>
            </a>
        </li>
        <li class="{{ Request::is('ak-wali-kelas') ? 'active' : '' }}">
            <a href="/ak-wali-kelas" title="Wali Kelas" data-filter-tags="akademik wali kelas">
                <span class="nav-link-text" data-i18n="nav.akademik_wali_kelas">Wali Kelas</span>
            </a>
        </li>
        <li class="{{ Request::is('ak-peserta-didik') ? 'active' : '' }}">
            <a href="/ak-peserta-didik" title="Peserta Didik" data-filter-tags="akademik peserta didik">
                <span class="nav-link-text" data-i18n="nav.akademik_peserta_didik">Peserta Didik</span>
            </a>
        </li>
    </ul>
</li>
