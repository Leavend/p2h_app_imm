@if (Session::has('success'))
    <div class="app-card alert alert-success alert-dismissible" role="alert">
        <div class="app-card-body p-2">
            <div class="d-flex align-items-center justify-content-between">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif


@if (Session::has('error'))
    <div class="app-card alert alert-danger alert-dismissible" role="alert">
        <div class="app-card-body p-2">
            <div class="d-flex align-items-center justify-content-between">
                <strong>{{ session('error') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif
