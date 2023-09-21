<!-- Landing Header -->
@include('layoutLanding.header')

<body id="page-top">

    <!-- Landing Navbar -->
    @include('layoutLanding.navbar')


    <!-- Landing Hero -->
    @include('layoutLanding.hero')


    <!-- Display List P2H -->
    <div class="tabel-manis">
        <main class="table">
            <section class="page-section" id="p2hkendaraan" style="height: 750px">
                <div class="container
                 px-lg-5">

                    <!-- Filter Date P2H -->
                    <div class="untuk-filter">
                        <form id="filterFormP2H">
                            <div class="input-group">
                                <input type="date" value="{{ Request::get('date') }}" class="form-control"
                                    id="filterDateP2H" name="date" placeholder="search by date">
                                <button type="submit" class="btn btn-primary">Filter by Date</button>
                                <a href="{{ route('home') }}" class="btn btn-success">Clear</a>
                            </div>
                        </form>
                    </div>

                    <!-- Table Header -->
                    <section class="table__header">
                        <h3 class="text-center mt-0">Daftar Total P2H IMM - GA</h3>
                    </section>

                    <!-- Table Fill -->
                    <section class="table-responsive" id="p2h-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Kendaraan</th>
                                    <th>Type Kendaraan</th>
                                    <th>No Lambung</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Loop through the filtered P2H data -->
                                @forelse ($p2hPaginator as $x)
                                    <tr>
                                        <td>{{ $p2hPaginator->firstItem() + $loop->index }}</td>
                                        <td>{{ $x->kendaraan->jenis_kendaraan }}</td>
                                        <td>{{ $x->kendaraan->type_kendaraan }}</td>
                                        <td>{{ $x->kendaraan->nomor_lambung }}</td>
                                        <td>
                                            @if ($x->status == 'belum diperiksa')
                                                {{ $x->keterangan ?? '-' }}
                                            @elseif ($x->status == 'menunggu verifikasi')
                                                {{ $x->keterangan ?? 'P2H Telah Dilakukan' }}
                                            @else
                                                {{ $x->keterangan }}
                                            @endif
                                        </td>
                                        <td>
                                            @if ($x->status == 'terverifikasi')
                                                <p class="status delivered">Terverifikasi</p>
                                            @elseif ($x->status == 'menunggu verifikasi')
                                                <p class="status cancelled">Menunggu Verifikasi</p>
                                            @else
                                                <p class="status shipped">Belum Diperiksa</p>
                                            @endif
                                        </td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($x->tanggal, 'Asia/Makassar')->format('d M Y ') }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="cell" colspan="8" style="text-align: center;">
                                            Data Tidak Ada.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </section>

                    <!-- Pagination p2h -->
                    @if ($p2hPaginator->lastPage() > 1)
                        <!-- Cek apakah ada lebih dari 1 halaman -->
                        <nav class="app-pagination" id="p2h-pagination">
                            <ul class="pagination justify-content-center">
                                <li class="page-item {{ $p2hPaginator->currentPage() == 1 ? 'disabled' : '' }}">
                                    <a class="page-link"
                                        href="{{ $p2hPaginator->url($p2hPaginator->currentPage() - 1) }}"
                                        tabindex="-1"
                                        aria-disabled="{{ $p2hPaginator->currentPage() == 1 ? 'true' : 'false' }}">Previous</a>
                                </li>
                                @for ($i = 1; $i <= min(3, $p2hPaginator->lastPage()); $i++)
                                    <li class="page-item {{ $p2hPaginator->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link"
                                            href="{{ $p2hPaginator->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                @if ($p2hPaginator->currentPage() > 4)
                                    <li class="page-item disabled">
                                        <a class="page-link">...</a>
                                    </li>
                                @endif
                                @php
                                    $startPage = max($p2hPaginator->currentPage() - 1, 4);
                                    $endPage = min($startPage + 2, $p2hPaginator->lastPage());
                                @endphp
                                @for ($i = $startPage; $i <= $endPage; $i++)
                                    <li class="page-item {{ $p2hPaginator->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link"
                                            href="{{ $p2hPaginator->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                @if ($endPage < $p2hPaginator->lastPage() - 2)
                                    <li class="page-item disabled">
                                        <a class="page-link">...</a>
                                    </li>
                                    @for ($i = max($endPage + 1, $p2hPaginator->lastPage() - 2); $i <= $p2hPaginator->lastPage(); $i++)
                                        <li class="page-item {{ $p2hPaginator->currentPage() == $i ? 'active' : '' }}">
                                            <a class="page-link"
                                                href="{{ $p2hPaginator->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor
                                @endif
                                <li
                                    class="page-item {{ $p2hPaginator->currentPage() == $p2hPaginator->lastPage() ? 'disabled' : '' }}">
                                    <a class="page-link"
                                        href="{{ $p2hPaginator->url($p2hPaginator->currentPage() + 1) }}">Next</a>
                                </li>
                            </ul>
                        </nav>
                    @endif

                </div>
            </section>
        </main>
    </div>

    <!-- Display List Kendaraan -->
    <div class="tabel-manis">
        <main class="table">
            <section class="page-section" id="kendaraan" style="height: 750px">
                <div class="container px-lg-5">

                    <!-- Filter No.Lambung Kendaraan -->
                    <div class="untuk-filter">
                        <form id="filterFormKendaraan">
                            <div class="input-group">
                                <input type="text" value="{{ Request::get('no_lambung') }}" class="form-control"
                                    id="filterNoLambung" name="no_lambung" placeholder="Tuliskan nomor lambung">
                                <button type="submit" class="btn btn-primary">Cari No Lambung</button>
                                <a href="{{ route('home') }}" class="btn btn-success">Clear</a>
                            </div>
                        </form>
                    </div>

                    <!-- Table Header -->
                    <section class="table__header">
                        <h3 class="text-center mt-0">Daftar Kendaraan</h3>
                    </section>

                    <!-- Table Fill -->
                    <section class="table-responsive" id="kendaraan-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Kendaraan</th>
                                    <th>Type Kendaraan</th>
                                    <th>No Lambung</th>
                                    <th>Tanggal Input</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($kendaraanPaginator as $x)
                                    <tr>
                                        <td>{{ $kendaraanPaginator->firstItem() + $loop->index }}</td>
                                        <td>{{ $x->jenis_kendaraan }}</td>
                                        <td>{{ $x->type_kendaraan }}</td>
                                        <td>{{ $x->nomor_lambung }}</td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($x->tanggal)->format('d M Y ') }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="cell" colspan="7" style="text-align: center;">
                                            Data Tidak Ada.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </section>

                    <!-- Pagination Kendaraan -->
                    @if ($kendaraanPaginator->lastPage() > 1)
                        <nav class="app-pagination" id="kendaraan-pagination">
                            <ul class="pagination justify-content-center">
                                <li class="page-item {{ $kendaraanPaginator->currentPage() == 1 ? 'disabled' : '' }}">
                                    <a class="page-link"
                                        href="{{ $kendaraanPaginator->url($kendaraanPaginator->currentPage() - 1) }}"
                                        tabindex="-1"
                                        aria-disabled="{{ $kendaraanPaginator->currentPage() == 1 ? 'true' : 'false' }}">Previous</a>
                                </li>
                                @for ($i = 1; $i <= min(3, $kendaraanPaginator->lastPage()); $i++)
                                    <li
                                        class="page-item {{ $kendaraanPaginator->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link"
                                            href="{{ $kendaraanPaginator->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                @if ($kendaraanPaginator->lastPage() > 4)
                                    <li class="page-item disabled">
                                        <a class="page-link">...</a>
                                    </li>
                                    @php
                                        $startPage = max($kendaraanPaginator->currentPage() - 1, 4);
                                        $endPage = min($startPage + 2, $kendaraanPaginator->lastPage());
                                    @endphp
                                    @for ($i = $startPage; $i <= $endPage; $i++)
                                        <li
                                            class="page-item {{ $kendaraanPaginator->currentPage() == $i ? 'active' : '' }}">
                                            <a class="page-link"
                                                href="{{ $kendaraanPaginator->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor
                                @endif
                                <li
                                    class="page-item {{ $kendaraanPaginator->currentPage() == $kendaraanPaginator->lastPage() ? 'disabled' : '' }}">
                                    <a class="page-link"
                                        href="{{ $kendaraanPaginator->url($kendaraanPaginator->currentPage() + 1) }}">Next</a>
                                </li>
                            </ul>
                        </nav>
                    @endif

                </div>
            </section>
        </main>
    </div>


    <!-- Do P2h -->
    <section class="page-section bg-imm" id="p2h">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h3 class="text-white mt-0">Lakukan Pemeriksaan</h3>
                    <hr class="divider divider-light" />
                    <a class="btn btn-light btn-xl" href="{{ route('p2h-cek.list') }}">P2H!</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Landing Footer -->
    @include('layoutLanding.footer')


</body>
