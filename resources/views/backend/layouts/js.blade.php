{!! HTML::script(asset('/backend/vendors/js/vendors.min.js')) !!}
{!! HTML::script(asset('/backend/vendors/js/extensions/toastr.min.js')) !!}
{!! HTML::script(asset('/backend/js/core/app-menu.js')) !!}
{!! HTML::script(asset('/backend/js/core/app.js')) !!}

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

  {!! HTML::script(asset('/backend/vendors/js/tables/datatable/jquery.dataTables.min.js')) !!}
    <!-- {!! HTML::script(asset('/backend/vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) !!} -->
    <!-- {!! HTML::script(asset('/backend/vendors/js/tables/datatable/dataTables.responsive.min.js')) !!} -->
    {!! HTML::script(asset('/backend/js/scripts/tables/table-datatables-advanced.js')) !!}

@include('backend.layouts.toastr')
