<?php require_once INCLUDES.'adm_header.php'; ?>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Admin Pro</p>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">
                    <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="<?php echo IMAGES.'logo-icon.png' ?>" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="<?php echo IMAGES.'logo-light-icon.png' ?>" alt="homepage" class="light-logo" />
                        </b>
                    <!--End Logo icon -->
                    <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="<?php echo IMAGES.'logo-text.png' ?>" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="<?php echo IMAGES.'logo-light-text.png' ?>" class="light-logo" alt="homepage" /></span> </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto">
                    <!-- This is  -->
                    <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>

                </ul>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <ul class="navbar-nav my-lg-0">
                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->
                    <li class="nav-item hidden-xs-down search-box"> <a class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                        <form class="app-search">
                            <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                    </li>
                    <!-- ============================================================== -->
                    <!-- Comment -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                            <ul>
                                <li>
                                    <div class="drop-title">Notifications</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Comment -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Messages -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-email"></i>
                            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                        </a>
                        <div class="dropdown-menu mailbox dropdown-menu-right animated bounceInDown" aria-labelledby="2">
                            <ul>
                                <li>
                                    <div class="drop-title">You have 4 new messages</div>
                                </li>
                                <li>
                                    <div class="message-center">
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="<?php echo IMAGES.'users/1.jpg' ?>" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="<?php echo IMAGES.'users/2.jpg' ?>" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="<?php echo IMAGES.'users/3.jpg' ?>" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                        </a>
                                        <!-- Message -->
                                        <a href="#">
                                            <div class="user-img"> <img src="<?php echo IMAGES.'users/4.jpg' ?>" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End Messages -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- mega menu -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-view-grid"></i></a>
                        <div class="dropdown-menu animated bounceInDown">
                            <ul class="mega-dropdown-menu row">
                                <li class="col-lg-3 col-xlg-2 m-b-30">
                                    <h4 class="m-b-20">CAROUSEL</h4>
                                    <!-- CAROUSEL -->
                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <div class="container"> <img class="d-block img-fluid" src="<?php echo IMAGES.'big/img1.jpg' ?>" alt="First slide"></div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="container"><img class="d-block img-fluid" src="<?php echo IMAGES.'big/img2.jpg' ?>" alt="Second slide"></div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="container"><img class="d-block img-fluid" src="<?php echo IMAGES.'big/img3.jpg' ?>" alt="Third slide"></div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                    </div>
                                    <!-- End CAROUSEL -->
                                </li>
                                <li class="col-lg-3 m-b-30">
                                    <h4 class="m-b-20">ACCORDION</h4>
                                    <!-- Accordian -->
                                    <div id="accordion" class="nav-accordion" role="tablist" aria-multiselectable="true">
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingOne">
                                                <h5 class="mb-0">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                  Collapsible Group Item #1
                                                </a>
                                                </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high. </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                  Collapsible Group Item #2
                                                </a>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingThree">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                  Collapsible Group Item #3
                                                </a>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                                <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-lg-3  m-b-30">
                                    <h4 class="m-b-20">CONTACT US</h4>
                                    <!-- Contact -->
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Enter email"> </div>
                                        <div class="form-group">
                                            <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-info">Submit</button>
                                    </form>
                                </li>
                                <li class="col-lg-3 col-xlg-4 m-b-30">
                                    <h4 class="m-b-20">List style</h4>
                                    <!-- List style -->
                                    <ul class="list-style-none">
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> You can give link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Give link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another Give link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Forth link</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another fifth link</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- End mega menu -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Language -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="flag-icon flag-icon-us"></i></a>
                        <div class="dropdown-menu dropdown-menu-right animated bounceInDown"> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-in"></i> India</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a> <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> China</a>                            <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> Dutch</a> </div>
                    </li>
                    <!-- ============================================================== -->
                    <!-- Profile -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="<?php echo IMAGES.'users/1.jpg' ?>" alt="user" class="profile-pic" /></a>
                        <div class="dropdown-menu dropdown-menu-right animated flipInY">
                            <ul class="dropdown-user">
                                <li>
                                    <div class="dw-user-box">
                                        <div class="u-img"><img src="<?php echo IMAGES.'users/1.jpg' ?>" alt="user"></div>
                                        <div class="u-text">
                                            <h4>Steave Jobs</h4>
                                            <p class="text-muted">varun@gmail.com</p><a href="pages-profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                    </div>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                                <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="http://192.241.133.238/sistemas/ciis/SoftwareCiis/login"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="user-profile">
                        <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <img src="<?php echo IMAGES.'users/profile.png' ?>" alt="user" /><span class="hide-menu">Steave Jobs </span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="javascript:void()">My Profile </a></li>
                            <li><a href="javascript:void()">My Balance</a></li>
                            <li><a href="javascript:void()">Inbox</a></li>
                            <li><a href="javascript:void()">Account Setting</a></li>
                            <li><a href="http://192.241.133.238/sistemas/ciis/SoftwareCiis/login">Logout</a></li>
                        </ul>
                    </li>
                    <li class="nav-devider"></li>
                    <li class="nav-small-cap">PERSONAL</li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard <span class="label label-rouded label-themecolor pull-right">4</span></span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="index.html">Minimal </a></li>
                            <li><a href="index2.html">Analytical</a></li>
                            <li><a href="index3.html">Demographical</a></li>
                            <li><a href="index4.html">Modern</a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-bullseye"></i><span class="hide-menu">Apps</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="app-calendar.html">Calendar</a></li>
                            <li><a href="app-chat.html">Chat app</a></li>
                            <li><a href="app-ticket.html">Support Ticket</a></li>
                            <li><a href="app-contact.html">Contact / Employee</a></li>
                            <li><a href="app-contact2.html">Contact Grid</a></li>
                            <li><a href="app-contact-detail.html">Contact Detail</a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-email"></i><span class="hide-menu">Inbox</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="app-email.html">Mailbox</a></li>
                            <li><a href="app-email-detail.html">Mailbox Detail</a></li>
                            <li><a href="app-compose.html">Compose Mail</a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Ui Elements <span class="label label-rouded label-danger pull-right">25</span></span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="ui-cards.html">Cards</a></li>
                            <li><a href="ui-user-card.html">User Cards</a></li>
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-modals.html">Modals</a></li>
                            <li><a href="ui-tab.html">Tab</a></li>
                            <li><a href="ui-tooltip-popover.html">Tooltip &amp; Popover</a></li>
                            <li><a href="ui-tooltip-stylish.html">Tooltip stylish</a></li>
                            <li><a href="ui-sweetalert.html">Sweet Alert</a></li>
                            <li><a href="ui-notification.html">Notification</a></li>
                            <li><a href="ui-progressbar.html">Progressbar</a></li>
                            <li><a href="ui-nestable.html">Nestable</a></li>
                            <li><a href="ui-range-slider.html">Range slider</a></li>
                            <li><a href="ui-timeline.html">Timeline</a></li>
                            <li><a href="ui-typography.html">Typography</a></li>
                            <li><a href="ui-horizontal-timeline.html">Horizontal Timeline</a></li>
                            <li><a href="ui-session-timeout.html">Session Timeout</a></li>
                            <li><a href="ui-session-ideal-timeout.html">Session Ideal Timeout</a></li>
                            <li><a href="ui-bootstrap.html">Bootstrap Ui</a></li>
                            <li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
                            <li><a href="ui-bootstrap-switch.html">Bootstrap Switch</a></li>
                            <li><a href="ui-list-media.html">List Media</a></li>
                            <li><a href="ui-ribbons.html">Ribbons</a></li>
                            <li><a href="ui-grid.html">Grid</a></li>
                            <li><a href="ui-carousel.html">Carousel</a></li>
                            <li><a href="ui-date-paginator.html">Date-paginator</a></li>
                            <li><a href="ui-dragable-portlet.html">Dragable Portlet</a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap">FORMS, TABLE &amp; WIDGETS</li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Forms</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="form-basic.html">Basic Forms</a></li>
                            <li><a href="form-layout.html">Form Layouts</a></li>
                            <li><a href="form-addons.html">Form Addons</a></li>
                            <li><a href="form-material.html">Form Material</a></li>
                            <li><a href="form-float-input.html">Floating Lable</a></li>
                            <li><a href="form-pickers.html">Form Pickers</a></li>
                            <li><a href="form-upload.html">File Upload</a></li>
                            <li><a href="form-mask.html">Form Mask</a></li>
                            <li><a href="form-validation.html">Form Validation</a></li>
                            <li><a href="form-dropzone.html">File Dropzone</a></li>
                            <li><a href="form-icheck.html">Icheck control</a></li>
                            <li><a href="form-img-cropper.html">Image Cropper</a></li>
                            <li><a href="form-bootstrapwysihtml5.html">HTML5 Editor</a></li>
                            <li><a href="form-typehead.html">Form Typehead</a></li>
                            <li><a href="form-wizard.html">Form Wizard</a></li>
                            <li><a href="form-xeditable.html">Xeditable Editor</a></li>
                            <li><a href="form-summernote.html">Summernote Editor</a></li>
                            <li><a href="form-tinymce.html">Tinymce Editor</a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Tables</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="table-basic.html">Basic Tables</a></li>
                            <li><a href="table-layout.html">Table Layouts</a></li>
                            <li><a href="table-data-table.html">Data Tables</a></li>
                            <li><a href="table-footable.html">Footable</a></li>
                            <li><a href="table-jsgrid.html">Js Grid Table</a></li>
                            <li><a href="table-responsive.html">Responsive Table</a></li>
                            <li><a href="table-bootstrap.html">Bootstrap Tables</a></li>
                            <li><a href="table-editable-table.html">Editable Table</a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-widgets"></i><span class="hide-menu">Widgets</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="widget-data.html">Data Widgets</a></li>
                            <li><a href="widget-apps.html">Apps Widgets</a></li>
                            <li><a href="widget-charts.html">Charts Widgets</a></li>

                        </ul>
                    </li>
                    <li class="nav-small-cap">EXTRA COMPONENTS</li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-multiple"></i><span class="hide-menu">Page Layout</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="layout-single-column.html">1 Column</a></li>
                            <li><a href="layout-fix-header.html">Fix header</a></li>
                            <li><a href="layout-fix-sidebar.html">Fix sidebar</a></li>
                            <li><a href="layout-fix-header-sidebar.html">Fixe header &amp; Sidebar</a></li>
                            <li><a href="layout-boxed.html">Boxed Layout</a></li>
                            <li><a href="layout-logo-center.html">Logo in Center</a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Sample Pages <span class="label label-rouded label-success pull-right">25</span></span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="starter-kit.html">Starter Kit</a></li>
                            <li><a href="pages-blank.html">Blank page</a></li>
                            <li><a href="#" class="has-arrow">Authentication <span class="label label-rounded label-success pull-right">6</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="pages-login.html">Login 1</a></li>
                                    <li><a href="pages-login-2.html">Login 2</a></li>
                                    <li><a href="pages-register.html">Register</a></li>
                                    <li><a href="pages-register2.html">Register 2</a></li>
                                    <li><a href="pages-lockscreen.html">Lockscreen</a></li>
                                    <li><a href="pages-recover-password.html">Recover password</a></li>
                                </ul>
                            </li>
                            <li><a href="pages-profile.html">Profile page</a></li>
                            <li><a href="pages-animation.html">Animation</a></li>
                            <li><a href="pages-fix-innersidebar.html">Sticky Left sidebar</a></li>
                            <li><a href="pages-fix-inner-right-sidebar.html">Sticky Right sidebar</a></li>
                            <li><a href="pages-invoice.html">Invoice</a></li>
                            <li><a href="pages-treeview.html">Treeview</a></li>
                            <li><a href="pages-utility-classes.html">Helper Classes</a></li>
                            <li><a href="pages-search-result.html">Search result</a></li>
                            <li><a href="pages-scroll.html">Scrollbar</a></li>
                            <li><a href="pages-pricing.html">Pricing</a></li>
                            <li><a href="pages-lightbox-popup.html">Lighbox popup</a></li>
                            <li><a href="pages-gallery.html">Gallery</a></li>
                            <li><a href="pages-faq.html">Faqs</a></li>
                            <li><a href="#" class="has-arrow">Error Pages</a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="pages-error-400.html">400</a></li>
                                    <li><a href="pages-error-403.html">403</a></li>
                                    <li><a href="pages-error-404.html">404</a></li>
                                    <li><a href="pages-error-500.html">500</a></li>
                                    <li><a href="pages-error-503.html">503</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-file-chart"></i><span class="hide-menu">Charts</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="chart-morris.html">Morris Chart</a></li>
                            <li><a href="chart-chartist.html">Chartis Chart</a></li>
                            <li><a href="chart-echart.html">Echarts</a></li>
                            <li><a href="chart-flot.html">Flot Chart</a></li>
                            <li><a href="chart-knob.html">Knob Chart</a></li>
                            <li><a href="chart-chart-js.html">Chartjs</a></li>
                            <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                            <li><a href="chart-extra-chart.html">Extra chart</a></li>
                            <li><a href="chart-peity.html">Peity Charts</a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-brush"></i><span class="hide-menu">Icons</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="icon-material.html">Material Icons</a></li>
                            <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                            <li><a href="icon-themify.html">Themify Icons</a></li>
                            <li><a href="icon-linea.html">Linea Icons</a></li>
                            <li><a href="icon-weather.html">Weather Icons</a></li>
                            <li><a href="icon-simple-lineicon.html">Simple Lineicons</a></li>
                            <li><a href="icon-flag.html">Flag Icons</a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-map-marker"></i><span class="hide-menu">Maps</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="map-google.html">Google Maps</a></li>
                            <li><a href="map-vector.html">Vector Maps</a></li>
                        </ul>
                    </li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">Multi level dd</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="#">item 1.1</a></li>
                            <li><a href="#">item 1.2</a></li>
                            <li> <a class="has-arrow" href="#" aria-expanded="false">Menu 1.3</a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="#">item 1.3.1</a></li>
                                    <li><a href="#">item 1.3.2</a></li>
                                    <li><a href="#">item 1.3.3</a></li>
                                    <li><a href="#">item 1.3.4</a></li>
                                </ul>
                            </li>
                            <li><a href="#">item 1.4</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Dashboard 2</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard 2</li>
                    </ol>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Stats box -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex no-block">
                                <div class="m-r-20 align-self-center"><span class="lstick m-r-20"></span>
                                <img src="<?php echo IMAGES.'icon/income.png' ?>" alt="Income" /></div>
                                <div class="align-self-center">
                                    <h6 class="text-muted m-t-10 m-b-0">Total Income</h6>
                                    <h2 class="m-t-0">953,000</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex no-block">
                                <div class="m-r-20 align-self-center"><span class="lstick m-r-20"></span>
                                <img src="<?php echo IMAGES.'icon/expense.png' ?>" alt="Income" /></div>
                                <div class="align-self-center">
                                    <h6 class="text-muted m-t-10 m-b-0">Total Expense</h6>
                                    <h2 class="m-t-0">236,000</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex no-block">
                                <div class="m-r-20 align-self-center"><span class="lstick m-r-20"></span>
                                <img src="<?php echo IMAGES.'icon/assets.png' ?>" alt="Income" /></div>
                                <div class="align-self-center">
                                    <h6 class="text-muted m-t-10 m-b-0">Total Assets</h6>
                                    <h2 class="m-t-0">987,563</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex no-block">
                                <div class="m-r-20 align-self-center"><span class="lstick m-r-20"></span>
                                <img src="<?php echo IMAGES.'icon/staff.png' ?>" alt="Income" /></div>
                                <div class="align-self-center">
                                    <h6 class="text-muted m-t-10 m-b-0">Total Staff</h6>
                                    <h2 class="m-t-0">987,563</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Sales overview chart -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div>
                                    <h3 class="card-title m-b-5"><span class="lstick"></span>Sales Overview </h3>
                                </div>
                                <div class="ml-auto">
                                    <select class="custom-select b-0">
                                            <option selected="">January 2017</option>
                                            <option value="1">February 2017</option>
                                            <option value="2">March 2017</option>
                                            <option value="3">April 2017</option>
                                        </select>
                                </div>
                            </div>
                        </div>
                        <div class="bg-theme stats-bar">
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <div class="p-20 active">
                                        <h6 class="text-white">Total Sales</h6>
                                        <h3 class="text-white m-b-0">$10,345</h3>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="p-20">
                                        <h6 class="text-white">This Month</h6>
                                        <h3 class="text-white m-b-0">$7,589</h3>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="p-20">
                                        <h6 class="text-white">This Week</h6>
                                        <h3 class="text-white m-b-0">$1,476</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="sales-overview2" class="p-relative" style="height:360px;"></div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- visit charts-->
                <!-- ============================================================== -->
                <div class="col-lg-3 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><span class="lstick"></span>Visit Separation</h4>
                            <div id="visitor" style="height:290px; width:100%;"></div>
                            <table class="table vm font-14">
                                <tr>
                                    <td class="b-0">Mobile</td>
                                    <td class="text-right font-medium b-0">38.5%</td>
                                </tr>
                                <tr>
                                    <td>Tablet</td>
                                    <td class="text-right font-medium">30.8%</td>
                                </tr>
                                <tr>
                                    <td>Desktop</td>
                                    <td class="text-right font-medium">7.7%</td>
                                </tr>
                                <tr>
                                    <td>Other</td>
                                    <td class="text-right font-medium">23.1%</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Projects of the month -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div>
                                    <h4 class="card-title"><span class="lstick"></span>Projects of the Month</h4>
                                </div>
                                <div class="ml-auto">
                                    <select class="custom-select b-0">
                                            <option selected="">January 2017</option>
                                            <option value="1">February 2017</option>
                                            <option value="2">March 2017</option>
                                            <option value="3">April 2017</option>
                                        </select>
                                </div>
                            </div>
                            <div class="table-responsive m-t-20">
                                <table class="table vm no-th-brd no-wrap pro-of-month">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Assigned</th>
                                            <th>Name</th>
                                            <th>Priority</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="width:50px;"><span class="round">
                                            <img src="<?php echo IMAGES.'users/1.jpg' ?>" alt="user" width="50"></span></td>
                                            <td>
                                                <h6>Sunil Joshi</h6><small class="text-muted">Web Designer</small></td>
                                            <td>Elite Admin</td>
                                            <td><span class="label label-success label-rounded">Low</span></td>
                                        </tr>
                                        <tr class="active">
                                            <td><span class="round">
                                            <img src="<?php echo IMAGES.'users/2.jpg' ?>" alt="user" width="50"></span></td>
                                            <td>
                                                <h6>Andrew</h6><small class="text-muted">Project Manager</small></td>
                                            <td>Real Homes</td>
                                            <td><span class="label label-info label-rounded">Medium</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="round round-success">
                                            <img src="<?php echo IMAGES.'users/3.jpg' ?>" alt="user" width="50"></span></td>
                                            <td>
                                                <h6>Bhavesh patel</h6><small class="text-muted">Developer</small></td>
                                            <td>MedicalPro Theme</td>
                                            <td><span class="label label-primary label-rounded">High</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="round round-primary">
                                            <img src="<?php echo IMAGES.'users/4.jpg' ?>" alt="user" width="50"></span></td>
                                            <td>
                                                <h6>Nirav Joshi</h6><small class="text-muted">Frontend Eng</small></td>
                                            <td>Elite Admin</td>
                                            <td><span class="label label-danger label-rounded">Low</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="round round-warning">
                                            <img src="<?php echo IMAGES.'users/5.jpg' ?>" alt="user" width="50"></span></td>
                                            <td>
                                                <h6>Micheal Doe</h6><small class="text-muted">Content Writer</small></td>
                                            <td>Helping Hands</td>
                                            <td><span class="label label-success label-rounded">High</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="round round-danger">
                                            <img src="<?php echo IMAGES.'users/6.jpg' ?>" alt="user" width="50"></span></td>
                                            <td>
                                                <h6>Johnathan</h6><small class="text-muted">Graphic</small></td>
                                            <td>Digital Agency</td>
                                            <td><span class="label label-info label-rounded">High</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="round round-primary">
                                            <img src="<?php echo IMAGES.'users/4.jpg' ?>" alt="user" width="50"></span></td>
                                            <td>
                                                <h6>Nirav Joshi</h6><small class="text-muted">Frontend Eng</small></td>
                                            <td>Elite Admin</td>
                                            <td><span class="label label-danger label-rounded">Low</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Activity widget find scss into widget folder-->
                <!-- ============================================================== -->
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <h4 class="card-title"><span class="lstick"></span>Activity</h4>
                                <!-- <span class="badge badge-success">9</span> -->
                                <div class="btn-group ml-auto m-t-10">
                                    <a href="JavaScript:void(0)" class="icon-options-vertical link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="activity-box">
                            <div class="card-body">
                                <!-- Activity item-->
                                <div class="activity-item">
                                    <div class="round m-r-20">
                                    <img src="<?php echo IMAGES.'users/2.jpg' ?>" alt="user" width="50" /></div>
                                    <div class="m-t-10">
                                        <h5 class="m-b-0 font-medium">Mark Freeman <span class="text-muted font-14 m-l-10">| &nbsp; 6:30 PM</span></h5>
                                        <h6 class="text-muted">uploaded this file </h6>
                                        <table class="table vm b-0 m-b-0">
                                            <tr>
                                                <td class="m-r-10 b-0">
                                                <img src="<?php echo IMAGES.'icon/zip.pn' ?>g" alt="user" /></td>
                                                <td class="b-0">
                                                    <h5 class="m-b-0 font-medium ">Homepage.zip</h5>
                                                    <h6>54 MB</h6>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- Activity item-->
                                <!-- Activity item-->
                                <div class="activity-item">
                                    <div class="round m-r-20"><img src="<?php echo IMAGES.'users/3.jpg' ?>" alt="user" width="50" /></div>
                                    <div class="m-t-10">
                                        <h5 class="m-b-5 font-medium">Emma Smith <span class="text-muted font-14 m-l-10">| &nbsp; 6:30 PM</span></h5>
                                        <h6 class="text-muted">joined projectname, and invited <a href="javascript:void(0)">@maxcage, @maxcage, @maxcage, @maxcage, @maxcage,+3</a></h6>
                                        <span class="image-list m-t-20">
                                                <a href="javascript:void(0)"><img src="<?php echo IMAGES.'users/1.jpg' ?>" class="img-circle" alt="user" width="50"></a>
                                                <a href="javascript:void(0)"><img src="<?php echo IMAGES.'users/2.jpg' ?>" class="img-circle" alt="user" width="50"></a>
                                                <a href="javascript:void(0)"><span class="round round-warning">C</span></a>
                                        <a href="javascript:void(0)"><span class="round round-danger">D</span></a>
                                        <a href="javascript:void(0)">+3</a>
                                        </span>
                                    </div>
                                </div>
                                <!-- Activity item-->
                                <!-- Activity item-->
                                <div class="activity-item">
                                    <div class="round m-r-20"><img src="<?php echo IMAGES.'users/4.jpg' ?>" alt="user" width="50" /></div>
                                    <div class="m-t-10">
                                        <h5 class="m-b-0 font-medium">David R. Jones <span class="text-muted font-14 m-l-10">| &nbsp; 9:30 PM, July 13th</span></h5>
                                        <h6 class="text-muted">uploaded this file </h6>
                                        <span>
                                                <a href="javascript:void(0)" class="m-r-10"><img src="<?php echo IMAGES.'big/img1.jp' ?>g" alt="user" width="60"></a>
                                                <a href="javascript:void(0)" class="m-r-10"><img src="<?php echo IMAGES.'big/img2.jp' ?>g" alt="user" width="60"></a>
                                            </span>
                                    </div>
                                </div>
                                <!-- Activity item-->
                                <!-- Activity item-->
                                <div class="activity-item">
                                    <div class="round m-r-20"><img src="<?php echo IMAGES.'users/6.jpg' ?>" alt="user" width="50" /></div>
                                    <div class="m-t-10">
                                        <h5 class="m-b-5 font-medium">David R. Jones <span class="text-muted font-14 m-l-10">| &nbsp; 6:30 PM</span></h5>
                                        <h6 class="text-muted">Commented on<a href="javascript:void(0)">Test Project</a></h6>
                                        <p class="m-b-0">It has survived not only five centuries, but also the leap into unchanged.</p>
                                    </div>
                                </div>
                                <!-- Activity item-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Blog and website visit -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-4 col-xlg-3">
                    <div class="card">
                        <img class="card-img-top img-responsive" src="<?php echo IMAGES.'big/img1.jpg' ?>" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="font-normal">Business development of rules 2017</h3>
                            <span class="label label-info label-rounded">Technology</span>
                            <p class="m-b-0 m-t-20">Titudin venenatis ipsum aciat. Vestibulum ullamcorper quam. nenatis ipsum ac feugiat. Ibulum ullamcorper</p>
                            <div class="d-flex m-t-20">
                                <button class="btn p-l-0 btn-link ">Read more</button>
                                <div class="ml-auto align-self-center">
                                    <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart-o"></i></a>
                                    <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xlg-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <h4 class="card-title"><span class="lstick"></span>Website Visit</h4>
                                <ul class="list-inline m-b-0 ml-auto">
                                    <li>
                                        <h6 class="text-muted text-success"><i class="fa fa-circle font-10 m-r-10 "></i>Site A view</h6>
                                    </li>
                                    <li>
                                        <h6 class="text-muted text-info"><i class="fa fa-circle font-10 m-r-10"></i>Site B view</h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="text-center m-t-30">
                                <div class="btn-group " role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-sm btn-secondary">PAGEVIEWS</button>
                                    <button type="button" class="btn btn-sm btn-secondary">REFERRALS</button>
                                </div>
                            </div>
                            <div class="website-visitor p-relative m-t-30" style="width:100%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Twitter facebook and mail boxes -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="card bg-info text-white">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="stats">
                                    <h1 class="text-white">3257+</h1>
                                    <h6 class="text-white">Twitter Followers</h6>
                                    <button class="btn btn-rounded btn-outline btn-light m-t-10 font-14">Check list</button>
                                </div>
                                <div class="stats-icon text-right ml-auto"><i class="fa fa-twitter display-5 op-3 text-dark"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-primary text-white">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="stats">
                                    <h1 class="text-white">6509+</h1>
                                    <h6 class="text-white">Facebook Likes</h6>
                                    <button class="btn btn-rounded btn-outline btn-light m-t-10 font-14">Check list</button>
                                </div>
                                <div class="stats-icon text-right ml-auto"><i class="fa fa-facebook display-5 op-3 text-dark"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card bg-success text-white">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="stats">
                                    <h1 class="text-white">9062+</h1>
                                    <h6 class="text-white">Subscribe</h6>
                                    <button class="btn btn-rounded btn-outline btn-light m-t-10 font-14">Check list</button>
                                </div>
                                <div class="stats-icon text-right ml-auto"><i class="fa fa-envelope display-5 op-3 text-dark"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Tod do and profile -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-6 col-xlg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div>
                                    <h4 class="card-title"><span class="lstick"></span>To Do list</h4>
                                </div>
                                <div class="ml-auto">
                                    <button class="pull-right btn btn-circle btn-success" data-toggle="modal" data-target="#myModal"><i class="ti-plus"></i></button>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- To do list widgets -->
                            <!-- ============================================================== -->
                            <div class="to-do-widget m-t-20">
                                <!-- .modal for add task -->
                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Add Task</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group">
                                                        <label>Task name</label>
                                                        <input type="text" class="form-control" placeholder="Enter Task Name"> </div>
                                                    <div class="form-group">
                                                        <label>Assign to</label>
                                                        <select class="custom-select form-control pull-right">
                                                                <option selected="">Sachin</option>
                                                                <option value="1">Sehwag</option>
                                                                <option value="2">Pritam</option>
                                                                <option value="3">Alia</option>
                                                                <option value="4">Varun</option>
                                                            </select>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Submit</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->
                                <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">
                                    <li class="list-group-item" data-role="task">
                                        <div class="checkbox checkbox-info m-b-10">
                                            <input type="checkbox" id="inputSchedule" name="inputCheckboxesSchedule">
                                            <label for="inputSchedule" class=""> <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</span> <span class="label label-rounded label-danger pull-right">Today</span></label>
                                        </div>
                                        <ul class="assignedto">
                                            <li><img src="<?php echo IMAGES.'users/1.jpg' ?>" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Steave"></li>
                                            <li><img src="<?php echo IMAGES.'users/2.jpg' ?>" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Jessica"></li>
                                            <li><img src="<?php echo IMAGES.'users/3.jpg' ?>" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                            <li><img src="<?php echo IMAGES.'users/4.jpg' ?>" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item" data-role="task">
                                        <div class="checkbox checkbox-info">
                                            <input type="checkbox" id="inputBook" name="inputCheckboxesBook">
                                            <label for="inputBook" class=""> <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</span><span class="label label-primary label-rounded pull-right">1 week </span> </label>
                                        </div>
                                        <div class="item-date"> 26 jun 2017</div>
                                    </li>
                                    <li class="list-group-item" data-role="task">
                                        <div class="checkbox checkbox-info">
                                            <input type="checkbox" id="inputCall" name="inputCheckboxesCall">
                                            <label for="inputCall" class=""> <span>Give Purchase report to</span> <span class="label label-info label-rounded pull-right">Yesterday</span> </label>
                                        </div>
                                        <ul class="assignedto">
                                            <li><img src="<?php echo IMAGES.'users/3.jpg' ?>" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                            <li><img src="<?php echo IMAGES.'users/4.jpg' ?>" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item" data-role="task">
                                        <div class="checkbox checkbox-info">
                                            <input type="checkbox" id="inputForward" name="inputCheckboxesForward">
                                            <label for="inputForward" class=""> <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</span> <span class="label label-warning label-rounded pull-right">2 weeks</span> </label>
                                        </div>
                                        <div class="item-date"> 26 jun 2017</div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Little Profile widget-->
                <div class="col-lg-6 col-xlg-4">
                    <div class="card">
                        <div class="card-body little-profile text-center">
                            <div class="pro-img m-t-20"><img src="<?php echo IMAGES.'users/4.jpg' ?>" alt="user"></div>
                            <h3 class="m-b-0">Mark J. Freeman</h3>
                            <h6 class="text-muted">Web Designer</h6>
                            <ul class="list-inline soc-pro m-t-30">
                                <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="text-center bg-light">
                            <div class="row">
                                <div class="col-lg-6 col-md-6  p-20 b-r">
                                    <h4 class="m-b-0 font-medium">35000</h4><small>Followers</small></div>
                                <div class="col-lg-6 col-md-6  p-20">
                                    <h4 class="m-b-0 font-medium">180</h4><small>Following</small></div>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <a href="javascript:void(0)" class="m-t-10 m-b-20 waves-effect waves-dark btn btn-success btn-md btn-rounded">Follow me</a>
                        </div>
                    </div>
                </div>
                <!--Little Profile widget-->
            </div>
            <!-- ============================================================== -->
            <!-- My contct and feed -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- contact -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <h4 class="card-title"><span class="lstick"></span>My Contact</h4>
                                <div class="btn-group ml-auto m-t-10">
                                    <a href="JavaScript:void(0)" class="icon-options-vertical link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void(0)">Action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Another action</a>
                                        <a class="dropdown-item" href="javascript:void(0)">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">Separated link</a>
                                    </div>
                                </div>
                            </div>
                            <div class="message-box contact-box">
                                <div class="message-widget contact-widget">
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="user-img"> <img src="<?php echo IMAGES.'users/1.jpg' ?>" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">info@wrappixel.com</span></div>
                                    </a>
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="user-img"> <img src="<?php echo IMAGES.'users/2.jpg' ?>" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5> <span class="mail-desc">pamela1987@gmail.com</span></div>
                                    </a>
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="user-img"> <span class="round">A</span> <span class="profile-status away pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Arijit Sinh</h5> <span class="mail-desc">cruise1298.fiplip@gmail.com</span></div>
                                    </a>
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="user-img"> <img src="<?php echo IMAGES.'users/4.jpg' ?>" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">kat@gmail.com</span></div>
                                    </a>
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="user-img"> <img src="<?php echo IMAGES.'users/5.jpg' ?>" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Andrew</h5> <span class="mail-desc">and@gmail.com</span></div>
                                    </a>
                                    <!-- Message -->
                                    <a href="#">
                                        <div class="user-img"> <img src="<?php echo IMAGES.'users/6.jpg' ?>" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Jonathan Jones</h5> <span class="mail-desc">jj@gmail.com</span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- !contact -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><span class="lstick"></span> Feeds</h4>
                            <ul class="feeds">
                                <li>
                                    <div class="bg-light-info"><i class="fa fa-bell-o"></i></div> You have 4 pending tasks. <span class="text-muted">Just Now</span></li>
                                <li>
                                    <div class="bg-light-success"><i class="ti-server"></i></div> Server #1 overloaded.<span class="text-muted">2 Hours ago</span></li>
                                <li>
                                    <div class="bg-light-warning"><i class="ti-shopping-cart"></i></div> New order received.<span class="text-muted">31 May</span></li>
                                <li>
                                    <div class="bg-light-danger"><i class="ti-user"></i></div> New user registered.<span class="text-muted">30 May</span></li>
                                <li>
                                    <div class="bg-light-inverse"><i class="fa fa-bell-o"></i></div> New Version just arrived. <span class="text-muted">27 May</span></li>
                                <li>
                                    <div class="bg-light-danger"><i class="ti-user"></i></div> New user registered.<span class="text-muted">30 May</span></li>
                                <li>
                                    <div class="bg-light-inverse"><i class="fa fa-bell-o"></i></div> New Version just arrived. <span class="text-muted">27 May</span></li>
                                <li>
                                    <div class="bg-light-primary"><i class="ti-settings"></i></div> You have 4 pending tasks. <span class="text-muted">27 May</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Comment and chat -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><span class="lstick"></span>Recent Comments</h4>
                        </div>
                        <!-- ============================================================== -->
                        <!-- Comment widgets -->
                        <!-- ============================================================== -->
                        <div class="comment-widgets">
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row">
                                <div class="p-2"><span class="round"><img src="<?php echo IMAGES.'users/1.jpg' ?>" alt="user" width="50"></span></div>
                                <div class="comment-text w-100">
                                    <h5>James Anderson</h5>
                                    <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                                    <div class="comment-footer"> <span class="text-muted pull-right">April 14, 2016</span> <span class="label label-rounded label-info">Pending</span> <span class="action-icons">
                                                    <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-heart"></i></a>    
                                                </span> </div>
                                </div>
                            </div>
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row active">
                                <div class="p-2"><span class="round"><img src="<?php echo IMAGES.'users/2.jpg' ?>" alt="user" width="50"></span></div>
                                <div class="comment-text active w-100">
                                    <h5>Michael Jorden</h5>
                                    <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry..</p>
                                    <div class="comment-footer "> <span class="text-muted pull-right">April 14, 2016</span> <span class="label label-success label-rounded">Approved</span> <span class="action-icons active">
                                                    <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                    <a href="javascript:void(0)"><i class="icon-close"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-heart text-danger"></i></a>    
                                                </span> </div>
                                </div>
                            </div>
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row">
                                <div class="p-2"><span class="round"><img src="<?php echo IMAGES.'users/3.jpg' ?>" alt="user" width="50"></span></div>
                                <div class="comment-text w-100">
                                    <h5>Johnathan Doeting</h5>
                                    <p class="m-b-5">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has beenorem Ipsum is simply dummy text of the printing and type setting industry.</p>
                                    <div class="comment-footer"> <span class="text-muted pull-right">April 14, 2016</span> <span class="label label-rounded label-danger">Rejected</span> <span class="action-icons">
                                                    <a href="javascript:void(0)"><i class="ti-pencil-alt"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-check"></i></a>
                                                    <a href="javascript:void(0)"><i class="ti-heart"></i></a>    
                                                </span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><span class="lstick"></span>Recent Chats</h4>
                            <div class="chat-box">
                                <!--chat Row -->
                                <ul class="chat-list">
                                    <!--chat Row -->
                                    <li>
                                        <div class="chat-img"><img src="<?php echo IMAGES.'users/1.jpg' ?>" alt="user" /></div>
                                        <div class="chat-content">
                                            <h5>James Anderson</h5>
                                            <div class="box bg-light-info">Lorem Ipsum is simply dummy text of the printing & type setting industry.</div>
                                        </div>
                                        <div class="chat-time">10:56 am</div>
                                    </li>
                                    <!--chat Row -->
                                    <li>
                                        <div class="chat-img"><img src="<?php echo IMAGES.'users/2.jpg' ?>" alt="user" /></div>
                                        <div class="chat-content">
                                            <h5>Bianca Doe</h5>
                                            <div class="box bg-light-info">It’s Great opportunity to work.</div>
                                        </div>
                                        <div class="chat-time">10:57 am</div>
                                    </li>
                                    <!--chat Row -->
                                    <li class="odd">
                                        <div class="chat-content">
                                            <div class="box bg-light-inverse">I would love to join the team.</div>
                                            <br/>
                                        </div>
                                        <div class="chat-time">10:58 am</div>
                                    </li>
                                    <!--chat Row -->
                                    <li class="odd">
                                        <div class="chat-content">
                                            <div class="box bg-light-inverse">Whats budget of the new project.</div>
                                            <br/>
                                        </div>
                                        <div class="chat-time">10:59 am</div>
                                    </li>
                                    <!--chat Row -->
                                    <li>
                                        <div class="chat-img"><img src="<?php echo IMAGES.'users/3.jpg' ?>" alt="user" /></div>
                                        <div class="chat-content">
                                            <h5>Angelina Rhodes</h5>
                                            <div class="box bg-light-info">Well we have good budget for the project</div>
                                        </div>
                                        <div class="chat-time">11:00 am</div>
                                    </li>
                                    <!--chat Row -->
                                </ul>
                            </div>
                        </div>
                        <div class="card-body b-t">
                            <div class="row">
                                <div class="col-8">
                                    <textarea placeholder="Type your message here" class="form-control b-0"></textarea>
                                </div>
                                <div class="col-4 text-right">
                                    <button type="button" class="btn btn-info btn-circle btn-lg"><i class="fa fa-paper-plane-o"></i> </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Right panel -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End Page Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                    <div class="r-panel-body">
                        <ul id="themecolors" class="m-t-20">
                            <li><b>With Light sidebar</b></li>
                            <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                            <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                            <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                            <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                            <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                            <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                            <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                            <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme working">7</a></li>
                            <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                            <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                            <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                            <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                            <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                        </ul>
                        <ul class="m-t-20 chatonline">
                            <li><b>Chat option</b></li>
                            <li>
                                <a href="javascript:void(0)"><img src="<?php echo IMAGES.'users/1.jpg' ?>" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="<?php echo IMAGES.'users/2.jpg' ?>" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="<?php echo IMAGES.'users/3.jpg' ?>" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="<?php echo IMAGES.'users/4.jpg' ?>" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="<?php echo IMAGES.'users/5.jpg' ?>" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="<?php echo IMAGES.'users/6.jpg' ?>" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="<?php echo IMAGES.'users/7.jpg' ?>" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="<?php echo IMAGES.'users/8.jpg' ?>" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer"> © 2017 Admin Pro by wrappixel.com </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<?php require_once INCLUDES.'adm_footer.php'; ?>