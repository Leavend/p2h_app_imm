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
