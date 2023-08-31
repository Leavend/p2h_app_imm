@include('layoutDashboard.header')

<body class="app">

    @include('layoutDashboard.navbar')

    <div class="app-wrapper" id="main-content">

        <div class="app-content pt-3 p-md-3 p-lg-4">

            <div class="container-xl">

                <h1 class="app-page-title">Overview</h1>

                <div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
                    <div class="inner">
                        <div class="app-card-body p-3 p-lg-4">
                            {{-- <h3 class="mb-3">Welcome, {{ Auth::user()->name }}!</h3> --}}
                            <div class="row gx-5 gy-3">
                                <div class="col-12 col-lg-9">
                                    <div>Data total pada lingkup P2H dibawah ini.</div>
                                </div><!--//col-->
                            </div><!--//row-->
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div><!--//app-card-body-->
                    </div><!--//inner-->
                </div><!--//app-card-->

                <nav id="orders-table-tab"
                    class="orders-table-tab app-nav-tabs nav shadow-lg flex-column flex-sm-row mb-4">
                    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab"
                        href="#all" role="tab" aria-controls="orders-all" aria-selected="true">Semua</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab"
                        href="#today" role="tab" aria-controls="bus" aria-selected="false">Hari Ini</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab"
                        href="#week" role="tab" aria-controls="orders-pending" aria-selected="false">Minggu
                        Ini</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab"
                        href="#month" role="tab" aria-controls="orders-cancelled" aria-selected="false">Bulan
                        Ini</a>
                </nav>

                <div class="tab-content" id="orders-table-tab-content">

                    <div class="tab-pane fade show active" id="all" role="tabpanel"
                        aria-labelledby="orders-all-tab">

                        <div class="row g-4 mb-4">

                            <div class="col-6 col-lg-3">
                                <div class="app-card app-card-stat shadow-sm h-100">
                                    <div class="app-card-body p-3 p-lg-4">
                                        <h4 class="stats-type mb-1">Total User</h4>
                                        <div class="stats-figure">{{ $TotalUser }}</div>
                                        <div class="stats-meta" style="color: #452F92;">
                                            View More
                                        </div>
                                    </div><!--//app-card-body-->
                                    <a class="app-card-link-mask" href="{{ route('user.list') }}"></a>
                                </div><!--//app-card-->
                            </div><!--//col-->

                            <div class="col-6 col-lg-3">
                                <div class="app-card app-card-stat shadow-sm h-100">
                                    <div class="app-card-body p-3 p-lg-4">
                                        <h4 class="stats-type mb-1">Total Kendaraan</h4>
                                        <div class="stats-figure">{{ $TotalKendaraan }}</div>
                                        <div class="stats-meta" style="color: #452F92;">
                                            View More
                                        </div>
                                    </div><!--//app-card-body-->
                                    <a class="app-card-link-mask" href="{{ route('kendaraan.list') }}"></a>
                                </div><!--//app-card-->
                            </div><!--//col-->

                            <div class="col-6 col-lg-3">
                                <div class="app-card app-card-stat shadow-sm h-100">
                                    <div class="app-card-body p-3 p-lg-4">
                                        <h4 class="stats-type mb-1">Total P2H</h4>
                                        <div class="stats-figure">{{ $TotalP2h }}</div>
                                        <div class="stats-meta" style="color: #452F92;">
                                            View More
                                        </div>
                                    </div><!--//app-card-body-->
                                    <a class="app-card-link-mask" href="{{ route('p2h.list.admin') }}"></a>
                                </div><!--//app-card-->
                            </div><!--//col-->

                            <div class="col-6 col-lg-3">
                                <div class="app-card app-card-stat shadow-sm h-100">
                                    <div class="app-card-body p-3 p-lg-4">
                                        <h4 class="stats-type mb-1">Total P2H</h4>
                                        <h4 class="stats-type mb-1">Belum Pemeriksaan</h4>
                                        <div class="stats-figure">{{ $TotalP2hBelum }}</div>
                                        <div class="stats-meta" style="color: #452F92;">
                                            View More
                                        </div>
                                    </div><!--//app-card-body-->
                                    <a class="app-card-link-mask" href="{{ route('p2h.list.admin') }}"></a>
                                </div><!--//app-card-->
                            </div><!--//col-->

                            <div class="col-6 col-lg-3">
                                <div class="app-card app-card-stat shadow-sm h-100">
                                    <div class="app-card-body p-3 p-lg-4">
                                        <h4 class="stats-type mb-1">Total P2H</h4>
                                        <h4 class="stats-type mb-1">Menunggu Verifikasi</h4>
                                        <div class="stats-figure">{{ $TotalP2hMenunggu }}</div>
                                        <div class="stats-meta" style="color: #452F92;">
                                            View More
                                        </div>
                                    </div><!--//app-card-body-->
                                    <a class="app-card-link-mask" href="{{ route('p2h.list.admin') }}"></a>
                                </div><!--//app-card-->
                            </div><!--//col-->

                            <div class="col-6 col-lg-3">
                                <div class="app-card app-card-stat shadow-sm h-100">
                                    <div class="app-card-body p-3 p-lg-4">
                                        <h4 class="stats-type mb-1">Total P2H</h4>
                                        <h4 class="stats-type mb-1">Terverifikasi</h4>
                                        <div class="stats-figure">{{ $TotalP2hTerverif }}</div>
                                        <div class="stats-meta" style="color: #452F92;">
                                            View More
                                        </div>
                                    </div><!--//app-card-body-->
                                    <a class="app-card-link-mask" href="{{ route('p2h.list.admin') }}"></a>
                                </div><!--//app-card-->
                            </div><!--//col-->

                        </div>

                    </div><!--//row-->

                    <div class="tab-pane fade" id="today" role="tabpanel" aria-labelledby="orders-paid-tab">
                        <div class="row g-4 mb-4">

                            <div class="col-6 col-lg-3">
                                <div class="app-card app-card-stat shadow-sm h-100">
                                    <div class="app-card-body p-3 p-lg-4">
                                        <h4 class="stats-type mb-1">Total User</h4>
                                        <div class="stats-figure">{{ $TotalUserToday }}</div>
                                        <div class="stats-meta" style="color: #452F92;">
                                            View More
                                        </div>
                                    </div><!--//app-card-body-->
                                    <a class="app-card-link-mask" href="{{ route('user.list') }}"></a>
                                </div><!--//app-card-->
                            </div><!--//col-->

                            <div class="col-6 col-lg-3">
                                <div class="app-card app-card-stat shadow-sm h-100">
                                    <div class="app-card-body p-3 p-lg-4">
                                        <h4 class="stats-type mb-1">Total Kendaraan</h4>
                                        <div class="stats-figure">{{ $TotalKendaraanToday }}</div>
                                        <div class="stats-meta" style="color: #452F92;">
                                            View More
                                        </div>
                                    </div><!--//app-card-body-->
                                    <a class="app-card-link-mask" href="{{ route('kendaraan.list') }}"></a>
                                </div><!--//app-card-->
                            </div><!--//col-->

                            <div class="col-6 col-lg-3">
                                <div class="app-card app-card-stat shadow-sm h-100">
                                    <div class="app-card-body p-3 p-lg-4">
                                        <h4 class="stats-type mb-1">Total P2H</h4>
                                        <div class="stats-figure">{{ $TotalP2hToday }}</div>
                                        <div class="stats-meta" style="color: #452F92;">
                                            View More
                                        </div>
                                    </div><!--//app-card-body-->
                                    <a class="app-card-link-mask" href="{{ route('p2h.list.admin') }}"></a>
                                </div><!--//app-card-->
                            </div><!--//col-->

                            <div class="col-6 col-lg-3">
                                <div class="app-card app-card-stat shadow-sm h-100">
                                    <div class="app-card-body p-3 p-lg-4">
                                        <h4 class="stats-type mb-1">Total P2H</h4>
                                        <h4 class="stats-type mb-1">Belum Pemeriksaan</h4>
                                        <div class="stats-figure">{{ $TotalP2hTodayBelum }}</div>
                                        <div class="stats-meta" style="color: #452F92;">
                                            View More
                                        </div>
                                    </div><!--//app-card-body-->
                                    <a class="app-card-link-mask" href="{{ route('p2h.list.admin') }}"></a>
                                </div><!--//app-card-->
                            </div><!--//col-->

                            <div class="col-6 col-lg-3">
                                <div class="app-card app-card-stat shadow-sm h-100">
                                    <div class="app-card-body p-3 p-lg-4">
                                        <h4 class="stats-type mb-1">Total P2H</h4>
                                        <h4 class="stats-type mb-1">Menunggu Verifikasi</h4>
                                        <div class="stats-figure">{{ $TotalP2hTodayMenunggu }}</div>
                                        <div class="stats-meta" style="color: #452F92;">
                                            View More
                                        </div>
                                    </div><!--//app-card-body-->
                                    <a class="app-card-link-mask" href="{{ route('p2h.list.admin') }}"></a>
                                </div><!--//app-card-->
                            </div><!--//col-->

                            <div class="col-6 col-lg-3">
                                <div class="app-card app-card-stat shadow-sm h-100">
                                    <div class="app-card-body p-3 p-lg-4">
                                        <h4 class="stats-type mb-1">Total P2H</h4>
                                        <h4 class="stats-type mb-1">Terverifikasi</h4>
                                        <div class="stats-figure">{{ $TotalP2hTodayTerverif }}</div>
                                        <div class="stats-meta" style="color: #452F92;">
                                            View More
                                        </div>
                                    </div><!--//app-card-body-->
                                    <a class="app-card-link-mask" href="{{ route('p2h.list.admin') }}"></a>
                                </div><!--//app-card-->
                            </div><!--//col-->

                        </div>
                    </div><!--//tab-pane-->

                    <div class="tab-pane fade" id="week" role="tabpanel" aria-labelledby="orders-paid-tab">
                        <div class="row g-4 mb-4">

                            <div class="col-6 col-lg-3">
                                <div class="app-card app-card-stat shadow-sm h-100">
                                    <div class="app-card-body p-3 p-lg-4">
                                        <h4 class="stats-type mb-1">Total User</h4>
                                        <div class="stats-figure">{{ $TotalUserWeek }}</div>
                                        <div class="stats-meta" style="color: #452F92;">
                                            View More
                                        </div>
                                    </div><!--//app-card-body-->
                                    <a class="app-card-link-mask" href="{{ route('user.list') }}"></a>
                                </div><!--//app-card-->
                            </div><!--//col-->

                            <div class="col-6 col-lg-3">
                                <div class="app-card app-card-stat shadow-sm h-100">
                                    <div class="app-card-body p-3 p-lg-4">
                                        <h4 class="stats-type mb-1">Total Kendaraan</h4>
                                        <div class="stats-figure">{{ $TotalKendaraanWeek }}</div>
                                        <div class="stats-meta" style="color: #452F92;">
                                            View More
                                        </div>
                                    </div><!--//app-card-body-->
                                    <a class="app-card-link-mask" href="{{ route('kendaraan.list') }}"></a>
                                </div><!--//app-card-->
                            </div><!--//col-->

                            <div class="col-6 col-lg-3">
                                <div class="app-card app-card-stat shadow-sm h-100">
                                    <div class="app-card-body p-3 p-lg-4">
                                        <h4 class="stats-type mb-1">Total P2H</h4>
                                        <div class="stats-figure">{{ $TotalP2hWeek }}</div>
                                        <div class="stats-meta" style="color: #452F92;">
                                            View More
                                        </div>
                                    </div><!--//app-card-body-->
                                    <a class="app-card-link-mask" href="{{ route('p2h.list.admin') }}"></a>
                                </div><!--//app-card-->
                            </div><!--//col-->

                            <div class="col-6 col-lg-3">
                                <div class="app-card app-card-stat shadow-sm h-100">
                                    <div class="app-card-body p-3 p-lg-4">
                                        <h4 class="stats-type mb-1">Total P2H</h4>
                                        <h4 class="stats-type mb-1">Belum Pemeriksaan</h4>
                                        <div class="stats-figure">{{ $TotalP2hWeekBelum }}</div>
                                        <div class="stats-meta" style="color: #452F92;">
                                            View More
                                        </div>
                                    </div><!--//app-card-body-->
                                    <a class="app-card-link-mask" href="{{ route('p2h.list.admin') }}"></a>
                                </div><!--//app-card-->
                            </div><!--//col-->

                            <div class="col-6 col-lg-3">
                                <div class="app-card app-card-stat shadow-sm h-100">
                                    <div class="app-card-body p-3 p-lg-4">
                                        <h4 class="stats-type mb-1">Total P2H</h4>
                                        <h4 class="stats-type mb-1">Menunggu Verifikasi</h4>
                                        <div class="stats-figure">{{ $TotalP2hWeekMenunggu }}</div>
                                        <div class="stats-meta" style="color: #452F92;">
                                            View More
                                        </div>
                                    </div><!--//app-card-body-->
                                    <a class="app-card-link-mask" href="{{ route('p2h.list.admin') }}"></a>
                                </div><!--//app-card-->
                            </div><!--//col-->

                            <div class="col-6 col-lg-3">
                                <div class="app-card app-card-stat shadow-sm h-100">
                                    <div class="app-card-body p-3 p-lg-4">
                                        <h4 class="stats-type mb-1">Total P2H</h4>
                                        <h4 class="stats-type mb-1">Terverifikasi</h4>
                                        <div class="stats-figure">{{ $TotalP2hWeekTerverif }}</div>
                                        <div class="stats-meta" style="color: #452F92;">
                                            View More
                                        </div>
                                    </div><!--//app-card-body-->
                                    <a class="app-card-link-mask" href="{{ route('p2h.list.admin') }}"></a>
                                </div><!--//app-card-->
                            </div><!--//col-->

                        </div>
                    </div><!--//tab-pane-->

                    <div class="tab-pane fade" id="month" role="tabpanel" aria-labelledby="orders-paid-tab">
                        <div class="row g-4 mb-4">

                            <div class="col-6 col-lg-3">
                                <div class="app-card app-card-stat shadow-sm h-100">
                                    <div class="app-card-body p-3 p-lg-4">
                                        <h4 class="stats-type mb-1">Total User</h4>
                                        <div class="stats-figure">{{ $TotalUserMonth }}</div>
                                        <div class="stats-meta" style="color: #452F92;">
                                            View More
                                        </div>
                                    </div><!--//app-card-body-->
                                    <a class="app-card-link-mask" href="{{ route('user.list') }}"></a>
                                </div><!--//app-card-->
                            </div><!--//col-->

                            <div class="col-6 col-lg-3">
                                <div class="app-card app-card-stat shadow-sm h-100">
                                    <div class="app-card-body p-3 p-lg-4">
                                        <h4 class="stats-type mb-1">Total Kendaraan</h4>
                                        <div class="stats-figure">{{ $TotalKendaraanMonth }}</div>
                                        <div class="stats-meta" style="color: #452F92;">
                                            View More
                                        </div>
                                    </div><!--//app-card-body-->
                                    <a class="app-card-link-mask" href="{{ route('kendaraan.list') }}"></a>
                                </div><!--//app-card-->
                            </div><!--//col-->

                            <div class="col-6 col-lg-3">
                                <div class="app-card app-card-stat shadow-sm h-100">
                                    <div class="app-card-body p-3 p-lg-4">
                                        <h4 class="stats-type mb-1">Total P2H</h4>
                                        <div class="stats-figure">{{ $TotalP2hMonth }}</div>
                                        <div class="stats-meta" style="color: #452F92;">
                                            View More
                                        </div>
                                    </div><!--//app-card-body-->
                                    <a class="app-card-link-mask" href="{{ route('p2h.list.admin') }}"></a>
                                </div><!--//app-card-->
                            </div><!--//col-->

                            <div class="col-6 col-lg-3">
                                <div class="app-card app-card-stat shadow-sm h-100">
                                    <div class="app-card-body p-3 p-lg-4">
                                        <h4 class="stats-type mb-1">Total P2H</h4>
                                        <h4 class="stats-type mb-1">Belum Pemeriksaan</h4>
                                        <div class="stats-figure">{{ $TotalP2hMonthBelum }}</div>
                                        <div class="stats-meta" style="color: #452F92;">
                                            View More
                                        </div>
                                    </div><!--//app-card-body-->
                                    <a class="app-card-link-mask" href="{{ route('p2h.list.admin') }}"></a>
                                </div><!--//app-card-->
                            </div><!--//col-->

                            <div class="col-6 col-lg-3">
                                <div class="app-card app-card-stat shadow-sm h-100">
                                    <div class="app-card-body p-3 p-lg-4">
                                        <h4 class="stats-type mb-1">Total P2H</h4>
                                        <h4 class="stats-type mb-1">Menunggu Verifikasi</h4>
                                        <div class="stats-figure">{{ $TotalP2hMonthMenunggu }}</div>
                                        <div class="stats-meta" style="color: #452F92;">
                                            View More
                                        </div>
                                    </div><!--//app-card-body-->
                                    <a class="app-card-link-mask" href="{{ route('p2h.list.admin') }}"></a>
                                </div><!--//app-card-->
                            </div><!--//col-->

                            <div class="col-6 col-lg-3">
                                <div class="app-card app-card-stat shadow-sm h-100">
                                    <div class="app-card-body p-3 p-lg-4">
                                        <h4 class="stats-type mb-1">Total P2H</h4>
                                        <h4 class="stats-type mb-1">Terverifikasi</h4>
                                        <div class="stats-figure">{{ $TotalP2hMonthTerverif }}</div>
                                        <div class="stats-meta" style="color: #452F92;">
                                            View More
                                        </div>
                                    </div><!--//app-card-body-->
                                    <a class="app-card-link-mask" href="{{ route('p2h.list.admin') }}"></a>
                                </div><!--//app-card-->
                            </div><!--//col-->

                        </div>
                    </div><!--//tab-pane-->

                </div>

            </div><!--//container-fluid-->

        </div><!--//app-content-->

        @include('layoutDashboard.footer')

    </div><!--//app-wrapper-->

    @include('layoutDashboard.js')

</body>
