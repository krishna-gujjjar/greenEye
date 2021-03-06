<?php use GreenEye\App \ {
    Config\Config,
    Functions\getself,
    Functions\Valid
}; ?>
<!DOCTYPE html>
<html lang="en" class="loading">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="GreenEye's Dashborad for Executing And Display Database Requests.">
    <meta name="keywords" content="Hospital, Hospital Website, Doctor Website, Medical Website, web app">
    <meta name="author" content="GURJJJARSPROTECH">
    <title><?php echo SITENAME; ?> | <?php Config::getPageTitle(); ?></title>

    <link rel="apple-touch-icon" sizes="120x120" href="app-assets/img/ico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="app-assets/img/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="app-assets/img/ico/favicon-16x16.png">
    <link rel="manifest" href="app-assets/img/ico/site.webmanifest">
    <meta name="apple-mobile-web-app-title" content="greenEye">
    <meta name="application-name" content="greenEye">
    <meta name="msapplication-TileColor" content="#ffc40d">
    <meta name="theme-color" content="#ffffff">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/img/ico/favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">

    <!-- <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet"> -->
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/prism.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/dropzone.min.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/chartist.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pace-minimal.css">
    <link rel="stylesheet" href="app-assets/vendors/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/snackbar/snackbar.min.css">
    <link rel="stylesheet" href="vendors/filepond/filepond.min.css">
    <link rel="stylesheet" href="vendors/filepond/filepond-plugin-image-preview.min.css">


    <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/style.css">

    <script src="app-assets/vendors/js/sweetalert2.min.js"></script>
    <script src="app-assets/vendors/js/core/jquery-3.3.1.min.js"></script>
    <script src="vendors/snackbar/snackbar.min.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="../vendors/bootstrap/css/bootstrap.min.css"> -->
</head>

<body data-col="2-columns" class=" 2-columns ">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <?php if ('login' !== self::getName()) : ?>
        <div class="wrapper nav-collapsed menu-collapsed sidebar-lg">
            <div data-active-color="white" data-background-color="primary" data-image="" class="app-sidebar">
                <div class="sidebar-header">
                    <div class="logo clearfix">
                        <a href="<?php echo ADMIN; ?>" class="logo-text float-left">
                            <div class="logo-img">
                                <img src="app-assets/img/logo.png" alt="GreenEye Logo" />
                            </div>
                            <span class="text align-middle"><?php echo SITENAME; ?></span>
                        </a>
                    </div>
                </div>
                <div class="sidebar-content">
                    <div class="nav-container">
                        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
                            <li class="nav-item <?php Config::Title('index') ?>">
                                <a href="<?php echo ADMIN; ?>">
                                    <i class="icon-home"></i>
                                    <span data-i18n="" class="menu-title">Dashboard</span>
                                    <!-- <span class="tag badge badge-pill badge-danger mt-1">2</span> -->
                                    <!-- New Things Notification -->
                                </a>
                            </li>
                            <li class="has-sub nav-item ">
                                <a href="#">
                                    <i class="icon-plus"></i>
                                    <span data-i18n="" class="menu-title">Create</span>
                                </a>
                                <ul class="menu-content">
                                    <li class="<?php Config::Title('create-admin') ?>">
                                        <a href="<?php echo ADMIN ?>create-admin">
                                            <span data-i18n="" class="menu-title">Admins</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>


                            </li>
                            <li class=" nav-item">
                                <a href="allappointments">
                                    <i class="icon-book-open"></i>
                                    <span data-i18n="" class="menu-title">All Appointments</span>
                                </a>
                            </li>
                            <!-- <li class=" nav-item">
                                                                                    <a href="cards">
                                                                                        <i class="icon-layers"></i>
                                                                                        <span data-i18n="" class="menu-title">Cards</span>
                                                                                    </a>
                                                                                </li> -->
                            <!-- <li class="has-sub nav-item">
                                                                            <a href="#">
                                                                                <i class="icon-puzzle"></i>
                                                                                <span data-i18n="" class="menu-title">Components</span>
                                                                            </a>
                                                                            <ul class="menu-content">
                                                                                <li class="has-sub">
                                                                                    <a href="#" class="menu-item">Bootstrap</a>
                                                                                    <ul class="menu-content">
                                                                                        <li>
                                                                                            <a href="components-lists.html" class="menu-item">List</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="components-buttons.html" class="menu-item">Buttons</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="components-alerts.html" class="menu-item">Alerts</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="components-badges.html" class="menu-item">Badges</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="components-dropdowns.html" class="menu-item">Dropdowns</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="components-inputgroups.html" class="menu-item">Input Groups</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="components-media-objects.html" class="menu-item">Media Objects</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="components-pagination.html" class="menu-item">Pagination</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="components-progress.html" class="menu-item">Progress Bars</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="components-modals.html" class="menu-item">Modals</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="components-collapse.html" class="menu-item">Collapse</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="components-accordion.html" class="menu-item">Accordion</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="components-carousel.html" class="menu-item">Carousel</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="components-datepicker.html" class="menu-item">Datepicker</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="components-popover.html" class="menu-item">Popover</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="components-tooltip.html" class="menu-item">Tooltip</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="components-tabs.html" class="menu-item">Tabs</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="has-sub">
                                                                                    <a href="#" class="menu-item">Extra</a>
                                                                                    <ul class="menu-content">
                                                                                        <li>
                                                                                            <a href="sweet-alerts.html" class="menu-item">Sweet Alert</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="toastr.html" class="menu-item">Toastr</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="upload.html" class="menu-item">Upload</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="editor.html" class="menu-item">Editor</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="dragndrop.html" class="menu-item">Drag and Drop</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="tour.html" class="menu-item">Tour</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="tags-input.html" class="menu-item">Input Tag</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="switch.html" class="menu-item">Switch</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="rating.html" class="menu-item">Rating</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="typeahead.html" class="menu-item">Typeahead</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                        <li class="has-sub nav-item">
                                                                            <a href="#"><i class="icon-doc"></i><span data-i18n="" class="menu-title">Forms</span><span class="tag badge badge-pill badge-primary mt-1">New</span></a>
                                                                            <ul class="menu-content">
                                                                                <li class="has-sub">
                                                                                    <a href="#" class="menu-item">Elements</a>
                                                                                    <ul class="menu-content">
                                                                                        <li>
                                                                                            <a href="inputs.html" class="menu-item">Inputs</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="input-groups.html" class="menu-item">Input Groups</a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href="input-grid.html" class="menu-item">Input Grid</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="has-sub">
                                                                                    <a href="#" class="menu-item">Layouts</a>
                                                                                    <ul class="menu-content">
                                                                                        <li>
                                                                                            <a href="basic-forms.html" class="menu-item">Basic Forms</a></li>
                                                                                        <li>
                                                                                            <a href="horizontal-forms.html" class="menu-item">Horizontal Forms</a></li>
                                                                                        <li>
                                                                                            <a href="hidden-labels.html" class="menu-item">Hidden Labels</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li>
                                                                                    <a href="validation-forms.html" class="menu-item">Validation</a></li>
                                                                                <li>
                                                                                    <a href="wizard-forms.html" class="menu-item">Wizard</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li class="has-sub nav-item">

                                                                            <a href="#">
                                                                                <i class="icon-grid"></i>
                                                                                <span data-i18n="" class="menu-title">Tables</span>
                                                                            </a>
                                                                            <ul class="menu-content">
                                                                                <li>
                                                                                    <a href="regular-table.html" class="menu-item">Regular</a></li>
                                                                                <li>
                                                                                    <a href="extended-table.html" class="menu-item">Extended</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li class="has-sub nav-item">

                                                                            <a href="#">
                                                                                <i class="icon-notebook"></i>
                                                                                <span data-i18n="" class="menu-title">Data Tables</span>
                                                                            </a>
                                                                            <ul class="menu-content">
                                                                                <li>
                                                                                    <a href="dt-basic-initialization.html" class="menu-item">Basic Initialisation</a></li>
                                                                                <li>
                                                                                    <a href="dt-advanced-initialization.html" class="menu-item">Advanced initialisation</a></li>
                                                                                <li>
                                                                                    <a href="dt-styling.html" class="menu-item">Styling</a></li>
                                                                                <li>
                                                                                    <a href="dt-data-sources.html" class="menu-item">Data Sources</a></li>
                                                                                <li>
                                                                                    <a href="dt-api.html" class="menu-item">API</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li class=" nav-item">
                                                                            <a href="google-map.html">
                                                                                <i class="icon-map"></i>
                                                                                <span data-i18n="" class="menu-title">Google Map</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="has-sub nav-item">
                                                                            <a href="#">
                                                                                <i class="icon-pie-chart"></i>
                                                                                <span data-i18n="" class="menu-title">Charts</span>
                                                                                <span class="tag badge badge-pill badge-success white mt-1">2</span>
                                                                            </a>
                                                                            <ul class="menu-content">

                                                                                <li><a href="chartist.html" class="menu-item">Chartist</a></li>
                                                                                <li><a href="chartjs.html" class="menu-item">ChartJs</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li class="has-sub nav-item">
                                                                            <a href="#">
                                                                                <i class="icon-docs"></i>
                                                                                <span data-i18n="" class="menu-title">Pages</span>
                                                                            </a>
                                                                            <ul class="menu-content">
                                                                                <li><a href="forgot-password-page.html" class="menu-item">Forgot Password</a></li>
                                                                                <li><a href="horizontal-timeline-page.html" class="menu-item">Horizontal Timeline</a></li>
                                                                                <li><a href="vertical-timeline-page.html" class="menu-item">Vertical Timeline</a></li>
                                                                                <li><a href="login-page.html" class="menu-item">Login</a></li>
                                                                                <li><a href="register-page.html" class="menu-item">Register</a></li>
                                                                                <li><a href="user-profile-page.html" class="menu-item">User Profile</a></li>
                                                                                <li><a href="lock-screen-page.html" class="menu-item">Lock Screen</a></li>
                                                                                <li><a href="invoice-page.html" class="menu-item">Invoice</a></li>
                                                                                <li><a href="error-page.html" class="menu-item">Error</a></li>
                                                                                <li><a href="coming-soon-page.html" class="menu-item">Coming Soon</a></li>
                                                                                <li><a href="maintenance-page.html" class="menu-item">Maintenance</a></li>
                                                                                <li><a href="gallery-page.html" class="menu-item">Gallery</a></li>
                                                                                <li><a href="search.html" class="menu-item">Search</a></li>
                                                                                <li><a href="faq.html" class="menu-item">FAQ</a></li>
                                                                                <li><a href="knowledge-base.html" class="menu-item">Knowledge Base</a></li>
                                                                            </ul>
                                                                        </li>
                                                                        <li class=" nav-item">
                                                                            <a href="documentation/index.html">
                                                                                <i class="icon-book-open"></i>
                                                                                <span data-i18n="" class="menu-title">Documentation</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class=" nav-item">
                                                                            <a href="">
                                                                                <i class="icon-support"></i>
                                                                                <span data-i18n="" class="menu-title">Support</span>
                                                                            </a>
                                                                        </li> -->
                        </ul>
                    </div>
                </div>
            </div>

            <nav class="navbar navbar-expand-lg navbar-light bg-faded">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" data-toggle="collapse" class="navbar-toggle d-lg-none float-left">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <span class="d-lg-none navbar-right navbar-collapse-toggle">
                            <a class="open-navbar-container">
                                <i class="ft-more-vertical"></i>
                            </a>
                        </span>
                        <a id="navbar-fullscreen" href="javascript:;" class="mr-2 display-inline-block apptogglefullscreen">
                            <i class="ft-maximize blue-grey darken-4 toggleClass"></i>
                            <p class="d-none">fullscreen</p>
                        </a>
                        <a class="ml-2 display-inline-block">
                            <i class="ft-shopping-cart blue-grey darken-4"></i>
                            <p class="d-none">cart</p>
                        </a>
                        <div class="dropdown ml-2 display-inline-block">
                            <a id="apps" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle">
                                <i class="ft-edit blue-grey darken-4"></i>
                                <span class="mx-1 blue-grey darken-4 text-bold-400">Apps</span>
                            </a>
                            <div class="apps dropdown-menu">
                                <div class="arrow_box">
                                    <a href="chat.html" class="dropdown-item py-1">
                                        <span>Chat</span>
                                    </a>
                                    <a href="taskboard.html" class="dropdown-item py-1">
                                        <span>TaskBoard</span>
                                    </a>
                                    <a href="calendar.html" class="dropdown-item py-1">
                                        <span>Calendar</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-container">
                        <div id="navbarSupportedContent" class="collapse navbar-collapse">
                            <ul class="navbar-nav">
                                <!-- Search -->
                                <li class="nav-item mt-1 navbar-search text-left dropdown">
                                    <a id="search" href="#" data-toggle="dropdown" class="nav-link dropdown-toggle">
                                        <i class="ft-search blue-grey darken-4"></i>
                                    </a>
                                    <div aria-labelledby="search" class="search dropdown-menu dropdown-menu-right">
                                        <div class="arrow_box_right">
                                            <form role="search" class="navbar-form navbar-right">
                                                <div class="position-relative has-icon-right mb-0">
                                                    <input id="navbar-search" type="text" placeholder="Search" class="form-control" />
                                                    <div class="form-control-position navbar-search-close">
                                                        <i class="ft-x"></i>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>

                                <li class="dropdown nav-item mt-1">
                                    <a id="dropdownBasic2" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-toggle">
                                        <i class="ft-bell blue-grey darken-4"></i>
                                        <span class="notification badge badge-pill badge-danger">4</span>
                                        <p class="d-none">Notifications</p>
                                    </a>
                                    <div class="notification-dropdown dropdown-menu dropdown-menu-right">
                                        <div class="arrow_box_right">
                                            <div class="noti-list">
                                                <a class="dropdown-item noti-container py-2">
                                                    <i class="ft-share info float-left d-block font-medium-4 mt-2 mr-2"></i>
                                                    <span class="noti-wrapper">
                                                        <span class="noti-title line-height-1 d-block text-bold-400 info">
                                                            New Order Received
                                                        </span>
                                                        <span class="noti-text">Lorem ipsum dolor sit ametitaque in, et!</span>
                                                    </span>
                                                </a>
                                                <a class="dropdown-item noti-container py-2">
                                                    <i class="ft-save warning float-left d-block font-medium-4 mt-2 mr-2"></i>
                                                    <span class="noti-wrapper">
                                                        <span class="noti-title line-height-1 d-block text-bold-400 warning">
                                                            New User Registered
                                                        </span>
                                                        <span class="noti-text">Lorem ipsum dolor sit ametitaque in </span>
                                                    </span>
                                                </a>
                                                <a class="dropdown-item noti-container py-2">
                                                    <i class="ft-repeat danger float-left d-block font-medium-4 mt-2 mr-2"></i>
                                                    <span class="noti-wrapper">
                                                        <span class="noti-title line-height-1 d-block text-bold-400 danger">
                                                            New Order Received
                                                        </span>
                                                        <span class="noti-text">Lorem ipsum dolor sit ametest?</span>
                                                    </span>
                                                </a>
                                                <a class="dropdown-item noti-container py-2">
                                                    <i class="ft-shopping-cart success float-left d-block font-medium-4 mt-2 mr-2"></i>
                                                    <span class="noti-wrapper">
                                                        <span class="noti-title line-height-1 d-block text-bold-400 success">
                                                            New Item In Your Cart
                                                        </span>
                                                        <span class="noti-text">Lorem ipsum dolor sit ametnatus aut.</span>
                                                    </span>
                                                </a>
                                                <a class="dropdown-item noti-container py-2">
                                                    <i class="ft-heart info float-left d-block font-medium-4 mt-2 mr-2"></i>
                                                    <span class="noti-wrapper">
                                                        <span class="noti-title line-height-1 d-block text-bold-400 info">
                                                            New Sale
                                                        </span>
                                                        <span class="noti-text">Lorem ipsum dolor sit ametnatus aut.</span>
                                                    </span>
                                                </a>
                                                <a class="dropdown-item noti-container py-2">
                                                    <i class="ft-box warning float-left d-block font-medium-4 mt-2 mr-2"></i>
                                                    <span class="noti-wrapper">
                                                        <span class="noti-title line-height-1 d-block text-bold-400 warning">
                                                            Order Delivered
                                                        </span>
                                                        <span class="noti-text">Lorem ipsum dolor sit ametnatus aut.</span>
                                                    </span>
                                                </a>
                                            </div>
                                            <a class="noti-footer primary text-center d-block border-top border-top-blue-grey border-top-lighten-4 text-bold-400 py-1">
                                                Read All Notifications
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item mt-1 d-none d-lg-block">
                                    <a id="navbar-notification-sidebar" href="javascript:;" class="nav-link position-relative notification-sidebar-toggle">
                                        <i class="icon-equalizer blue-grey darken-4"></i>
                                        <p class="d-none">Notifications Sidebar</p>
                                    </a>
                                </li>
                                <li class="dropdown nav-item mr-0">
                                    <!-- <a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-user-link dropdown-toggle"> -->


                                    <div class="nav-link position-relative dropdown-user-link dropdown-toggle" data-target="#profileCollapse" data-toggle="collapse" aria-expanded="false" aria-controls="profileCollapse">
                                        <span class="avatar avatar-online">
                                            <img id="navbar-avatar" src="<?php Valid::userImg(); ?>" alt="<?php Valid::userShow('uSer_namE'); ?>" />
                                        </span>
                                        <h5 class="pl-1 d-inline"><?php Valid::userShow('uSer_namE'); ?></h5>
                                        <p class="d-none">User Settings</p>
                                        <ul id="profileCollapse" class="shadow-sm mt-2 collapse list-group list-group-flush arrow_box_right position-absolute">
                                            <li class="list-group-item list-group-item-action list-group-item-light">
                                                <a href="user-profile-page.html" class="nav-link font-weight-bold py-1">
                                                    <i class="ft-edit mr-2"></i>
                                                    <span>My Profile</span>
                                                </a>
                                            </li>
                                            <li class="list-group-item list-group-item-action list-group-item-light">
                                                <a href="javascript:;" class="nav-link font-weight-bold py-1">
                                                    <i class="ft-settings mr-2"></i>
                                                    <span>Settings</span>
                                                </a>
                                            </li>
                                            <!-- <div class="dropdown-divider"></div> -->
                                            <li class="list-group-item list-group-item-action list-group-item-light">
                                                <a href="<?php getself::delIndex(); ?>?logout" class="nav-link font-weight-bold py-1">
                                                    <i class="ft-power mr-2"></i>
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- <div aria-labelledby="dropdownBasic3" class="dropdown-menu dropdown-menu-right">
                                                                                                                                                    <div class="arrow_box_right">
                                                                                                                                                        <a href="user-profile-page.html" class="dropdown-item py-1">
                                                                                                                                                            <i class="ft-edit mr-2"></i>
                                                                                                                                                            <span>My Profile</span>
                                                                                                                                                        </a>
                                                                                                                                                        <a href="javascript:;" class="dropdown-item py-1">
                                                                                                                                                            <i class="ft-settings mr-2"></i>
                                                                                                                                                            <span>Settings</span>
                                                                                                                                                        </a>
                                                                                                                                                        <div class="dropdown-divider"></div>
                                                                                                                                                        <a href="<?php getself::delIndex(); ?>?logout" class="dropdown-item">
                                                                                                                                                            <i class="ft-power mr-2"></i>
                                                                                                                                                            <span>Logout</span>
                                                                                                                                                        </a>
                                                                                                                                                    </div>
                                                                                                                                                </div> -->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="main-panel">
                <div class="main-content">
                    <div class="content-wrapper">
                    <?php endif; ?>