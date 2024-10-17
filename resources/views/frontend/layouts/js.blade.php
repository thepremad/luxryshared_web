<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
{{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script> --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<!-- <script src="{{ asset('assets/js/vendor/jquery-3.3.1.min.js') }}"></script> -->
<script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery.cookie.js') }}"></script>
<script src="{{ asset('assets/js/vendor/wow.min.js') }}"></script>
<!-- Including Javascript -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/lazysizes.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<!--Instagram Js-->
<script src="{{ asset('assets/js/vendor/jquery.instagramFeed.min.js') }}"></script>



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


<script>
    function addToWishList(item_id){
        @if(auth()->user())
            $.ajax({
                url: "{{ route('list_item.add_to_wishlist') }}",
                type: 'GET',
                data: {
                    item_id :item_id,
                    days:5
                },
                // processData: false,
                // contentType: false,
                beforeSend: function() {
                    $('.spinner-loader').css('display', 'block');
                },
                success: function(res) {
                    
                    Toastify({
                        text: res.message,
                        className: "success",
                        style: {
                            background: "linear-gradient(to right, #00b09b, #96c93d)",
                        }
                    }).showToast();
                    // window.location.href = res;
                    // showStep(step + 1);
                    // $('#step_id').val(2);

                },
                error: function(res) {
                    if (res.status == 400 || res.status == 422) {
                        if (res.responseJSON && res.responseJSON.error) {
                            var error = res.responseJSON.error
                            $.each(error, function(key, value) {
                                Toastify({
                                    text: value,
                                    className: "error",
                                    style: {
                                        background: "linear-gradient(to right, #a01515, #a01515)",
                                    }
                                }).showToast();
                                // alert(value);
                            });
                        }
                    }
                }
            });

        @else
            Toastify({
                text: `Login Now`,
                className: "error",
                style: {
                    background: "linear-gradient(to right, #a01515, #a01515)",
                }
            }).showToast();
        @endif
    }



    




</script>

@if(auth()->user())


<script>

    updateCartCount();

    function updateCartCount(){
        $.ajax({
            url: "{{ route('get_cart_count') }}",
            type: 'GET',
            data: {},
            beforeSend: function() {
                $('.spinner-loader').css('display', 'block');
            },
            success: function(res) {
                $('#CartCount').html(res.cart_count);
            },
            error: function(res) {
                
            }
        });
    }
    
</script>


@endif