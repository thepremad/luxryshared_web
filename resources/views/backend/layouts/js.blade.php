<script src="{{ url('public/backend/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ url('public/backend/vendors/js/charts/apexcharts.min.js')}}"></script>


<script src="{{ url('public/backend/vendors/js/extensions/toastr.min.js')}}"></script>
<!-- END: Page Vendor JS-->



<!-- BEGIN: Theme JS-->
<script src="{{ url('public/backend/js/core/app-menu.js')}}"></script>
<script src="{{ url('public/backend/js/core/app.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ url('public/backend/js/scripts/pages/dashboard-ecommerce.js')}}"></script>

<script src="{{ url('public/backend/js/scripts/components/components-popovers.js')}}"></script>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>


<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>

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
                background: "linear-gradient(to right, #00b09b, #96c93d)",
            }
        }).showToast();
    </script>
@endif



<script src="{{ url('backend/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{ url('backend/js/scripts/forms/form-select2.js')}}"></script>
