@include('layoutLanding.header')

<body id="page-top">

    <!-- Landing Navbar -->
    @include('layoutLanding.navbar')

    <!-- Display P2H Daily -->
    <div class="tabel-manis">
        <main class="table">
            <section class="page-section" id="p2hkendaraan">
                <div class="container
                px-lg-5">

                    <!-- Filter No.Lambung P2H -->
                    <div class="untuk-filter">
                        <form id="filterFormP2H">
                            <div class="input-group mt-5">
                                <input type="text" value="{{ Request::get('no_lambung') }}" class="form-control"
                                    id="filterP2H" name="no_lambung" placeholder="Cari P2H dari No.Lambung">
                                <button type="submit" class="btn btn-primary">Cari No Lambung</button>
                                <a href="{{ route('p2h-cek.list') }}" class="btn btn-success">Clear</a>
                            </div>
                        </form>
                    </div>

                    <!-- Table Header -->
                    <section class="table__header">
                        <h3 class="text-center mt-0">Daftar P2H Harian</h3>
                    </section>

                    {{-- @include('_messages') --}}
                    <!-- Table Fill -->
                    <section class="table-responsive" id="p2h-table">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jenis Kendaraan</th>
                                    <th>Type Kendaraan</th>
                                    <th>Keterangan</th>
                                    <th>Status</th>
                                    <th>Tanggal</th>
                                    <th>No Lambung</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($p2hToday as $x)
                                    <tr>
                                        <td>{{ $p2hToday->firstItem() + $loop->index }}</td>
                                        <td>{{ $x->kendaraan->jenis_kendaraan }}</td>
                                        <td>{{ $x->kendaraan->type_kendaraan }}</td>
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
                                        <td>{{ $x->kendaraan->nomor_lambung }}</td>
                                        <td>
                                            @if ($x->status == 'belum diperiksa')
                                                <a href="{{ url('p2h-cek/form/' . $x->id) }}"
                                                    class="btn btn-circle btn-warning"><i class="bi bi-pencil"></i></a>
                                            @else
                                                <p>-</p>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="cell" colspan="8" style="text-align: center;">
                                            DATA P2H HARI INI TIDAK ADA.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </section>

                    <!-- Pagination p2h Daily -->
                    <nav class="app-pagination" id="p2h-daily-pagination">
                        <ul class="pagination justify-content-center">
                            <li class="page-item {{ $p2hToday->currentPage() == 1 ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $p2hToday->url($p2hToday->currentPage() - 1) }}"
                                    tabindex="-1"
                                    aria-disabled="{{ $p2hToday->currentPage() == 1 ? 'true' : 'false' }}">Previous</a>
                            </li>
                            @for ($i = 1; $i <= 3; $i++)
                                <li class="page-item {{ $p2hToday->currentPage() == $i ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $p2hToday->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            @if ($p2hToday->currentPage() > 4)
                                <li class="page-item disabled">
                                    <a class="page-link">...</a>
                                </li>
                            @endif
                            @php
                                $startPage = max($p2hToday->currentPage() - 1, 4);
                                $endPage = min($startPage + 2, $p2hToday->lastPage());
                            @endphp
                            @for ($i = $startPage; $i <= $endPage; $i++)
                                <li class="page-item {{ $p2hToday->currentPage() == $i ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $p2hToday->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
                            @if ($endPage < $p2hToday->lastPage() - 2)
                                <li class="page-item disabled">
                                    <a class="page-link">...</a>
                                </li>
                                @for ($i = $p2hToday->lastPage() - 2; $i <= $p2hToday->lastPage(); $i++)
                                    <li class="page-item {{ $p2hToday->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $p2hToday->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                            @endif
                            <li
                                class="page-item {{ $p2hToday->currentPage() == $p2hToday->lastPage() ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $p2hToday->url($p2hToday->currentPage() + 1) }}">Next</a>
                            </li>
                        </ul>
                    </nav>


                </div>
            </section>
        </main>
    </div>

    <!-- Landing Footer -->
    @include('layoutLanding.footer')

</body>
