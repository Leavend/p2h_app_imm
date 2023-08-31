    <header class="app-header fixed-top" id="header-content">

        <div class="app-header-inner">

            <div class="container-fluid py-2">

                <div class="app-header-content">

                    <div class="row justify-content-between align-items-center">

                        <div class="col-auto">
                            <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                    viewBox="0 0 30 30" role="img">
                                    <title>Menu</title>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                        stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
                                </svg>
                            </a>
                        </div><!--//col-->

                    </div><!--//row-->

                </div><!--//app-header-content-->

            </div><!--//container-fluid-->

        </div><!--//app-header-inner-->

        <div id="app-sidepanel" class="app-sidepanel">

            {{-- <div id="sidepanel-drop" class="sidepanel-drop"></div> --}}

            <div class="sidepanel-inner d-flex flex-column" id="resp">

                <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
                <div class="app-branding" id="brand-resp">
                    @if (Auth::user()->role == 'admin')
                        <a class="app-logo" href="{{ route('overview.list') }}"><img class="logo-icon me-2"
                                src="{{ url('../assetsDashboard/images/imm2.svg') }}" alt="logo"></a>
                    @elseif (Auth::user()->role == 'user')
                        <a class="app-logo" href="{{ route('p2h.list') }}"><img class="logo-icon me-2"
                                src="{{ url('../assetsDashboard/images/imm2.svg') }}" alt="logo"></a>
                    @endif

                </div><!--//app-branding-->

                <hr class="divider divider-light" />

                <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
                    <ul class="app-menu list-unstyled accordion" id="menu-accordion">
                        @if (Auth::user()->role == 'admin')
                            <li class="nav-item" id="nav-resp">
                                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                <a class="nav-link {{ request()->routeIs('overview.list') ? 'active' : '' }}"
                                    href="{{ route('overview.list') }}">
                                    <span class="nav-icon">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z" />
                                            <path fill-rule="evenodd"
                                                d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-text">Overview</span>
                                </a><!--//nav-link-->
                            </li><!--//nav-item-->


                            <li class="nav-item">
                                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                <a class="nav-link {{ request()->routeIs('user.list') ? 'active' : '' }}"
                                    href="{{ route('user.list') }}">
                                    <span class="nav-icon">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.828 4a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 6.173 2H2.5a1 1 0 0 0-1 .981L1.546 4h-1L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3v1z" />
                                            <path fill-rule="evenodd"
                                                d="M13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zM2.19 3A2 2 0 0 0 .198 5.181l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H2.19z" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-text">User</span>
                                </a><!--//nav-link-->
                            </li><!--//nav-item-->


                            <li class="nav-item">
                                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                <a class="nav-link {{ request()->routeIs('kendaraan.list') ? 'active' : '' }}"
                                    href="{{ route('kendaraan.list') }}">
                                    <span class="nav-icon">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.828 4a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 6.173 2H2.5a1 1 0 0 0-1 .981L1.546 4h-1L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3v1z" />
                                            <path fill-rule="evenodd"
                                                d="M13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zM2.19 3A2 2 0 0 0 .198 5.181l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H2.19z" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-text">Kendaraan</span>
                                </a><!--//nav-link-->
                            </li><!--//nav-item-->


                            <li class="nav-item">
                                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                <a class="nav-link {{ request()->routeIs('p2h.list.admin') ? 'active' : '' }}"
                                    href="{{ route('p2h.list.admin') }}">
                                    <span class="nav-icon">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list"
                                            fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                            <path fill-rule="evenodd"
                                                d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z" />
                                            <circle cx="3.5" cy="5.5" r=".5" />
                                            <circle cx="3.5" cy="8" r=".5" />
                                            <circle cx="3.5" cy="10.5" r=".5" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-text">P2H</span>
                                </a><!--//nav-link-->
                            </li><!--//nav-item-->

                            <div class="app-sidepanel-footer">
                                <nav class="app-nav app-nav-footer">
                                    <ul class="app-menu footer-menu list-unstyled">
                                        <li class="nav-item">
                                            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                            <a class="nav-link" href="{{ route('admin.logout') }}">
                                                <span class="nav-icon">
                                                    <svg width="1.5em" height="1.5em" viewBox="0 0 32 32"
                                                        xmlns="http://www.w3.org/2000/svg" id="log-out">
                                                        <path
                                                            d="M29.71,16.71l-4,4-1.42-1.42L26.59,17H21a3,3,0,0,1-3-3V5a1,1,0,0,0-1-1H5A1,1,0,0,0,4,5V27a1,1,0,0,0,1,1H17a1,1,0,0,0,1-1V20h2v7a3,3,0,0,1-3,3H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2H17a3,3,0,0,1,3,3v9a1,1,0,0,0,1,1h5.6l-2.26-2.28,1.42-1.41,3.95,4A1,1,0,0,1,29.71,16.71Z"
                                                            data-name="44 Log out, Basic, Essential"></path>
                                                    </svg>
                                                </span>
                                                <span class="nav-link-text">Log Out</span>
                                            </a><!--//nav-link-->
                                        </li><!--//nav-item-->
                                    </ul><!--//footer-menu-->
                                </nav>
                            </div><!--//app-sidepanel-footer-->

                            <!-- Tambahkan tautan lainnya untuk admin di sini -->
                        @elseif (Auth::user()->role == 'user')
                            <li class="nav-item">
                                <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
                                <a class="nav-link {{ request()->routeIs('p2h.list') ? 'active' : '' }}"
                                    href="{{ route('p2h.list') }}">
                                    <span class="nav-icon">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16"
                                            class="bi bi-card-list" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                            <path fill-rule="evenodd"
                                                d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z" />
                                            <circle cx="3.5" cy="5.5" r=".5" />
                                            <circle cx="3.5" cy="8" r=".5" />
                                            <circle cx="3.5" cy="10.5" r=".5" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-text">P2H</span>
                                </a><!--//nav-link-->
                            </li><!--//nav-item-->

                            <div class="app-sidepanel-footer">
                                <nav class="app-nav app-nav-footer">
                                    <ul class="app-menu footer-menu list-unstyled">
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ Auth::user()->role == 'admin' ? route('admin.logout') : route('user.logout') }}">
                                                <!-- Ikon dan teks tautan -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                                                    viewBox="0 0 32 32" id="log-out">
                                                    <path
                                                        d="M29.71,16.71l-4,4-1.42-1.42L26.59,17H21a3,3,0,0,1-3-3V5a1,1,0,0,0-1-1H5A1,1,0,0,0,4,5V27a1,1,0,0,0,1,1H17a1,1,0,0,0,1-1V20h2v7a3,3,0,0,1-3,3H5a3,3,0,0,1-3-3V5A3,3,0,0,1,5,2H17a3,3,0,0,1,3,3v9a1,1,0,0,0,1,1h5.6l-2.26-2.28,1.42-1.41,3.95,4A1,1,0,0,1,29.71,16.71Z"
                                                        data-name="44 Log out, Basic, Essential"></path>
                                                </svg>
                                                <span class="nav-link-text">Log Out</span>
                                            </a>
                                        </li>
                                    </ul><!--//footer-menu-->
                                </nav>
                            </div><!--//app-sidepanel-footer-->

                            <!-- Tambahkan tautan lainnya untuk pengguna di sini -->
                        @endif
                    </ul><!--//app-menu-->

                </nav><!--//app-nav-->

            </div><!--//sidepanel-inner-->

        </div><!--//app-sidepanel-->

    </header><!--//app-header-->
