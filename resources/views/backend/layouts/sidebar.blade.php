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
                <a class="d-flex align-items-center" href="#"><i class="fa-solid fa-list"></i><span
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
