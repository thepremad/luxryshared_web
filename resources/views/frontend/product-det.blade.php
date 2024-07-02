@extends('frontend.layouts.app')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


<section>

    <div class="container">
        <div class="listitem-head">
            <h5>MIDDLE EAST FIRST PEER TO PEER FASHION SHARING COMMUNITY</h5>    
        </div>
    </div>

</section>

<section>

    <div class="product-detwp">
        <div class="container">
            <div class="profuct-detsec pt-4">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="product-detleftwp">
                            <div id="changeProduct">
                                <img src="{{ asset('frontend/images/productimg.png') }}" alt="">
                            </div>
                            <div class="productdet-slider">
                                <div class="owl-carousel owl-theme" id="productdet">
                                    <div class="item">
                                        <img src="{{ asset('frontend/images/productslider1.png') }}" alt="" class="slider-image">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('frontend/images/productslider2.png') }}" alt="" class="slider-image">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('frontend/images/productimg.png') }}" alt="" class="slider-image">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('frontend/images/productslider2.png') }}" alt="" class="slider-image">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('frontend/images/productslider1.png') }}" alt="" class="slider-image">
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset('frontend/images/productimg.png') }}" alt="" class="slider-image">
                                    </div>
                                </div>                                
                            </div>
                        </div>                        
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="product-rightwp">
                            <div class="producthead-cont">
                                <ul>
                                    <li>Shop</li>
                                    <li><i class="fa-solid fa-angle-right"></i></li>
                                    <li>Women</li>
                                    <li><i class="fa-solid fa-angle-right"></i></li>
                                    <li>Top</li>
                                </ul>
                                <h2>Raven Hoodie With 
                                    Black colored Design
                                </h2>
                                <div class="producthead-two">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <span>@John Richerd</span>
                                        </div>
                                        <div class="col-md-6 text-end">
                                            <ul>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li><i class="fa-solid fa-star"></i></li>
                                                <li>3.5</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="prodect-boxright mb-4">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Rent
                                    </label>
                                </div>
                                  <strong>From $62.30 / 4days</strong>
                                  <p class="mt-3">Retail $399.00</p>
                                  <ul>
                                    <li>Size *</li>
                                    <li>Size guide
                                        <hr>
                                    </li>
                                  </ul>
                                  <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Size</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                  </select>
                                  <div class="worried-aboutbg mt-4">
                                    <span>Worried about fit?</span>
                                    <img src="{{ asset('frontend/images/info_icon.svg') }}" alt="">
                                  </div>
                                  <div class="rental-periodwp mt-4">
                                    <h6>Rental period *</h6>
                                    <div class="longer-rentaltext">
                                        Longer rental mean lower daily rates and bigger savings.
                                    </div>
                                    <div class="row mt-4 mb-4">
                                        <div class="col-lg-3 col-md-6">
                                            <div class="rental-boxcmn">
                                                <strong>4 days</strong>
                                                <p>62</p>
                                                <span>$15.57/day</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="rental-boxcmn">
                                                <strong>4 days</strong>
                                                <p>62</p>
                                                <span>$15.57/day</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="rental-boxcmn">
                                                <strong>4 days</strong>
                                                <p>62</p>
                                                <span>$15.57/day</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6">
                                            <div class="rental-boxcmn">
                                                <strong>4 days</strong>
                                                <p>62</p>
                                                <span>$15.57/day</span>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="rentbtn">
                                        RENT NOW
                                    </button>
                                    <div class="dateshead mt-4">
                                        <strong>Dates*</strong>
                                        <p>Tap to select Start Date, preferably 1-2 days before you plan to wear it.</p>
                                        <div id="datepicker" class="datepicker"></div>
                                    </div>
                                  </div>
                            </div>
                            <div class="prodect-boxright mb-2">
                                <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Buy Now
                                    </label>
                                </div>  
                                <p class="mb-1">$399.00</p>
                                <span>Retail $399.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="productdet-secrow mb-5">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row-twoleft">
                                <h5 class="leftborder"><span></span>Product Description</h5>
                                <div class="mt-4">
                                    <ul>
                                        <li>
                                            <strong>Description</strong>
                                            <hr>
                                        </li>
                                        <li>
                                            <span>Reviews</span>
                                        </li>
                                        <button>4</button>
                                    </ul>
                                </div>
                                <p>100% Bio-washed Cotton – makes the fabric extra soft & silky. Flexible ribbed crew neck. Precisely stitched with no pilling & no fading. Provide  all-time comfort. Anytime, anywhere. Infinite range of matte-finish HD prints.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row-tworight">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{ asset('frontend/images/pay-1.svg') }}" alt="">
                                        <span>Secure payment</span>
                                    </div>
                                    <div class="col-md-6">
                                        <img src="{{ asset('frontend/images/pay-2.svg') }}" alt="">
                                        <span>Size & Fit</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="productdet-threerow">
                    <h5 class="leftborder"><span></span>More Similar Items</h5>
                    <div class="row mt-5">
                        <div class="col-md-6 col-lg-3">
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
                                <div class="categorypage-boxrow productdet-bottpro mt-3">
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
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
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
                                <div class="categorypage-boxrow productdet-bottpro mt-3">
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
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
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
                                <div class="categorypage-boxrow productdet-bottpro mt-3">
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
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
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
                                <div class="categorypage-boxrow productdet-bottpro mt-3">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<script>
    $(document).ready(function(){
        $("#productdet").owlCarousel({
            items: 1, 
            loop: true, 
            autoplay: true, 
            autoplayTimeout: 3000, 
            responsive: {
                0: {
                    items: 1 
                },
                600: {
                    items: 2 
                },
                1000: {
                    items: 3 
                }
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
    $('#productdet').owlCarousel({
        items: 1, 
        loop: true, 
        margin: 10, 
        nav: true, 
        dots: false 
    });

    $('.slider-image').click(function() {
        
        var newSrc = $(this).attr('src');
        
        $('#changeProduct img').attr('src', newSrc);
    });
});

</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const datepicker = document.getElementById('datepicker');
        let selectedMonth = new Date().getMonth();
        let selectedYear = new Date().getFullYear();

        function buildCalendar(month, year) {
            const daysInMonth = new Date(year, month + 1, 0).getDate();

            let calendarHTML = '<div class="datepicker-header">';
            calendarHTML += '<span class="nav-button" id="prev-month">&lt;</span>';
            calendarHTML += '<div class="month-year">';
            calendarHTML += `<div class="month">${new Date(year, month).toLocaleString('default', { month: 'long' })}</div>`;
            calendarHTML += `<div class="year">${year}</div>`;
            calendarHTML += '</div>';
            calendarHTML += '<span class="nav-button" id="next-month">&gt;</span>';
            calendarHTML += '</div>';
            calendarHTML += '<table><thead><tr>';
            ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'].forEach(day => {
                calendarHTML += `<th>${day}</th>`;
            });
            calendarHTML += '</tr></thead><tbody><tr>';

            const firstDay = new Date(year, month, 1).getDay();
            for (let i = 0; i < firstDay; i++) {
                calendarHTML += '<td class="empty-cell"></td>';
            }

            for (let day = 1; day <= daysInMonth; day++) {
                if ((firstDay + day - 1) % 7 === 0) {
                    calendarHTML += '</tr><tr>';
                }
                calendarHTML += `<td>${day}</td>`;
            }
            calendarHTML += '</tr></tbody></table>';
            datepicker.innerHTML = calendarHTML;

            document.querySelectorAll('#datepicker td:not(.empty-cell)').forEach(cell => {
                cell.addEventListener('click', function() {
                    this.classList.toggle('dateselected');
                });
            });

            document.querySelector('.year').addEventListener('click', function() {
                let newYear = prompt('Enter Year:', year);
                if (newYear && !isNaN(newYear)) {
                    selectedYear = parseInt(newYear, 10);
                    buildCalendar(selectedMonth, selectedYear);
                }
            });

            document.querySelector('.month').addEventListener('click', function() {
                let newMonth = prompt('Enter Month (1-12):', month + 1);
                if (newMonth && !isNaN(newMonth) && newMonth >= 1 && newMonth <= 12) {
                    selectedMonth = parseInt(newMonth, 10) - 1;
                    buildCalendar(selectedMonth, selectedYear);
                }
            });

            document.getElementById('prev-month').addEventListener('click', function() {
                selectedMonth--;
                if (selectedMonth < 0) {
                    selectedMonth = 11;
                    selectedYear--;
                }
                buildCalendar(selectedMonth, selectedYear);
            });

            document.getElementById('next-month').addEventListener('click', function() {
                selectedMonth++;
                if (selectedMonth > 11) {
                    selectedMonth = 0;
                    selectedYear++;
                }
                buildCalendar(selectedMonth, selectedYear);
            });
        }

        buildCalendar(selectedMonth, selectedYear);
    });
</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>



@endsection