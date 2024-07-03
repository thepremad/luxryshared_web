@extends('frontend.layouts.app')

@section('content')


<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<section>

    <div class="container">
        <div class="listitem-head">
            <h5>MIDDLE EAST FIRST PEER TO PEER FASHION SHARING COMMUNITY</h5>    
        </div>
    </div>

</section>

<section>

    <div class="categorypage-wp">
        <div class="container">
            <div class="categorypage-sec">
                <div class="row">
                    <div class="col-md-3">
                        <div class="category-leftwp">
                            <ul>
                                <li>
                                    <span>Categories</span>
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/images/setting_icon.png') }}" alt="">
                                </li>
                            </ul>
                            <hr>
                            <div class="categoryselect-leftwp pt-4 pb-4">
                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse1" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                            <strong>Tops</strong>
                                          </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapse1" class="accordion-collapse collapse">
                                          <div class="accordion-body">
                                            <p>1</p>
                                          </div>
                                        </div>
                                      </div>
                                    <div class="accordion-item">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse2" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                            Printed T-shirts
                                        </button>
                                      </h2>
                                      <div id="panelsStayOpen-collapse2" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                          <p>2</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                      <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse3" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                            Plain T-shirts
                                        </button>
                                      </h2>
                                      <div id="panelsStayOpen-collapse3" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                          <p>3</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse4" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                            Kurti
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapse4" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                            <p>4</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse5" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                            Boxers
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapse5" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                            <p>5</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse6" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                            Full sleeve T-shirts
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapse6" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                            <p>6</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse7" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                            Joggers
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapse7" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                            <p>7</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse8" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                            Payjamas
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapse8" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                            <p>8</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse9" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                            Jeans
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapse9" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                            <p>9</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse10" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                            <strong>Price</strong>
                                            </button>
                                        </h2>
                                        <hr>
                                        <div id="panelsStayOpen-collapse10" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                                <div class="price-range-slider">
  
                                                    <p class="range-value">
                                                      <input type="text" id="amount" readonly>
                                                    </p>
                                                    <div id="slider-range" class="range-bar"></div>
                                                    
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse11" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                                <strong>Colors</strong>
                                            </button>
                                            <hr>
                                        </h2>
                                        <div id="panelsStayOpen-collapse11" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                                <div class="colorselect-div">
                                                    <div class="color-div purple">
                                                        <div class="check-icon"><p>&#10003;</p></div><br><br>
                                                        <span>Purple</span>
                                                    </div>
                                                    <div class="color-div black">
                                                        <div class="check-icon"><p>&#10003;</p></div><br><br>
                                                        <span>Black</span>
                                                    </div>
                                                    <div class="color-div red">
                                                        <div class="check-icon"><p>&#10003;</p></div><br><br>
                                                        <span>Red</span>
                                                    </div>
                                                    <div class="color-div orange">
                                                        <div class="check-icon"><p>&#10003;</p></div><br><br>
                                                        <span>Orange</span>
                                                    </div>
                                                    <div class="color-div navy">
                                                        <div class="check-icon"><p>&#10003;</p></div><br><br>
                                                        <span>Navy</span>
                                                    </div>
                                                    <div class="color-div white">
                                                        <div class="check-icon"><p>&#10003;</p></div><br><br>
                                                        <span>White</span>
                                                    </div>
                                                    <div class="color-div brown">
                                                        <div class="check-icon"><p>&#10003;</p></div><br><br>
                                                        <span>Broom</span>
                                                    </div>
                                                    <div class="color-div green">
                                                        <div class="check-icon"><p>&#10003;</p></div><br><br>
                                                        <span>Green</span>
                                                    </div>
                                                    <div class="color-div yellow">
                                                        <div class="check-icon"><p>&#10003;</p></div><br><br>
                                                        <span>Yellow</span>
                                                    </div>
                                                    <div class="color-div grey">
                                                        <div class="check-icon"><p>&#10003;</p></div><br><br>
                                                        <span>Grey</span>
                                                    </div>
                                                    <div class="color-div pink">
                                                        <div class="check-icon"><p>&#10003;</p></div><br><br>
                                                        <span>Pink</span>
                                                    </div>
                                                    <div class="color-div blue">
                                                        <div class="check-icon"><p>&#10003;</p></div><br><br>
                                                        <span>Blue</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse12" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                            <strong>Size</strong>
                                            </button>
                                        </h2>
                                        <hr>
                                        <div id="panelsStayOpen-collapse12" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                                <div class="sizebutton-cmn">
                                                    <div>
                                                        <button class="size-button" onclick="selectSize(this)">XXS</button>
                                                        <button class="size-button" onclick="selectSize(this)">XS</button>
                                                        <button class="size-button" onclick="selectSize(this)">S</button>
                                                        <button class="size-button" onclick="selectSize(this)">M</button>
                                                        <button class="size-button" onclick="selectSize(this)">L</button>
                                                        <button class="size-button" onclick="selectSize(this)">XL</button>
                                                        <button class="size-button" onclick="selectSize(this)">XXL</button>
                                                        <button class="size-button" onclick="selectSize(this)">3XL</button>
                                                        <button class="size-button" onclick="selectSize(this)">4XL</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse13" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                            <strong>Occasions</strong>
                                            </button>
                                        </h2>
                                        <hr>
                                        <div id="panelsStayOpen-collapse13" class="accordion-collapse collapse">
                                            <div class="accordion-body">
                                                <p>Classic</p>
                                                <p>Casual</p>
                                                <p>Business</p>
                                                <p>Sport</p>
                                                <p>Elegant</p>
                                                <p>Formal (evening)</p>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse14" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                            <strong>Brands</strong>
                                            </button>
                                        </h2>
                                        <div id="panelsStayOpen-collapse14" class="accordion-collapse collapse">
                                            <div class="accordion-body" style="border-top: 1px solid rgb(242 242 242)">
                                                <p>Classic</p>
                                                <p>Casual</p>
                                                <p>Business</p>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="category-rightwp pt-4">
                            <ul>
                                <li>
                                    <span>NEAR ME</span>
                                </li>
                                <li class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" checked>
                                </li>
                            </ul>
                            <div class="row mt-5">
                                <div class="col-lg-4 col-md-6">
                                    <div class="categorypage-box">
                                        <div class="catrpagr-imgcmn">
                                            <img src="{{ asset('frontend/images/landed-img2.png') }}" alt="">
                                            <div class="catepage-btnhover">
                                                <button>
                                                    BUY NOW
                                                </button>
                                            </div>
                                            <div class="catepage-iconhover">
                                                <p>
                                                    <i class="fa-regular fa-heart"></i>
                                                </p>
                                                <p>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="categorypage-boxrow mt-3">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <p>Buttons tweed blazer</p>
                                                    <ul>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <p>AED 250</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="#">
                                                        RENT NOW
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="categorypage-box">
                                        <div class="catrpagr-imgcmn">
                                            <img src="{{ asset('frontend/images/landed-img2.png') }}" alt="">
                                            <div class="catepage-btnhover">
                                                <button>
                                                    BUY NOW
                                                </button>
                                            </div>
                                            <div class="catepage-iconhover">
                                                <p>
                                                    <i class="fa-regular fa-heart"></i>
                                                </p>
                                                <p>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="categorypage-boxrow mt-3">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <p>Buttons tweed blazer</p>
                                                    <ul>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <p>AED 250</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="#">
                                                        RENT NOW
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="categorypage-box">
                                        <div class="catrpagr-imgcmn">
                                            <img src="{{ asset('frontend/images/landed-img2.png') }}" alt="">
                                            <div class="catepage-btnhover">
                                                <button>
                                                    BUY NOW
                                                </button>
                                            </div>
                                            <div class="catepage-iconhover">
                                                <p>
                                                    <i class="fa-regular fa-heart"></i>
                                                </p>
                                                <p>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="categorypage-boxrow mt-3">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <p>Buttons tweed blazer</p>
                                                    <ul>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <p>AED 250</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="#">
                                                        RENT NOW
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="categorypage-box">
                                        <div class="catrpagr-imgcmn">
                                            <img src="{{ asset('frontend/images/landed-img2.png') }}" alt="">
                                            <div class="catepage-btnhover">
                                                <button>
                                                    BUY NOW
                                                </button>
                                            </div>
                                            <div class="catepage-iconhover">
                                                <p>
                                                    <i class="fa-regular fa-heart"></i>
                                                </p>
                                                <p>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="categorypage-boxrow mt-3">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <p>Buttons tweed blazer</p>
                                                    <ul>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <p>AED 250</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="#">
                                                        RENT NOW
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="categorypage-box">
                                        <div class="catrpagr-imgcmn">
                                            <img src="{{ asset('frontend/images/landed-img2.png') }}" alt="">
                                            <div class="catepage-btnhover">
                                                <button>
                                                    BUY NOW
                                                </button>
                                            </div>
                                            <div class="catepage-iconhover">
                                                <p>
                                                    <i class="fa-regular fa-heart"></i>
                                                </p>
                                                <p>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="categorypage-boxrow mt-3">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <p>Buttons tweed blazer</p>
                                                    <ul>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <p>AED 250</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="#">
                                                        RENT NOW
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="categorypage-box">
                                        <div class="catrpagr-imgcmn">
                                            <img src="{{ asset('frontend/images/landed-img2.png') }}" alt="">
                                            <div class="catepage-btnhover">
                                                <button>
                                                    BUY NOW
                                                </button>
                                            </div>
                                            <div class="catepage-iconhover">
                                                <p>
                                                    <i class="fa-regular fa-heart"></i>
                                                </p>
                                                <p>
                                                    <i class="fa-solid fa-cart-shopping"></i>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="categorypage-boxrow mt-3">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <p>Buttons tweed blazer</p>
                                                    <ul>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <p>AED 250</p>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="#">
                                                        RENT NOW
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<script>
    //-----JS for Price Range slider-----

$(function() {
	$( "#slider-range" ).slider({
	  range: true,
	  min: 130,
	  max: 500,
	  values: [ 130, 250 ],
	  slide: function( event, ui ) {
		$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
	  }
	});
	$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
	  " - $" + $( "#slider-range" ).slider( "values", 1 ) );
});
</script>

<script>
    document.querySelectorAll('.color-div').forEach(div => {
        div.addEventListener('click', () => {
            div.classList.toggle('selected');
        });
    });
</script>

<script>
    function selectSize(button) {
        var buttons = document.querySelectorAll('.size-button');
        buttons.forEach(function(btn) {
            btn.classList.remove('sizeselected');
        });
        
        button.classList.add('sizeselected');
    }
</script>

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>

@endsection