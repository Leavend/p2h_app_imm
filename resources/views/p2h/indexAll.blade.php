@include('layoutLanding.header')

<body id="page-top">


    @include('layoutLanding.navbar')


    <section class="background-radial-gradient overflow-hidden">
        <style>
            .background-radial-gradient {
                background-image: url("./assets/img/formsvg.svg");
                background-size: 100%;
            }

            #radius-shape-1 {
                height: 220px;
                width: 220px;
                top: -60px;
                left: -130px;
                background: radial-gradient(#44006b, #ad1fff);
                overflow: hidden;
            }

            #radius-shape-2 {
                border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
                bottom: -60px;
                right: -110px;
                width: 300px;
                height: 300px;
                background: radial-gradient(#44006b, #ad1fff);
                overflow: hidden;
            }
        </style>

        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
            <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">

                </div>

                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body-tt px-4 py-5 px-md-5">
                            <form>
                                <div class="card-body p-md-3 mx-md-4">
                                    <div class="">
                                        <img src="/assets/img/IMM.svg" style="width: 90px" alt="logo" />
                                        <div class="Welcome">
                                            <p class="mt-1 mt-3 pt-2">Welcome to</p>
                                        </div>
                                        <h4 class="mt-1 mb-4 pt-2">IMM Pemeriksaan Pengecekan Harian P2H</h4>
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-1" class="form-label">Nama Pemeriksa<span
                                                class="ms-2" data-bs-container="body" data-bs-toggle="popover"
                                                data-bs-trigger="hover focus" data-bs-placement="top"
                                                data-bs-content="This is a Bootstrap popover example. You can use popover to provide extra info."><svg
                                                    width="1em" height="1em" viewBox="0 0 16 16"
                                                    class="bi bi-info-circle" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                    <path
                                                        d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z" />
                                                    <circle cx="8" cy="4.5" r="1" />
                                                </svg></span></label>
                                        <input type="text" class="form-control" id="setting-input-1"
                                            placeholder="Tulis Nama Lengkap" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-2" class="form-label">NIK</label>
                                        <input type="text" class="form-control" id="setting-input-2"
                                            placeholder="Masukkan NIK" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="setting-input-3" class="form-label">Departemen</label>
                                        <input type="email" class="form-control" id="setting-input-3"
                                            placeholder="Departemen" required>
                                    </div>
                                    <div class="mb-5">
                                        <label for="setting-input-3" class="form-label">No HP</label>
                                        <input type="email" class="form-control" id="setting-input-3"
                                            placeholder="Nomor Handphone" required>
                                    </div>



                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary btn-block mb-2">
                                        Next
                                    </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layoutLanding.footer')


</body>
