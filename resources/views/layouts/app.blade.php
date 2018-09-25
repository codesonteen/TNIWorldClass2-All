<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>OneUI - shared on themelock.com</title>

    <meta name="description" content="OneUI - Admin Dashboard Template & UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/img/favicons/favicon.png">

    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="assets/img/favicons/favicon-192x192.png" sizes="192x192">

    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Web fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="assets/js/plugins/slick/slick.min.css">
    <link rel="stylesheet" href="assets/js/plugins/slick/slick-theme.min.css">

    <!-- OneUI CSS framework -->
    <link rel="stylesheet" id="css-main" href="assets/css/oneui.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>
<!-- Page Container -->
<!--
    Available Classes:

    'sidebar-l'                  Left Sidebar and right Side Overlay
    'sidebar-r'                  Right Sidebar and left Side Overlay
    'sidebar-mini'               Mini hoverable Sidebar (> 991px)
    'sidebar-o'                  Visible Sidebar by default (> 991px)
    'sidebar-o-xs'               Visible Sidebar by default (< 992px)

    'side-overlay-hover'         Hoverable Side Overlay (> 991px)
    'side-overlay-o'             Visible Side Overlay by default (> 991px)

    'side-scroll'                Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (> 991px)

    'header-navbar-fixed'        Enables fixed header
-->
<div id="page-container" class="sidebar-l sidebar-o side-scroll header-navbar-fixed">
    <!-- Side Overlay-->
    <aside id="side-overlay">
        <!-- Side Overlay Scroll Container -->
        <div id="side-overlay-scroll">
            <!-- Side Header -->
            <div class="side-header side-content">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default pull-right" type="button" data-toggle="layout" data-action="side_overlay_close">
                    <i class="fa fa-times"></i>
                </button>
                        <span>
                            <img class="img-avatar img-avatar32" src="assets/img/avatars/avatar10.jpg" alt="">
                            <span class="font-w600 push-10-l">Roger Hart</span>
                        </span>
            </div>
            <!-- END Side Header -->

            <!-- Side Content -->
            <div class="side-content remove-padding-t">
                <!-- Notifications -->
                <div class="block pull-r-l">
                    <div class="block-header bg-gray-lighter">
                        <ul class="block-options">
                            <li>
                                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                            </li>
                            <li>
                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                            </li>
                        </ul>
                        <h3 class="block-title">Recent Activity</h3>
                    </div>
                    <div class="block-content">
                        <!-- Activity List -->
                        <ul class="list list-activity">
                            <li>
                                <i class="si si-wallet text-success"></i>
                                <div class="font-w600">New sale ($15)</div>
                                <div><a href="javascript:void(0)">Admin Template</a></div>
                                <div><small class="text-muted">3 min ago</small></div>
                            </li>
                            <li>
                                <i class="si si-pencil text-info"></i>
                                <div class="font-w600">You edited the file</div>
                                <div><a href="javascript:void(0)"><i class="fa fa-file-text-o"></i> Documentation.doc</a></div>
                                <div><small class="text-muted">15 min ago</small></div>
                            </li>
                            <li>
                                <i class="si si-close text-danger"></i>
                                <div class="font-w600">Project deleted</div>
                                <div><a href="javascript:void(0)">Line Icon Set</a></div>
                                <div><small class="text-muted">4 hours ago</small></div>
                            </li>
                            <li>
                                <i class="si si-wrench text-warning"></i>
                                <div class="font-w600">Core v2.5 is available</div>
                                <div><a href="javascript:void(0)">Update now</a></div>
                                <div><small class="text-muted">6 hours ago</small></div>
                            </li>
                        </ul>
                        <div class="text-center">
                            <small><a href="javascript:void(0)">Load More..</a></small>
                        </div>
                        <!-- END Activity List -->
                    </div>
                </div>
                <!-- END Notifications -->

                <!-- Online Friends -->
                <div class="block pull-r-l">
                    <div class="block-header bg-gray-lighter">
                        <ul class="block-options">
                            <li>
                                <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                            </li>
                            <li>
                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                            </li>
                        </ul>
                        <h3 class="block-title">Online Friends</h3>
                    </div>
                    <div class="block-content block-content-full">
                        <!-- Users Navigation -->
                        <ul class="nav-users">
                            <li>
                                <a href="base_pages_profile.html">
                                    <img class="img-avatar" src="assets/img/avatars/avatar4.jpg" alt="">
                                    <i class="fa fa-circle text-success"></i> Rebecca Gray
                                    <div class="font-w400 text-muted"><small>Copywriter</small></div>
                                </a>
                            </li>
                            <li>
                                <a href="base_pages_profile.html">
                                    <img class="img-avatar" src="assets/img/avatars/avatar10.jpg" alt="">
                                    <i class="fa fa-circle text-success"></i> Dennis Ross
                                    <div class="font-w400 text-muted"><small>Web Developer</small></div>
                                </a>
                            </li>
                            <li>
                                <a href="base_pages_profile.html">
                                    <img class="img-avatar" src="assets/img/avatars/avatar6.jpg" alt="">
                                    <i class="fa fa-circle text-success"></i> Denise Watson
                                    <div class="font-w400 text-muted"><small>Web Designer</small></div>
                                </a>
                            </li>
                            <li>
                                <a href="base_pages_profile.html">
                                    <img class="img-avatar" src="assets/img/avatars/avatar1.jpg" alt="">
                                    <i class="fa fa-circle text-warning"></i> Denise Watson
                                    <div class="font-w400 text-muted"><small>Photographer</small></div>
                                </a>
                            </li>
                            <li>
                                <a href="base_pages_profile.html">
                                    <img class="img-avatar" src="assets/img/avatars/avatar10.jpg" alt="">
                                    <i class="fa fa-circle text-warning"></i> John Parker
                                    <div class="font-w400 text-muted"><small>Graphic Designer</small></div>
                                </a>
                            </li>
                        </ul>
                        <!-- END Users Navigation -->
                    </div>
                </div>
                <!-- END Online Friends -->

                <!-- Quick Settings -->
                <div class="block pull-r-l">
                    <div class="block-header bg-gray-lighter">
                        <ul class="block-options">
                            <li>
                                <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                            </li>
                        </ul>
                        <h3 class="block-title">Quick Settings</h3>
                    </div>
                    <div class="block-content">
                        <!-- Quick Settings Form -->
                        <form class="form-bordered" action="index.html" method="post" onsubmit="return false;">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-8">
                                        <div class="font-s13 font-w600">Online Status</div>
                                        <div class="font-s13 font-w400 text-muted">Show your status to all</div>
                                    </div>
                                    <div class="col-xs-4 text-right">
                                        <label class="css-input switch switch-sm switch-primary push-10-t">
                                            <input type="checkbox"><span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-8">
                                        <div class="font-s13 font-w600">Auto Updates</div>
                                        <div class="font-s13 font-w400 text-muted">Keep up to date</div>
                                    </div>
                                    <div class="col-xs-4 text-right">
                                        <label class="css-input switch switch-sm switch-primary push-10-t">
                                            <input type="checkbox"><span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-8">
                                        <div class="font-s13 font-w600">Notifications</div>
                                        <div class="font-s13 font-w400 text-muted">Do you need them?</div>
                                    </div>
                                    <div class="col-xs-4 text-right">
                                        <label class="css-input switch switch-sm switch-primary push-10-t">
                                            <input type="checkbox" checked><span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-8">
                                        <div class="font-s13 font-w600">API Access</div>
                                        <div class="font-s13 font-w400 text-muted">Enable/Disable access</div>
                                    </div>
                                    <div class="col-xs-4 text-right">
                                        <label class="css-input switch switch-sm switch-primary push-10-t">
                                            <input type="checkbox" checked><span></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- END Quick Settings Form -->
                    </div>
                </div>
                <!-- END Quick Settings -->
            </div>
            <!-- END Side Content -->
        </div>
        <!-- END Side Overlay Scroll Container -->
    </aside>
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <nav id="sidebar">
        <!-- Sidebar Scroll Container -->
        <div id="sidebar-scroll">
            <!-- Sidebar Content -->
            <!-- Adding .sidebar-mini-hide to an element will hide it when the sidebar is in mini mode -->
            <div class="sidebar-content">
                <!-- Side Header -->
                <div class="side-header side-content bg-white-op">
                    <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                    <button class="btn btn-link text-gray pull-right hidden-md hidden-lg" type="button" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times"></i>
                    </button>
                    <!-- Themes functionality initialized in App() -> uiHandleTheme() -->
                    <div class="btn-group pull-right">
                        <button class="btn btn-link text-gray dropdown-toggle" data-toggle="dropdown" type="button">
                            <i class="si si-drop"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right font-s13 sidebar-mini-hide">
                            <li>
                                <a data-toggle="theme" data-theme="default" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-default pull-right"></i> <span class="font-w600">Default</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-amethyst pull-right"></i> <span class="font-w600">Amethyst</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="theme" data-theme="assets/css/themes/city.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-city pull-right"></i> <span class="font-w600">City</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="theme" data-theme="assets/css/themes/flat.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-flat pull-right"></i> <span class="font-w600">Flat</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="theme" data-theme="assets/css/themes/modern.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-modern pull-right"></i> <span class="font-w600">Modern</span>
                                </a>
                            </li>
                            <li>
                                <a data-toggle="theme" data-theme="assets/css/themes/smooth.min.css" tabindex="-1" href="javascript:void(0)">
                                    <i class="fa fa-circle text-smooth pull-right"></i> <span class="font-w600">Smooth</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <a class="h5 text-white" href="index.html">
                        <i class="fa fa-circle-o-notch text-primary"></i> <span class="h4 font-w600 sidebar-mini-hide">ne</span>
                    </a>
                </div>
                <!-- END Side Header -->

                <!-- Side Content -->
                <div class="side-content">
                    <ul class="nav-main">
                        <li>
                            <a class="active" href="index.html"><i class="si si-speedometer"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                        </li>
                        <li class="nav-main-heading"><span class="sidebar-mini-hide">User Interface</span></li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">UI Elements</span></a>
                            <ul>
                                <li>
                                    <a href="base_ui_widgets.html">Widgets</a>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">Blocks</a>
                                    <ul>
                                        <li>
                                            <a href="base_ui_blocks.html">Styles</a>
                                        </li>
                                        <li>
                                            <a href="base_ui_blocks_api.html">Blocks API</a>
                                        </li>
                                        <li>
                                            <a href="base_ui_blocks_draggable.html">Draggable</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="base_ui_grid.html">Grid</a>
                                </li>
                                <li>
                                    <a href="base_ui_typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="base_ui_icons.html">Icons</a>
                                </li>
                                <li>
                                    <a href="base_ui_buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="base_ui_activity.html">Activity</a>
                                </li>
                                <li>
                                    <a href="base_ui_tabs.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="base_ui_tiles.html">Tiles</a>
                                </li>
                                <li>
                                    <a href="base_ui_timeline.html">Timeline</a>
                                </li>
                                <li>
                                    <a href="base_ui_navigation.html">Navigation</a>
                                </li>
                                <li>
                                    <a href="base_ui_modals_tooltips.html">Modals &amp; Tooltips</a>
                                </li>
                                <li>
                                    <a href="base_ui_color_themes.html">Color Themes</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-grid"></i><span class="sidebar-mini-hide">Tables</span></a>
                            <ul>
                                <li>
                                    <a href="base_tables_styles.html">Styles</a>
                                </li>
                                <li>
                                    <a href="base_tables_responsive.html">Responsive</a>
                                </li>
                                <li>
                                    <a href="base_tables_tools.html">Tools</a>
                                </li>
                                <li>
                                    <a href="base_tables_pricing.html">Pricing</a>
                                </li>
                                <li>
                                    <a href="base_tables_datatables.html">DataTables</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-note"></i><span class="sidebar-mini-hide">Forms</span></a>
                            <ul>
                                <li>
                                    <a href="base_forms_premade.html">Pre-made</a>
                                </li>
                                <li>
                                    <a href="base_forms_elements.html">Elements</a>
                                </li>
                                <li>
                                    <a href="base_forms_pickers_more.html">Pickers &amp; More</a>
                                </li>
                                <li>
                                    <a href="base_forms_editors.html">Text Editors</a>
                                </li>
                                <li>
                                    <a href="base_forms_validation.html">Validation</a>
                                </li>
                                <li>
                                    <a href="base_forms_wizard.html">Wizard</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-heading"><span class="sidebar-mini-hide">Develop</span></li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-wrench"></i><span class="sidebar-mini-hide">Components</span></a>
                            <ul>
                                <li>
                                    <a href="base_comp_images.html">Images</a>
                                </li>
                                <li>
                                    <a href="base_comp_charts.html">Charts</a>
                                </li>
                                <li>
                                    <a href="base_comp_calendar.html">Calendar</a>
                                </li>
                                <li>
                                    <a href="base_comp_sliders.html">Sliders</a>
                                </li>
                                <li>
                                    <a href="base_comp_maps.html">Maps</a>
                                </li>
                                <li>
                                    <a href="base_comp_animations.html">Animations</a>
                                </li>
                                <li>
                                    <a href="base_comp_syntax_highlighting.html">Syntax Highlighting</a>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">Gallery</a>
                                    <ul>
                                        <li>
                                            <a href="base_comp_gallery_simple.html">Simple</a>
                                        </li>
                                        <li>
                                            <a href="base_comp_gallery_advanced.html">Advanced</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-magic-wand"></i><span class="sidebar-mini-hide">Layouts</span></a>
                            <ul>
                                <li>
                                    <a href="base_layouts_api.html">Layout API</a>
                                </li>
                                <li>
                                    <a href="base_layouts_default.html">Default</a>
                                </li>
                                <li>
                                    <a href="base_layouts_default_flipped.html">Default Flipped</a>
                                </li>
                                <li>
                                    <a href="base_layouts_header_static.html">Static Header</a>
                                </li>
                                <li>
                                    <a href="base_layouts_sidebar_mini_hoverable.html">Mini Sidebar (Hoverable)</a>
                                </li>
                                <li>
                                    <a href="base_layouts_side_overlay_hoverable.html">Side Overlay (Hoverable)</a>
                                </li>
                                <li>
                                    <a href="base_layouts_side_overlay_open.html">Side Overlay (Open)</a>
                                </li>
                                <li>
                                    <a href="base_layouts_side_native_scrolling.html">Side Native Scrolling</a>
                                </li>
                                <li>
                                    <a href="base_layouts_sidebar_hidden.html">Hidden Sidebar</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i><span class="sidebar-mini-hide">Multi Level Menu</span></a>
                            <ul>
                                <li>
                                    <a href="#">Link 1-1</a>
                                </li>
                                <li>
                                    <a href="#">Link 1-2</a>
                                </li>
                                <li>
                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 2</a>
                                    <ul>
                                        <li>
                                            <a href="#">Link 2-1</a>
                                        </li>
                                        <li>
                                            <a href="#">Link 2-2</a>
                                        </li>
                                        <li>
                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 3</a>
                                            <ul>
                                                <li>
                                                    <a href="#">Link 3-1</a>
                                                </li>
                                                <li>
                                                    <a href="#">Link 3-2</a>
                                                </li>
                                                <li>
                                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 4</a>
                                                    <ul>
                                                        <li>
                                                            <a href="#">Link 4-1</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Link 4-2</a>
                                                        </li>
                                                        <li>
                                                            <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 5</a>
                                                            <ul>
                                                                <li>
                                                                    <a href="#">Link 5-1</a>
                                                                </li>
                                                                <li>
                                                                    <a href="#">Link 5-2</a>
                                                                </li>
                                                                <li>
                                                                    <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 6</a>
                                                                    <ul>
                                                                        <li>
                                                                            <a href="#">Link 6-1</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Link 6-2</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-heading"><span class="sidebar-mini-hide">Pages</span></li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Generic</span></a>
                            <ul>
                                <li>
                                    <a href="base_pages_blank.html">Blank</a>
                                </li>
                                <li>
                                    <a href="base_pages_profile.html">User Profile</a>
                                </li>
                                <li>
                                    <a href="base_pages_search.html">Search Results</a>
                                </li>
                                <li>
                                    <a href="base_pages_invoice.html">Invoice</a>
                                </li>
                                <li>
                                    <a href="base_pages_faq.html">FAQ</a>
                                </li>
                                <li>
                                    <a href="base_pages_inbox.html">Inbox</a>
                                </li>
                                <li>
                                    <a href="base_pages_login.html">Log In</a>
                                </li>
                                <li>
                                    <a href="base_pages_register.html">Register</a>
                                </li>
                                <li>
                                    <a href="base_pages_lock.html">Lock Screen</a>
                                </li>
                                <li>
                                    <a href="base_pages_reminder.html">Password Reminder</a>
                                </li>
                                <li>
                                    <a href="base_pages_coming_soon.html">Coming Soon</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-fire"></i><span class="sidebar-mini-hide">Error Pages</span></a>
                            <ul>
                                <li>
                                    <a href="base_pages_400.html">400</a>
                                </li>
                                <li>
                                    <a href="base_pages_401.html">401</a>
                                </li>
                                <li>
                                    <a href="base_pages_403.html">403</a>
                                </li>
                                <li>
                                    <a href="base_pages_404.html">404</a>
                                </li>
                                <li>
                                    <a href="base_pages_500.html">500</a>
                                </li>
                                <li>
                                    <a href="base_pages_503.html">503</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-heading"><span class="sidebar-mini-hide">Apps</span></li>
                        <li>
                            <a href="frontend_home.html"><i class="si si-rocket"></i><span class="sidebar-mini-hide">Frontend</span></a>
                        </li>
                    </ul>
                </div>
                <!-- END Side Content -->
            </div>
            <!-- Sidebar Content -->
        </div>
        <!-- END Sidebar Scroll Container -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="header-navbar" class="content-mini content-mini-full">
        <!-- Header Navigation Right -->
        <ul class="nav-header pull-right">
            <li>
                <div class="btn-group">
                    <button class="btn btn-default btn-image dropdown-toggle" data-toggle="dropdown" type="button">
                        <img src="assets/img/avatars/avatar10.jpg" alt="Avatar">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-header">Profile</li>
                        <li>
                            <a tabindex="-1" href="base_pages_inbox.html">
                                <i class="si si-envelope-open pull-right"></i>
                                <span class="badge badge-primary pull-right">3</span>Inbox
                            </a>
                        </li>
                        <li>
                            <a tabindex="-1" href="base_pages_profile.html">
                                <i class="si si-user pull-right"></i>
                                <span class="badge badge-success pull-right">1</span>Profile
                            </a>
                        </li>
                        <li>
                            <a tabindex="-1" href="javascript:void(0)">
                                <i class="si si-settings pull-right"></i>Settings
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Actions</li>
                        <li>
                            <a tabindex="-1" href="base_pages_lock.html">
                                <i class="si si-lock pull-right"></i>Lock Account
                            </a>
                        </li>
                        <li>
                            <a tabindex="-1" href="base_pages_login.html">
                                <i class="si si-logout pull-right"></i>Log out
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default" data-toggle="layout" data-action="side_overlay_toggle" type="button">
                    <i class="fa fa-tasks"></i>
                </button>
            </li>
        </ul>
        <!-- END Header Navigation Right -->

        <!-- Header Navigation Left -->
        <ul class="nav-header pull-left">
            <li class="hidden-md hidden-lg">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default" data-toggle="layout" data-action="sidebar_toggle" type="button">
                    <i class="fa fa-navicon"></i>
                </button>
            </li>
            <li class="hidden-xs hidden-sm">
                <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
                <button class="btn btn-default" data-toggle="layout" data-action="sidebar_mini_toggle" type="button">
                    <i class="fa fa-ellipsis-v"></i>
                </button>
            </li>
            <li>
                <!-- Opens the Apps modal found at the bottom of the page, before including JS code -->
                <button class="btn btn-default pull-right" data-toggle="modal" data-target="#apps-modal" type="button">
                    <i class="si si-grid"></i>
                </button>
            </li>
            <li class="visible-xs">
                <!-- Toggle class helper (for .js-header-search below), functionality initialized in App() -> uiToggleClass() -->
                <button class="btn btn-default" data-toggle="class-toggle" data-target=".js-header-search" data-class="header-search-xs-visible" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </li>
            <li class="js-header-search header-search">
                <form class="form-horizontal" action="base_pages_search.html" method="post">
                    <div class="form-material form-material-primary input-group remove-margin-t remove-margin-b">
                        <input class="form-control" type="text" id="base-material-text" name="base-material-text" placeholder="Search..">
                        <span class="input-group-addon"><i class="si si-magnifier"></i></span>
                    </div>
                </form>
            </li>
        </ul>
        <!-- END Header Navigation Left -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">
        @yield('content')
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="content-mini content-mini-full font-s12 bg-gray-lighter clearfix">
        <div class="pull-right">
            Crafted with <i class="fa fa-heart text-city"></i> by <a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
        </div>
        <div class="pull-left">
            <a class="font-w600" href="javascript:void(0)" target="_blank">OneUI 1.0</a> &copy; <span class="js-year-copy"></span>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!-- Apps Modal -->
<!-- Opens from the button in the header -->
<div class="modal fade" id="apps-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-sm modal-dialog modal-dialog-top">
        <div class="modal-content">
            <!-- Apps Block -->
            <div class="block block-themed block-transparent">
                <div class="block-header bg-primary-dark">
                    <ul class="block-options">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="si si-close"></i></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Apps</h3>
                </div>
                <div class="block-content">
                    <div class="row text-center">
                        <div class="col-xs-6">
                            <a class="block block-rounded" href="index.html">
                                <div class="block-content text-white bg-default">
                                    <i class="si si-speedometer fa-2x"></i>
                                    <div class="font-w600 push-15-t push-15">Backend</div>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-6">
                            <a class="block block-rounded" href="frontend_home.html">
                                <div class="block-content text-white bg-modern">
                                    <i class="si si-rocket fa-2x"></i>
                                    <div class="font-w600 push-15-t push-15">Frontend</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Apps Block -->
        </div>
    </div>
</div>
<!-- END Apps Modal -->

<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<script src="assets/js/core/jquery.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/core/jquery.slimscroll.min.js"></script>
<script src="assets/js/core/jquery.scrollLock.min.js"></script>
<script src="assets/js/core/jquery.appear.min.js"></script>
<script src="assets/js/core/jquery.countTo.min.js"></script>
<script src="assets/js/core/jquery.placeholder.min.js"></script>
<script src="assets/js/core/js.cookie.min.js"></script>
<script src="assets/js/app.js"></script>

<!-- Page Plugins -->
<script src="assets/js/plugins/slick/slick.min.js"></script>
<script src="assets/js/plugins/chartjs/Chart.min.js"></script>

<!-- Page JS Code -->
<script src="assets/js/pages/base_pages_dashboard.js"></script>
<script>
    $(function () {
        // Init page helpers (Slick Slider plugin)
        App.initHelpers('slick');
    });
</script>
</body>
</html>