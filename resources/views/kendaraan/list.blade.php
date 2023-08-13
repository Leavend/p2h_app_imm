@include('layoutDashboard.header')

<body class="app">

    @include('layoutDashboard.navbar')

    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">

            <div class="container-xl">

                <div class="row g-3 mb-4 align-items-center justify-content-between">

                    <div class="col-auto">
                        <h1 class="app-page-title mb-0">Daftar Kendaraan</h1>
                    </div>

                    <div class="col-auto">

                        <div class="page-utilities">

                            <div class="row g-2 justify-content-start justify-content-md-end align-items-center">

                                <!-- Kolom Search -->
                                <div class="col-auto">
                                    <form class="table-search-form row gx-1 align-items-center">
                                        <div class="col-auto">
                                            <input type="text" id="search-orders" name="searchorders"
                                                class="form-control search-orders"
                                                placeholder="Cari Kendaraan dari Jenis Kendaraan">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn app-btn-secondary">Cari</button>
                                        </div>
                                    </form>

                                </div><!--//col-->


                                <!-- Nav Waktu -->
                                {{-- <div class="col-auto">

                                    <select class="form-select w-auto">
                                        <option selected value="option-1">All</option>
                                        <option value="option-2">This week</option>
                                        <option value="option-3">This month</option>
                                        <option value="option-4">Last 3 months</option>

                                    </select>
                                </div> --}}


                                <div class="col-auto">
                                    <a class="btn app-btn-secondary" href="#">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                            class="bi bi-download me-1" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                            <path fill-rule="evenodd"
                                                d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                        </svg>
                                        Download CSV
                                    </a>
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
                        href="#bus" role="tab" aria-controls="bus" aria-selected="false">Bus</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab"
                        href="#lv" role="tab" aria-controls="orders-pending" aria-selected="false">LV</a>
                    {{-- <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab"
                        href="#truk" role="tab" aria-controls="orders-cancelled" aria-selected="false">Truk</a> --}}
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
                                                <th class="cell">Type Kendaraan</th>
                                                <th class="cell">Nomor Lambung</th>
                                                <th class="cell">Nomor Polisi</th>
                                                <th class="cell">Tanggal Input</th>
                                                <th class="cell"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($Kendaraan as $x)
                                                <tr>
                                                    <td>{{ $Kendaraan->firstItem() + $loop->index }}</td>
                                                    <td class="cell">{{ $x->jenis_kendaraan }}</td>
                                                    <td class="cell">{{ $x->type_kendaraan }}</td>
                                                    <td class="cell">{{ $x->nomor_lambung }}</td>
                                                    <td class="cell">{{ $x->nomor_polisi }}</td>
                                                    <td class="cell">
                                                        <span class="cell-data">
                                                            {{ \Carbon\Carbon::parse($x->tanggal, 'Asia/Makassar')->format('d M Y') }}
                                                        </span>
                                                    </td>
                                                    <td class="cell">
                                                        <a href="{{ url('admin/user/edit/' . $x->id) }}"
                                                            class="btn btn-circle btn-warning"><i
                                                                class="fas fa-edit"></i></a>
                                                        <a href="{{ url('admin/user/hapus/' . $x->id) }}"
                                                            class="btn btn-circle btn-danger"><i
                                                                class="fas fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td class="cell" colspan="6" style="text-align: center;">Data
                                                        Tidak Ada.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>

                                </div><!--//table-responsive-->

                            </div><!--//app-card-body-->

                        </div><!--//app-card-->

                        <nav class="app-pagination">
                            <ul class="pagination justify-content-center">
                                <li class="page-item {{ $Kendaraan->currentPage() == 1 ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $Kendaraan->url($Kendaraan->currentPage() - 1) }}"
                                        tabindex="-1"
                                        aria-disabled="{{ $Kendaraan->currentPage() == 1 ? 'true' : 'false' }}">Previous</a>
                                </li>
                                @for ($i = 1; $i <= $Kendaraan->lastPage(); $i++)
                                    <li class="page-item {{ $Kendaraan->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $Kendaraan->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                <li
                                    class="page-item {{ $Kendaraan->currentPage() == $Kendaraan->lastPage() ? 'disabled' : '' }}">
                                    <a class="page-link"
                                        href="{{ $Kendaraan->url($Kendaraan->currentPage() + 1) }}">Next</a>
                                </li>
                            </ul>
                        </nav>


                        {{-- <nav class="app-pagination">
                            {{ $Kendaraan->appends(request()->except('kendaraan_page'))->links() }}
                        </nav><!--//app-pagination--> --}}

                        {{-- <nav class="app-pagination">
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
                        </nav><!--//app-pagination--> --}}

                    </div><!--//tab-pane-->


                    <div class="tab-pane fade" id="bus" role="tabpanel" aria-labelledby="orders-paid-tab">

                        <div class="app-card app-card-orders-table mb-5">

                            <div class="app-card-body">

                                <div class="table-responsive">

                                    <table class="table mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">No</th>
                                                <th class="cell">Jenis Kendaraan</th>
                                                <th class="cell">Type Kendaraan</th>
                                                <th class="cell">Nomor Lambung</th>
                                                <th class="cell">Nomor Polisi</th>
                                                <th class="cell">Tanggal Input</th>
                                                <th class="cell"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $dataExist = false; ?>
                                            @forelse ($Bus as $x)
                                                <?php $dataExist = true; ?>
                                                <tr>
                                                    <td>{{ $Bus->firstItem() + $loop->index }}</td>
                                                    <td class="cell">{{ $x->jenis_kendaraan }}</td>
                                                    <td class="cell">{{ $x->type_kendaraan }}</td>
                                                    <td class="cell">{{ $x->nomor_lambung }}</td>
                                                    <td class="cell">{{ $x->nomor_polisi }}</td>
                                                    <td class="cell">
                                                        <span class="cell-data">
                                                            {{ \Carbon\Carbon::parse($x->tanggal, 'Asia/Makassar')->format('d M') }}
                                                        </span>
                                                        <span class="note">
                                                            {{ \Carbon\Carbon::parse($x->tanggal, 'Asia/Makassar')->format('g:i A') }}
                                                        </span>
                                                    </td>
                                                    <td class="cell">
                                                        <a href="{{ url('admin/user/edit/' . $x->id) }}"
                                                            class="btn btn-circle btn-warning"><i
                                                                class="fas fa-edit"></i></a>
                                                        <a href="{{ url('admin/user/hapus/' . $x->id) }}"
                                                            class="btn btn-circle btn-danger"><i
                                                                class="fas fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td class="cell" colspan="6" style="text-align: center;">
                                                        Data Tidak Ada.</td>
                                                </tr>
                                            @endforelse
                                            @if (!$dataExist)
                                                <tr>
                                                    <td class="cell" colspan="6" style="text-align: center;">
                                                        Data Tidak Ada.</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>

                                </div><!--//table-responsive-->

                            </div><!--//app-card-body-->

                        </div><!--//app-card-->

                        <nav class="app-pagination" id="bus-pagination">
                            <ul class="pagination justify-content-center">
                                <li class="page-item {{ $Bus->currentPage() == 1 ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $Bus->url($Bus->currentPage() - 1) }}"
                                        tabindex="-1"
                                        aria-disabled="{{ $Bus->currentPage() == 1 ? 'true' : 'false' }}">Previous</a>
                                </li>
                                @for ($i = 1; $i <= $Bus->lastPage(); $i++)
                                    <li class="page-item {{ $Bus->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $Bus->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                <li class="page-item {{ $Bus->currentPage() == $Bus->lastPage() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $Bus->url($Bus->currentPage() + 1) }}">Next</a>
                                </li>
                            </ul>
                        </nav>

                    </div><!--//tab-pane-->


                    <div class="tab-pane fade" id="lv" role="tabpanel" aria-labelledby="orders-pending-tab">

                        <div class="app-card app-card-orders-table mb-5">

                            <div class="app-card-body">

                                <div class="table-responsive">

                                    <table class="table mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">No</th>
                                                <th class="cell">Jenis Kendaraan</th>
                                                <th class="cell">Type Kendaraan</th>
                                                <th class="cell">Nomor Lambung</th>
                                                <th class="cell">Nomor Polisi</th>
                                                <th class="cell">Tanggal Input</th>
                                                <th class="cell"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $dataExist = false; ?>
                                            @forelse ($LV as $x)
                                                <?php $dataExist = true; ?>
                                                <tr>
                                                    <td>{{ $LV->firstItem() + $loop->index }}</td>
                                                    <td class="cell">{{ $x->jenis_kendaraan }}</td>
                                                    <td class="cell">{{ $x->type_kendaraan }}</td>
                                                    <td class="cell">{{ $x->nomor_lambung }}</td>
                                                    <td class="cell">{{ $x->nomor_polisi }}</td>
                                                    <td class="cell">
                                                        <span class="cell-data">
                                                            {{ \Carbon\Carbon::parse($x->tanggal, 'Asia/Makassar')->format('d M') }}
                                                        </span>
                                                        <span class="note">
                                                            {{ \Carbon\Carbon::parse($x->tanggal, 'Asia/Makassar')->format('g:i A') }}
                                                        </span>
                                                    </td>
                                                    <td class="cell">
                                                        <a href="{{ url('admin/user/edit/' . $x->id) }}"
                                                            class="btn btn-circle btn-warning"><i
                                                                class="fas fa-edit"></i></a>
                                                        <a href="{{ url('admin/user/hapus/' . $x->id) }}"
                                                            class="btn btn-circle btn-danger"><i
                                                                class="fas fa-trash-alt"></i></a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td class="cell" colspan="6" style="text-align: center;">
                                                        Data Tidak Ada.</td>
                                                </tr>
                                            @endforelse
                                            @if (!$dataExist)
                                                <tr>
                                                    <td class="cell" colspan="6" style="text-align: center;">
                                                        Data Tidak Ada.</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div><!--//table-responsive-->

                            </div><!--//app-card-body-->

                        </div><!--//app-card-->

                        <nav class="app-pagination" id="LV-pagination">
                            <ul class="pagination justify-content-center">
                                <li class="page-item {{ $LV->currentPage() == 1 ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $LV->url($LV->currentPage() - 1) }}"
                                        tabindex="-1"
                                        aria-disabled="{{ $LV->currentPage() == 1 ? 'true' : 'false' }}">Previous</a>
                                </li>
                                @for ($i = 1; $i <= $LV->lastPage(); $i++)
                                    <li class="page-item {{ $LV->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $LV->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                                <li class="page-item {{ $LV->currentPage() == $LV->lastPage() ? 'disabled' : '' }}">
                                    <a class="page-link" href="{{ $LV->url($LV->currentPage() + 1) }}">Next</a>
                                </li>
                            </ul>
                        </nav>

                    </div><!--//tab-pane-->


                    {{-- <div class="tab-pane fade" id="truk" role="tabpanel"
                        aria-labelledby="orders-cancelled-tab">

                        <div class="app-card app-card-orders-table mb-5">

                            <div class="app-card-body">

                                <div class="table-responsive">

                                    <table class="table mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">No</th>
                                                <th class="cell">Jenis Kendaraan</th>
                                                <th class="cell">Nomor Lambung</th>
                                                <th class="cell">Nomor Polisi</th>
                                                <th class="cell">Tanggal Input</th>
                                                <th class="cell"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; ?>
                                            <?php $dataExist = false; ?>
                                            @forelse ($Kendaraan as $x)
                                                @if ($x->jenis_kendaraan === 'Truk')
                                                    <?php $dataExist = true; ?>
                                                    <tr>
                                                        <td class="cell">{{ ++$no }}</td>
                                                        <td class="cell">{{ $x->jenis_kendaraan }}</td>
                                                        <td class="cell">{{ $x->nomor_lambung }}</td>
                                                        <td class="cell">{{ $x->nomor_polisi }}</td>
                                                        <td class="cell">
                                                            <span class="cell-data">
                                                                {{ \Carbon\Carbon::parse($x->tanggal, 'Asia/Makassar')->format('d M') }}
                                                            </span>
                                                            <span class="note">
                                                                {{ \Carbon\Carbon::parse($x->tanggal, 'Asia/Makassar')->format('g:i A') }}
                                                            </span>
                                                        </td>
                                                        <td class="cell">
                                                            <a href="{{ url('admin/user/edit/' . $x->id) }}"
                                                                class="btn btn-circle btn-warning"><i
                                                                    class="fas fa-edit"></i></a>
                                                            <a href="{{ url('admin/user/hapus/' . $x->id) }}"
                                                                class="btn btn-circle btn-danger"><i
                                                                    class="fas fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @empty
                                                <tr>
                                                    <td class="cell" colspan="6" style="text-align: center;">
                                                        Data Tidak Ada.</td>
                                                </tr>
                                            @endforelse
                                            @if (!$dataExist)
                                                <tr>
                                                    <td class="cell" colspan="6" style="text-align: center;">
                                                        Data Tidak Ada.</td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>

                                </div><!--//table-responsive-->

                            </div><!--//app-card-body-->

                        </div><!--//app-card-->

                    </div><!--//tab-pane--> --}}


                </div><!--//tab-content-->



            </div><!--//container-fluid-->
        </div><!--//app-content-->

        @include('layoutDashboard.footer')

    </div><!--//app-wrapper-->




    @include('layoutDashboard.js')

</body>
