<!-- Javascript -->
<script src="{{ url('../assetsDashboard/plugins/popper.min.js') }}"></script>
<script src="{{ url('../assetsDashboard/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Charts JS -->
<script src="{{ url('../assetsDashboard/plugins/chart.js/chart.min.js') }}"></script>
<script src="{{ url('../assetsDashboard/js/index-charts.js') }}"></script>

<!-- Page Specific JS -->
<script src="{{ url('../assetsDashboard/js/app.js') }}"></script>

<!-- Additional JavaScript -->
<script>
    // Function to trigger CSV download
    function downloadCsv() {
        window.location.href = "{{ route('download.csv') }}";
    }
</script>


<script>
    /* ====== Nav Link Responsive =============== */

    // Get all the navigation links
    const navLinks = document.querySelectorAll('.nav-link');

    // Loop through each navigation link
    navLinks.forEach(navLink => {
        navLink.addEventListener('click', (event) => {
            // Remove the active class from all navigation links
            navLinks.forEach(link => {
                link.classList.remove('active');
            });

            // Add the active class to the clicked navigation link
            navLink.classList.add('active');
        });
    });
</script>

<script>
    const filterFormNoLambung = document.getElementById('filterFormNoLambung');
    const filterFormDate = document.getElementById('filterFormDate');

    filterFormNoLambung.addEventListener('submit', function(event) {
        event.preventDefault();
        applyFilter();
    });

    filterFormDate.addEventListener('submit', function(event) {
        event.preventDefault();
        applyFilter();
    });

    function applyFilter() {
        const noLambung = document.getElementById('no_lambung').value;
        const date = document.getElementById('date').value;

        // Menggabungkan parameter filter
        const searchParams = new URLSearchParams();
        searchParams.set('no_lambung', noLambung);
        searchParams.set('date', date);

        // Mendapatkan URL saat ini dan mengganti parameter pencarian
        const currentURL = new URL(window.location.href);
        currentURL.search = searchParams.toString();

        // Memuat ulang halaman dengan parameter pencarian yang diperbarui
        window.location.href = currentURL.toString();
    }
</script>
