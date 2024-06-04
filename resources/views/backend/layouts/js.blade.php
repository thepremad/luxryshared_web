{!! HTML::script(asset('/backend/vendors/js/vendors.min.js')) !!}
{!! HTML::script(asset('/backend/vendors/js/charts/apexcharts.min.js')) !!}
{!! HTML::script(asset('/backend/vendors/js/extensions/toastr.min.js')) !!}
{!! HTML::script(asset('/backend/js/core/app-menu.js')) !!}
{!! HTML::script(asset('/backend/js/core/app.js')) !!}
{!! HTML::script(asset('/backend/js/scripts/pages/dashboard-ecommerce.js')) !!}

{!! HTML::script(asset('/backend/js/scripts/components/components-popovers.js')) !!}

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
<script>
    var message = localStorage.getItem('message');
    localStorage.removeItem('message');
    if (message) {
        toastr.success(message);
    }
    </script>

{!! HTML::script(asset('/backend/vendors/js/toster/toastr.js')) !!}

{!! HTML::script(asset('backend/vendors/js/forms/select/select2.full.min.js')) !!}
{!! HTML::script(asset('backend/js/scripts/forms/form-select2.js')) !!}
@include('backend.layouts.toastr')
