@include('layoutDashboard.header')

<body class="app">

    @include('layoutDashboard.navbar')

    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                <div class="row g-3 mb-4 align-items-center justify-content-between">

                    <div class="col-auto">
                        <h1 class="app-page-title mb-0">P2H</h1>
                    </div>

                    <div class="col-auto">

                        <div class="page-utilities">

                            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                                <div class="col-auto">
                                    <form class="table-search-form row gx-1 align-items-center">
                                        <div class="col-auto">
                                            <input type="text" id="search-orders" name="searchorders"
                                                class="form-control search-orders" placeholder="Search">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn app-btn-secondary">Search</button>
                                        </div>
                                    </form>

                                </div><!--//col-->

                                <div class="col-auto">

                                    <select class="form-select w-auto">
                                        <option selected value="option-1">All</option>
                                        <option value="option-2">This week</option>
                                        <option value="option-3">This month</option>
                                        <option value="option-4">Last 3 months</option>

                                    </select>
                                </div>

                            </div><!--//row-->

                        </div><!--//table-utilities-->

                    </div><!--//col-auto-->

                </div><!--//row-->


                <nav id="orders-table-tab"
                    class="orders-table-tab app-nav-tabs nav shadow-lg flex-column flex-sm-row mb-4">
                    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab"
                        href="#all" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab"
                        href="#belum" role="tab" aria-controls="bus" aria-selected="false">Belum Pemeriksaan</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab"
                        href="#menunggu" role="tab" aria-controls="orders-pending" aria-selected="false">Menunggu
                        Verifikasi</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab"
                        href="#verifikasi" role="tab" aria-controls="orders-cancelled"
                        aria-selected="false">Terverifikasi</a>
                </nav>


                <div class="tab-content" id="orders-table-tab-content">

                    <div class="tab-pane fade show active" id="all" role="tabpanel"
                        aria-labelledby="orders-all-tab">

                        <div class="app-card app-card-orders-table shadow-sm mb-5">

                            <div class="app-card-body">

                                <div class="table-responsive">

                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">No</th>
                                                <th class="cell">Jenis Kendaraan</th>
                                                <th class="cell">Nomor Lambung</th>
                                                <th class="cell">Nomor Polisi</th>
                                                <th class="cell">Keterangan</th>
                                                <th class="cell">Status</th>
                                                <th class="cell">Waktu</th>
                                                <th class="cell"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; ?>
                                            @forelse ($p2hToday as $x)
                                                <tr>
                                                    <td class="cell">{{ ++$no }}</td>
                                                    <td class="cell">{{ $x->kendaraan->jenis_kendaraan }}</td>
                                                    <td class="cell">{{ $x->kendaraan->nomor_lambung }}</td>
                                                    <td class="cell">{{ $x->kendaraan->nomor_polisi }}</td>
                                                    <td class="cell">{{ $x->keterangan }}</td>
                                                    @if ($x->status == 'belum diperiksa')
                                                        <td class="cell">
                                                            <span class="badge bg-danger">Belum Pemeriksaan</span>
                                                        </td>
                                                    @elseif ($x->status == 'menunggu verifikasi')
                                                        <td class="cell">
                                                            <span class="badge bg-warning">Menunggu Verifikasi</span>
                                                        </td>
                                                    @elseif ($x->status == 'terverifikasi')
                                                        <td class="cell">
                                                            <span class="badge bg-success">Terverifikasi</span>
                                                        </td>
                                                    @endif
                                                    <td class="cell">
                                                        <?php $tanggalCarbon = \Carbon\Carbon::parse($x->tanggal); ?>
                                                        <?php $jamCarbon = \Carbon\Carbon::parse($x->jam); ?>
                                                        <span>{{ $tanggalCarbon->format('d M') }}</span>
                                                        <span class="note">{{ $jamCarbon->format('g:i A') }}</span>
                                                    </td>
                                                    <td class="cell">
                                                        <a href="{{ url('user/p2h/detail/' . $x->id) }}"
                                                            class="btn btn-circle btn-info"><i
                                                                class="fas fa-eye"></i></a>
                                                        <a href="{{ url('user/p2h/form/' . $x->id) }}"
                                                            class="btn btn-circle btn-warning">
                                                            <i class="fab fa-wpforms"></i></a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td class="cell" colspan="6" style="text-align: center;">
                                                        Data Tidak Ada.
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>

                                </div><!--//table-responsive-->

                            </div><!--//app-card-body-->

                        </div><!--//app-card-->

                        <nav class="app-pagination">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1"
                                        aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav><!--//app-pagination-->

                    </div><!--//tab-pane-->


                    <div class="tab-pane fade" id="belum" role="tabpanel" aria-labelledby="orders-paid-tab">

                        <div class="app-card app-card-orders-table mb-5">

                            <div class="app-card-body">

                                <div class="table-responsive">

                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">No</th>
                                                <th class="cell">Jenis Kendaraan</th>
                                                <th class="cell">Nomor Lambung</th>
                                                <th class="cell">Nomor Polisi</th>
                                                <th class="cell">Keterangan</th>
                                                <th class="cell">Status</th>
                                                <th class="cell">Waktu</th>
                                                <th class="cell"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; ?>
                                            <?php $dataExist = false; ?>
                                            @forelse ($p2hToday as $x)
                                                @if ($x->status === 'belum diperiksa')
                                                    <?php $dataExist = true; ?>
                                                    <tr>
                                                        <td class="cell">{{ ++$no }}</td>
                                                        <td class="cell">{{ $x->kendaraan->jenis_kendaraan }}</td>
                                                        <td class="cell">{{ $x->kendaraan->nomor_lambung }}</td>
                                                        <td class="cell">{{ $x->kendaraan->nomor_polisi }}</td>
                                                        <td class="cell">{{ $x->keterangan }}</td>
                                                        <td class="cell">
                                                            <span class="badge bg-danger">
                                                                Belum Pemeriksaan
                                                            </span>
                                                        </td>
                                                        <td class="cell">
                                                            <?php $tanggalCarbon = \Carbon\Carbon::parse($x->tanggal); ?>
                                                            <?php $jamCarbon = \Carbon\Carbon::parse($x->jam); ?>
                                                            <span>{{ $tanggalCarbon->format('d M') }}</span>
                                                            <span
                                                                class="note">{{ $jamCarbon->format('g:i A') }}</span>
                                                        </td>
                                                        <td class="cell">
                                                            <a href="{{ url('admin/p2h/detail/' . $x->id) }}"
                                                                class="btn btn-circle btn-info"><i
                                                                    class="fas fa-eye"></i></a>
                                                            <a href="{{ url('admin/p2h/edit/' . $x->id) }}"
                                                                class="btn btn-circle btn-warning"><i
                                                                    class="fas fa-edit"></i></a>
                                                            <a href="{{ url('admin/p2h/hapus/' . $x->id) }}"
                                                                class="btn btn-circle btn-danger"><i
                                                                    class="fas fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @empty
                                                <tr>
                                                    <td class="cell" colspan="11" style="text-align: center;">
                                                        Data
                                                        Tidak Ada.</td>
                                                </tr>
                                            @endforelse
                                            @if (!$dataExist)
                                                <tr>
                                                    <td class="cell" colspan="11" style="text-align: center;">
                                                        Data Tidak Ada.</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>

                                </div><!--//table-responsive-->

                            </div><!--//app-card-body-->

                        </div><!--//app-card-->

                    </div><!--//tab-pane-->


                    <div class="tab-pane fade" id="menunggu" role="tabpanel" aria-labelledby="orders-pending-tab">

                        <div class="app-card app-card-orders-table mb-5">

                            <div class="app-card-body">

                                <div class="table-responsive">

                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">No</th>
                                                <th class="cell">Jenis Kendaraan</th>
                                                <th class="cell">Nomor Lambung</th>
                                                <th class="cell">Nomor Polisi</th>
                                                <th class="cell">Keterangan</th>
                                                <th class="cell">Status</th>
                                                <th class="cell">Waktu</th>
                                                <th class="cell"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; ?>
                                            <?php $dataExist = false; ?>
                                            @forelse ($p2hToday as $x)
                                                @if ($x->status === 'menunggu verifikasi')
                                                    <?php $dataExist = true; ?>
                                                    <tr>
                                                        <td class="cell">{{ ++$no }}</td>
                                                        <td class="cell">{{ $x->kendaraan->jenis_kendaraan }}</td>
                                                        <td class="cell">{{ $x->kendaraan->nomor_lambung }}</td>
                                                        <td class="cell">{{ $x->kendaraan->nomor_polisi }}</td>
                                                        <td class="cell">{{ $x->keterangan }}</td>
                                                        <td class="cell">
                                                            <span class="badge bg-warning">
                                                                Menunggu Verifikasi
                                                            </span>
                                                        </td>
                                                        <td class="cell">
                                                            <?php $tanggalCarbon = \Carbon\Carbon::parse($x->tanggal); ?>
                                                            <?php $jamCarbon = \Carbon\Carbon::parse($x->jam); ?>
                                                            <span>{{ $tanggalCarbon->format('d M') }}</span>
                                                            <span
                                                                class="note">{{ $jamCarbon->format('g:i A') }}</span>
                                                        </td>
                                                        <td class="cell">
                                                            <a href="{{ url('admin/p2h/detail/' . $x->id) }}"
                                                                class="btn btn-circle btn-info"><i
                                                                    class="fas fa-eye"></i></a>
                                                            <a href="{{ url('admin/p2h/edit/' . $x->id) }}"
                                                                class="btn btn-circle btn-warning"><i
                                                                    class="fas fa-edit"></i></a>
                                                            <a href="{{ url('admin/p2h/hapus/' . $x->id) }}"
                                                                class="btn btn-circle btn-danger"><i
                                                                    class="fas fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @empty
                                                <tr>
                                                    <td class="cell" colspan="11" style="text-align: center;">
                                                        Data Tidak Ada.</td>
                                                </tr>
                                            @endforelse
                                            @if (!$dataExist)
                                                <tr>
                                                    <td class="cell" colspan="11" style="text-align: center;">
                                                        Data Tidak Ada.</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>

                                </div><!--//table-responsive-->

                            </div><!--//app-card-body-->

                        </div><!--//app-card-->

                    </div><!--//tab-pane-->


                    <div class="tab-pane fade" id="verifikasi" role="tabpanel"
                        aria-labelledby="orders-cancelled-tab">

                        <div class="app-card app-card-orders-table mb-5">

                            <div class="app-card-body">

                                <div class="table-responsive">

                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">No</th>
                                                <th class="cell">Jenis Kendaraan</th>
                                                <th class="cell">Nomor Lambung</th>
                                                <th class="cell">Nomor Polisi</th>
                                                <th class="cell">Keterangan</th>
                                                <th class="cell">Status</th>
                                                <th class="cell">Waktu</th>
                                                <th class="cell"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; ?>
                                            <?php $dataExist = false; ?>
                                            @forelse ($p2hToday as $x)
                                                @if ($x->status === 'terverifikasi')
                                                    <?php $dataExist = true; ?>
                                                    <tr>
                                                        <td class="cell">{{ ++$no }}</td>
                                                        <td class="cell">{{ $x->kendaraan->jenis_kendaraan }}</td>
                                                        <td class="cell">{{ $x->kendaraan->nomor_lambung }}</td>
                                                        <td class="cell">{{ $x->kendaraan->nomor_polisi }}</td>
                                                        <td class="cell">{{ $x->keterangan }}</td>
                                                        <td class="cell">
                                                            <span class="badge bg-success">
                                                                Terverifikasi
                                                            </span>
                                                        </td>
                                                        <td class="cell">
                                                            <?php $tanggalCarbon = \Carbon\Carbon::parse($x->tanggal); ?>
                                                            <?php $jamCarbon = \Carbon\Carbon::parse($x->jam); ?>
                                                            <span>{{ $tanggalCarbon->format('d M') }}</span>
                                                            <span
                                                                class="note">{{ $jamCarbon->format('g:i A') }}</span>
                                                        </td>
                                                        <td class="cell">
                                                            <a href="{{ url('admin/p2h/detail/' . $x->id) }}"
                                                                class="btn btn-circle btn-info"><i
                                                                    class="fas fa-eye"></i></a>
                                                            <a href="{{ url('admin/p2h/edit/' . $x->id) }}"
                                                                class="btn btn-circle btn-warning"><i
                                                                    class="fas fa-edit"></i></a>
                                                            <a href="{{ url('admin/p2h/hapus/' . $x->id) }}"
                                                                class="btn btn-circle btn-danger"><i
                                                                    class="fas fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @empty
                                                <tr>
                                                    <td class="cell" colspan="11" style="text-align: center;">
                                                        Data Tidak Ada.</td>
                                                </tr>
                                            @endforelse
                                            @if (!$dataExist)
                                                <tr>
                                                    <td class="cell" colspan="11" style="text-align: center;">
                                                        Data Tidak Ada.</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>

                                </div><!--//table-responsive-->

                            </div><!--//app-card-body-->

                        </div><!--//app-card-->

                    </div><!--//tab-pane-->

                </div><!--//tab-content-->



            </div><!--//container-fluid-->
        </div><!--//app-content-->

        @include('layoutDashboard.footer')

    </div><!--//app-wrapper-->


    @include('layoutDashboard.js')

</body>
