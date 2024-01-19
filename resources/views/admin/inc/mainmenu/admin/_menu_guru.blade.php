{{-- <li class="nav-title">Manajemen Sekolah</li> --}}
<li class="{{ Request::is('guru-*') ? 'active open' : '' }}">
    <a href="#" title="Guru Mata Pelajaran" data-filter-tags="guru mata pelajaran">
        <i class="ni ni-user-follow"></i>
        <span class="nav-link-text" data-i18n="nav.guru_mata_pelajaran">Guru Mata Pelajaran</span>
    </a>
    <ul>
        <li class="{{ Request::is('guru-administrasi') ? 'active' : '' }}">
            <a href="/guru-administrasi" title="Administrasi Guru" data-filter-tags="guru administrasi">
                <span class="nav-link-text" data-i18n="nav.guru_administrasi">Administrasi</span>
            </a>
        </li>
        <li class="{{ Request::is('guru-data-kbm') ? 'active' : '' }}">
            <a href="/guru-data-kbm" title="Data KBM" data-filter-tags="guru data kbm">
                <span class="nav-link-text" data-i18n="nav.guru_data_kbm">Data KBM</span>
            </a>
        </li>
        <li class="{{ Request::is('guru-cp-tp') ? 'active' : '' }}">
            <a href="/guru-cp-tp" title="CP dan TP" data-filter-tags="guru cp tp">
                <span class="nav-link-text" data-i18n="nav.guru_cp_tp">CP dan TP</span>
            </a>
        </li>
        <li class="{{ Request::is('guru-kbm-proses*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" title="Proses KBM" data-filter-tags="guru proses kbm">
                <span class="nav-link-text" data-i18n="nav.guru_proses_kbm">Proses KBM</span>
            </a>
            <ul>
                <li class="{{ Request::is('guru-kbm-proses-penilaian') ? 'active' : '' }}">
                    <a href="/guru-kbm-proses-penilaian" title="Proses KBM Penilaian"
                        data-filter-tags="guru proses kbm penilaian">
                        <span class="nav-link-text" data-i18n="nav.guru_proses_kbm_tiap_kelas">Penilaian</span>
                    </a>
                </li>
                <li class="{{ Request::is('guru-kbm-proses-absensi') ? 'active' : '' }}">
                    <a href="/guru-kbm-proses-absensi" title="Proses KBM Absensi"
                        data-filter-tags="guru proses kbm absensi">
                        <span class="nav-link-text" data-i18n="nav.guru_proses_kbm_absensi">Absensi</span>
                    </a>
                </li>
                <li class="{{ Request::is('guru-kbm-proses-remedial') ? 'active' : '' }}">
                    <a href="/guru-kbm-proses-remedial" title="Proses KBM Remedial"
                        data-filter-tags="guru proses kbm remedial">
                        <span class="nav-link-text" data-i18n="nav.guru_proses_kbm_remedial">Remedial</span>
                    </a>
                </li>
                <li class="{{ Request::is('guru-kbm-proses-arsip') ? 'active' : '' }}">
                    <a href="/guru-kbm-proses-arsip" title="Proses KBM Arsip" data-filter-tags="guru proses kbm arsip">
                        <span class="nav-link-text" data-i18n="nav.guru_proses_kbm_arsip">Arsip</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</li>
