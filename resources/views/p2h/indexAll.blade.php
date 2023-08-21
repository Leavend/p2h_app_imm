@include('layoutLanding.header')

<body id="page-top">

    @include('layoutLanding.navbar')

    <!-- Display P2H -->
    <div class="tabel-manis">
        <main class="table">
            <section class="page-section" id="p2hkendaraan" style="margin: 75px; height: 750px">
                <div class="container
                px-4 px-lg-5">
                    <h3 class="text-center mt-0">Daftar P2H</h3>
                    <div style="float: right;">
                        <form id="filterFormP2H">
                            <div class="input-group">
                                <input type="date" value="{{ Request::get('date') }}" class="form-control"
                                    id="filterDateP2H" name="date" placeholder="search by date">
                                <button type="submit" class="btn btn-primary">Filter by Date</button>
                                <a href="{{ route('home') }}" class="btn btn-success">Clear</a>
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
                                        <td style="display: flex; justify-content: center">
                                            <a href="{{ url('p2h-cek/edit/' . $x->id) }}"
                                                class="btn btn-circle btn-warning"><i class="fas fa-edit"></i></a>
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
                    <div style="padding: 25px; float: right;">
                        {{ $p2hToday->appends(request()->except('p2h_page'))->links() }}
                    </div>
                </div>
            </section>
        </main>
    </div>

    @include('layoutLanding.footer')

</body>
