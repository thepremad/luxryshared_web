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
                class=" nav-item {{ Request::routeIs('admin.user.listing', 'admin.user.register_request') ? 'has-sub open' : '' }} ">
                <a class="d-flex align-items-center" href="#"><i class="fa-solid fa-user-injured"></i><span
                        class="menu-title text-truncate" data-i18n="Invoice">User Listing</span></a>
                <ul class="menu-content">
                    <li>
                        <a class="d-flex align-items-center {{ Request::routeIs('admin.user.register_request') && !request()->input('archive') ? 'active' : '' }}"
                            href="{{ route('admin.user.register_request') }}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="Shop"> Register Request</span>
                        </a>
                    </li>

                    <li><a class="d-flex align-items-center {{ Request::routeIs('admin.user.index') ? 'active' : '' }} "
                            href="{{ route('admin.user.index') }}"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="Shop"> List  Users</span></a>
                    </li>


                </ul>
            </li>
            
            <li
                class=" nav-item {{ Request::routeIs('admin.images.index', 'admin.images.create', 'admin.images.show', 'admin.images.edit','admin.sizes.index', 'admin.sizes.create', 'admin.sizes.show', 'admin.sizes.edit','admin.countries.index', 'admin.countries.create', 'admin.countries.show', 'admin.countries.edit','admin.cities.index', 'admin.cities.create', 'admin.cities.show', 'admin.cities.edit', 'admin.privacy_policies.get_policies', 'admin.terms_condetion.get_terms', 'admin.deliveries.delivry') ? 'has-sub open' : '' }} ">
                <a class="d-flex align-items-center" href="#"><i class="fa-solid fa-gear"></i><span
                        class="menu-title text-truncate" data-i18n="Invoice">Settings</span></a>
                <ul class="menu-content">

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
                        class=" nav-item {{ Request::routeIs('admin.faq.index', 'admin.faq.create', 'admin.faq.show', 'admin.faq.edit', 'admin.faq.appraisals', 'admin.faq.loans', 'admin.faq.salaries') ? 'has-sub open' : '' }} ">
                        <a class="d-flex align-items-center" href="#"><i class="fa-solid fa-circle-question"></i><span
                                class="menu-title text-truncate" data-i18n="Invoice">Faq</span></a>
                        <ul class="menu-content">
                            <li>
                                <a class="d-flex align-items-center {{ Request::routeIs('admin.faq.index', 'admin.faq.show', 'admin.faq.edit', 'admin.faq.appraisals', 'admin.faq.loans', 'admin.faq.salaries') && !request()->input('archive') ? 'active' : '' }}"
                                    href="{{ route('admin.faq.index') }}">
                                    <i data-feather="circle"></i>
                                    <span class="menu-item text-truncate" data-i18n="Shop"> Category
                                    </span>
                                </a>
                            </li>

                            <li><a class="d-flex align-items-center {{ Request::routeIs('admin.faq.create') ? 'active' : '' }} "
                                    href="{{ route('admin.faq.create') }}"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="Shop"> Listing</span></a>
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
                        <a class="d-flex align-items-center" href="{{route('admin.deliveries.delivry')}}"><i class="fa-solid fa-list"></i><span
                                class="menu-title text-truncate" data-i18n="Invoice">Delivery</span></a>

                    </li>

                </ul>
            </li>


        </ul>
    </div>

</div>



@if(session('success'))
    <div id="flash-message" class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if(session()->has('warning'))
    <!-- <div id="flash-message" class="alert "> -->
    <div id="flash-messagee" class="alert alert-warning" role="alert">

        {{ session('warning') }}
    </div>
@endif
