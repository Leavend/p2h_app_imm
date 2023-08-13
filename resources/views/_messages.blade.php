@if (Session::has('success'))
    <div id="successAlert" class="alert alert-success alert-dismissible fade show custom-alert" role="alert">
        <div class="d-flex align-items-center">
            <svg width="0.5em" height="1em" viewBox="0 0 16 16" class="bi bi-check-circle-fill mr-2" fill="currentColor"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.88 5.553a.5.5 0 0 1 .153.632l-.06.122-3.5 6a.5.5 0 0 1-.632.153l-.122-.06-2.5-1.5a.5.5 0 0 1-.153-.632l.06-.122a.5.5 0 0 1 .632-.153l.122.06 2.5 1.5a.5.5 0 0 1 .153.632l-.06.122a.5.5 0 0 1-.632.153l-.122-.06-3.5-6a.5.5 0 0 1 .479-.806l.122.06L8 10.697l2.756-4.744a.5.5 0 0 1 .632-.153z" />
            </svg>
            <strong>Success! {{ session('success') }}</strong>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
            onclick="closeAlert(successAlert)"></button>
    </div>
@endif

@if (Session::has('error'))
    <div id="errorAlert" class="alert alert-danger alert-dismissible fade show custom-alert" role="alert">
        <div class="d-flex align-items-center">
            <svg width="3em" height="3em" viewbox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24" id="error-in-sync">
                <path
                    d="M11.29,15.71A1,1,0,0,0,13,15a1.05,1.05,0,0,0-.29-.71,1,1,0,0,0-1.09-.21,1,1,0,0,0-.33.21A1.05,1.05,0,0,0,11,15,1,1,0,0,0,11.29,15.71Zm8.62-.2H15.38a1,1,0,0,0,0,2h2.4A8,8,0,0,1,4,12a1,1,0,0,0-2,0,10,10,0,0,0,16.88,7.23V21a1,1,0,0,0,2,0V16.5A1,1,0,0,0,19.91,15.51ZM12,2A10,10,0,0,0,5.12,4.77V3a1,1,0,0,0-2,0V7.5a1,1,0,0,0,1,1H8.62a1,1,0,0,0,0-2H6.22A8,8,0,0,1,20,12a1,1,0,0,0,2,0A10,10,0,0,0,12,2Zm0,11a1,1,0,0,0,1-1V9a1,1,0,0,0-2,0v3A1,1,0,0,0,12,13Z">
                </path>
            </svg>
            <br>
            <strong>Error! {{ session('error') }}</strong>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
            onclick="closeAlert(errorAlert)"></button>
    </div>
@endif

<style>
    .custom-alert {
        padding: 0.5rem;
        border-radius: 0.5rem;
        margin-bottom: 1rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .custom-alert strong {
        font-weight: bold;
    }

    .custom-alert .d-flex.align-items-center {
        justify-content: space-between;
    }

    .custom-alert svg {
        flex-shrink: 0;
    }
</style>
