@include('layoutLanding.header')

<body id="page-top">

    @include('layoutLanding.navbar')

    <!-- Display P2H -->
    <div class="tabel-manis">
        <main class="table">
            <section class="page-section" id="p2hkendaraan" style="margin: 75px; height: 750px">
                <div class="container
                px-4 px-lg-5">
                    <h3 class="text-center mt-0">Daftar P2H Harian</h3>
                    <div style="float: right;">
                        <form id="filterFormP2H">
                            <div class="input-group">
                                <input type="text" value="{{ Request::get('no_lambung') }}" class="form-control"
                                    id="filterP2H" name="no_lambung" placeholder="Cari dari Nomor Lambung">
                                <button type="submit" class="btn btn-primary">Cari No Lambung</button>
                                <a href="{{ route('p2h-cek.list') }}" class="btn btn-success">Clear</a>
                            </div>
                        </form>
                    </div>
                    {{-- <hr class="divider divider-light" /> --}}
                    <section class="table__header">
                        <!-- Add your header content here if needed -->
                    </section>
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
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Loop through the filtered P2H data -->
                                @forelse ($p2hToday as $x)
                                    <tr>
                                        <td>{{ $p2hToday->firstItem() + $loop->index }}</td>
                                        <td>{{ $x->kendaraan->jenis_kendaraan }}</td>
                                        <td>{{ $x->kendaraan->type_kendaraan }}</td>
                                        <td>{{ $x->kendaraan->nomor_lambung }}</td>
                                        <td>{{ $x->keterangan }}</td>
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
                                        <td>
                                            <a href="{{ url('p2h-cek/edit/' . $x->id) }}"
                                                class="btn btn-circle btn-warning"><i class="bi bi-pencil"></i></a>
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
                    <nav class="app-pagination" id="p2h-pagination">
                        <ul class="pagination justify-content-center">
                            <li class="page-item {{ $p2hToday->currentPage() == 1 ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $p2hToday->url($p2hToday->currentPage() - 1) }}"
                                    tabindex="-1"
                                    aria-disabled="{{ $p2hToday->currentPage() == 1 ? 'true' : 'false' }}">Previous</a>
                            </li>
                            @for ($i = 1; $i <= $p2hToday->lastPage(); $i++)
                                <li class="page-item {{ $p2hToday->currentPage() == $i ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $p2hToday->url($i) }}">{{ $i }}</a>
                                </li>
                            @endfor
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

    @include('layoutLanding.footer')

</body>
