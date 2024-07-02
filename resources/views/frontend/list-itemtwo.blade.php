@extends('frontend.layouts.app')

@section('content')




<section>

    <div class="listitem-wp">
        <div class="container">
            <div class="listitem-headsec pt-3 pb-3 mb-5">
                <div class="listitem-head">
                    <h5>MIDDLE EAST FIRST PEER TO PEER FASHION SHARING COMMUNITY</h5>    
                </div>    
            </div>  
            <br>
              <div class="listitem-sec mb-5">
                <div class="listitem-twosec">
                    <h2>List an Item</h2>
                    <ul>
                        <li>
                            <hr>
                        </li>
                        <li>
                            <strong>PRICE DETAILS</strong>
                        </li>
                        <li>
                            <hr>
                        </li>
                    </ul>
                </div>
                <form action="">
                    <div class="row mt-3">
                        <div class="col-md-6 mb-5">
                            <label for="basic-url" class="form-label">RRP PRICE</label><br>
                            <input type="text" class="form-control" placeholder="AED" aria-label="Server">
                        </div>
                        <div class="col-md-6 mb-5">
                            <label for="basic-url" class="form-label">Suggested Day Price</label><br>
                            <input type="text" class="form-control" placeholder="Suggested Day Price" aria-label="Server">
                        </div>
                        {{-- <div class="col-md-6 mb-5">
                            <div class="question-bg question-bgtwo">
                                <label for="basic-url" class="form-label">Suggested Price</label><br>
                                <input type="text" class="form-control" placeholder="AED" aria-label="Server">
                                <img src="{{ asset('frontend/images/question-icon.png') }}" alt="">
                            </div>
                        </div> --}}
                        <div class="col-md-6 mb-5">
                            <div class="question-bg question-bgtwo">
                                <label for="basic-url" class="form-label">Security Deposit (optional)</label><br>
                                <input type="text" class="form-control" placeholder="AED" aria-label="Server">
                                <img src="{{ asset('frontend/images/question-icon.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <h6>PRICES & INCOME </h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    <div class="list-itemtwoprice mt-5 mb-5">
                        <p>RENT PRICE</p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="cmnbg">
                                    <strong>4 Days</strong><br>
                                    <span>AED</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cmnbg">
                                    <strong>7-29 Days</strong><br>
                                    <span>AED</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="cmnbg">
                                    <strong>30+ Days</strong><br>
                                    <span>AED</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="list-itemtwobuy mb-5">
                        <h6 class="mb-3">BUY NOW</h6>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">YOU CAN NOW SELL YOUR PRODUCT</label>
                        </div> 
                    </div>
                    <div class="listitem-threeprice" id="chackShow">
                        <p class="mt-3">It's up to you to specify your return policy, however we suggest doing so in the item description. You are bound by law to provide a return and refund if an item is not as represented. Therefore, kindly make sure that your images and description are up to date and include any wear or damage.</p>
                        <div class="row">
                            <div class="col-md-2">
                                <strong>Size</strong><br><br>
                                <strong>UK 4</strong>
                            </div>
                            <div class="col-md-2">
                                <strong>PRICE</strong><br><br>
                                <input type="text" class="form-control" placeholder="ABC" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('list-itemsucc') }}">NEXT</a>
                </form>
              </div>
        </div>    
    </div>    

</section>


<script>
    document.getElementById('flexSwitchCheckDefault').addEventListener('change', function() {
        var checkShow = document.getElementById('chackShow');
        if (this.checked) {
            checkShow.style.display = 'block';
        } else {
            checkShow.style.display = 'none';
        }
    });
</script>


@endsection