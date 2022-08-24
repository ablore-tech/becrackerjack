<!doctype html>
<html lang="en" data-layout="horizontal" data-layout-style="" data-layout-position="fixed" data-topbar="light">

<head>

    <meta charset="utf-8" />
    <title>BCJ Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico')}}">

    <!-- plugin css -->
    <link href="{{ asset('libs/jsvectormap/css/jsvectormap.min.css')}}" rel="stylesheet" type="text/css" />

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
                                    <img src="assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('images/logo-dark.png')}}" alt="" height="50">
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
                                        src="https://thumbs.dreamstime.com/b/businessman-icon-vector-male-avatar-profile-image-profile-businessman-icon-vector-male-avatar-profile-image-182095609.jpg" alt="">
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
                                        class="align-middle">Profile</span></a>


                                <a class="dropdown-item" href="pages-faqs.html"><i
                                        class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Help</span></a>
                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="pages-profile-settings.html"><span
                                        class="badge bg-soft-success text-success mt-1 float-end">New</span><i
                                        class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Settings</span></a>

                                <a class="dropdown-item" href="auth-logout-basic.html"><i
                                        class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle" data-key="t-logout">Logout</span></a>
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
                            <a class="nav-link menu-link" href="#sidebarDashboards" role="button" aria-expanded="false"
                                aria-controls="sidebarDashboards">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Add new batch</span>
                            </a>

                        </li> <!-- end Dashboard Menu -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="my_batches.html" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarApps">
                                <i class="ri-apps-2-line"></i> <span data-key="t-apps">My Batches</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarApps">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="apps-calendar.html" class="nav-link" data-key="t-calendar"> Calendar
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="apps-chat.html" class="nav-link" data-key="t-chat"> Chat </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarEmail" class="nav-link" data-bs-toggle="collapse" role="button"
                                            aria-expanded="false" aria-controls="sidebarEmail" data-key="t-email">
                                            Email
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarEmail">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="apps-mailbox.html" class="nav-link" data-key="t-mailbox">
                                                        Mailbox </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#sidebaremailTemplates" class="nav-link"
                                                        data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                        aria-controls="sidebaremailTemplates"
                                                        data-key="t-email-templates">
                                                        Email Templates <span class="badge badge-pill bg-danger"
                                                            data-key="t-new">New</span>
                                                    </a>
                                                    <div class="collapse menu-dropdown" id="sidebaremailTemplates">
                                                        <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                                                <a href="apps-email-basic.html" class="nav-link"
                                                                    data-key="t-basic-action"> Basic Action </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="apps-email-ecommerce.html" class="nav-link"
                                                                    data-key="t-ecommerce-action"> Ecommerce Action </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarEcommerce" class="nav-link" data-bs-toggle="collapse"
                                            role="button" aria-expanded="false" aria-controls="sidebarEcommerce"
                                            data-key="t-ecommerce">
                                            Ecommerce
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarEcommerce">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="apps-ecommerce-products.html" class="nav-link"
                                                        data-key="t-products"> Products </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-ecommerce-product-details.html" class="nav-link"
                                                        data-key="t-product-Details"> Product Details </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-ecommerce-add-product.html" class="nav-link"
                                                        data-key="t-create-product"> Create Product </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-ecommerce-orders.html" class="nav-link"
                                                        data-key="t-orders">
                                                        Orders </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-ecommerce-order-details.html" class="nav-link"
                                                        data-key="t-order-details"> Order Details </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-ecommerce-customers.html" class="nav-link"
                                                        data-key="t-customers"> Customers </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-ecommerce-cart.html" class="nav-link"
                                                        data-key="t-shopping-cart"> Shopping Cart </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-ecommerce-checkout.html" class="nav-link"
                                                        data-key="t-checkout"> Checkout </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-ecommerce-sellers.html" class="nav-link"
                                                        data-key="t-sellers">
                                                        Sellers </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-ecommerce-seller-details.html" class="nav-link"
                                                        data-key="t-sellers-details"> Seller Details </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarProjects" class="nav-link" data-bs-toggle="collapse"
                                            role="button" aria-expanded="false" aria-controls="sidebarProjects"
                                            data-key="t-projects">
                                            Projects
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarProjects">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="apps-projects-list.html" class="nav-link"
                                                        data-key="t-list"> List
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-projects-overview.html" class="nav-link"
                                                        data-key="t-overview"> Overview </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-projects-create.html" class="nav-link"
                                                        data-key="t-create-project"> Create Project </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarTasks" class="nav-link" data-bs-toggle="collapse" role="button"
                                            aria-expanded="false" aria-controls="sidebarTasks" data-key="t-tasks"> Tasks
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarTasks">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="apps-tasks-kanban.html" class="nav-link"
                                                        data-key="t-kanbanboard">
                                                        Kanban Board </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-tasks-list-view.html" class="nav-link"
                                                        data-key="t-list-view">
                                                        List View </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-tasks-details.html" class="nav-link"
                                                        data-key="t-task-details"> Task Details </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarCRM" class="nav-link" data-bs-toggle="collapse" role="button"
                                            aria-expanded="false" aria-controls="sidebarCRM" data-key="t-crm"> CRM
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarCRM">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="apps-crm-contacts.html" class="nav-link"
                                                        data-key="t-contacts">
                                                        Contacts </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-crm-companies.html" class="nav-link"
                                                        data-key="t-companies">
                                                        Companies </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-crm-deals.html" class="nav-link" data-key="t-deals">
                                                        Deals
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-crm-leads.html" class="nav-link" data-key="t-leads">
                                                        Leads
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarCrypto" class="nav-link" data-bs-toggle="collapse"
                                            role="button" aria-expanded="false" aria-controls="sidebarCrypto"
                                            data-key="t-crypto"> Crypto
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarCrypto">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="apps-crypto-transactions.html" class="nav-link"
                                                        data-key="t-transactions"> Transactions </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-crypto-buy-sell.html" class="nav-link"
                                                        data-key="t-buy-sell">
                                                        Buy & Sell </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-crypto-orders.html" class="nav-link"
                                                        data-key="t-orders">
                                                        Orders </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-crypto-wallet.html" class="nav-link"
                                                        data-key="t-my-wallet">
                                                        My Wallet </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-crypto-ico.html" class="nav-link"
                                                        data-key="t-ico-list"> ICO
                                                        List </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-crypto-kyc.html" class="nav-link"
                                                        data-key="t-kyc-application"> KYC Application </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarInvoices" class="nav-link" data-bs-toggle="collapse"
                                            role="button" aria-expanded="false" aria-controls="sidebarInvoices"
                                            data-key="t-invoices">
                                            Invoices
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarInvoices">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="apps-invoices-list.html" class="nav-link"
                                                        data-key="t-list-view">
                                                        List View </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-invoices-details.html" class="nav-link"
                                                        data-key="t-details">
                                                        Details </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-invoices-create.html" class="nav-link"
                                                        data-key="t-create-invoice"> Create Invoice </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarTickets" class="nav-link" data-bs-toggle="collapse"
                                            role="button" aria-expanded="false" aria-controls="sidebarTickets"
                                            data-key="t-supprt-tickets">
                                            Support Tickets
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarTickets">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="apps-tickets-list.html" class="nav-link"
                                                        data-key="t-list-view">
                                                        List View </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-tickets-details.html" class="nav-link"
                                                        data-key="t-ticket-details"> Ticket Details </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#sidebarnft" class="nav-link" data-bs-toggle="collapse" role="button"
                                            aria-expanded="false" aria-controls="sidebarnft"
                                            data-key="t-nft-marketplace">
                                            NFT Marketplace <span class="badge badge-pill bg-danger"
                                                data-key="t-new">New</span>
                                        </a>
                                        <div class="collapse menu-dropdown" id="sidebarnft">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="apps-nft-marketplace.html" class="nav-link"
                                                        data-key="t-marketplace"> Marketplace </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-nft-explore.html" class="nav-link"
                                                        data-key="t-explore-now"> Explore Now </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-nft-auction.html" class="nav-link"
                                                        data-key="t-live-auction"> Live Auction </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-nft-item-details.html" class="nav-link"
                                                        data-key="t-item-details"> Item Details </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-nft-collections.html" class="nav-link"
                                                        data-key="t-collections"> Collections </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-nft-creators.html" class="nav-link"
                                                        data-key="t-creators"> Creators </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-nft-ranking.html" class="nav-link"
                                                        data-key="t-ranking"> Ranking </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-nft-wallet.html" class="nav-link"
                                                        data-key="t-wallet-connect"> Wallet Connect </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="apps-nft-create.html" class="nav-link"
                                                        data-key="t-create-nft"> Create NFT </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
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



            <!-- code start -->

            <div class="page-content">

                <div class="container-fluid">









                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Vertical nav Steps</h4>
                                </div><!-- end card header -->
                                <div class="card-body form-steps">
                                    <form class="vertical-navs-step">
                                        <div class="row gy-5">
                                            <div class="col-lg-4">
                                                <div class="nav flex-column custom-nav nav-pills" role="tablist"
                                                    aria-orientation="vertical">
                                                    <button class="nav-link done active" id="v-pills-bill-info-tab"
                                                        data-bs-toggle="pill" data-bs-target="#v-pills-bill-info"
                                                        type="button" role="tab" aria-controls="v-pills-bill-info"
                                                        aria-selected="true">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Step 1
                                                        </span>
                                                        Select Vertical & Subjects
                                                    </button>
                                                    <button class="nav-link " id="v-pills-bill-address-tab"
                                                        data-bs-toggle="pill" data-bs-target="#v-pills-bill-address"
                                                        type="button" role="tab" aria-controls="v-pills-bill-address"
                                                        aria-selected="false">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Step 2
                                                        </span>
                                                        Add Slot
                                                    </button>
                                                    <button class="nav-link" id="v-pills-payment-tab"
                                                        data-bs-toggle="pill" data-bs-target="#v-pills-payment"
                                                        type="button" role="tab" aria-controls="v-pills-payment"
                                                        aria-selected="false">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Step 3
                                                        </span>
                                                        Add Price
                                                    </button>
                                                    <button class="nav-link" id="v-pills-finish-tab"
                                                        data-bs-toggle="pill" data-bs-target="#v-pills-finish"
                                                        type="button" role="tab" aria-controls="v-pills-finish"
                                                        aria-selected="false">
                                                        <span class="step-title me-2">
                                                            <i class="ri-close-circle-fill step-icon me-2"></i> Step 4
                                                        </span>
                                                        Publish
                                                    </button>
                                                </div>
                                                <!-- end nav -->
                                            </div> <!-- end col-->
                                            <div class="col-lg-6">
                                                <div class="px-lg-4">
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade show active" id="v-pills-bill-info"
                                                            role="tabpanel" aria-labelledby="v-pills-bill-info-tab">
                                                            <div>
                                                                <h5>Select Vertical</h5>
                                                                <p class="text-muted">Fill all information below</p>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12">
                                                                <div class="mb-3">
                                                                    <label for="choices-single-default"
                                                                        class="form-label text-muted">Select an option
                                                                        below</label>

                                                                    <select class="form-control" data-choices
                                                                        name="choices-single-default"
                                                                        id="choices-single-default">
                                                                        <option value="">Select Vertical</option>

                                                                        <option value="Choice2">College</option>
                                                                        <option value="Choice3">Advance</option>
                                                                        <option value="Choice1">School</option>

                                                                    </select>


                                                                    <div class="row c1">
                                                                        <div class="col-lg-6 col-md-6">
                                                                            <div class="mb-3">
                                                                                <label for="choices-single-default"
                                                                                    class="form-label text-muted">Please
                                                                                    Select Board</label>

                                                                                <select class="form-control"
                                                                                    data-choices
                                                                                    name="choices-single-default"
                                                                                    id="choices-single-default">
                                                                                    <option value="">Select Board
                                                                                    </option>
                                                                                    <option value="Choice 1">CBSE
                                                                                    </option>
                                                                                    <option value="Choice 2">ICSE
                                                                                    </option>
                                                                                    <option value="Choice 3">Other
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-lg-6 col-md-6">
                                                                            <div class="mb-3">
                                                                                <label for="choices-single-default"
                                                                                    class="form-label text-muted">Please
                                                                                    Select Class</label>

                                                                                <select class="form-control"
                                                                                    data-choices
                                                                                    name="choices-single-default"
                                                                                    id="choices-single-default">
                                                                                    <option value="">Select Class
                                                                                    </option>
                                                                                    <option value="Choice 1">Class 1
                                                                                    </option>
                                                                                    <option value="Choice 2">Class 2
                                                                                    </option>
                                                                                    <option value="Choice 3">Class 3
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <div class="mb-3">
                                                                                <label
                                                                                    for="choices-multiple-remove-button"
                                                                                    class="form-label text-muted">Please
                                                                                    Select Subjects</label>
                                                                                <p class="text-muted">(You can choose
                                                                                    multiple subjects)</p>
                                                                                <select class="form-control"
                                                                                    id="choices-multiple-remove-button"
                                                                                    data-choices data-choices-removeItem
                                                                                    name="choices-multiple-remove-button"
                                                                                    multiple>
                                                                                    <option value="Choice 1" selected>
                                                                                        Subject 1</option>
                                                                                    <option value="Choice 2">Subject 2
                                                                                    </option>
                                                                                    <option value="Choice 3">Subject 3
                                                                                    </option>
                                                                                    <option value="Choice 4">Subject 4
                                                                                    </option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row c2">
                                                                        <div class="col-lg-6 col-md-6">
                                                                            <div class="mb-3">
                                                                                <label for="choices-single-default"
                                                                                    class="form-label text-muted">Please
                                                                                    Select University</label>

                                                                                <select class="form-control"
                                                                                    data-choices
                                                                                    name="choices-single-default"
                                                                                    id="choices-single-default">
                                                                                    <option value="">Select University
                                                                                    </option>
                                                                                    <option value="Choice 1">University
                                                                                        1</option>
                                                                                    <option value="Choice 2">University
                                                                                        2</option>
                                                                                    <option value="Choice 3">University
                                                                                        3</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row c3">
                                                                        asdfghjjklqwerrttyyuio
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                                <button type="button"
                                                                    class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                                                    data-nexttab="v-pills-bill-address-tab"><i
                                                                        class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go to Add Slot</button>
                                                            </div>
                                                        </div>
                                                        <!-- end tab pane -->
                                                        <div class="tab-pane fade " id="v-pills-bill-address"
                                                            role="tabpanel" aria-labelledby="v-pills-bill-address-tab">
                                                            <div>
                                                                <h5>Select Batch Slot & Timing</h5>
                                                                <p class="text-muted">Select Batch Days</p>
                                                            </div>


                                                            <!-- Custom Checkboxes Color -->

                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="col-md-4">


                                                                        <div class="form-check mb-3">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" id="formCheck1" checked>
                                                                            <label class="form-check-label"
                                                                                for="formCheck1">
                                                                                Monday
                                                                            </label>
                                                                        </div>


                                                                    </div>
                                                                    <div class="col-md-4">


                                                                        <!-- Custom Checkboxes Color -->
                                                                        <div class="form-check mb-3">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" id="formCheck2" checked>
                                                                            <label class="form-check-label"
                                                                                for="formCheck2">
                                                                                Tuesday
                                                                            </label>
                                                                        </div>

                                                                    </div>

                                                                    <div class="col-md-4">


                                                                        <!-- Custom Checkboxes Color -->
                                                                        <div class="form-check mb-3">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" id="formCheck3" checked>
                                                                            <label class="form-check-label"
                                                                                for="formCheck3">
                                                                                Wednesday
                                                                            </label>
                                                                        </div>


                                                                    </div>
                                                                    <div class="col-md-4">



                                                                        <!-- Custom Checkboxes Color -->
                                                                        <div class="form-check mb-3">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" id="formCheck4" checked>
                                                                            <label class="form-check-label"
                                                                                for="formCheck4">
                                                                                Thrusday
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-4">





                                                                        <!-- Custom Checkboxes Color -->
                                                                        <div class="form-check mb-3">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" id="formCheck5" checked>
                                                                            <label class="form-check-label"
                                                                                for="formCheck5">
                                                                                Friday
                                                                            </label>
                                                                        </div>


                                                                    </div>
                                                                    <div class="col-md-4">



                                                                        <!-- Custom Checkboxes Color -->
                                                                        <div class="form-check mb-3">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" id="formCheck6" checked>
                                                                            <label class="form-check-label"
                                                                                for="formCheck6">
                                                                                Saturday
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">



                                                                        <!-- Custom Checkboxes Color -->
                                                                        <div class="form-check mb-3">
                                                                            <input class="form-check-input"
                                                                                type="checkbox" id="formCheck7" checked>
                                                                            <label class="form-check-label"
                                                                                for="formCheck7">
                                                                                Sunday
                                                                            </label>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div>


                                                            <hr class="text-muted">

                                                            <div class="container-fluid p-0 m-0">
                                                                <div class="row">






                                                                    <div class="col-sm-6">
                                                                        <div class="mt-3">
                                                                            <label class="form-label mb-0">Batch Start
                                                                                Time</label>
                                                                            <p class="text-muted">Select Timing For Your
                                                                                Batch</p>
                                                                            <input type="text" class="form-control"
                                                                                data-provider="timepickr"
                                                                                data-time-inline="08:00">
                                                                        </div>
                                                                    </div>
                                                                    <!-- end col -->







                                                                    <div class="col-sm-6">
                                                                        <div class="mt-3">
                                                                            <label class="form-label mb-0">Batch End
                                                                                Time</label>
                                                                            <p class="text-muted">Select Timing For Your
                                                                                Batch</p>
                                                                            <input type="text" class="form-control"
                                                                                data-provider="timepickr"
                                                                                data-time-inline="11:00">
                                                                        </div>
                                                                    </div>
                                                                    <!-- end col -->




                                                                </div>
                                                            </div>







                                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                                <button type="button"
                                                                    class="btn btn-light btn-label previestab"
                                                                    data-previous="v-pills-bill-info-tab"><i
                                                                        class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i>
                                                                    Back to Select Verticals
                                                                </button>
                                                                <button type="button"
                                                                    class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                                                    data-nexttab="v-pills-payment-tab"><i
                                                                        class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Go
                                                                    to Add Price
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <!-- end tab pane -->
                                                        <div class="tab-pane fade" id="v-pills-payment" role="tabpanel"
                                                            aria-labelledby="v-pills-payment-tab">
                                                            <div>
                                                                <h5>Batch Price</h5>
                                                                <p class="text-muted">Fill all information below</p>
                                                            </div>

                                                            <div class="col-lg-12">
                                                                <div class="input-group">
                                                                    <span class="input-group-text">₹</span>
                                                                    <input type="text" class="form-control"
                                                                        aria-label="Amount (to the nearest dollar)">
                                                                    <span class="input-group-text">/ hour</span>
                                                                </div>
                                                            </div>

                                                            <div class="d-flex align-items-start gap-3 mt-4">
                                                                <button type="button"
                                                                    class="btn btn-light btn-label previestab"
                                                                    data-previous="v-pills-bill-address-tab"><i
                                                                        class="ri-arrow-left-line label-icon align-middle fs-16 me-2"></i>
                                                                    Back to Add Slot</button>
                                                                <button type="button"
                                                                    class="btn btn-success btn-label right ms-auto nexttab nexttab"
                                                                    data-nexttab="v-pills-finish-tab"><i
                                                                        class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>
                                                                    Publish</button>
                                                            </div>
                                                        </div>
                                                        <!-- end tab pane -->
                                                        <div class="tab-pane fade" id="v-pills-finish" role="tabpanel"
                                                            aria-labelledby="v-pills-finish-tab">
                                                            <div class="text-center pt-4 pb-2">

                                                                <div class="mb-4">
                                                                    <lord-icon
                                                                        src="https://cdn.lordicon.com/lupuorrc.json"
                                                                        trigger="loop"
                                                                        colors="primary:#0ab39c,secondary:#405189"
                                                                        style="width:120px;height:120px"></lord-icon>
                                                                </div>
                                                                <h5>Sucessfully Added a New Batch !</h5>
                                                                <p class="text-muted">You Will receive an order
                                                                    confirmation email with details of your batch.</p>
                                                            </div>
                                                        </div>
                                                        <!-- end tab pane -->
                                                    </div>
                                                    <!-- end tab content -->
                                                </div>
                                            </div>
                                            <!-- end col -->

                                        </div>
                                        <!-- end row -->
                                    </form>
                                </div>
                            </div>
                            <!-- end -->
                        </div>
                        <!-- end col -->
                    </div>










                </div>




                <!-- container-fluid -->
            </div>

            <!-- code end -->
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Ablore.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design and Develop by Ablore
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




    <script src="{{asset('js/pages/form-wizard.init.js')}}"></script>



    <!-- JAVASCRIPT -->
    <script src="{{ asset('libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{ asset('libs/node-waves/waves.min.js')}}"></script>
    <script src="{{ asset('libs/feather-icons/feather.min.js')}}"></script>
    <script src="{{ asset('js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
    <script src="{{ asset('js/plugins.js')}}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Vector map-->
    <script src="{{ asset('libs/jsvectormap/js/jsvectormap.min.js')}}"></script>
    <script src="{{ asset('libs/jsvectormap/maps/world-merc.js')}}"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('js/pages/dashboard-analytics.init.js')}}"></script>

    <!-- App js -->
    <script src="{{ asset('js/app.js')}}"></script>

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


        <script src="{{asset('js/pages/form-pickers.init.js')}}"></script>



    <script>

        $(function () {
            var hidestuff = function () {
                $(".c1,.c2,.c3").hide();
            }

            $("select[name='choices-single-default']").change(function () {
                hidestuff();

                var value = $(this).val();
                if (value == "Choice1") {
                    $(".c1").show();
                }
                if (value == "Choice2") {
                    $(".c2").show();
                }
                if (value == "Choice3") {
                    $(".c3").show();
                }
            });
            hidestuff();
        });
    </script>
</body>

</html>