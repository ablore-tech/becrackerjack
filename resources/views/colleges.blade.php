<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">

<head>

    <meta charset="utf-8" />
    <title>College</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico')}}">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

    <!-- Layout config Js -->
    <script src="{{ asset('js/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('css/custom.min.css')}}" rel="stylesheet" type="text/css" />

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
                                    <img src="{{ asset('images/logo-sm.png')}}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('images/logo-dark.png')}}" alt="" height="17">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('images/logo-sm.png')}}" alt="">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('images/logo-light.png')}}" alt="" height="52" >
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

                       

                        <div class="dropdown topbar-head-dropdown ms-1 header-item">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class='bx bx-category-alt fs-22'></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
                                <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0 fw-semibold fs-15"> Web Apps </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="btn btn-sm btn-soft-info"> View All Apps
                                                <i class="ri-arrow-right-s-line align-middle"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="assets/images/brands/github.png" alt="Github">
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                                <span>Mail Chimp</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#!">
                                                <img src="assets/images/brands/slack.png" alt="slack">
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
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
                                        src="{{ asset('images/users/avatar-1.jpg')}}" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ Auth::user()->name }}</span>
                                        <span
                                            class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Admin</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome {{ Auth::user()->name }}!</h6>
                                <a class="dropdown-item" href="pages-profile.html"><i
                                        class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Profile</span></a>
                                <div class="dropdown-divider"></div>
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
                        <img src="{{ asset('images/logo-sm.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('images/logo-dark.png')}}" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('images/logo-sm.png')}}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('images/logo-light.png')}}" alt="" height="45">
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
                            <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Verticals</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarDashboards">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="{{ route('home')}}" class="nav-link" data-key="t-analytics">
                                            Schools </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('colleges.index')}}" class="nav-link" data-key="t-crm"> Colleges </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index.html" class="nav-link" data-key="t-ecommerce"> Advance </a>
                                    </li>


                                </ul>
                            </div>
                        </li> <!-- end Dashboard Menu -->


                        <li class="nav-item">
                            <a class="nav-link menu-link" href="{{ route('teacher.index')}}">
                                <i class="ri-honour-line"></i> <span data-key="t-widgets">Teachers</span>
                            </a>
                        </li>



                        <li class="nav-item">
                            <a class="nav-link menu-link" href="student's list.html">
                                <i class="ri-account-circle-line"></i> <span data-key="t-widgets">Students</span>
                            </a>
                        </li>

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

                    <!-- start page title -->
                    <!-- <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Basic Action</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Basic Action</a></li>
                                        <li class="breadcrumb-item active">Basic Action</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div> -->
                    <!-- end page title -->



                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <p class="text-muted">Add Undergraduate and postgraduate</p>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs mb-3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab"
                                            aria-selected="false">
                                            Under Graduate
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#messages" role="tab"
                                            aria-selected="false">
                                            Post Graduate
                                        </a>
                                    </li>
                                   
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content  text-muted">
                                    <div class="tab-pane active" id="home" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title mb-0">Under Graduate</h4>
                                                    </div><!-- end card header -->
                    
                                                    <div class="card-body">
                                                        <div id="customerList">
                                                            <div class="row g-4 mb-3">
                                                                <div class="col-sm-auto">
                                                                    <div>
                                                                        <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" 
                                                                        data-bs-target="#showModalBoard"><i class="ri-add-line align-bottom me-1"></i> Add</button>
                                                                        <!-- <button class="btn btn-soft-danger" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                    
                                                            <div class="table-responsive table-card mt-3 mb-1">
                                                                <table class="table align-middle table-nowrap" id="customerTable">
                                                                    <thead class="table-light">
                                                                        <tr>
                                                                            <!-- <th scope="col" style="width: 50px;">
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                                                </div>
                                                                            </th> -->
                                                                            <th class="sort" data-sort="customer_name">Subject Name</th>
                                                                         
                                                                            <th class="sort" data-sort="customer_name">Subject Image</th>

                                                                            <th class="sort" data-sort="action">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="list form-check-all">
                                                                        @foreach($underSubjects as $underSubject)
                                                                            <tr>
                                                                                <!-- <th scope="row">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                                                    </div>
                                                                                </th> -->
                                                                                <!-- <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td> -->
                                                                                <td class="customer_name">{{ $underSubject->name}}</td>
                                                                                <td class="customer_name">
                                                                                <img src="{{ asset('/storage'.$underSubject->image) }}" width="40" height="40">
                                                                                </td>
                                                                                <td>
                                                                                    <div class="d-flex gap-2">
                                                                                        <div class="edit">
                                                                                            <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-underSubject="{'id': {{$underSubject->id}}, 'name': {{ $underSubject->name}} }" data-bs-target="#editModalBoard">Edit</button>
                                                                                        </div>
                                                                                        <div class="remove">
                                                                                            <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal"
                                                                                            data-id = "{{ $underSubject->id}}" data-bs-target="#deleteModalBoard">Remove</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach

                                                                        @if($underSubjects->isEmpty())
                                                                            <tr>
                                                                                <td><h5 class="mt-2">Sorry! No Result Found</h5>
                                                                                </td>
                                                                            </tr>
                                                                        @endif
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card -->
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end col -->
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="messages" role="tabpanel">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h4 class="card-title mb-0">Post Graduate</h4>
                                                    </div><!-- end card header -->
                    
                                                    <div class="card-body">
                                                        <div id="customerList">
                                                            <div class="row g-4 mb-3">
                                                                <div class="col-sm-auto">
                                                                    <div>
                                                                        <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" 
                                                                        data-subject="{'graduation_type': {{$graduationTypes['postgraduate']}}" data-bs-target="#showModalSubject"><i class="ri-add-line align-bottom me-1"></i> Add</button>
                                                                        <!-- <button class="btn btn-soft-danger" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                    
                                                            <div class="table-responsive table-card mt-3 mb-1">
                                                                <table class="table align-middle table-nowrap" id="customerTable">
                                                                    <thead class="table-light">
                                                                        <tr>
                                                                            <th class="sort" data-sort="customer_name">Subject Name</th>

                                                                            <th class="sort" data-sort="customer_name">Subject Image</th>
                                                                         
                                                                            <th class="sort" data-sort="action">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody class="list form-check-all">
                                                                        @foreach($postSubjects as $postSubject)
                                                                            <tr>
                                                                                <td class="customer_name">{{ $postSubject->name}}</td>
                                                                                <td class="customer_name">
                                                                                <img src="{{ asset('/storage'.$postSubject->image) }}" width="40" height="40">
                                                                                </td>  
                                                                                <td>
                                                                                    <div class="d-flex gap-2">
                                                                                        <div class="edit">
                                                                                            <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal"
                                                                                            data-subject="{'id': {{$postSubject->id}}, 'name': {{ $postSubject->name}} }" 
                                                                                         
                                                                                            data-bs-target="#editModalSubject">Edit</button>
                                                                                        </div>
                                                                                        <div class="remove">
                                                                                            <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" 
                                                                                            data-id = "{{ $postSubject->id}}"
                                                                                            data-bs-target="#deleteModalSubject">Remove</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        @endforeach

                                                                        @if($postSubjects->isEmpty())
                                                                            <tr>
                                                                                <td><h5 class="mt-2">Sorry! No Result Found</h5>
                                                                                </td>
                                                                            </tr>
                                                                        @endif
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div><!-- end card -->
                                                </div>
                                                <!-- end col -->
                                            </div>
                                            <!-- end col -->
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="settings" role="tabpanel">
                                        <h6>Settings</h6>
                                        <p class="mb-0">
                                            Trust fund seitan letterpress, keytar raw denim keffiyeh etsy
                                            art party before they sold out master cleanse gluten-free squid
                                            scenester freegan cosby sweater. Fanny pack portland seitan DIY,
                                            art party locavore wolf cliche high life echo park Austin. Cred
                                            vinyl keffiyeh DIY salvia PBR, banh mi before they sold out
                                            farm-to-table VHS.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div>

                    <div class="modal fade" id="showModalBoard" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-light p-3">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                </div>
                                <form method="POST" action="{{ route('college-subject.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                    <input type="hidden" id="graduation_type" name="graduation_type" value={{ $graduationTypes['undergraduate']}} />
                                        <div class="mb-3" id="modal-id" style="display: none;">
                                            <label for="id-field" class="form-label">ID</label>
                                            <input type="text" id="id-field" class="form-control" placeholder="ID" readonly />
                                        </div>
    
                                        <div class="mb-3">
                                            <label for="customername-field" class="form-label">Subject Name</label>
                                            <input type="text" id="customername-field" name="name" class="form-control" placeholder="Enter Subject Name" required />
                                        </div>

                                        <div class="mb-3">
                                            <label for="customername-field" class="form-label">Subject Image</label>
                                            <input type="file" id="image" name="image" class="form-control" placeholder="Enter Subject Name" required />
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success" id="add-btn">Add </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="editModalBoard" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-light p-3">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                </div>
                                @php
                                    $id = 0;
                                    $name = '';
                                    if(isset($underSubject)) {
                                        $id = $underSubject->id;
                                        $name = $underSubject->name;
                                    }
                                @endphp
                                <form method="POST" action="{{ route('college-subject.update', $id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
    
                                        <div class="mb-3" id="modal-id" style="display: none;">
                                            <label for="id-field" class="form-label">ID</label>
                                            <input type="text" id="id-field" class="form-control" placeholder="ID" readonly />
                                        </div>
    
                                        <div class="mb-3">
                                            <label for="customername-field" class="form-label">Subject Name</label>
                                            <input type="text" id="customername-field" name="name" class="form-control" placeholder="Enter Board Name" required value="{{ $name}}"/>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success" id="add-btn">Update </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade zoomIn" id="deleteModalBoard" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                                </div>
                                @php
                                    $test = 0;
                                    if(isset($underSubject))
                                        $test = $underSubject->id
                                @endphp
                                <form method="POST" action="{{ route('college-subject.destroy', $test) }}">
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal-body">
                                        <div class="mt-2 text-center">
                                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                <h4>Are you Sure ?</h4>
                                                <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Record ?</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn w-sm btn-danger " id="delete-record">Yes, Delete It!</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="modal fade" id="showModalSubject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-light p-3">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                </div>

                                <form method="POST" action="{{ route('college-subject.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                    <input type="hidden" id="graduation_type" name="graduation_type" value={{ $graduationTypes['postgraduate']}} />

                                        <div class="mb-3" id="modal-id" style="display: none;">
                                            <label for="id-field" class="form-label">ID</label>
                                            <input type="text" id="id-field" class="form-control" placeholder="ID" readonly />
                                        </div>
    
                                        <div class="mb-3">
                                            <label for="customername-field" class="form-label">Subject Name</label>
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter Subject Name" required />
                                        </div>

                                        <div class="mb-3">
                                            <label for="customername-field" class="form-label">Subject Image</label>
                                            <input type="file" id="image" name="image" class="form-control" placeholder="Enter Subject Name" required />
                                        </div>
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success" id="add-btn">Add </button>
                                            <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="editModalSubject" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header bg-light p-3">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                </div>
                                @php
                                    $subject_id = 0;
                                    $subject_name = '';
                                    if(isset($subject)) {
                                        $subject_id = $subject->id;
                                        $subject_name = $subject->name;
                                    }
                                @endphp
                                <form method="POST" action="{{ route('college-subject.update', $subject_id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
    
                                        <div class="mb-3" id="modal-id" style="display: none;">
                                            <label for="id-field" class="form-label">ID</label>
                                            <input type="text" id="id-field" class="form-control" placeholder="ID" readonly />
                                        </div>
    
                                        <div class="mb-3">
                                            <label for="customername-field" class="form-label">Board Name</label>
                                            <input type="text" id="customername-field" name="name" class="form-control" placeholder="Enter Subject Name" required value="{{ $subject_name}}"/>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="hstack gap-2 justify-content-end">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success" id="add-btn">Update </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade zoomIn" id="deleteModalSubject" tabindex="-1" aria-hidden="true">

                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                                </div>
                                @php
                                    $test = 0;
                                    if(isset($subject))
                                        $test = $subject->id
                                @endphp
                                <form method="POST" action="{{ route('college-subject.destroy', $test) }}">
                                    @csrf
                                    @method('DELETE')
                                    <div class="modal-body">
                                        <div class="mt-2 text-center">
                                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                <h4>Are you Sure ?</h4>
                                                <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Record ?</p>
                                            </div>
                                        </div>
                                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn w-sm btn-danger " id="delete-record">Yes, Delete It!</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

   
                    <!-- Modal -->
                    <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mt-2 text-center">
                                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                            <h4>Are you Sure ?</h4>
                                            <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Record ?</p>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn w-sm btn-danger " id="delete-record">Yes, Delete It!</button>
                                    </div>
                                </div>
                            </div>
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

   



    <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
        <div class="d-flex align-items-center bg-primary bg-gradient p-3 offcanvas-header">
            <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

            <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <div data-simplebar class="h-100">
                <div class="p-4">
                    <h6 class="mb-0 fw-semibold text-uppercase">Layout</h6>
                    <p class="text-muted">Choose your layout</p>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout01" name="data-layout" type="radio" value="vertical" class="form-check-input">
                                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout01">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Vertical</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal" class="form-check-input">
                                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout02">
                                    <span class="d-flex h-100 flex-column gap-1">
                                        <span class="bg-light d-flex p-1 gap-1 align-items-center">
                                            <span class="d-block p-1 bg-soft-primary rounded me-1"></span>
                                            <span class="d-block p-1 pb-0 px-2 bg-soft-primary ms-auto"></span>
                                            <span class="d-block p-1 pb-0 px-2 bg-soft-primary"></span>
                                        </span>
                                        <span class="bg-light d-block p-1"></span>
                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Horizontal</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn" class="form-check-input">
                                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout03">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1">
                                                <span class="d-block p-1 bg-soft-primary mb-2"></span>
                                                <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                            </span>
                                        </span>
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Two Column</h5>
                        </div>
                        <!-- end col -->
                    </div>

                    <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Color Scheme</h6>
                    <p class="text-muted">Choose Light or Dark Scheme.</p>

                    <div class="colorscheme-cardradio">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-light" value="light">
                                    <label class="form-check-label p-0 avatar-md w-100" for="layout-mode-light">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Light</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check card-radio dark">
                                    <input class="form-check-input" type="radio" name="data-layout-mode" id="layout-mode-dark" value="dark">
                                    <label class="form-check-label p-0 avatar-md w-100 bg-dark" for="layout-mode-dark">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-soft-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-soft-light d-block p-1"></span>
                                                    <span class="bg-soft-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Dark</h5>
                            </div>
                        </div>
                    </div>

                    <div id="layout-width">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Layout Width</h6>
                        <p class="text-muted">Choose Fluid or Boxed layout.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-fluid" value="fluid">
                                    <label class="form-check-label p-0 avatar-md w-100" for="layout-width-fluid">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Fluid</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-boxed" value="boxed">
                                    <label class="form-check-label p-0 avatar-md w-100 px-2" for="layout-width-boxed">
                                        <span class="d-flex gap-1 h-100 border-start border-end">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Boxed</h5>
                            </div>
                        </div>
                    </div>

                    <div id="layout-position">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Layout Position</h6>
                        <p class="text-muted">Choose Fixed or Scrollable Layout Position.</p>

                        <div class="btn-group radio" role="group">
                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
                            <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>

                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                            <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                        </div>
                    </div>
                    <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Topbar Color</h6>
                    <p class="text-muted">Choose Light or Dark Topbar Color.</p>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-light" value="light">
                                <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-light">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Light</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark" value="dark">
                                <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-dark">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-primary d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Dark</h5>
                        </div>
                    </div>

                    <div id="sidebar-size">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar Size</h6>
                        <p class="text-muted">Choose a size of Sidebar.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-default" value="lg">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-default">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Default</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-compact" value="md">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-compact">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 bg-soft-primary rounded mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Compact</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small" value="sm">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1">
                                                    <span class="d-block p-1 bg-soft-primary mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Small (Icon View)</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small-hover" value="sm-hover">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small-hover">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1">
                                                    <span class="d-block p-1 bg-soft-primary mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 pb-0 bg-soft-primary"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Small Hover View</h5>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-view">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar View</h6>
                        <p class="text-muted">Choose Default or Detached Sidebar view.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-default" value="default">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-default">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Default</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-detached" value="detached">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-detached">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-flex p-1 gap-1 align-items-center px-2">
                                                <span class="d-block p-1 bg-soft-primary rounded me-1"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-soft-primary ms-auto"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-soft-primary"></span>
                                            </span>
                                            <span class="d-flex gap-1 h-100 p-1 px-2">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="bg-light d-block p-1 mt-auto px-2"></span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Detached</h5>
                            </div>
                        </div>
                    </div>
                    <div id="sidebar-color">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar Color</h6>
                        <p class="text-muted">Choose a color of Sidebar.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-light" value="light">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-light">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-white border-end d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-soft-primary rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-primary"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Light</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-dark" value="dark">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-dark">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-primary d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Dark</h5>
                            </div>
                            <div class="col-4">
                                <button class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient" aria-expanded="false" aria-controls="collapseBgGradient">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-soft-light rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-soft-light"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </button>
                                <h5 class="fs-13 text-center mt-2">Gradient</h5>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="collapse" id="collapseBgGradient">
                            <div class="d-flex gap-2 flex-wrap img-switch p-2 px-3 bg-light rounded">

                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient" value="gradient">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-2" value="gradient-2">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-2">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-2"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-3" value="gradient-3">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-3">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-3"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-4" value="gradient-4">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-4">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-4"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-img">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar Images</h6>
                        <p class="text-muted">Choose a image of Sidebar.</p>

                        <div class="d-flex gap-2 flex-wrap img-switch">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-none" value="none">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-none">
                                    <span class="avatar-md w-auto bg-light d-flex align-items-center justify-content-center">
                                        <i class="ri-close-fill fs-20"></i>
                                    </span>
                                </label>
                            </div>

                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-01" value="img-1">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-01">
                                    <img src="assets/images/sidebar/img-1.jpg" alt="" class="avatar-md w-auto object-cover">
                                </label>
                            </div>	

                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-02" value="img-2">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-02">
                                    <img src="assets/images/sidebar/img-2.jpg" alt="" class="avatar-md w-auto object-cover">
                                </label>
                            </div>
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-03" value="img-3">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-03">
                                    <img src="assets/images/sidebar/img-3.jpg" alt="" class="avatar-md w-auto object-cover">
                                </label>
                            </div>
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-04" value="img-4">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-04">
                                    <img src="assets/images/sidebar/img-4.jpg" alt="" class="avatar-md w-auto object-cover">
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="offcanvas-footer border-top p-3 text-center">
            <div class="row">
                <div class="col-6">
                    <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                </div>
                <div class="col-6">
                    <a href="https://1.envato.market/velzon-admin" target="_blank" class="btn btn-primary w-100">Buy Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- JAVASCRIPT -->
    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>