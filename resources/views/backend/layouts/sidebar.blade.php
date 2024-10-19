<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item me-auto"><a class="navbar-brand" href="{{ route('admin.dashboard') }}">
                    <img class="logo-img" src="{{url('public/backend/logo/logo.png')}}" alt="" style="width: 61%;
                        margin: auto;">
                </a></li>
        </ul>
    </div>

    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item {{ Request::routeIs('admin.dashboard') ? 'active' : '' }}"><a
                    class="d-flex align-items-center" href="{{ route('admin.dashboard') }}"><i
                        data-feather="home"></i><span class="menu-title text-truncate"
                        data-i18n="Dashboards">Dashboard</span><span
                        class="badge badge-light-warning rounded-pill ms-auto me-1"></span></a>
            </li>
            <li
                class=" nav-item {{ Request::routeIs('admin.user.register_request', 'admin.user.index', 'admin.user.edit') ? 'has-sub open' : '' }} ">
                <a class="d-flex align-items-center" href="#"><i class="fa-solid fa-user-injured"></i><span
                        class="menu-title text-truncate" data-i18n="Invoice">User Listing</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center {{ Request::routeIs('admin.user.index') ? 'active' : '' }} "
                            href="{{ route('admin.user.index') }}"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="Shop"> List Users</span></a>
                    </li>
                </ul>
            </li>
             <li
                class=" nav-item {{ Request::routeIs('admin.categories.index', 'admin.categories.create', 'admin.categories.show', 'admin.categories.edit', 'admin.categories.appraisals', 'admin.categories.loans', 'admin.categories.salaries') ? 'has-sub open' : '' }} ">
                <a class="d-flex align-items-center" href="#"><i class="fa-solid fa-list"></i><span
                        class="menu-title text-truncate" data-i18n="Invoice">Category Master</span></a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center {{ Request::routeIs('admin.categories.index', 'admin.categories.show', 'admin.categories.edit', 'admin.categories.appraisals', 'admin.categories.loans', 'admin.categories.salaries') && !request()->input('archive') ? 'active' : '' }}"
                            href="{{ route('admin.categories.index') }}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Shop"> List categories</span>
                        </a>
                    </li>

                    <li><a class="d-flex align-items-center {{ Request::routeIs('admin.categories.create') ? 'active' : '' }} "
                            href="{{ route('admin.categories.create') }}"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="Shop"> Add Category</span></a>
                    </li>
                </ul>
            </li>
            <li
                class=" nav-item {{ Request::routeIs('admin.subcategories.index', 'admin.subcategories.create', 'admin.subcategories.show', 'admin.subcategories.edit', 'admin.subcategories.appraisals', 'admin.subcategories.loans', 'admin.subcategories.salaries') ? 'has-sub open' : '' }} ">
                <a class="d-flex align-items-center" href="#"><i class="fa-solid fa-table-list"></i><span
                        class="menu-title text-truncate" data-i18n="Invoice">SubCategory Master</span></a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center {{ Request::routeIs('admin.subcategories.index', 'admin.subcategories.show', 'admin.subcategories.edit', 'admin.subcategories.appraisals', 'admin.subcategories.loans', 'admin.subcategories.salaries') && !request()->input('archive') ? 'active' : '' }}"
                            href="{{ route('admin.subcategories.index') }}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Shop"> List Subcategories</span>
                        </a>
                    </li>

                    <li><a class="d-flex align-items-center {{ Request::routeIs('admin.subcategories.create') ? 'active' : '' }} "
                            href="{{ route('admin.subcategories.create') }}"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="Shop"> Add SubCategory</span></a>
                    </li>
                </ul>
            </li> 
             <li
                class=" nav-item {{ Request::routeIs('admin.brands.index', 'admin.brands.create', 'admin.brands.show', 'admin.brands.edit', 'admin.brands.appraisals', 'admin.brands.loans', 'admin.brands.salaries') ? 'has-sub open' : '' }} ">
                <a class="d-flex align-items-center" href="#"><i class="fa-regular fa-copyright"></i><span
                        class="menu-title text-truncate" data-i18n="Invoice">Brand Master</span></a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center {{ Request::routeIs('admin.brands.index', 'admin.brands.show', 'admin.brands.edit', 'admin.brands.appraisals', 'admin.brands.loans', 'admin.brands.salaries') && !request()->input('archive') ? 'active' : '' }}"
                            href="{{ route('admin.brands.index') }}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Shop"> List Brand</span>
                        </a>
                    </li>

                    <li><a class="d-flex align-items-center {{ Request::routeIs('admin.brands.create') ? 'active' : '' }} "
                            href="{{ route('admin.brands.create') }}"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="Shop"> Add Brand</span></a>
                    </li>
                </ul>
            </li>
          
             <li
                class=" nav-item {{ Request::routeIs('admin.occasions.index', 'admin.occasions.create', 'admin.occasions.show', 'admin.occasions.edit', 'admin.occasions.appraisals', 'admin.occasions.loans', 'admin.occasions.salaries') ? 'has-sub open' : '' }} ">
                <a class="d-flex align-items-center" href="#"><i class="fa-solid fa-location-arrow"></i><span
                        class="menu-title text-truncate" data-i18n="Invoice">Occasion Master</span></a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center {{ Request::routeIs('admin.occasions.index', 'admin.occasions.show', 'admin.occasions.edit', 'admin.occasions.appraisals', 'admin.occasions.loans', 'admin.occasions.salaries') && !request()->input('archive') ? 'active' : '' }}"
                            href="{{ route('admin.occasions.index') }}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Shop"> List Occasion</span>
                        </a>
                    </li>

                    <li><a class="d-flex align-items-center {{ Request::routeIs('admin.occasions.create') ? 'active' : '' }} "
                            href="{{ route('admin.occasions.create') }}"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="Shop"> Add Occasion</span></a>
                    </li>
                </ul>
            </li>
            <li
                class=" nav-item {{ Request::routeIs('admin.comunities.index', 'admin.comunities.create', 'admin.comunities.show', 'admin.comunities.edit', 'admin.comunities.appraisals', 'admin.comunities.loans', 'admin.comunities.salaries') ? 'has-sub open' : '' }} ">
                <a class="d-flex align-items-center" href="#"><i class="fa-solid fa-group-arrows-rotate"></i><span
                        class="menu-title text-truncate" data-i18n="Invoice">Community Master</span></a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center {{ Request::routeIs('admin.comunities.index', 'admin.comunities.show', 'admin.comunities.edit', 'admin.comunities.appraisals', 'admin.comunities.loans', 'admin.comunities.salaries') && !request()->input('archive') ? 'active' : '' }}"
                            href="{{ route('admin.comunities.index') }}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Shop"> List Community</span>
                        </a>
                    </li>

                    <li><a class="d-flex align-items-center {{ Request::routeIs('admin.comunities.create') ? 'active' : '' }} "
                            href="{{ route('admin.comunities.create') }}"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="Shop"> Add Community</span></a>
                    </li>
                </ul>
            </li>
            <li
                class=" nav-item {{ Request::routeIs('admin.withdral_request', 'admin.withdral_request.create', 'admin.withdral_request.show', 'admin.withdral_request.edit', 'admin.withdral_request.appraisals', 'admin.withdral_request.loans', 'admin.withdral_request.salaries') ? 'has-sub open' : '' }} ">
                <a class="d-flex align-items-center" href="{{route('admin.withdral_request')}}"><i class="fa-solid fa-money-bill-transfer"></i><span
                        class="menu-title text-truncate" data-i18n="Invoice">Withdrawl Request</span></a>
              
            </li>
            <li
                class=" nav-item {{ Request::routeIs('admin.blogs.index', 'admin.blogs.create', 'admin.blogs.show', 'admin.blogs.edit', 'admin.blogs.appraisals', 'admin.blogs.loans', 'admin.blogs.salaries') ? 'has-sub open' : '' }} ">
                <a class="d-flex align-items-center" href="#"><i class="fa-solid fa-blog"></i><span
                        class="menu-title text-truncate" data-i18n="Invoice">Blog Master</span></a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center {{ Request::routeIs('admin.blogs.index', 'admin.blogs.show', 'admin.blogs.edit', 'admin.blogs.appraisals', 'admin.blogs.loans', 'admin.blogs.salaries') && !request()->input('archive') ? 'active' : '' }}"
                            href="{{ route('admin.blogs.index') }}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Shop"> List Blog</span>
                        </a>
                    </li>

                    <li><a class="d-flex align-items-center {{ Request::routeIs('admin.blogs.create') ? 'active' : '' }} "
                            href="{{ route('admin.blogs.create') }}"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="Shop"> Add Blog</span></a>
                    </li>
                </ul>
            </li>
            <li
                class=" nav-item {{ Request::routeIs('admin.presses.index', 'admin.presses.create', 'admin.presses.show', 'admin.presses.edit', 'admin.presses.appraisals', 'admin.presses.loans', 'admin.presses.salaries') ? 'has-sub open' : '' }} ">
                <a class="d-flex align-items-center" href="#"><i class="fa-regular fa-newspaper"></i><span
                        class="menu-title text-truncate" data-i18n="Invoice">Press </span></a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center {{ Request::routeIs('admin.presses.index', 'admin.presses.show', 'admin.presses.edit', 'admin.presses.appraisals', 'admin.presses.loans', 'admin.presses.salaries') && !request()->input('archive') ? 'active' : '' }}"
                            href="{{ route('admin.presses.index') }}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Shop"> List Press</span>
                        </a>
                    </li>

                    <li><a class="d-flex align-items-center {{ Request::routeIs('admin.presses.create') ? 'active' : '' }} "
                            href="{{ route('admin.presses.create') }}"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="Shop"> Add Press</span></a>
                    </li>
                </ul>
            </li>
            <li
                class=" nav-item {{ Request::routeIs('admin.discounts.index', 'admin.discounts.create', 'admin.discounts.show', 'admin.discounts.edit', 'admin.discounts.appraisals', 'admin.discounts.loans', 'admin.discounts.salaries') ? 'has-sub open' : '' }} ">
                <a class="d-flex align-items-center" href="#"><i class="fa-solid fa-ticket"></i><span
                        class="menu-title text-truncate" data-i18n="Invoice">Discount master </span></a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center {{ Request::routeIs('admin.discounts.index', 'admin.discounts.show', 'admin.discounts.edit', 'admin.discounts.appraisals', 'admin.discounts.loans', 'admin.discounts.salaries') && !request()->input('archive') ? 'active' : '' }}"
                            href="{{ route('admin.discounts.index') }}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Shop"> List Discount</span>
                        </a>
                    </li>

                    <li><a class="d-flex align-items-center {{ Request::routeIs('admin.discounts.create') ? 'active' : '' }} "
                            href="{{ route('admin.discounts.create') }}"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="Shop"> Add Discount</span></a>
                    </li>
                </ul>
            </li>
            <li
                class=" nav-item {{ Request::routeIs('admin.looks.index', 'admin.looks.create', 'admin.looks.show', 'admin.looks.edit', 'admin.looks.appraisals', 'admin.looks.loans', 'admin.looks.salaries') ? 'has-sub open' : '' }} ">
                <a class="d-flex align-items-center" href="#"><i class="fa-regular fa-id-card"></i><span
                        class="menu-title text-truncate" data-i18n="Invoice">Look master </span></a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center {{ Request::routeIs('admin.looks.index', 'admin.looks.show', 'admin.looks.edit', 'admin.looks.appraisals', 'admin.looks.loans', 'admin.looks.salaries') && !request()->input('archive') ? 'active' : '' }}"
                            href="{{ route('admin.looks.index') }}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Shop"> List Look</span>
                        </a>
                    </li>

                    <li><a class="d-flex align-items-center {{ Request::routeIs('admin.looks.create') ? 'active' : '' }} "
                            href="{{ route('admin.looks.create') }}"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="Shop"> Add Look</span></a>
                    </li>
                </ul>
            </li>
               
            <li
                class=" nav-item {{ Request::routeIs('admin.editor.index', 'admin.editor.create', 'admin.editor.show', 'admin.editor.edit', 'admin.editor.appraisals', 'admin.editor.loans', 'admin.editor.salaries') ? 'has-sub open' : '' }} ">
                <a class="d-flex align-items-center" href="#"><i class="fa-regular fa-id-card"></i><span
                        class="menu-title text-truncate" data-i18n="Invoice">Editor pic master </span></a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center {{ Request::routeIs('admin.editor.index', 'admin.editor.show', 'admin.editor.edit', 'admin.editor.appraisals', 'admin.editor.loans', 'admin.editor.salaries') && !request()->input('archive') ? 'active' : '' }}"
                            href="{{ route('admin.editor.index') }}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Shop"> List Editor pic</span>
                        </a>
                    </li>

                    <li><a class="d-flex align-items-center {{ Request::routeIs('admin.editor.create') ? 'active' : '' }} "
                            href="{{ route('admin.editor.create') }}"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="Shop"> Add Editor pic</span></a>
                    </li>
                </ul>
            </li>

            <li
                class=" nav-item {{ Request::routeIs('admin.commissions.index', 'admin.commissions.create', 'admin.commissions.show', 'admin.commissions.edit', 'admin.commissions.appraisals', 'admin.commissions.loans', 'admin.commissions.salaries') ? 'has-sub open' : '' }} ">
                <a class="d-flex align-items-center" href="#"><i class="fa-solid fa-hand-holding-dollar"></i><span
                        class="menu-title text-truncate" data-i18n="Invoice">Commission  </span></a>
                <ul class="menu-content">
                    <!-- <li>
                        <a class="d-flex align-items-center {{ Request::routeIs('admin.commissions.index', 'admin.commissions.show', 'admin.commissions.edit', 'admin.commissions.appraisals', 'admin.commissions.loans', 'admin.commissions.salaries') && !request()->input('archive') ? 'active' : '' }}"
                            href="{{ route('admin.commissions.index') }}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Shop"> List Commission</span>
                        </a>
                    </li> -->

                    <li><a class="d-flex align-items-center {{ Request::routeIs('admin.commissions.create') ? 'active' : '' }} "
                            href="{{ route('admin.commissions.create') }}"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="Shop"> Add Commission</span></a>
                    </li>
                </ul>
            </li>
            
            <li
                class=" nav-item {{ Request::routeIs('admin.inquiries.index', 'admin.inquiries.create', 'admin.inquiries.show', 'admin.inquiries.edit', 'admin.inquiries.appraisals', 'admin.inquiries.loans', 'admin.inquiries.salaries') ? 'has-sub open' : '' }} ">
                <a class="d-flex align-items-center" href="#"><i class="fa-solid fa-book-open-reader"></i><span
                        class="menu-title text-truncate" data-i18n="Invoice">Inquiry </span></a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center {{ Request::routeIs('admin.inquiries.index', 'admin.inquiries.show', 'admin.inquiries.edit', 'admin.inquiries.appraisals', 'admin.inquiries.loans', 'admin.inquiries.salaries') && !request()->input('archive') ? 'active' : '' }}"
                            href="{{ route('admin.inquiries.index') }}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Shop"> List Inquiry</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li
                class=" nav-item {{ Request::routeIs('admin.products.register_request', 'admin.products.index', 'admin.products.edit') ? 'has-sub open' : '' }} ">
                <a class="d-flex align-items-center" href="#"><i class="fa-brands fa-product-hunt"></i><span
                        class="menu-title text-truncate" data-i18n="Invoice">Product Listing</span></a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center {{ Request::routeIs('admin.products.index') && !request()->input('archive') ? 'active' : '' }}"
                            href="{{ route('admin.products.index') }}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Shop"> Listing</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li
                class=" nav-item {{ Request::routeIs('admin.products.request') ? 'has-sub open' : '' }} ">
                <a class="d-flex align-items-center" href="#"><i class="fa-solid fa-helicopter-symbol"></i><span
                        class="menu-title text-truncate" data-i18n="Invoice">Lending  Request</span></a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center {{ Request::routeIs('admin.products.request') && !request()->input('archive') ? 'active' : '' }}"
                            href="{{ route('admin.products.request') }}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Shop"> Listing</span>
                        </a>
                    </li>
                </ul>
            </li>  

             <li
                class=" nav-item {{ Request::routeIs('admin.images.index', 'admin.images.create', 'admin.images.show', 'admin.images.edit','admin.sizes.index', 'admin.sizes.create', 'admin.sizes.show', 'admin.sizes.edit','admin.countries.index', 'admin.countries.create', 'admin.countries.show', 'admin.countries.edit','admin.cities.index', 'admin.cities.create', 'admin.cities.show', 'admin.cities.edit', 'admin.privacy_policies.get_policies', 'admin.terms_condetion.get_terms', 'admin.deliveries.delivry', 'admin.menus.create', 'admin.menus.index', 'admin.menus.edit', 'admin.colors.create', 'admin.colors.index', 'admin.colors.edit',  'admin.category_masters.create', 'admin.category_masters.index', 'admin.category_masters.edit') ? 'has-sub open' : '' }} ">
                <a class="d-flex align-items-center" href="#"><i class="fa-solid fa-gear"></i><span
                        class="menu-title text-truncate" data-i18n="Invoice">Settings</span></a>
                <ul class="menu-content">
                    <li
                        class=" nav-item {{ Request::routeIs('admin.menus.index', 'admin.menus.create', 'admin.menus.show', 'admin.menus.edit', 'admin.menus.appraisals', 'admin.menus.loans', 'admin.menus.salaries') ? 'has-sub open' : '' }} ">
                        <a class="d-flex align-items-center" href="#"><i class="fa-solid fa-bars"></i><span
                                class="menu-title text-truncate" data-i18n="Invoice">Menu Master</span></a>
                        <ul class="menu-content">
                            <li>
                                <a class="d-flex align-items-center {{ Request::routeIs('admin.menus.index', 'admin.menus.show', 'admin.menus.edit', 'admin.menus.appraisals', 'admin.menus.loans', 'admin.menus.salaries') && !request()->input('archive') ? 'active' : '' }}"
                                    href="{{ route('admin.menus.index') }}">
                                    <i data-feather="circle"></i>
                                    <span class="menu-item text-truncate" data-i18n="Shop"> List Menu</span>
                                </a>
                            </li>

                            <li><a class="d-flex align-items-center {{ Request::routeIs('admin.menus.create') ? 'active' : '' }} "
                                    href="{{ route('admin.menus.create') }}"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="Shop"> Add Menu</span></a>
                            </li>
                        </ul>
                    </li>

                    <li
                        class=" nav-item {{ Request::routeIs('admin.images.index', 'admin.images.create', 'admin.images.show', 'admin.images.edit', 'admin.images.appraisals', 'admin.images.loans', 'admin.images.salaries') ? 'has-sub open' : '' }} ">
                        <a class="d-flex align-items-center" href="#"><i class="fa-solid fa-images"></i><span
                                class="menu-title text-truncate" data-i18n="Invoice">Banner Master</span></a>
                        <ul class="menu-content">
                            <li>
                                <a class="d-flex align-items-center {{ Request::routeIs('admin.images.index', 'admin.images.show', 'admin.images.edit', 'admin.images.appraisals', 'admin.images.loans', 'admin.images.salaries') && !request()->input('archive') ? 'active' : '' }}"
                                    href="{{ route('admin.images.index') }}">
                                    <i data-feather="circle"></i>
                                    <span class="menu-item text-truncate" data-i18n="Shop"> List Banner</span>
                                </a>
                            </li>

                            <li><a class="d-flex align-items-center {{ Request::routeIs('admin.images.create') ? 'active' : '' }} "
                                    href="{{ route('admin.images.create') }}"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="Shop"> Add Banner</span></a>
                            </li>
                        </ul>
                    </li>
                    <li
                        class=" nav-item {{ Request::routeIs('admin.sizes.index', 'admin.sizes.create', 'admin.sizes.show', 'admin.sizes.edit', 'admin.sizes.appraisals', 'admin.sizes.loans', 'admin.sizes.salaries') ? 'has-sub open' : '' }} ">
                        <a class="d-flex align-items-center" href="#"><i class="fa-solid fa-thermometer"></i><span
                                class="menu-title text-truncate" data-i18n="Invoice">Size Master</span></a>
                        <ul class="menu-content">
                            <li>
                                <a class="d-flex align-items-center {{ Request::routeIs('admin.sizes.index', 'admin.sizes.show', 'admin.sizes.edit', 'admin.sizes.appraisals', 'admin.sizes.loans', 'admin.sizes.salaries') && !request()->input('archive') ? 'active' : '' }}"
                                    href="{{ route('admin.sizes.index') }}">
                                    <i data-feather="circle"></i>
                                    <span class="menu-item text-truncate" data-i18n="Shop"> List Size</span>
                                </a>
                            </li>

                            <li><a class="d-flex align-items-center {{ Request::routeIs('admin.sizes.create') ? 'active' : '' }} "
                                    href="{{ route('admin.sizes.create') }}"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="Shop"> Add Size</span></a>
                            </li>
                        </ul>
                    </li>
                    <li
                        class=" nav-item {{ Request::routeIs('admin.countries.index', 'admin.countries.create', 'admin.countries.show', 'admin.countries.edit', 'admin.countries.appraisals', 'admin.countries.loans', 'admin.countries.salaries') ? 'has-sub open' : '' }} ">
                        <a class="d-flex align-items-center" href="#"><i class="fa-solid fa-earth-americas"></i><span
                                class="menu-title text-truncate" data-i18n="Invoice">Country Master</span></a>
                        <ul class="menu-content">
                            <li>
                                <a class="d-flex align-items-center {{ Request::routeIs('admin.countries.index', 'admin.countries.show', 'admin.countries.edit', 'admin.countries.appraisals', 'admin.countries.loans', 'admin.countries.salaries') && !request()->input('archive') ? 'active' : '' }}"
                                    href="{{ route('admin.countries.index') }}">
                                    <i data-feather="circle"></i>
                                    <span class="menu-item text-truncate" data-i18n="Shop"> List Country</span>
                                </a>
                            </li>

                            <li><a class="d-flex align-items-center {{ Request::routeIs('admin.countries.create') ? 'active' : '' }} "
                                    href="{{ route('admin.countries.create') }}"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="Shop"> Add Country</span></a>
                            </li>
                        </ul>
                    </li>
                    <li
                        class=" nav-item {{ Request::routeIs('admin.colors.index', 'admin.colors.create', 'admin.colors.show', 'admin.colors.edit', 'admin.colors.appraisals', 'admin.colors.loans', 'admin.colors.salaries') ? 'has-sub open' : '' }} ">
                        <a class="d-flex align-items-center" href="#"><i class="fa-solid fa-brush"></i><span
                                class="menu-title text-truncate" data-i18n="Invoice">Color Master</span></a>
                        <ul class="menu-content">
                            <li>
                                <a class="d-flex align-items-center {{ Request::routeIs('admin.colors.index', 'admin.colors.show', 'admin.colors.edit', 'admin.colors.appraisals', 'admin.colors.loans', 'admin.colors.salaries') && !request()->input('archive') ? 'active' : '' }}"
                                    href="{{ route('admin.colors.index') }}">
                                    <i data-feather="circle"></i>
                                    <span class="menu-item text-truncate" data-i18n="Shop"> List Color</span>
                                </a>
                            </li>

                            <li><a class="d-flex align-items-center {{ Request::routeIs('admin.colors.create') ? 'active' : '' }} "
                                    href="{{ route('admin.colors.create') }}"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="Shop"> Add Color</span></a>
                            </li>
                        </ul>
                    </li>
                    <li
                        class=" nav-item {{ Request::routeIs('admin.cities.index', 'admin.cities.create', 'admin.cities.show', 'admin.cities.edit', 'admin.cities.appraisals', 'admin.cities.loans', 'admin.cities.salaries') ? 'has-sub open' : '' }} ">
                        <a class="d-flex align-items-center" href="#"><i class="fa-solid fa-tree-city"></i><span
                                class="menu-title text-truncate" data-i18n="Invoice">City Master</span></a>
                        <ul class="menu-content">
                            <li>
                                <a class="d-flex align-items-center {{ Request::routeIs('admin.cities.index', 'admin.cities.show', 'admin.cities.edit', 'admin.cities.appraisals', 'admin.cities.loans', 'admin.cities.salaries') && !request()->input('archive') ? 'active' : '' }}"
                                    href="{{ route('admin.cities.index') }}">
                                    <i data-feather="circle"></i>
                                    <span class="menu-item text-truncate" data-i18n="Shop"> List City</span>
                                </a>
                            </li>

                            <li><a class="d-flex align-items-center {{ Request::routeIs('admin.cities.create') ? 'active' : '' }} "
                                    href="{{ route('admin.cities.create') }}"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="Shop"> Add City</span></a>
                            </li>
                        </ul>
                    </li>

                    <li
                        class=" nav-item {{ Request::routeIs('admin.category_masters.index', 'admin.category_masters.create', 'admin.category_masters.show', 'admin.category_masters.edit', 'admin.category_masters.appraisals', 'admin.category_masters.loans', 'admin.category_masters.salaries') ? 'has-sub open' : '' }} ">
                        <a class="d-flex align-items-center" href="#"><i class="fa-solid fa-tree-city"></i><span
                                class="menu-title text-truncate" data-i18n="Invoice">FAQ / HELP  <br> Category Master</span></a>
                        <ul class="menu-content">
                            <li>
                                <a class="d-flex align-items-center {{ Request::routeIs('admin.category_masters.index', 'admin.category_masters.show', 'admin.category_masters.edit', 'admin.category_masters.appraisals', 'admin.category_masters.loans', 'admin.category_masters.salaries') && !request()->input('archive') ? 'active' : '' }}"
                                    href="{{ route('admin.category_masters.index') }}">
                                    <i data-feather="circle"></i>
                                    <span class="menu-item text-truncate" data-i18n="Shop"> List </span>
                                </a>
                            </li>

                            <li><a class="d-flex align-items-center {{ Request::routeIs('admin.category_masters.create') ? 'active' : '' }} "
                                    href="{{ route('admin.category_masters.create') }}"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="Shop"> Add</span></a>
                            </li>
                        </ul>
                    </li>


                    <li
                        class=" nav-item {{ Request::routeIs('admin.faqs.index', 'admin.faqs.create', 'admin.faqs.show', 'admin.faqs.edit', 'admin.faqs.appraisals', 'admin.faqs.loans', 'admin.faqs.salaries') ? 'has-sub open' : '' }} ">
                        <a class="d-flex align-items-center" href="#"><i class="fa-solid fa-circle-question"></i><span
                                class="menu-title text-truncate" data-i18n="Invoice">Faqs</span></a>
                        <ul class="menu-content">
                            <li>
                                <a class="d-flex align-items-center {{ Request::routeIs('admin.faqs.index', 'admin.faqs.show', 'admin.faqs.edit', 'admin.faqs.appraisals', 'admin.faqs.loans', 'admin.faqs.salaries') && !request()->input('archive') ? 'active' : '' }}"
                                    href="{{ route('admin.faqs.index') }}">
                                    <i data-feather="circle"></i>
                                    <span class="menu-item text-truncate" data-i18n="Shop">List Faq
                                    </span>
                                </a>
                            </li>

                            <li><a class="d-flex align-items-center {{ Request::routeIs('admin.faqs.create') ? 'active' : '' }} "
                                    href="{{ route('admin.faqs.create') }}"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="Shop"> Add Faq</span></a>
                            </li>

                            {{-- <li><a class="d-flex align-items-center {{ Request::routeIs('admin.category_masters.index') ? 'active' : '' }} "
                                    href="{{ route('admin.category_masters.index') }}"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="Shop"> Category Master</span></a>
                            </li> --}}

                        </ul>
                    </li>
                    <li
                        class=" nav-item {{ Request::routeIs('admin.helps.index', 'admin.helps.create', 'admin.helps.show', 'admin.helps.edit', 'admin.helps.appraisals', 'admin.helps.loans', 'admin.helps.salaries') ? 'has-sub open' : '' }} ">
                        <a class="d-flex align-items-center" href="#"><i class="fa-solid fa-circle-question"></i><span
                                class="menu-title text-truncate" data-i18n="Invoice">Helps</span></a>
                        <ul class="menu-content">
                            <li>
                                <a class="d-flex align-items-center {{ Request::routeIs('admin.helps.index', 'admin.helps.show', 'admin.helps.edit', 'admin.helps.appraisals', 'admin.helps.loans', 'admin.helps.salaries') && !request()->input('archive') ? 'active' : '' }}"
                                    href="{{ route('admin.helps.index') }}">
                                    <i data-feather="circle"></i>
                                    <span class="menu-item text-truncate" data-i18n="Shop">List Help
                                    </span>
                                </a>
                            </li>

                            <li><a class="d-flex align-items-center {{ Request::routeIs('admin.helps.create') ? 'active' : '' }} "
                                    href="{{ route('admin.helps.create') }}"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="Shop"> Add Help</span></a>
                            </li>
                        </ul>
                    </li>
                    <li
                    class="d-flex align-items-center {{ Request::routeIs('admin.privacy_policies.get_policies') && !request()->input('archive') ? 'active' : '' }} ">
                        <a class="d-flex align-items-center" href="{{route('admin.privacy_policies.get_policies')}}"><i class="fa-solid fa-shield-halved"></i><span
                                class="menu-title text-truncate" data-i18n="Invoice">Privacy Policy</span></a>

                    </li>
                    <li
                    class="d-flex align-items-center {{ Request::routeIs('admin.terms_condetion.get_terms') && !request()->input('archive') ? 'active' : '' }}">
                        <a class="d-flex align-items-center" href="{{route('admin.terms_condetion.get_terms')}}"><i class="fa-solid fa-fan"></i><span
                                class="menu-title text-truncate" data-i18n="Invoice">Terms and Conditions</span></a>

                    </li>
                    <li
                    class="d-flex align-items-center {{ Request::routeIs('admin.deliveries.delivry') && !request()->input('archive') ? 'active' : '' }} ">
                        <a class="d-flex align-items-center" href="{{route('admin.deliveries.delivry')}}"><i class="fa-solid fa-truck" ></i><span
                                class="menu-title text-truncate" data-i18n="Invoice">Delivery</span></a>

                    </li>

                </ul>
            </li> 
        </ul>
    </div>

</div>

