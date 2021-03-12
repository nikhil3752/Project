<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <title>Blog :: View Blogs</title>

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme2.css" />
    @livewireStyles
</head>

<body class="font-montserrat">

    <div class="page-loader-wrapper">
        <div class="loader">
        </div>
    </div>
    <div id="main_content">
        <div id="header_top" class="header_top">
            <div class="container">
                <div class="hleft">
                    <a class="header-brand" href="{{ url('/') }}"><i class="fe fe-command brand-logo"></i></a>
                    <div class="dropdown">
                        <a href="page-search.html" class="nav-link icon"><i class="fa fa-search"></i></a>
                        <a href="app-calendar.html" class="nav-link icon app_inbox"><i class="fa fa-calendar"></i></a>
                        <a href="app-contact.html" class="nav-link icon xs-hide"><i class="fa fa-id-card-o"></i></a>
                        <a href="app-chat.html" class="nav-link icon xs-hide"><i class="fa fa-comments-o"></i></a>
                        <a href="app-filemanager.html" class="nav-link icon app_file xs-hide"><i
                                class="fa fa-folder-o"></i></a>
                    </div>
                </div>
                <div class="hright">
                    <div class="dropdown">
                        <a href="javascript:void(0)" class="nav-link icon theme_btn"><i class="fa fa-paint-brush"
                                data-toggle="tooltip" data-placement="right" title="Themes"></i></a>
                        <a href="javascript:void(0)" class="nav-link icon settingbar"><i class="fa fa-gear fa-spin"
                                data-toggle="tooltip" data-placement="right" title="Settings"></i></a>
                        <a href="javascript:void(0)" class="nav-link user_btn"><img class="avatar"
                                src="assets/images/user.png" alt="" data-toggle="tooltip" data-placement="right"
                                title="User Menu" /></a>
                        <a href="javascript:void(0)" class="nav-link icon menu_toggle"><i
                                class="fa  fa-align-left"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="rightsidebar" class="right_sidebar">
            <a href="javascript:void(0)" class="p-3 settingbar float-right"><i class="fa fa-close"></i></a>
            <ul class="nav nav-tabs" role="tablist">
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane vivify fadeIn active" id="Settings" aria-expanded="true">
                    <div class="mb-4">
                        <h6 class="font-14 font-weight-bold text-muted">Font Style</h6>
                        <div class="custom-controls-stacked font_setting">
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="font" value="font-opensans">
                                <span class="custom-control-label">Open Sans Font</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="font" value="font-montserrat"
                                    checked="">
                                <span class="custom-control-label">Montserrat Google Font</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="font" value="font-roboto">
                                <span class="custom-control-label">Robot Google Font</span>
                            </label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <h6 class="font-14 font-weight-bold text-muted">Dropdown Menu Icon</h6>
                        <div class="custom-controls-stacked arrow_option">
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="marrow" value="arrow-a">
                                <span class="custom-control-label">A</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="marrow" value="arrow-b">
                                <span class="custom-control-label">B</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="marrow" value="arrow-c"
                                    checked="">
                                <span class="custom-control-label">C</span>
                            </label>
                        </div>
                        <h6 class="font-14 font-weight-bold mt-4 text-muted">SubMenu List Icon</h6>
                        <div class="custom-controls-stacked list_option">
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="listicon" value="list-a"
                                    checked="">
                                <span class="custom-control-label">A</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="listicon" value="list-b">
                                <span class="custom-control-label">B</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="listicon" value="list-c">
                                <span class="custom-control-label">C</span>
                            </label>
                        </div>
                    </div>
                    <div>
                        <h6 class="font-14 font-weight-bold mt-4 text-muted">General Settings</h6>
                        <ul class="setting-list list-unstyled mt-1 setting_switch">
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Night Mode</span>
                                    <input type="checkbox" name="custom-switch-checkbox"
                                        class="custom-switch-input btn-darkmode">
                                    <span class="custom-switch-indicator"></span>
                                </label>
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Fix Navbar top</span>
                                    <input type="checkbox" name="custom-switch-checkbox"
                                        class="custom-switch-input btn-fixnavbar">
                                    <span class="custom-switch-indicator"></span>
                                </label>
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Header Dark</span>
                                    <input type="checkbox" name="custom-switch-checkbox"
                                        class="custom-switch-input btn-pageheader" checked="">
                                    <span class="custom-switch-indicator"></span>
                                </label>
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Min Sidebar Dark</span>
                                    <input type="checkbox" name="custom-switch-checkbox"
                                        class="custom-switch-input btn-min_sidebar">
                                    <span class="custom-switch-indicator"></span>
                                </label>
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Sidebar Dark</span>
                                    <input type="checkbox" name="custom-switch-checkbox"
                                        class="custom-switch-input btn-sidebar">
                                    <span class="custom-switch-indicator"></span>
                                </label>
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Icon Color</span>
                                    <input type="checkbox" name="custom-switch-checkbox"
                                        class="custom-switch-input btn-iconcolor">
                                    <span class="custom-switch-indicator"></span>
                                </label>
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Gradient Color</span>
                                    <input type="checkbox" name="custom-switch-checkbox"
                                        class="custom-switch-input btn-gradient">
                                    <span class="custom-switch-indicator"></span>
                                </label>
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Box Shadow</span>
                                    <input type="checkbox" name="custom-switch-checkbox"
                                        class="custom-switch-input btn-boxshadow">
                                    <span class="custom-switch-indicator"></span>
                                </label>
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">RTL Support</span>
                                    <input type="checkbox" name="custom-switch-checkbox"
                                        class="custom-switch-input btn-rtl">
                                    <span class="custom-switch-indicator"></span>
                                </label>
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Box Layout</span>
                                    <input type="checkbox" name="custom-switch-checkbox"
                                        class="custom-switch-input btn-boxlayout">
                                    <span class="custom-switch-indicator"></span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label class="d-block">Storage <span class="float-right">77%</span></label>
                        <div class="progress progress-sm">
                            <div class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="0"
                                aria-valuemax="100" style="width: 77%;"></div>
                        </div>
                        <button type="button" class="btn btn-primary btn-block mt-3">Upgrade Storage</button>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane vivify fadeIn" id="activity" aria-expanded="false">
                    <ul class="new_timeline mt-3">
                        <li>
                            <div class="bullet pink"></div>
                            <div class="time">11:00am</div>
                            <div class="desc">
                                <h3>Attendance</h3>
                                <h4>Computer Class</h4>
                            </div>
                        </li>
                        <li>
                            <div class="bullet pink"></div>
                            <div class="time">11:30am</div>
                            <div class="desc">
                                <h3>Added an interest</h3>
                                <h4>“Volunteer Activities”</h4>
                            </div>
                        </li>
                        <li>
                            <div class="bullet green"></div>
                            <div class="time">12:00pm</div>
                            <div class="desc">
                                <h3>Developer Team</h3>
                                <h4>Hangouts</h4>
                                <ul class="list-unstyled team-info margin-0 p-t-5">
                                    <li><img src="assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                    <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                    <li><img src="assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                    <li><img src="assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="bullet green"></div>
                            <div class="time">2:00pm</div>
                            <div class="desc">
                                <h3>Responded to need</h3>
                                <a href="javascript:void(0)">“In-Kind Opportunity”</a>
                            </div>
                        </li>
                        <li>
                            <div class="bullet orange"></div>
                            <div class="time">1:30pm</div>
                            <div class="desc">
                                <h3>Lunch Break</h3>
                            </div>
                        </li>
                        <li>
                            <div class="bullet green"></div>
                            <div class="time">2:38pm</div>
                            <div class="desc">
                                <h3>Finish</h3>
                                <h4>Go to Home</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="theme_div">
            <div class="card">
                <div class="card-body">
                    <ul class="list-group list-unstyled">
                        <li class="list-group-item mb-2">
                            <p>Default Theme</p>
                            <a href="index.html"><img src="assets/images/themes/default.png" class="img-fluid" /></a>
                        </li>
                        <li class="list-group-item mb-2">
                            <p>Night Mode Theme</p>
                            <a href="../dark/index.html"><img src="assets/images/themes/dark.png"
                                    class="img-fluid" /></a>
                        </li>
                        <li class="list-group-item mb-2">
                            <p>RTL Version</p>
                            <a href="../rtl/index.html"><img src="assets/images/themes/rtl.png" class="img-fluid" /></a>
                        </li>
                        <li class="list-group-item mb-2">
                            <p>Theme Version2</p>
                            <a href="../theme2/index.html"><img src="assets/images/themes/theme2.png"
                                    class="img-fluid" /></a>
                        </li>
                        <li class="list-group-item mb-2">
                            <p>Theme Version3</p>
                            <a href="../theme3/index.html"><img src="assets/images/themes/theme3.png"
                                    class="img-fluid" /></a>
                        </li>
                        <li class="list-group-item mb-2">
                            <p>Theme Version4</p>
                            <a href="../theme4/index.html"><img src="assets/images/themes/theme4.png"
                                    class="img-fluid" /></a>
                        </li>
                        <li class="list-group-item mb-2">
                            <p>Horizontal Version</p>
                            <a href="https://nsdbytes.com/template/epic/horizontal/index.html"><img
                                    src="assets/images/themes/horizontal.png" class="img-fluid" /></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="user_div">
            <h5 class="brand-name mb-4">Blog<a href="javascript:void(0)" class="user_btn"><i
                        class="icon-logout"></i></a></h5>
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <img class="avatar avatar-xl mr-3" src="assets/images/sm/avatar1.jpg" alt="avatar">
                        <div class="media-body">
                            <h5 class="m-0">Sara Hopkins</h5>
                            <p class="text-muted mb-0">Webdeveloper</p>
                            <ul class="social-links list-inline mb-0 mt-2">
                                <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip"
                                        data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip"
                                        data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip"
                                        data-original-title="1234567890"><i class="fa fa-phone"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" title="" data-toggle="tooltip"
                                        data-original-title="@skypename"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Statistics</h3>
                    <div class="card-options">
                        <a href="project-list.html#" class="card-options-collapse" data-toggle="card-collapse"><i
                                class="fe fe-chevron-up"></i></a>
                        <a href="project-list.html#" class="card-options-remove" data-toggle="card-remove"><i
                                class="fe fe-x"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <div class="row">
                            <div class="col-6 pb-3">
                                <label class="mb-0">Balance</label>
                                <h4 class="font-30 font-weight-bold">$545</h4>
                            </div>
                            <div class="col-6 pb-3">
                                <label class="mb-0">Growth</label>
                                <h4 class="font-30 font-weight-bold">27%</h4>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="d-block">Total Income<span class="float-right">77%</span></label>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="77" aria-valuemin="0"
                                aria-valuemax="100" style="width: 77%;"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="d-block">Total Expenses <span class="float-right">50%</span></label>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                aria-valuemax="100" style="width: 50%;"></div>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <label class="d-block">Gross Profit <span class="float-right">23%</span></label>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="23" aria-valuemin="0"
                                aria-valuemax="100" style="width: 23%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Friends</h3>
                    <div class="card-options">
                        <a href="project-list.html#" class="card-options-collapse" data-toggle="card-collapse"><i
                                class="fe fe-chevron-up"></i></a>
                        <a href="project-list.html#" class="card-options-remove" data-toggle="card-remove"><i
                                class="fe fe-x"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="right_chat list-unstyled">
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Donald Gardner</span>
                                        <span class="message">Designer, Blogger</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Wendy Keen</span>
                                        <span class="message">Java Developer</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Matt Rosales</span>
                                        <span class="message">CEO, Epic Theme</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card b-none">
                <ul class="list-group">
                    <li class="list-group-item d-flex">
                        <div class="box-icon sm rounded bg-blue"><i class="fa fa-credit-card"></i> </div>
                        <div class="ml-3">
                            <div>+$29 New sale</div>
                            <a href="javascript:void(0)">Admin Template</a>
                            <div class="text-muted font-12">5 min ago</div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex">
                        <div class="box-icon sm rounded bg-pink"><i class="fa fa-upload"></i> </div>
                        <div class="ml-3">
                            <div>Project Update</div>
                            <a href="javascript:void(0)">New HTML page</a>
                            <div class="text-muted font-12">10 min ago</div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex">
                        <div class="box-icon sm rounded bg-teal"><i class="fa fa-file-word-o"></i> </div>
                        <div class="ml-3">
                            <div>You edited the file</div>
                            <a href="javascript:void(0)">reposrt.doc</a>
                            <div class="text-muted font-12">11 min ago</div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex">
                        <div class="box-icon sm rounded bg-cyan"><i class="fa fa-user"></i> </div>
                        <div class="ml-3">
                            <div>New user</div>
                            <a href="javascript:void(0)">Puffin web - view</a>
                            <div class="text-muted font-12">17 min ago</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div id="left-sidebar" class="sidebar ">
            <h5 class="brand-name">Blog</h5>
            <nav id="left-sidebar-nav" class="sidebar-nav">
                <ul class="metismenu">
                    <li>
                        <a href="{{ url('/') }}"><span>Home</span></a>
                    </li>
                    <li>
                        <a href="{{ url('AddPost') }}"><span>Add New
                                Post</span></a>
                    </li>
                    <li>
                        <a href="{{ url('ViewPost') }}"><span>View Posts</span></a>

                    </li>
            </nav>
        </div>
        <div class="page">
            <div id="page_top" class="section-body top_dark">
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="left">
                            <h1 class="page-title">Posts</h1>
                            <div class="input-group xs-hide">
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </div>
                        <div class="right">
                            <ul class="nav nav-pills">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="project-list.html#"
                                        role="button" aria-haspopup="true" aria-expanded="false">Language</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="project-list.html#"><img class="w20 mr-2"
                                                src="assets/images/flags/us.svg">English</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="project-list.html#"><img class="w20 mr-2"
                                                src="assets/images/flags/es.svg">Spanish</a>
                                        <a class="dropdown-item" href="project-list.html#"><img class="w20 mr-2"
                                                src="assets/images/flags/jp.svg">japanese</a>
                                        <a class="dropdown-item" href="project-list.html#"><img class="w20 mr-2"
                                                src="assets/images/flags/bl.svg">France</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="project-list.html#"
                                        role="button" aria-haspopup="true" aria-expanded="false">Reports</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="project-list.html#"><i
                                                class="dropdown-icon fa fa-file-excel-o"></i> MS Excel</a>
                                        <a class="dropdown-item" href="project-list.html#"><i
                                                class="dropdown-icon fa fa-file-word-o"></i> MS Word</a>
                                        <a class="dropdown-item" href="project-list.html#"><i
                                                class="dropdown-icon fa fa-file-pdf-o"></i> PDF</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="project-list.html#"
                                        role="button" aria-haspopup="true" aria-expanded="false">Project</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="project-list.html#">Graphics Design</a>
                                        <a class="dropdown-item" href="project-list.html#">Angular Admin</a>
                                        <a class="dropdown-item" href="project-list.html#">PSD to HTML</a>
                                        <a class="dropdown-item" href="project-list.html#">iOs App Development</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="project-list.html#">Home Development</a>
                                        <a class="dropdown-item" href="project-list.html#">New Blog post</a>
                                    </div>
                                </li>
                            </ul>
                            <div class="notification d-flex">
                                <div class="dropdown d-flex">
                                    <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1"
                                        data-toggle="dropdown"><i class="fa fa-envelope"></i><span
                                            class="badge badge-success nav-unread"></span></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <ul class="right_chat list-unstyled w250 p-0">
                                            <li class="online">
                                                <a href="javascript:void(0);">
                                                    <div class="media">
                                                        <img class="media-object " src="assets/images/xs/avatar4.jpg"
                                                            alt="">
                                                        <div class="media-body">
                                                            <span class="name">Donald Gardner</span>
                                                            <span class="message">Designer, Blogger</span>
                                                            <span class="badge badge-outline status"></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="online">
                                                <a href="javascript:void(0);">
                                                    <div class="media">
                                                        <img class="media-object " src="assets/images/xs/avatar5.jpg"
                                                            alt="">
                                                        <div class="media-body">
                                                            <span class="name">Wendy Keen</span>
                                                            <span class="message">Java Developer</span>
                                                            <span class="badge badge-outline status"></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="offline">
                                                <a href="javascript:void(0);">
                                                    <div class="media">
                                                        <img class="media-object " src="assets/images/xs/avatar2.jpg"
                                                            alt="">
                                                        <div class="media-body">
                                                            <span class="name">Matt Rosales</span>
                                                            <span class="message">CEO, Epic Theme</span>
                                                            <span class="badge badge-outline status"></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="online">
                                                <a href="javascript:void(0);">
                                                    <div class="media">
                                                        <img class="media-object " src="assets/images/xs/avatar3.jpg"
                                                            alt="">
                                                        <div class="media-body">
                                                            <span class="name">Phillip Smith</span>
                                                            <span class="message">Writter, Mag Editor</span>
                                                            <span class="badge badge-outline status"></span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0)"
                                            class="dropdown-item text-center text-muted-dark readall">Mark all as
                                            read</a>
                                    </div>
                                </div>
                                <div class="dropdown d-flex">
                                    <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1"
                                        data-toggle="dropdown"><i class="fa fa-bell"></i><span
                                            class="badge badge-primary nav-unread"></span></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <ul class="list-unstyled feeds_widget">
                                            <li>
                                                <div class="feeds-left"><i class="fa fa-check"></i></div>
                                                <div class="feeds-body">
                                                    <h4 class="title text-danger">Issue Fixed <small
                                                            class="float-right text-muted">11:05</small></h4>
                                                    <small>WE have fix all Design bug with Responsive</small>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="feeds-left"><i class="fa fa-user"></i></div>
                                                <div class="feeds-body">
                                                    <h4 class="title">New User <small
                                                            class="float-right text-muted">10:45</small></h4>
                                                    <small>I feel great! Thanks team</small>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="feeds-left"><i class="fa fa-thumbs-o-up"></i></div>
                                                <div class="feeds-body">
                                                    <h4 class="title">7 New Feedback <small
                                                            class="float-right text-muted">Today</small></h4>
                                                    <small>It will give a smart finishing to your site</small>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="feeds-left"><i class="fa fa-question-circle"></i></div>
                                                <div class="feeds-body">
                                                    <h4 class="title text-warning">Server Warning <small
                                                            class="float-right text-muted">10:50</small></h4>
                                                    <small>Your connection is not private</small>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="feeds-left"><i class="fa fa-shopping-cart"></i></div>
                                                <div class="feeds-body">
                                                    <h4 class="title">7 New Orders <small
                                                            class="float-right text-muted">11:35</small></h4>
                                                    <small>You received a new oder from Tina.</small>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0)"
                                            class="dropdown-item text-center text-muted-dark readall">Mark all as
                                            read</a>
                                    </div>
                                </div>
                                <div class="dropdown d-flex">
                                    <a class="nav-link icon d-none d-md-flex btn btn-default btn-icon ml-1"
                                        data-toggle="dropdown"><i class="fa fa-user"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="page-profile.html"><i
                                                class="dropdown-icon fe fe-user"></i> Profile</a>
                                        <a class="dropdown-item" href="app-setting.html"><i
                                                class="dropdown-icon fe fe-settings"></i> Settings</a>
                                        <a class="dropdown-item" href="javascript:void(0)"><span
                                                class="float-right"><span class="badge badge-primary">6</span></span><i
                                                class="dropdown-icon fe fe-mail"></i> Inbox</a>
                                        <a class="dropdown-item" href="javascript:void(0)"><i
                                                class="dropdown-icon fe fe-send"></i> Message</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)"><i
                                                class="dropdown-icon fe fe-help-circle"></i> Need help?</a>

                                        @if (Route::has('login'))
                                            @auth
                                                @if(Auth::user()->utype==='ADM')
                                                    <li class="menu-item menu-item-has-children parent">
                                                        <a title="My Account" href="#">My Account({{Auth::user()->name}})<i class="fa fa-angle-down"></i></a>
                                                        <ul class="submenu">
                                                            <li title="Dashboard">Dashboard</li>
                                                        </ul>
                                                    </li>
                                                @else
                                                    <li class="menu-item menu-item-has-children parent">
                                                    <a title="My Account" href="#">My Account({{Auth::user()->name}})<i class="fa fa-angle-down"></i></a>
                                                    <ul class="submenu">
                                                        <li title="Dashboard">Dashboard</li>
                                                    </ul>
                                                    </li>
                                                @endif

                                            @else
                                                <a class="dropdown-item" href="{{route('login')}}"><i class="dropdown-icon fe fe-log-out"></i>
                                                    Sign In</a>
                                                <a class="dropdown-item" href="{{route('register')}}"><i class="dropdown-icon fe fe-log-out"></i>
                                                    Sign Up</a>
                                        
                                            @endif

                                        @endif
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-body mt-3">
                    <div class="container-fluid">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="Project-OnGoing" role="tabpanel">
                                <div class="row">
                                    {{ $slot }}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="Project-UpComing" role="tabpanel">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-striped table-vcenter mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Owner</th>
                                                        <th>Milestone</th>
                                                        <th class="w100">Work</th>
                                                        <th class="w100">Duration</th>
                                                        <th>Priority</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><img src="assets/images/xs/avatar1.jpg" alt="Avatar"
                                                                class="w30 rounded-circle mr-2"> <span>Isidore Dilao</span>
                                                        </td>
                                                        <td>Account receivable</td>
                                                        <td><span>30:00</span></td>
                                                        <td>30:0 hrs</td>
                                                        <td><span class="text-warning">Medium</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/xs/avatar2.jpg" alt="Avatar"
                                                                class="w30 rounded-circle mr-2"> <span>Maricel
                                                                Villalon</span></td>
                                                        <td>Account receivable</td>
                                                        <td><span>68:00</span></td>
                                                        <td>105:0 hrs</td>
                                                        <td><span class="text-danger">High</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/xs/avatar3.jpg" alt="Avatar"
                                                                class="w30 rounded-circle mr-2"> <span>Theresa Wright</span>
                                                        </td>
                                                        <td>Approval site</td>
                                                        <td><span>74:00</span></td>
                                                        <td>89:0 hrs</td>
                                                        <td><span>None</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/xs/avatar4.jpg" alt="Avatar"
                                                                class="w30 rounded-circle mr-2"> <span>Jason Porter</span>
                                                        </td>
                                                        <td>Final touch up</td>
                                                        <td><span>30:00</span></td>
                                                        <td>30:0 hrs</td>
                                                        <td><span>None</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/xs/avatar5.jpg" alt="Avatar"
                                                                class="w30 rounded-circle mr-2"> <span>Annelyn
                                                                Mercado</span></td>
                                                        <td>Account receivable</td>
                                                        <td><span>30:00</span></td>
                                                        <td>30:0 hrs</td>
                                                        <td><span>None</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/xs/avatar6.jpg" alt="Avatar"
                                                                class="w30 rounded-circle mr-2"> <span>Sean Black</span>
                                                        </td>
                                                        <td>Basement slab preparation</td>
                                                        <td><span>88:00</span></td>
                                                        <td>88:0 hrs</td>
                                                        <td><span>None</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/xs/avatar7.jpg" alt="Avatar"
                                                                class="w30 rounded-circle mr-2"> <span>Scott Ortega</span>
                                                        </td>
                                                        <td>Account receivable</td>
                                                        <td><span>56:00</span></td>
                                                        <td>125:0 hrs</td>
                                                        <td><span class="text-warning">Medium</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><img src="assets/images/xs/avatar8.jpg" alt="Avatar"
                                                                class="w30 rounded-circle mr-2"> <span>David Wallace</span>
                                                        </td>
                                                        <td>Account receivable</td>
                                                        <td><span>30:00</span></td>
                                                        <td>30:0 hrs</td>
                                                        <td><span>None</span></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-body">
                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    Copyright © 2019 <a
                                        href="https://themeforest.net/user/puffintheme/portfolio">PuffinTheme</a>.
                                </div>
                                <div class="col-md-6 col-sm-12 text-md-right">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item"><a
                                                href="https://nsdbytes.com/template/epic/doc/index.html">Documentation</a>
                                        </li>
                                        <li class="list-inline-item"><a href="javascript:void(0)">FAQ</a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)"
                                                class="btn btn-outline-primary btn-icon">Buy Now</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        <script src="assets/bundles/lib.vendor.bundle.js"></script>
        <script src="assets/js/core.js"></script>
        @livewireScripts
    </body>

    </html>
