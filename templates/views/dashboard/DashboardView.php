<?php require_once INCLUDES.'adm_header.php'; ?>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">

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

    <?php require_once MODULES.'header.php' ?>
    <?php require_once MODULES.'sidebar.php' ?>
    
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
        
    <input type="hidden" id="url" value="<?php echo URL ?>">
    
    <?php require_once INCLUDES.'adm_footer.php'; ?>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    
    <script src="<?php echo PLUGINS.'chartist-js/dist/chartist.min.js' ?>"></script>
    <script src="<?php echo PLUGINS.'chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js' ?>"></script>
    <!-- Chart JS -->
    <script src="<?php echo JS.'dashboard2.js' ?>"></script>
</body>
</html>
