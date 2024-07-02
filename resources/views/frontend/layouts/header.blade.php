
<header>

    <div class="header-wp">
        <div class="header-onesec">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-6 header-onecenter">
                        <strong>Give 50 AED Get 50 AED. Get 10% off your first order.</strong>
                    </div>
                    <div class="col-md-3 header-oneright">
                        <ul>
                            <li>
                                <strong>Download App</strong>
                            </li>
                            <li>
                                <img src="{{ asset('frontend/images/download-1.png') }}" alt="">
                            </li>
                            <li>
                                <img src="{{ asset('frontend/images/download-2.png') }}" alt="">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-twosec">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-8">
                        <div class="header-twobtns">
                            <button>AED</button>
                            <button class="howbtn-header">HOW IT WORKS</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="header-twoicons">
                            <ul>
                                <li>
                                    <img src="{{ asset('frontend/images/wishlist.png') }}" alt="">
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/images/cart.png') }}" alt="">
                                </li>
                                <li>
                                    <img src="{{ asset('frontend/images/profile.png') }}" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="headerlogo">
                    <img src="{{ asset('frontend/images/logo.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="header-threewp">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                  {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
                  <div class="row">
                    <div class="col-md-10">
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse header-menus" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Just Landaed</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Designers</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Clothing</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Dresses</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Bags</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Accessories</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Shoes</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Occasions</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Resale</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Community</a>
                          </li>
                        </ul>
                      </div> 
                    </div>  
                    <div class="col-md-2">
                      <form class="d-flex" role="search">
                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      </form>
                    </div>
                  </div>
                </div>
              </nav>
        </div>
    </div>

</header>