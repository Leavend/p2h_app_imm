<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="../assetsDashboard/plugins/popper.min.js"></script>
<script src="../assetsDashboard/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../assetsDashboard/js/app.js"></script>
{{-- <script src="{{ asset('../assetsDashboard/js/script.js') }}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.js"></script>


<script>
    // // Apply filter when either form is submitted
    // const filterFormNoLambung = document.getElementById('filterFormNoLambung');
    // const filterFormDate = document.getElementById('filterFormDate');

    // filterFormNoLambung.addEventListener('submit', function(event) {
    //     event.preventDefault();
    //     applyFilter();
    // });

    // filterFormDate.addEventListener('submit', function(event) {
    //     event.preventDefault();
    //     applyFilter();
    // });

    // function applyFilter() {
    //     const noLambung = document.getElementById('no_lambung').value;
    //     const date = document.getElementById('date').value;

    //     const searchParams = new URLSearchParams();
    //     searchParams.set('no_lambung', noLambung);
    //     searchParams.set('date', date);

    //     const currentURL = new URL(window.location.href);
    //     currentURL.search = searchParams.toString();

    //     window.location.href = currentURL.toString();
    // }

    // Nav Link Responsive
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(navLink => {
        navLink.addEventListener('click', (event) => {
            navLinks.forEach(link => {
                link.classList.remove('active');
            });
            navLink.classList.add('active');
        });
    });
</script>
