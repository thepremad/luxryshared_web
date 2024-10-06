<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
{{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script> --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
@if (session('success'))
<script>
    Toastify({
        text: `{{ session('success') }}`,
        className: "success",
        style: {
            background: "linear-gradient(to right, #00b09b, #96c93d)",
        }
    }).showToast();
</script>
@endif

@if (session('error'))
<script>
    Toastify({
        text: `{{ session('error') }}`,
        className: "error",
        style: {
            background: "linear-gradient(to right, #a01515, #a01515)",
        }
    }).showToast();
</script>
@endif