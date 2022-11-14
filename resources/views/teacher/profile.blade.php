<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">

<head>

    <meta charset="utf-8" />
    <title>BCJ Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">

    <!-- dropzone css -->
    <link rel="stylesheet" href="{{ asset('libs/dropzone/dropzone.css') }}" type="text/css" />

    <!-- Filepond css -->
    <link rel="stylesheet" href="{{ asset('libs/filepond/filepond.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css') }}">


    <!-- plugin css -->
    <link href="{{ asset('libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ asset('js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('css/custom.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light.png" alt="" height="17">
                                </span>
                            </a>
                        </div>

                        <button type="button"
                            class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                            id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-md-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search..." autocomplete="off"
                                    id="search-options" value="">
                                <span class="mdi mdi-magnify search-widget-icon"></span>
                                <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                                    id="search-close-options"></span>
                            </div>
                            <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                                <div data-simplebar style="max-height: 320px;">
                                    <!-- item-->
                                    <div class="dropdown-header">
                                        <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                                    </div>

                                    <div class="dropdown-item bg-transparent text-wrap">
                                        <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">how to
                                            setup <i class="mdi mdi-magnify ms-1"></i></a>
                                        <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">buttons
                                            <i class="mdi mdi-magnify ms-1"></i></a>
                                    </div>
                                    <!-- item-->
                                    <div class="dropdown-header mt-2">
                                        <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                        <span>Analytics Dashboard</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                        <span>Help Center</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                        <span>My account settings</span>
                                    </a>

                                    <!-- item-->
                                    <div class="dropdown-header mt-2">
                                        <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
                                    </div>

                                    <div class="notification-list">
                                        <!-- item -->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                            <div class="d-flex">
                                                <img src="assets/images/users/avatar-2.jpg"
                                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="flex-1">
                                                    <h6 class="m-0">Angela Bernier</h6>
                                                    <span class="fs-11 mb-0 text-muted">Manager</span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- item -->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                            <div class="d-flex">
                                                <img src="assets/images/users/avatar-3.jpg"
                                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="flex-1">
                                                    <h6 class="m-0">David Grasso</h6>
                                                    <span class="fs-11 mb-0 text-muted">Web Designer</span>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- item -->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                            <div class="d-flex">
                                                <img src="assets/images/users/avatar-5.jpg"
                                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="flex-1">
                                                    <h6 class="m-0">Mike Bunch</h6>
                                                    <span class="fs-11 mb-0 text-muted">React Developer</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="text-center pt-3 pb-1">
                                    <a href="pages-search-results.html" class="btn btn-primary btn-sm">View All Results
                                        <i class="ri-arrow-right-line ms-1"></i></a>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="d-flex align-items-center">

                        <div class="dropdown d-md-none topbar-head-dropdown header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="bx bx-search fs-22"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..."
                                                aria-label="Recipient's username">
                                            <button class="btn btn-primary" type="submit"><i
                                                    class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                data-toggle="fullscreen">
                                <i class='bx bx-fullscreen fs-22'></i>
                            </button>
                        </div>

                        <div class="ms-1 header-item d-none d-sm-flex">
                            <button type="button"
                                class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                                <i class='bx bx-moon fs-22'></i>
                            </button>
                        </div>

                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user"
                                        src="{{asset('images/users/avatar-1.jpg')}}" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Life
                                        </span>
                                        <span
                                            class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Teacher</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome Life!</h6>
                                <a class="dropdown-item" href="pages-profile.html"><i
                                        class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Profile</span>
                                </a>
                                
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        <i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle" data-key="t-logout">{{ __('Logout') }}</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="17">
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarDashboards" role="button" aria-expanded="false"
                                aria-controls="sidebarDashboards">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Home</span>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('teacher.batch.create')}}" role="button" aria-expanded="false"
                                aria-controls="sidebarDashboards">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Add new batch</span>
                            </a>

                        </li> <!-- end Dashboard Menu -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('teacher.batch.index')}}" role="button"
                                aria-expanded="false" aria-controls="sidebarApps">
                                <i class="ri-apps-2-line"></i> <span data-key="t-apps">My Batches</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarLayouts">
                                <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Profile</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLayouts">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="layouts-horizontal.html" target="_blank" class="nav-link"
                                            data-key="t-horizontal">Horizontal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="layouts-detached.html" target="_blank" class="nav-link"
                                            data-key="t-detached">Detached</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="layouts-two-column.html" target="_blank" class="nav-link"
                                            data-key="t-two-column">Two Column</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="layouts-vertical-hovered.html" target="_blank" class="nav-link"
                                            data-key="t-hovered">Hovered</a>
                                    </li>
                                </ul>
                            </div>
                        </li> <!-- end Dashboard Menu -->

                        <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span></li>


















                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">

                <div class="container-fluid">


                <form action="{{route('teacher.update-profile', Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="position-relative mx-n4 mt-n4">
                        <div class="profile-wid-bg profile-setting-img">
                            <img src="{{ $user->userDetail->cover_image ? asset('/storage'.$user->userDetail->cover_image) : asset('images/profile-bg.jpg')}}" class="profile-wid-img" alt="">
                            <div class="overlay-content">
                                <div class="text-end p-3">
                                    <div class="p-0 ms-auto rounded-circle profile-photo-edit">
                                        <input id="profile-foreground-img-file-input" type="file"
                                            class="profile-foreground-img-file-input" name="cover_image">
                                        <label for="profile-foreground-img-file-input"
                                            class="profile-photo-edit btn btn-light">
                                            <i class="ri-image-edit-line align-bottom me-1"></i> Change Cover
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xxl-3">
                            <div class="card mt-n5">
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                            <img src="{{ $user->userDetail->profile_image ? asset('/storage'.$user->userDetail->profile_image) : asset('images/users/avatar-1.jpg')}}"
                                                class="rounded-circle avatar-xl img-thumbnail user-profile-image"
                                                alt="user-profile-image">
                                            <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                                <input id="profile-img-file-input" type="file"
                                                    class="profile-img-file-input" name="profile_image">
                                                <label for="profile-img-file-input"
                                                    class="profile-photo-edit avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-light text-body">
                                                        <i class="ri-camera-fill"></i>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <h5 class="fs-16 mb-1">test</h5>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                        <div class="col-xxl-9">
                            <div class="card mt-xxl-n5">
                                <div class="card-header">
                                    <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0"
                                        role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails"
                                                role="tab">
                                                <i class="fas fa-home"></i> Personal Details
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab">
                                                <i class="far fa-user"></i> Bank Details
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#experience" role="tab">
                                                <i class="far fa-envelope"></i> Work Details
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="card-body p-4">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                            <!-- <form action="javascript:void(0);"> -->
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">First
                                                                Name</label>
                                                            <input type="text" class="form-control" id="firstnameInput"
                                                                name="first_name" placeholder="Enter your firstname" value="{{$user->userDetail->first_name}}">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="lastnameInput" class="form-label">Last
                                                                Name</label>
                                                            <input type="text" class="form-control" id="lastnameInput" name="last_name"
                                                                placeholder="Enter your lastname" value="{{$user->userDetail->last_name}}">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="phonenumberInput" class="form-label">Phone
                                                                Number</label>
                                                            <input type="text" class="form-control"
                                                                id="phonenumberInput" name="phone_number"
                                                                placeholder="Enter your phone number"
                                                                value="{{$user->phone_number}}">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Email
                                                                Address</label>
                                                            <input type="email" class="form-control" id="emailInput"
                                                                placeholder="Enter your email" name="email"
                                                                vvalue="{{$user->email}}">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="addressInput" class="form-label">Address</label>
                                                            <input type="text" class="form-control" id="addressInput" name="address"
                                                                placeholder="City" value="{{$user->userDetail->address}}" />
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="cityInput" class="form-label">City</label>
                                                            <input type="text" class="form-control" id="cityInput" name="city"
                                                                placeholder="City" value="{{$user->userDetail->city}}" />
                                                        </div>
                                                    </div>
                                                    <!--end col-->

                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label for="zipcodeInput" class="form-label">Zip
                                                                Code</label>
                                                            <input type="text" class="form-control" minlength="5"
                                                                maxlength="6" id="zipcodeInput" name="zip_code"
                                                                placeholder="Enter zipcode" value="{{$user->userDetail->zip_code}}">
                                                        </div>
                                                    </div>
                                                    <!--end col-->

                                                    <!-- <div class="col-lg-12">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="submit"
                                                                class="btn btn-primary">Updates</button>
                                                            <button type="button"
                                                                class="btn btn-soft-success">Cancel</button>
                                                        </div>
                                                    </div> -->
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            <!-- </form> -->
                                        </div>
                                        <!--end tab-pane-->
                                        <div class="tab-pane" id="changePassword" role="tabpanel">
                                            <!-- <form action="javascript:void(0);"> -->
                                                <div class="row g-2">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="holdername" class="form-label">Account
                                                              Holder Number</label>
                                                            <input type="text" class="form-control" id="holdername" name="account_holder_name"
                                                                placeholder="Enter account holder name" value="{{$user->userDetail->account_holder_name}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="holdername" class="form-label">
                                                              Bank Name</label>
                                                            <input type="text" class="form-control" id="holdername" name="bank_name"
                                                                placeholder="Enter bank name" value="{{$user->userDetail->bank_name}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">Account
                                                                Number</label>
                                                            <input type="number" class="form-control" id="firstnameInput" name="account_number"
                                                                placeholder="Enter your account number" value="{{$user->userDetail->account_number}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">IFSC
                                                                Code</label>
                                                            <input type="text" class="form-control" id="firstnameInput" name="ifsc_code"
                                                                placeholder="Enter IFSC code" value="{{$user->userDetail->ifsc_code}}">
                                                        </div>
                                                    </div>

                                                    <!--end col-->
                                                    <!-- <div class="col-lg-12">
                                                        <div class="text-end">
                                                            <button type="submit"
                                                                class="btn btn-success">Update</button>
                                                        </div>
                                                    </div> -->
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            <!-- </form> -->
                                        </div>

                                        <div class="tab-pane" id="experience" role="tabpanel">
                                            <!-- <form> -->
                                                <div id="newlink">
                                                    <div id="1">
                                                        <div class="row">
                                                           
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="adharnum" class="form-label">
                                                                        Aadhar Number</label>
                                                                    <input type="text" class="form-control" id="adharnum" name="aadhar_number"
                                                                        placeholder="Enter your aadhar number" value="{{$user->userDetail->aadhar_number}}">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="pannum" class="form-label">
                                                                        PAN Number</label>
                                                                    <input type="text" class="form-control" id="pannum" name="pan_number"
                                                                        placeholder="Enter your pan number" value="{{$user->userDetail->pan_number}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end row-->


                                                        <div class="row">

                            
                                                            <div class="col-lg-6" style="display:none;">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h4 class="card-title mb-0">Dropzone</h4>
                                                                    </div><!-- end card header -->
                                    
                                                                    <div class="card-body">
                                                                        <p class="text-muted">DropzoneJS is an open source library that provides drag'n'drop
                                                                            file uploads with image previews.</p>
                                    
                                                                        <div class="dropzone">
                                                                            <div class="fallback">
                                                                                <input name="file" type="file" multiple="multiple">
                                                                            </div>
                                                                            <div class="dz-message needsclick">
                                                                                <div class="mb-3">
                                                                                    <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                                                                </div>
                                    
                                                                                <h4>Drop files here or click to upload.</h4>
                                                                            </div>
                                                                        </div>
                                    
                                                                        <ul class="list-unstyled mb-0" id="dropzone-preview">
                                                                            <li class="mt-2" id="dropzone-preview-list">
                                                                                <!-- This is used as the file preview template -->
                                                                                <div class="border rounded">
                                                                                    <div class="d-flex p-2">
                                                                                        <div class="flex-shrink-0 me-3">
                                                                                            <div class="avatar-sm bg-light rounded">
                                                                                                <img data-dz-thumbnail class="img-fluid rounded d-block"
                                                                                                    src="#" alt="Dropzone-Image" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="flex-grow-1">
                                                                                            <div class="pt-1">
                                                                                                <h5 class="fs-14 mb-1" data-dz-name>&nbsp;</h5>
                                                                                                <p class="fs-13 text-muted mb-0" data-dz-size></p>
                                                                                                <strong class="error text-danger"
                                                                                                    data-dz-errormessage></strong>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="flex-shrink-0 ms-3">
                                                                                            <button data-dz-remove
                                                                                                class="btn btn-sm btn-danger">Delete</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                        <!-- end dropzon-preview -->
                                                                    </div>
                                                                    <!-- end card body -->
                                                                </div>
                                                                <!-- end card -->
                                                            </div> <!-- end col -->



                                                            
                                                       
                                                           
                                                        </div>
                                                        <!-- end row -->






                                                        <div class="row mt-2">
                                                            <div class="col-lg-12">
                                                                <div class="justify-content-between d-flex align-items-center mb-3">
                                                                    <h5 class="mb-0 pb-1 text-decoration-underline"></h5>
                                                                </div>
                                    
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <h4 class="card-title mb-0">Upload Adhaar Card</h4>
                                                                            </div><!-- end card header -->
                                    
                                                                            <div class="card-body">
                                    
                                                                                <p class="text-muted">Upload both sides of Adhaar card</p>
                                                                                <input type="file" class="filepond filepond-input-multiple" multiple
                                                                                    name="aadhar_image" data-allow-reorder="true" data-max-file-size="3MB"
                                                                                    data-max-files="3">
                                                                            </div>
                                                                            <!-- end card body -->
                                                                        </div>
                                                                        <!-- end card -->
                                                                    </div> <!-- end col -->





                                                                    <div class="col-lg-6">
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <h4 class="card-title mb-0">Upload PAN Card</h4>
                                                                            </div><!-- end card header -->
                                    
                                                                            <div class="card-body">
                                    
                                                                                <p class="text-muted">Upload PAN Card</p>
                                                                                <input type="file" class="filepond filepond-input-multiple" multiple
                                                                                    name="pan_image" data-allow-reorder="true" data-max-file-size="3MB"
                                                                                    data-max-files="3">
                                                                            </div>
                                                                            <!-- end card body -->
                                                                        </div>
                                                                        <!-- end card -->
                                                                    </div> <!-- end col -->
                                    
                                                                   
                                                                </div>
                                                                <!-- end row -->
                                                            </div>
                                                            <!-- end col -->





                                                            
                            
                                                           
                                                        </div>
                                                        <!-- end row -->
                                                    </div>
                                                    <!-- end col -->
                                                        </div>
                                                        <!-- end row -->




                                                    </div>
                                                </div>
                                                <div id="newForm" style="display: none;">

                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="hstack gap-2">
                                                        <button type="submit" class="btn btn-success">Update</button>
                                                       
                                                    </div>
                                                </div>
                                                <!--end col-->
                                            <!-- </form> -->
                                        </div>
                                        <!--end tab-pane-->
                                    </div>
                                </div>
                            </div>
                            </form>
                                    <!--end tab-pane-->
                        </div>
                    </div>
                    



                </div>




                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Ablore.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Ablore
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->






    <!-- JAVASCRIPT -->
    <script src="{{asset('js/pages/form-wizard.init.js')}}"></script>

    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Vector map-->
    <script src="{{ asset('libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('libs/jsvectormap/maps/world-merc.js') }}"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('js/pages/dashboard-analytics.init.js') }}"></script>

    <!-- dropzone min -->
    <script src="{{ asset('libs/dropzone/dropzone-min.js') }}"></script>
     <!-- filepond js -->
     <script src="{{ asset('libs/filepond/filepond.min.js') }}"></script>
     <script src="{{ asset('libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js') }}"></script>
     <script src="{{ asset('libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js') }}"></script>
     <script
         src="{{ asset('libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js') }}"></script>
     <script src="{{ asset('libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js') }}"></script>
 
     <script src="{{ asset('js/pages/form-file-upload.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    <script src="{{ asset('js/pages/form-pickers.init.js') }}"></script>

    <!-- prismjs plugin -->
    <script src="{{ asset('libs/prismjs/prism.js') }}"></script>
    <!-- form wizard init -->
    <script src="{{ asset('js/pages/form-wizard.init.js') }}"></script>
</body>

</html>