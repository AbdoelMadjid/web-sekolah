{{-- <li class="nav-title">Manajemen Sekolah</li> --}}
<li class="{{ Request::is('kbm-*') ? 'active open' : '' }}">
    <a href="#" title="Kegiatan Belajar Mengajar" data-filter-tags="kegiatan belajar mengajar">
        <i class="fal fa-book"></i>
        <span class="nav-link-text" data-i18n="nav.kegiatan_belajar_mengajar">K B M</span>
    </a>
    <ul>
        <li class="{{ Request::is('kbm-mata-pelajaran') ? 'active' : '' }}">
            <a href="/kbm-mata-pelajaran" title="Mata Pelajaran" data-filter-tags="kegiatan kbm mata pelajaran">
                <span class="nav-link-text" data-i18n="nav.kegiatan_kbm_mata_pelajaran">Mata Pelajaran</span>
            </a>
        </li>
        <li class="{{ Request::is('kbm-cp-tp') ? 'active' : '' }}">
            <a href="/kbm-cp-tp" title="Capaian dan Tujuan Pembelajaran"
                data-filter-tags="kegiatan kbm capaian dan tujuan pembelajaran">
                <span class="nav-link-text" data-i18n="nav.kegiatan_kbm_capaian_dan_tujuan_pembelajaran">CP
                    TP</span>
            </a>
        </li>
        <li class="{{ Request::is('kbm-siswa-perkelas') ? 'active' : '' }}">
            <a href="/kbm-siswa-perkelas" title="Siswa Per Kelas" data-filter-tags="kegiatan kbm siswa per kelas">
                <span class="nav-link-text" data-i18n="nav.kegiatan_kbm_siswa_per_kelas">Siswa Per Kelas</span>
            </a>
        </li>
        <li class="{{ Request::is('kbm-bagi-jam-kbm') ? 'active' : '' }}">
            <a href="/kbm-bagi-jam-kbm" title="Pembagian Jam Mengajar" data-filter-tags="kegiatan kbm bagi jam">
                <span class="nav-link-text" data-i18n="nav.kegiatan_kbm_bagi_jam">Pembagian Jam Mengajar</span>
            </a>
        </li>
        <li class="{{ Request::is('kbm-proses*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" title="Proses KBM" data-filter-tags="proses kbm">
                <span class="nav-link-text" data-i18n="nav.proses_kbm">Proses KBM</span>
            </a>
            <ul>
                <li class="{{ Request::is('kbm-proses-perkelas') ? 'active' : '' }}">
                    <a href="/kbm-proses-perkelas" title="KBM Per Kelas" data-filter-tags="proses kbm tiap kelas">
                        <span class="nav-link-text" data-i18n="nav.proses_kbm_tiap_kelas">Per Kelas</span>
                    </a>
                </li>
                <li class="{{ Request::is('kbm-proses-perguru') ? 'active' : '' }}">
                    <a href="/kbm-proses-perguru" title="KBM Per Guru" data-filter-tags="proses kbm tiap guru">
                        <span class="nav-link-text" data-i18n="nav.proses_kbm_tiap_guru">Per Guru</span>
                    </a>
                </li>
                <li class="{{ Request::is('kbm-proses-penilaian') ? 'active' : '' }}">
                    <a href="/kbm-proses-penilaian" title="KBM Remedial" data-filter-tags="proses kbm penilaian">
                        <span class="nav-link-text" data-i18n="nav.proses_kbm_penilaian">Penilaian</span>
                    </a>
                </li>
                <li class="{{ Request::is('kbm-proses-remedial') ? 'active' : '' }}">
                    <a href="/kbm-proses-remedial" title="KBM Remedial" data-filter-tags="proses kbm remedial">
                        <span class="nav-link-text" data-i18n="nav.proses_kbm_remedial">Remedial</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</li>
